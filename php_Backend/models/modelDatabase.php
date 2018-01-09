<?php
define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
include ABS_PATH . '/conf/config.php';

class DB {


public static function connect(){
    return $pdo = new PDO("mysql:host=localhost; dbname=waggonservice", "root", "Te17e4so") ;
}

public function getDataAfterlogin(){ //Abfrage der Daten für die Tabelle bei  afterlogin.php
    $pdo = DB::connect();

    $statement= $pdo->prepare("SELECT maintenancejob.jobnumber, VEHICLE.VEHICLENUMBER, maintenancejobstate.DESCRIPTION, 
USER.DISPLAYNAME FROM maintenancejob  JOIN VEHICLE ON maintenancejob.vehicle_id = VEHICLE.ID JOIN maintenancejobstate on 
maintenancejob.maintenancejobstate_id = maintenancejobstate.KEYNAME JOIN USER ON maintenancejob.clerk_id = USER.USERNAME 
WHERE order_id IN (SELECT id FROM order WHERE company_id = ?");

}

public function getOrderId(){
    $pdo = DB::connect();
    // Funktion, um Wert der Auftragsnummer zu übergeben, damit diese auf orderdetail.php als Referenz genutzt werden kann
}

public function getContactperson($order_id){ //Ansprechpartner
    $pdo = DB::connect();

    $statement = $pdo->prepare("SELECT USER.DISPLAYNAME FROM `order` join `USER`on order.creator_id = USER.USERNAME WHERE order.id = $order_id");
    $statement->execute(array($order_id));
    return $statement->fetchAll();

}

public function getHistory(){ // Verlauf
    $pdo = DB::connect();

    $statement = $pdo->prepare("SELECT orderstate_id FROM `order` WHERE id = ?");

}

public function getJobnumber(){ //Auftragsnummer mit Wagennummer und Status ?
    $pdo = DB::connect();

    $statement = $pdo->prepare("SELECT maintenancejob.jobnumber, VEHICLE.VEHICLENUMBER, maintenancejobstate.DESCRIPTION 
FROM `maintenancejob` JOIN `VEHICLE` ON maintenancejob.vehicle_id = VEHICLE.ID JOIN `maintenancejobstate`on 
maintenancejob.maintenancejobstate_id = maintenancejobstate.KEYNAME WHERE maintenancejob.order_id = ?");

}


public function getLocation($order_id){ //Standort
    $pdo = DB::connect();

    $statement = $pdo->prepare("SELECT location.denotation FROM `order`JOIN `location` ON order.location_id = location.id WHERE order.id = $order_id");
    $statement->execute(array($order_id));
    return $statement->fetchAll();

}

public static function getCustomerData($username){ //Kundenname
    $pdo = DB::connect();
    $statement= $pdo->prepare("SELECT FULLNAME FROM `COMPANY` WHERE ID = ?");
    $statement->execute(array($username));
    return $statement->fetchAll();

}

public static function getPassword($username){
    $pdo = DB::connect();

    $statement=$pdo->prepare("SELECT * FROM `COMPANY` WHERE ID = ?");
    $statement->execute(array($username));
    return $statement->fetchAll();

}

public static function getOrderDetailNumber($number){ //Jobnummer Detailansicht
    $pdo = DB::connect();
    $statement=$pdo->prepare("SELECT * FROM `order` WHERE `ordernumber` = ?");
    $statement->execute(array($number));
    return $statement->fetchAll();

}
}


?>