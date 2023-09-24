<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;
use app\forms\Form;

class PanelCtrl {

    private $form;
    private $records;

    public function __construct() {
        $this->form = new Form();
    }

    public function Lista() {
        $this->records = App::getDB()->select("uzytkownicy", [
            "[><]role"=>["rolaID"=>"id"]
        ], [
            "uzytkownicy.id",
            "uzytkownicy.nazwa",
            "uzytkownicy.email",
            "uzytkownicy.haslo",
            "role.rola"
        ]);
    }

    public function validate() {
        $this->form->tytul = ParamUtils::getFromRequest("tytul", true);
        $this->form->opis = ParamUtils::getFromRequest("opis", true);
        $this->form->file = ParamUtils::getFromRequest("pic", true);
        $this->form->trailer = ParamUtils::getFromRequest("trailer", true);

        if (!isset($this->form->tytul))
            return false;

        if(empty($this->form->tytul)){
            Utils::addErrorMessage("Podaj tytul");
        }
        if(empty($this->form->opis)){
            Utils::addErrorMessage("Podaj opis");
        }
        if(empty($this->form->file)){
            Utils::addErrorMessage("Dodaj zdjęcie");
        }
        if(empty($this->form->trailer)){
            Utils::addErrorMessage("Dodaj trailer");
        }

        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_dodajFilm() {
        $this->validate();
        App::getDB()->insert("filmy", [
            "tytul" => $this->form->tytul,
            "opis" => $this->form->opis,
            "zdjecie" => $this->form->file,
            "trailer" => $this->form->trailer,
        ]);
        $this->action_panel();
    }

    public function action_uzytkownikUsun() {
        if ($this->validateEdit()) {
                App::getDB()->delete("uzytkownicy", [
                    "id" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            }
        $this->action_panel();
    }

    public function action_panel(){
        $this->Lista();

        App::getSmarty()->assign('uzytkownik',SessionUtils::loadObject('uzytkownik', true));
        App::getSmarty()->assign('records',$this->records);
        App::getSmarty()->display('Panel.tpl');
    }
}