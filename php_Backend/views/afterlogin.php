<html>
<head>
    <title>Auftragsübersicht</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/myStylesAfterLogin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="views/js/afterloginClickable.js"></script>
    <script src="views/js/afterloginSearchFunction.js"></script>


</head>
<body>
<?php

$db = new mysqli('localhost', 'root', 'Te17e4so', 'waggonservice');
if(mysqli_connect_errno($db)) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
?>
<div class="content">

    <div class="kunde">
        <p class="textright"><span class="glyphicon glyphicon-user"></span>
            <?php
            $login =  $_POST['username'];
            $GLOBALS["username"] = $_POST['username'];

            $result=$db->query("SELECT FULLNAME FROM `COMPANY` WHERE ID = $login");
            if ($result->num_rows > 0 ) {
                while($row = $result->fetch_assoc()) {
                    echo $row['FULLNAME'] ;
                }}
            else {
                echo "0 results";
            }?>
        </p>
        <p class="textright"><a href="index.php"><span class="glyphicon glyphicon-log-out"></span>Abmelden</a></p>
    </div>

    <img src="views/02_WSG_logo.png" alt="Logo" class="logo"">
    <p class="auftragstext">Auftragsübersicht</p>

    <div class="inner-addon right-addon">
        <i class="glyphicon glyphicon-search"></i>
        <input class="form-control"  type="text" id= "myInput" onkeyup= "myFunktion()"  placeholder="Suche" />
    </div>

    <div style="overflow-x:auto;">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Auftragsnummer</th>
                <th>Wagennummer</th>
                <th>Status</th>
                <th></th>
                <th>Zuständigkeit</th>
            </tr>
            </thead>
            <tbody id="myTable">

            <?php
            $result = $db->query("SELECT maintenancejob.jobnumber, VEHICLE.VEHICLENUMBER, maintenancejobstate.DESCRIPTION, USER.DISPLAYNAME, maintenancejob.order_id, contact.firstname, contact.lastname
         FROM `maintenancejob`  JOIN `VEHICLE` ON maintenancejob.vehicle_id = VEHICLE.ID JOIN `maintenancejobstate`on maintenancejob.maintenancejobstate_id = maintenancejobstate.KEYNAME JOIN `USER` ON maintenancejob.clerk_id = USER.USERNAME 
         JOIN `order`on maintenancejob.order_id=order.id JOIN `contact`on order.contact_id= contact.id
         WHERE order_id IN (SELECT id FROM `order`WHERE company_id = $login)");
            if ($result->num_rows > 0 ) {
                while($row = $result->fetch_assoc()) {
                    $wert = utf8_encode($row["DESCRIPTION"]);
                    $jobnumber = $row["jobnumber"];
                    $order = $row["order_id"];
                    echo utf8_encode("<tr class='clickable-row' data-href='views/orderdetail.php?id=$jobnumber&order=$order'><td>" . $row["jobnumber"] . "</td><td>" . $row["VEHICLENUMBER"] . "</td><td>" . $row["DESCRIPTION"]
                        . "</td><td>" .status($wert). "</span></td><td>" . $row["firstname"] . " " . $row["lastname"] . "</td></tr>");







                }



            } else {
                echo "0 results";
            }?>
            </tbody>
            <?php
            function status($wert){

                if($wert == 'In Klärung')
                {
                    return '<span style="color:darkorange;" class="glyphicon glyphicon-alert"></span>';
                }

                else if($wert == 'abgeschlossen'){
                    return '<span style="color:green;" class="glyphicon glyphicon glyphicon-ok "></span>';
                }
            }
            ?>

        </table>
    </div>
    <div class="pushFooter"></div>
</div>

<footer>
    <a href="https://waggonservice.com/impressum.html" target="_blank">Impressum</a>
    <a href="https://waggonservice.com/#contact" target="_blank">Kontakt</a>
    <a href="https://waggonservice.com/" target="_blank">waggonservice.com</a>
</footer>
</body>

</html>