<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\ContactForm;

class ContactCtrl { 

    private $form;

    public function __construct(){
        $this->form = new ContactForm();
    }

    public function validate() {

        $this->form->email = ParamUtils::getFromRequest('email', true, 'Błędne wywołanie aplikacji');
        $this->form->subject = ParamUtils::getFromRequest('subject', true, 'Błędne wywołanie aplikacji');
        $this->form->message = ParamUtils::getFromRequest('message', true, 'Błędne wywołanie aplikacji');
    
        if (App::getMessages()->isError())
            return false;

        if (empty(trim($this->form->email))) {
            Utils::addErrorMessage('Wprowadź adres email');
        }
        if (empty(trim($this->form->subject))) {
            Utils::addErrorMessage('Wprowadź temat');
        }
        if (empty(trim($this->form->message))) {
            Utils::addErrorMessage('Wprowadź treść');
        }
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_contact(){
        $this->generateView();
    }

    

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('ContactView.tpl');
    }

}