<?php
require_once('models/models.php') //bindet angegebene Datei ein und führt sie aus

class Controller {
  public $model;

  public function __construct() {
    $this->models = new Model();
  }

  public function invoke() {

    $result = $this->models->getlogin();
// ruft getlogin() Funktion der Model-Klasse auf und speichert den Return-Wert
    if($result == 'login') {
      include 'views/afterlogin.php';
    }
    else {
      include 'views/login.php';
    }
  }
}
 ?>
