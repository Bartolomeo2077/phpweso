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

    public function validateEdit() {
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
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