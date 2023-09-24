<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;
use app\forms\Form;
use app\forms\StronaForm;

class StronaCtrl {

    private $form;
    private $str;
    private $data;
    private $dataWypozyczenia;
    private $dataZwrotu;
    private $filmy;
    private $uzytkownik;
    private $ilosc;

    public function __construct() {
        $this->form = new Form();
        $this->str = new StronaForm();
    }

    public function ilosc() {
        $this->ilosc = App::getDB()->get("filmy", [
            "tytul"
        ]);
    }

    public function validate() {
        $this->form->id = ParamUtils::getFromCleanURL(1, true, null, null);
        $this->uzytkownik = SessionUtils::loadObject('uzytkownik', true);
    }

    public function data(){
        $this->data = date("d/m/Y");
        $this->dataWypozyczenia = date("Y/m/d");
        $this->dataZwrotu = date("Y/m/d", strtotime($this->dataWypozyczenia. '+ 7 days'));
    }

    public function action_wypozycz() {
        $this->validate();
        $this->data();
        $ilosc = App::getDB()->count("wypozyczenie", [
            "uzytkownikID" => $this->uzytkownik->id,
            "filmID" => $this->form->id,
            "expired" => 0,
        ]);
        if($ilosc<1){
            App::getDB()->insert("wypozyczenie", [
                "uzytkownikID" => $this->uzytkownik->id,
                "filmID" => $this->form->id,
                "wypozyczony" => $this->dataWypozyczenia,
                "zwrot" => $this->dataZwrotu,
            ]);
        }
        App::getRouter()->redirectTo('Strona');
    }

    public function zliczfilmy() {
        $this->str->iloscFilmow = App::getDB()->query("
            SELECT filmID, tytul, opis, zdjecie
            FROM filmy
        ")->fetchAll();
    }

    public function obliczFilmy() {
        $this->zliczfilmy();
        $this->str->naStronie = 3;
        $mod = count($this->str->iloscFilmow) % $this->str->naStronie;
        $this->str->iloscStron = (count($this->str->iloscFilmow) - $mod) / $this->str->naStronie;
        if($mod>0) {
            $this->str->iloscStron++;
        }
        $this->str->elementy = array_fill(0, $this->str->iloscStron, "0");
        for($i=0; $i<count($this->str->elementy); $i++) {
            $this->str->numer++;
            $this->str->elementy[$i] = $i+1;
        }
    }

    public function ParamStrony() {
        $this->obliczFilmy();
        $nrStrony = ParamUtils::getFromCleanURL(1, true);
        if(empty($nrStrony)){
            $this->str->offset = 0;
        } else {
            if($nrStrony == 1) {
                $this->str->offset = 0;
            } else {
                $this->str->offset = $nrStrony * $this->str->naStronie - $this->str->naStronie;
            }
        }
    }

    public function PokazFilmy() {
        $this->ParamStrony();
        $this->filmy = App::getDB()->query("
            SELECT filmID, tytul, opis, zdjecie
            FROM filmy
            LIMIT ". $this->str->naStronie ." OFFSET ".$this->str->offset
        )->fetchAll();
    }

    public function action_Strona() {
        $this->data();
        $this->PokazFilmy();
        $this->ilosc();
        App::getSmarty()->assign('uzytkownik',SessionUtils::loadObject('uzytkownik', true));
        App::getSmarty()->assign('data', $this->data);
        App::getSmarty()->assign('ilosc', $this->ilosc);
        App::getSmarty()->assign('filmy', $this->filmy);
        App::getSmarty()->assign('str', $this->str);
        App::getSmarty()->display('Strona.tpl');
    }
}
