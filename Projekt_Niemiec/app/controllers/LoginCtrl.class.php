<?php

namespace app\controllers;

use app\transfer\User;
use core\SessionUtils;
use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\Form;

class LoginCtrl {

    private $form;
    private $konto;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new Form();
    }

    public function validate() {
        $this->form->nazwa = ParamUtils::getFromRequest('nazwa');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->nazwa))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->nazwa)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->haslo)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function logowanieSprawdzenie(){
        if($this->validate()){
            $this->konto = App::getDB()->get("uzytkownicy", [
                "nazwa"
            ], [
                "nazwa" => $this->form->nazwa,
                "haslo" => $this->form->haslo,
            ]);

            if(empty($this->konto)){
                Utils::addErrorMessage("Taki użytkownik nie istnieje");
            } else{
                $this->konto = App::getDB()->get("uzytkownicy", [
                    "[><]role"=>["rolaID"=>"id"]
                    ], [
                        "uzytkownicy.id",
                        "uzytkownicy.nazwa",
                        "uzytkownicy.haslo",
                        "uzytkownicy.email",
                        "role.rola",
                    ], [
                        "nazwa"=>$this->form->nazwa,
                        "haslo"=>$this->form->haslo,
                    ]);
                    $uzytkownik = new User($this->konto['id'], $this->konto['nazwa'], $this->konto['email'], $this->konto['rola']);
                    SessionUtils::storeObject('uzytkownik', $uzytkownik);
                    RoleUtils::addRole($this->konto['rola']);
            }   
        }

        return !App::getMessages()->isError();
    }

    public function action_StronaView(){
        $uzytkownik = SessionUtils::loadObject('uzytkownik', true);
        if(empty($uzytkownik->login)){
            $rola = "gość";
            $uzytkownik = new User(null, null, null, $rola);
            SessionUtils::storeObject('uzytkownik', $uzytkownik);
            RoleUtils::addRole($rola);
        }
        App::getRouter()->redirectTo("Strona");
    }

    public function action_Logowanie() {
        if ($this->logowanieSprawdzenie()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addInfoMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("Strona");
        } else {
            //niezalogowany => pozostań na stronie logowania
            Utils::addErrorMessage('Błędne logowanie');
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('StronaView');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->assign('uzytkownik',SessionUtils::loadObject('uzytkownik', true));
        App::getSmarty()->display('Logowanie.tpl');
    }
}
