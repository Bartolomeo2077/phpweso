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
            SELECT wypozyczenie.id, wypozyczenie.uzytkownikID, filmy.tytul, filmy.opis, filmy.zdjecie, wypozyczenie.wypozyczony, wypozyczenie.zwrot
            FROM wypozyczenie
            INNER JOIN filmy ON wypozyczenie.filmID = filmy.id
            WHERE uzytkownikID = $uzytkownik->id
            ORDER BY zwrot ASC
        ")->fetchAll();

        return !app::getMessages()->isError();
    }

    public function ilosc() {
        $this->validate();
        $this->ilosc = App::getDB()->count("wypozyczenie", [
            "uzytkownikID" => $this->uzytkownik->id,
        ]);
    }

    public function action_Konto() {
        $this->filmy();
        $this->ilosc();
        App::getSmarty()->assign('uzytkownik',SessionUtils::loadObject('uzytkownik', true));
        App::getSmarty()->assign('film', $this->film);
        App::getSmarty()->assign('ilosc', $this->ilosc);
        App::getSmarty()->display('Konto.tpl');
    }
}
