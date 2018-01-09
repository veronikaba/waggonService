<?php

define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
include(ABS_PATH . '/models/modelDatabase.php');

 class OrderDetail {

public static function getKundenName()
{
    echo DB::getCustomerData($_COOKIE['username'])[0]['FULLNAME'];

}


 }