<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\Form;

class StronaCtrl {

    private $samochody;
    private $osoba;
    private $idSamochodu;
    private $wypozyczalnia;

    public function __construct() {
        $this->wypozyczalnia = new Form();
    }


    public function validate() {
        $this->osoba = SessionUtils::loadObject("osoba", true);
        $this->idSamochodu = ParamUtils::getFromCleanURL(1, true);
        $this->wypozyczalnia->dataOd = ParamUtils::getFromRequest("dataOd", true);
        $this->wypozyczalnia->dataDo = ParamUtils::getFromRequest("dataDo", true);

        if(empty($this->wypozyczalnia->dataOd || $this->wypozyczalnia->dataDo)){
            Utils::addErrorMessage("Wybierz poprawną datę");
            App::getRouter()->forwardTo("Strona");
        } else if($this->wypozyczalnia->dataOd > $this->wypozyczalnia->dataDo) {
            Utils::addErrorMessage("Wybierz poprawną datę");
            App::getRouter()->forwardTo("Strona");
        }
    }

    public function action_wypozycz() {
        $this->validate();
        $dataOd = date("Y-m-d", strtotime($this->wypozyczalnia->dataOd));
        $dataDo = date("Y-m-d", strtotime($this->wypozyczalnia->dataDo));
        App::getDB()->insert("wypozyczalnia", [
            "start_wyp" => $this->wypozyczalnia->dataOd,
            "koniec_wyp" => $this->wypozyczalnia->dataDo,
            "id_osoby" => $this->osoba->id,
            "id_samochodu" => $this->idSamochodu,
        ]);
        App::getRouter()->redirectTo("Strona");
    }

    public function samochody() {
        $this->wypozyczalnia->samochody = App::getDB()->query("
            SELECT samochod.id, samochod.marka, samochod.model, samochod.skrzynia, samochod.zdjecie
            FROM samochod
            LEFT JOIN wypozyczalnia ON samochod.id = wypozyczalnia.id_samochodu
            WHERE wypozyczalnia.id_samochodu IS NULL
        ")->fetchAll();
    }

    public function liczenie() {
        $this->samochody();
        $this->wypozyczalnia->limit = 4;
        $reszta = count($this->wypozyczalnia->samochody) % $this->wypozyczalnia->limit;
        $podstrony = (count($this->wypozyczalnia->samochody) - $reszta) / $this->wypozyczalnia->limit;
        if($reszta > 0) {
            $podstrony++;
        }
        $this->wypozyczalnia->auta = array_fill(0, $podstrony, 0);
        for($i=0; $i<count($this->wypozyczalnia->auta); $i++) {
            $this->wypozyczalnia->auta[$i] = $i+1;
        }
    }

    public function offset() {
        $this->liczenie();
        $Strona = ParamUtils::getFromCleanURL(1, true);
        if(empty($Strona) || $Strona == 1){
            $this->wypozyczalnia->offset = 0;
        } else {
            $this->wypozyczalnia->offset = $Strona * $this->wypozyczalnia->limit - $this->wypozyczalnia->limit;
        }
    }

    public function samochod() {
        $this->offset();
        $this->wypozyczalnia->samochod = App::getDB()->query("
            SELECT samochod.id, samochod.marka, samochod.model, samochod.skrzynia, samochod.zdjecie, samochod.cena
            FROM samochod
            LEFT JOIN wypozyczalnia ON samochod.id = wypozyczalnia.id_samochodu
            WHERE wypozyczalnia.id_samochodu IS NULL
            LIMIT ". $this->wypozyczalnia->limit ." OFFSET ".$this->wypozyczalnia->offset
        )->fetchAll();
    }

    public function action_Strona() {
        $this->samochod();
        App::getSmarty()->assign("wypozyczalnia", $this->wypozyczalnia);
        App::getSmarty()->assign('osoba',SessionUtils::loadObject('osoba', true));
        App::getSmarty()->display('Strona.tpl');
    }
}
