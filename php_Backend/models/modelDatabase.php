<?php
define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
include ABS_PATH . '/conf/config.php';

class DB {


public static function connect(){
    return $pdo = new PDO("mysql:host=localhost; dbname=waggonservice", "root", "Te17e4so") ;
}

public static function getDataAfterlogin($username)
{ //Abfrage der Daten für die Tabelle bei  afterlogin.php
    $pdo = DB::connect();

    $statement = $pdo->prepare("SELECT maintenancejob.jobnumber, VEHICLE.VEHICLENUMBER, maintenancejobstate.DESCRIPTION, 
USER.DISPLAYNAME FROM maintenancejob  JOIN VEHICLE ON maintenancejob.vehicle_id = VEHICLE.ID JOIN maintenancejobstate on 
maintenancejob.maintenancejobstate_id = maintenancejobstate.KEYNAME JOIN USER ON maintenancejob.clerk_id = USER.USERNAME 
WHERE order_id IN (SELECT id FROM order WHERE company_id = $username");
    
    $statement->execute(array($username));


    if ($statement->num_rows > 0) {
        while ($row = $statement->execute()) {
            $wert = utf8_encode($row["DESCRIPTION"]);
            $jobnumber = $row["jobnumber"];
            $order= $row["order_id"];
            echo utf8_encode("<tr class='clickable-row' data-href='views/orderdetail.php?id=$jobnumber&order=$order'><td>" . $row["jobnumber"] . "</td><td>" . $row["VEHICLENUMBER"] . "</td><td>" . $row["DESCRIPTION"]
                . "</td><td>" . status($wert) . "</span></td><td>" . $row["firstname"] . " " . $row["lastname"] . "</td></tr>");


        }
    }
        else {
        echo "0 results";

        }
    }


public function getContactperson($order_id){ //Ansprechpartner
    $pdo = DB::connect();

    $statement = $pdo->prepare("SELECT USER.DISPLAYNAME FROM `order` join `USER`on order.creator_id = USER.USERNAME WHERE order.id = $order_id");
    $statement->execute(array($order_id));
    return $statement->fetchAll();

}

    public function getJobnumber($order_id){ //Auftragsnummer mit Wagennummer und Download
        $pdo = DB::connect();

        $statement = $pdo->prepare("SELECT maintenancejob.jobnumber, VEHICLE.VEHICLENUMBER, maintenancejob.documenturl 
        FROM maintenancejob join VEHICLE on maintenancejob.vehicle_id = VEHICLE.ID 
        WHERE maintenancejob.order_id = $order_id");
        $statement->execute(array($order_id));
        return $statement->fetchAll();
    }

    public function getStatusHistory($jobnumber){
        $pdo = DB::connect();

        $statement = $pdo->prepare("SELECT jobstatehistory.updatedate, maintenancejobstate.DESCRIPTION
        FROM maintenancejob join jobstatehistory on maintenancejob.id = jobstatehistory.maintenancejob_id join maintenancejobstate on jobstatehistory.jobstate_id = maintenancejobstate.KEYNAME
        WHERE maintenancejob.jobnumber = $jobnumber");
        $statement->execute(array($jobnumber));

        $history = "<div>";
        foreach ($statement as $row):

            $history .= "<p>" .$row['updatedate'] . " " .$row['DESCRIPTION']."</p>";
        endforeach;

        $history .= "</div>";

        return $history;
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