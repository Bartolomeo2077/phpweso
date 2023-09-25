<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('StronaView'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('loginShow'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('Strona',    'StronaCtrl');
Utils::addRoute('usunStrona',    'StronaCtrl', ["admin"]);
Utils::addRoute('usunKonto',    'KontoCtrl', ["użytkownik", "admin"]);
Utils::addRoute('Konto',    'KontoCtrl');
Utils::addRoute('trailer',    'FilmCtrl');
Utils::addRoute('panel',    'PanelCtrl', ["admin"]);
Utils::addRoute('dodajFilm',    'PanelCtrl', ["admin"]);
Utils::addRoute('wypozycz',    'StronaCtrl', ["użytkownik", "admin"]);
Utils::addRoute('uzytkownikUsun',    'PanelCtrl');
Utils::addRoute('Rejestracja',    'RejestracjaCtrl');
Utils::addRoute('RejestracjaKonta',    'RejestracjaCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('StronaView',     'LoginCtrl');
Utils::addRoute('Logowanie',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');