<?php

namespace app\controllers;

use core\App;

class HomeCtrl {


    public function action_Home() {
        App::getSmarty()->display('Home.tpl');
    }
}
