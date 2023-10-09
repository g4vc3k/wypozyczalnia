<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class KontoCtrl {

    private $samochody;
    private $osoba;
    private $ceny;

    public function validate() {
        $this->osoba = SessionUtils::loadObject("osoba", true);
    }

    public function przegladDaty() {
        $data = date("Y-m-d");
        $samochody = App::getDB()->select("wypozyczalnia", [
            "[><]samochod" => ["id_samochodu"=>"id"]
        ], [
            "wypozyczalnia.id",
            "wypozyczalnia.start_wyp",
            "wypozyczalnia.koniec_wyp",
            "samochod.marka",
            "samochod.model",
            "samochod.skrzynia",
            "samochod.zdjecie",
        ]);
        foreach($samochody as $s) {
            if($s['koniec_wyp'] < $data) {
                App::getDB()->delete("wypozyczalnia", [
                    "id" => $s["id"],
                ]);
            }
        }
    }

    public function samochody() {
        $this->validate();
        $this->samochody = App::getDB()->query("
            SELECT wypozyczalnia.id, wypozyczalnia.start_wyp, wypozyczalnia.koniec_wyp, samochod.marka, samochod.model, samochod.skrzynia, samochod.zdjecie, (DATEDIFF(koniec_wyp, start_wyp) * samochod.cena) AS cena
            FROM wypozyczalnia
            INNER JOIN samochod ON wypozyczalnia.id_samochodu = samochod.id
            WHERE wypozyczalnia.id_osoby = " . $this->osoba->id
        )->fetchAll();
    }

    public function action_oddaj() {
        $id = ParamUtils::getFromCleanURL(1,true);
        App::getDB()->delete("wypozyczalnia", [
            "id" => $id,
        ]);
        App::getRouter()->redirectTo("konto");
    }

    public function action_przeglad() {
        $this->przegladDaty();
        App::getRouter()->redirectTo("strona");
    }

    public function action_konto() {
        $this->przegladDaty();
        $this->samochody();
        App::getSmarty()->assign("samochody", $this->samochody);
        App::getSmarty()->assign("ceny", $this->ceny);
        App::getSmarty()->assign('osoba',SessionUtils::loadObject('osoba', true));
        App::getSmarty()->display('Konto.tpl');
    }
}
