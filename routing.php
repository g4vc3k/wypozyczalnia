<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('strona'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('loginShow'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('strona',    'StronaCtrl');
Utils::addRoute('zrob',    'StronaCtrl');
Utils::addRoute('oddaj',    'KontoCtrl');
Utils::addRoute('przeglad',    'KontoCtrl');
Utils::addRoute('konto',    'KontoCtrl', ["Dealer", "Klient"]);
Utils::addRoute('wypozycz',    'StronaCtrl', ["Dealer", "Klient"]);
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl', ["Dealer", "Klient"]);
Utils::addRoute('registerShow',     'RegisterCtrl');
Utils::addRoute('register',     'RegisterCtrl');