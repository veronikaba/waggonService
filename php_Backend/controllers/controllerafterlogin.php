<?php
define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
require_once (ABS_PATH . '/models/modelsAfterlogin.php');

class ControllerAfterLogin {

    public $model;

    public function __construct()
    {
        $this->models = new DB();
    }

    public function invoke(){
        $request= $this->models->getDataAfterlogin();
    }

}


 ?>