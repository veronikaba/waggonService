<?php
define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
require_once (ABS_PATH . '/conf/config.php');

class DB {


public function connect(){
    return $pdo = new PDO("mysql:host=$url;dbname=$database", "$username", "$pw") ;
}

public function getDataAfterlogin(){ //Abfrage der Daten für die Tabelle bei  afterlogin.php
    $pdo = connect();

    $statement= $pdo->prepare("SELECT maintenancejob.jobnumber, VEHICLE.VEHICLENUMBER, maintenancejobstate.DESCRIPTION, 
USER.DISPLAYNAME FROM maintenancejob  JOIN VEHICLE ON maintenancejob.vehicle_id = VEHICLE.ID JOIN maintenancejobstate on 
maintenancejob.maintenancejobstate_id = maintenancejobstate.KEYNAME JOIN USER ON maintenancejob.clerk_id = USER.USERNAME 
WHERE order_id IN (SELECT id FROM order WHERE company_id = ?");

}

public function getContactperson(){ //Ansprechpartner
    $pdo = connect();

    $login = $POST_['username'];

    $statement = $pdo->prepare("SELECT USER.DISPLAYNAME FROM `order` join `USER`on order.creator_id = USER.USERNAME WHERE order.id = $login");

    while ($row = $statement->fetch())
    {
        $contact = $row['Kundenname'];

    }

    /* ??? $res = $con->query("SELECT USER.DISPLAYNAME FROM `order` join `USER`on order.creator_id = USER.USERNAME WHERE order.id = ?");
    foreach($res as $dsatz)
        echo $dsatz["name"] . ", " . $dsatz["gehalt"] . "<br />";
    echo "<br />"; */

}

public function getHistory(){ // Verlauf
    $pdo = connect();

    $statement = $pdo->prepare("SELECT orderstate_id FROM `order` WHERE id = ?");

}

public function getJobnumber(){ //Auftragsnummer mit Wagennummer und Status ?
    $pdo = connect();

    $statement = $pdo->prepare("SELECT maintenancejob.jobnumber, VEHICLE.VEHICLENUMBER, maintenancejobstate.DESCRIPTION 
FROM `maintenancejob` JOIN `VEHICLE` ON maintenancejob.vehicle_id = VEHICLE.ID JOIN `maintenancejobstate`on 
maintenancejob.maintenancejobstate_id = maintenancejobstate.KEYNAME WHERE maintenancejob.order_id = ?");

}


public function getLocation(){ //Standort
    $pdo = connect();

    $statement = $pdo->prepare("SELECT location.denotation FROM `order`JOIN `location` ON order.location_id = location.id WHERE order.id = ?");
    $statement->execute(array($id));

}

public static function getCustomerData($username){ //Kundenname
    $pdo = connect();
    $statement= $pdo->prepare("SELECT FULLNAME FROM `COMPANY` WHERE ID = $username");
    $statement->execute(array($username));
    return $statement;

}

public static function getPassword($username){
    $pdo = DB::connect();

    $statement=$pdo->prepare("SELECT * FROM `COMPANY` WHERE ID = ?");
    $statement->execute(array($username));
    return $statement;

}
}


?>