<?php

define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
require_once(ABS_PATH . 'models/modelLogin.php');
class Controller {
    public $model;
    public function __construct() {
        $this->models = new Model();
    }
    public function invoke() {
        $result = $this->models->getlogin();
        // ruft getlogin() Funktion der Model-Klasse auf und speichert den Return-Wert
        if($result == 'login') {
            include(ABS_PATH . '/views/afterlogin.php');
        }
        else {
            include(ABS_PATH .'/views/login.php');
        }
    }
}
?>