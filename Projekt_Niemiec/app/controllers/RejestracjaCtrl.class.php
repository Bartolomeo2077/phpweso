<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\Form;

class RejestracjaCtrl {

    private $form; //dane formularza wyszukiwania
    private $records;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new Form();
    }

    public function validate() {
        // 1. sprawdzenie, czy parametry zostały przekazane
        // - nie trzeba sprawdzać
        $this->form->nazwa = ParamUtils::getFromRequest('nazwa');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');

        if(empty($this->form->nazwa) || empty($this->form->email) || empty($this->form->haslo)){
            Utils::addErrorMessage("Uzupełnij wszystkie dane");
        }

        // 2. sprawdzenie poprawności przekazanych parametrów
        // - nie trzeba sprawdzać

        return !App::getMessages()->isError();
    }

    public function czyIstnieje(){
        $this->records = App::getDB()->count("uzytkownicy", [
            "nazwa" => $this->form->nazwa,
        ]);

        if($this->records>0) {
            Utils::addErrorMessage("Nazwa zajęta");
            App::getRouter()->forwardTo('Rejestracja');
        }

        return !App::getMessages()->isError();
    }

    public function action_RejestracjaKonta() {
        if($this->validate()){
            if($this->czyIstnieje()){
                App::getDB()->insert("uzytkownicy", [
                    "nazwa" => $this->form->nazwa,
                    "email" => $this->form->email,
                    "haslo" => $this->form->haslo,
                    "rolaID" => 2,
                ]);
                App::getRouter()->forwardTo("loginShow");
            }
        }
        // 3. Pobranie listy rekordów z bazy danych
        // W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
        //przygotowanie frazy where na wypadek większej liczby parametrów
        
        $this->action_Rejestracja();
    }

    public function action_Rejestracja() {
        App::getSmarty()->assign('uzytkownik',SessionUtils::loadObject('uzytkownik', true));
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('Rejestracja.tpl');
    }
}
