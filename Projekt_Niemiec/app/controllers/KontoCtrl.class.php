<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;
use app\forms\Form;

class KontoCtrl {

    private $film;
    private $ilosc;
    private $uzytkownik;
    private $wypozyczono;

    public function validate() {
        $this->uzytkownik = SessionUtils::loadObject("uzytkownik", true);
    }

    public function filmy() {
        $uzytkownik = SessionUtils::loadObject("uzytkownik", true);
        $this->film = App::getDB()->query("
            SELECT wypozyczenie.id, wypozyczenie.uzytkownikID, filmy.filmID, filmy.tytul, filmy.opis, filmy.zdjecie, wypozyczenie.wypozyczony, wypozyczenie.zwrot, wypozyczenie.expired
            FROM wypozyczenie
            INNER JOIN filmy ON wypozyczenie.filmID = filmy.filmID
            WHERE uzytkownikID = $uzytkownik->id
            ORDER BY expired ASC, zwrot ASC
        ")->fetchAll();
        
        return !app::getMessages()->isError();
    }

    public function update() {
        $this->filmy();
        $data = date("Y-m-d");
        foreach($this->film as $result) {
            if($result['zwrot'] < $data) {
                App::getDB()->update("wypozyczenie", [
                    "expired" => 1,
                ], [
                    "id" => $result['id'],
                ]);
            }
        }
        $this->filmy();
    }

    public function ilosc() {
        $this->validate();
        $this->ilosc = App::getDB()->count("wypozyczenie", [
            "uzytkownikID" => $this->uzytkownik->id,
        ]);
    }

    public function action_usunKonto() {
        $this->validate();
        $id = ParamUtils::getFromCleanURL(1, true);
        App::getDB()->delete("wypozyczenie", [
            "id" => $id,
            "uzytkownikID" => $this->uzytkownik->id,
        ]);
        App::getRouter()->redirectTo("Konto");
    }

    public function action_Konto() {
        $this->update();
        $this->ilosc();
        App::getSmarty()->assign('uzytkownik',SessionUtils::loadObject('uzytkownik', true));
        App::getSmarty()->assign('film', $this->film);
        App::getSmarty()->assign('ilosc', $this->ilosc);
        App::getSmarty()->display('Konto.tpl');
    }
}