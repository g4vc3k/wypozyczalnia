<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\Form;

class RegisterCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new Form();
    }

    public function validate() {
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');
        $this->form->telefon = ParamUtils::getFromRequest('telefon');
        $this->form->start_prawka = ParamUtils::getFromRequest('start_prawka');
        $this->form->miejscowosc = ParamUtils::getFromRequest('miejscowosc');
        $this->form->ulica = ParamUtils::getFromRequest('ulica');
        $this->form->nr_lokalu = ParamUtils::getFromRequest('nr_lokalu');
        $this->form->data_ur = ParamUtils::getFromRequest('data_ur');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->imie))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->imie)) {Utils::addErrorMessage('Nie podano imienia');}
        if (empty($this->form->nazwisko)) {Utils::addErrorMessage('Nie podano nazwiska');}
        if (empty($this->form->email)) {Utils::addErrorMessage('Nie podano maila');}
        if (empty($this->form->haslo)) {Utils::addErrorMessage('Nie podano hasła');}
        if (empty($this->form->telefon)) {Utils::addErrorMessage('Nie podano telefonu');}
        if (empty($this->form->start_prawka)) {Utils::addErrorMessage('Nie podano daty otrzymania prawka');}
        if (empty($this->form->miejscowosc)) {Utils::addErrorMessage('Nie podano miejscowości');}
        if (empty($this->form->ulica)) {Utils::addErrorMessage('Nie podano ulicy');}
        if (empty($this->form->nr_lokalu)) {Utils::addErrorMessage('Nie podano numeru lokalu');}
        if (empty($this->form->data_ur)) {Utils::addErrorMessage('Nie podano daty urodzenia');}

        return !App::getMessages()->isError();
    }

    public function action_registerShow() {
        $this->generateView();
    }

    public function action_register() {
        if ($this->validate()) {

            App::getDB()->insert("osoba", [
                "imie" => $this->form->imie, 
                "nazwisko" => $this->form->nazwisko,
                "email" => $this->form->email,
                "haslo" => $this->form->haslo,
                "telefon" => $this->form->telefon,
                "start_prawka" => $this->form->start_prawka,
                "miejscowosc" => $this->form->miejscowosc,
                "ulica" => $this->form->ulica,
                "nr_lokalu" => $this->form->nr_lokalu,
                "data_ur" => $this->form->data_ur,
                "id_roli" => 2,
            ]);

            Utils::addInfoMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("loginShow");
        } else {
            Utils::addErrorMessage('Nie udało się zarejestrować');
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('RegisterView.tpl');
    }

}
