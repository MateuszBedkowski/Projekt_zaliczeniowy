<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('contact'); // default page
App::getRouter()->setLoginRoute('login'); //login gdy za małe uprawnienia

Utils::addRoute('contact',     'ContactCtrl');
Utils::addRoute('rentList',    'RentListCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('rentNew',     'RentEditCtrl',	['user','admin']);
Utils::addRoute('rentEdit',    'RentEditCtrl',	['user','admin']);
Utils::addRoute('rentSave',    'RentEditCtrl',	['user','admin']);
Utils::addRoute('rentDelete',  'RentEditCtrl',	['admin']);