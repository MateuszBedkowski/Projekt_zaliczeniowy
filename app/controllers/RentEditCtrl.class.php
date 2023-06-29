<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\RentEditForm;

class RentEditCtrl {

    private $form;

    public function __construct() {
        $this->form = new RentEditForm();
    }

    public function validateSave() {

        $this->form->idwypozyczenie = ParamUtils::getFromRequest('idwypozyczenie', true, 'Błędne wywołanie aplikacji');
        $this->form->poczatek = ParamUtils::getFromRequest('name', true, 'Błędne wywołanie aplikacji');
        $this->form->koniec = ParamUtils::getFromRequest('surname', true, 'Błędne wywołanie aplikacji');
        $this->form->kwota = ParamUtils::getFromRequest('kwota', true, 'Błędne wywołanie aplikacji');
        $this->form->klienci_idklient = ParamUtils::getFromRequest('klienci_idklient', true, 'Błędne wywołanie aplikacji');
        $this->form->samochody_idsamochod = ParamUtils::getFromRequest('samochody_idsamochod', true, 'Błędne wywołanie aplikacji');
        $this->form->pracownicy_idpracownik = ParamUtils::getFromRequest('pracownicy_idpracownik', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        if (empty(trim($this->form->poczatek))) {
            Utils::addErrorMessage('Wprowadź datę początkową wypożyczenia');
        }
        if (empty(trim($this->form->koniec))) {
            Utils::addErrorMessage('Wprowadź datę końcową wypożyczenia');
        }
        if (empty(trim($this->form->kwota))) {
            Utils::addErrorMessage('Wprowadź kwotę do zapłaty');
        }
        if (empty(trim($this->form->klienci_idklient))) {
            Utils::addErrorMessage('Wprowadź id klienta');
        }
        if (empty(trim($this->form->samochody_idsamochod))) {
            Utils::addErrorMessage('Wprowadź id samochodu');
        }
        if (empty(trim($this->form->pracownicy_idpracownik))) {
            Utils::addErrorMessage('Wprowadź swoje id');
        }

        if (App::getMessages()->isError())
            return false;


        $d = \DateTime::createFromFormat('Y-m-d', $this->form->poczatek);
        $f = \DateTime::createFromFormat('Y-m-d', $this->form->koniec);
        if ($d === false) {
            Utils::addErrorMessage('Zły format daty. Przykład: 2023-06-20');
        }
        if ($f === false) {
            Utils::addErrorMessage('Zły format daty. Przykład: 2023-06-20');
        }
        if($d > $f){
            Utils::addErrorMessage('Data końca wypożyczenia nie może być wcześniej niż data początku wypożyczenia');
        }

        return !App::getMessages()->isError();
    }

    public function validateEdit() {

        $this->form->idwypozyczenie = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_rentNew() {
        $this->generateView();
    }

    public function action_rentEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("wypozyczenie", "*", [
                    "idwypozyczenie" => $this->form->idwypozyczenie
                ]);
                $this->form->idwypozyczenie = $record['idwypozyczenie'];
                $this->form->poczate = $record['poczatek'];
                $this->form->koniec = $record['koniec'];
                $this->form->kwota = $record['kwota'];
                $this->form->klienci_idklient = $record['klienci_idklient'];
                $this->form->samochody_idsamochod = $record['samochody_idsamochod'];
                $this->form->pracownicy_idpracownik = $record['pracownicy_idpracownik'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_rentDelete() {
        if ($this->validateEdit()) {

            try {
                App::getDB()->delete("wypozyczenie", [
                    "idwypozyczenie" => $this->form->idwypozyczenie
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getRouter()->forwardTo('RentList');
    }

    public function action_rentSave() {

        if ($this->validateSave()) {
            try {

                //Nowy rekord
                if ($this->form->idwypozyczenie == '') {
                    //maks 6
                    $count = App::getDB()->count("wypozyczenie");
                    if ($count <= 6) {
                        App::getDB()->insert("wypozyczenie", [
                            "poczatek" => $this->form->poczatek,
                            "koniec" => $this->form->koniec,
                            "kwota" => $this->form->birthdate,
                            "klienci_idklienci" => $this->form->klienci_idklienci,
                            "samochody_idsamochod" => $this->form->samochody_idsamochod,
                            "pracownicy_idpracownik" => $this->form->pracownycy_idpracownik
                        ]);
                    } else { //za dużo rekordów
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); 
                        exit();
                    }
                } else {
                    App::getDB()->update("wypozyczenie", [
                        "poczatek" => $this->form->poczatek,
                        "koniec" => $this->form->koniec,
                        "kwota" => $this->form->birthdate,
                        "klienci_idklienci" => $this->form->klienci_idklienci,
                        "samochody_idsamochod" => $this->form->samochody_idsamochod,
                        "pracownicy_idpracownik" => $this->form->pracownycy_idpracownik
                            ], [
                        "idwypozyczenie" => $this->form->idwypozyczenie
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('RentList');
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('RentEdit.tpl');
    }

}
