<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\Form;
use app\transfer\User;

class LoginCtrl {

    private $form;
    private $osoba;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new Form();
    }

    public function validate() {
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->email))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->email)) {Utils::addErrorMessage('Nie podano maila');}
        if (empty($this->form->haslo)) {Utils::addErrorMessage('Nie podano hasła');}

        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {

            $this->osoba = App::getDB()->get("osoba", [
                "email",
            ], [
                "haslo" => $this->form->haslo,
            ]);

            if(!empty($this->osoba)) {
                $this->osoba = App::getDB()->get("osoba", [
                    "[><]rola"=>["id_roli"=>"id"]
                ], [
                    "osoba.id",
                    "osoba.email",
                    "rola.rola"
                ], [
                    "email"=>$this->form->email,
                    "haslo"=>$this->form->haslo,
                ]);
            } else {
                Utils::addErrorMessage('Brak takiego konta w bazie danych');
            }
            $osoba = new User($this->osoba['id'], $this->osoba['email'], $this->osoba['rola']);
            SessionUtils::storeObject('osoba', $osoba);
            RoleUtils::addRole($this->osoba['rola']);  
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("Strona");
        } else {
            //niezalogowany => pozostań na stronie logowania
            // $this->generateView();
            App::getRouter()->forwardTo('loginShow');
        }
    }

    public function action_StronaView(){
        $osoba = SessionUtils::loadObject('osoba', true);
        if(empty($osoba->login)){
            $rola = "Gosc";
            $osoba = new User(null, null, $rola);
            SessionUtils::storeObject('uzytkownik', $uzytkownik);
            RoleUtils::addRole($rola);
        }
        App::getRouter()->forwardTo("Strona");
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('strona');
    }

    public function generateView() {
        App::getSmarty()->assign('osoba',SessionUtils::loadObject('osoba', true));
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }
}
