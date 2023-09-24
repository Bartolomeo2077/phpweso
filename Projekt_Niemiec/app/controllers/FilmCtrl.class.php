<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;
use app\forms\Form;

class FilmCtrl {

    private $trailer;
    private $id;

    public function validate() {
        $this->id = ParamUtils::getFromCleanURL(1, true);
    }

    public function action_trailer(){
        $this->validate();
        $this->trailer = App::getDB()->get("filmy", [
            "tytul",
            "opis",
            "zdjecie",
            "trailer"
        ], [
            "id" => $this->id,
        ]);
        $this->generateView();
    }

    public function generateView() {
        App::getSmarty()->assign('uzytkownik',SessionUtils::loadObject('uzytkownik', true));
        App::getSmarty()->assign('trailer', $this->trailer);
        App::getSmarty()->display('Film.tpl');
    }
    public function log($data) {
        $output = $data;
        if (is_array($output))
        $output = implode(',', $output);

        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
}
