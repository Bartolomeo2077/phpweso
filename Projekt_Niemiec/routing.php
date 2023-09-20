<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('StronaView'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('loginShow'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('Strona',    'StronaCtrl');
Utils::addRoute('Konto',    'KontoCtrl');
Utils::addRoute('panel',    'PanelCtrl');
Utils::addRoute('wypozycz',    'StronaCtrl', ["użytkownik", "admin"]);
Utils::addRoute('uzytkownikUsun',    'PanelCtrl');
Utils::addRoute('Rejestracja',    'RejestracjaCtrl');
Utils::addRoute('RejestracjaKonta',    'RejestracjaCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('StronaView',     'LoginCtrl');
Utils::addRoute('Logowanie',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');