<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\RentSearchForm;

class RentListCtrl {

    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new RentSearchForm();
    }

    public function validate() {

        $this->form->kwota = ParamUtils::getFromRequest('kwota');


        return !App::getMessages()->isError();
    }

    public function action_rentList() {

        $this->validate();

        $search_params = []; //przygotowanie pustej struktury
        if (isset($this->form->kwota) && strlen($this->form->kwota) > 0) {
            $search_params['kwota[~]'] = $this->form->kwota . '%';
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po kwocie
        $where ["ORDER"] = "kwota";

        try {
            $this->records = App::getDB()->select("wypozyczenie", [
                "idwypozyczenie",
                "poczatek",
                "koniec",
                "kwota",
                "klienci_idklient",
                "samochody_idsamochod",
                "pracownicy_idpracownik"
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('searchForm', $this->form); // dane formularza
        App::getSmarty()->assign('wypozyczenie', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('RentList.tpl');
    }

}
