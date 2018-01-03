<?php

require_once ('models/modelsAfterlogin.php');

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