<html>
<head>
    <title>Auftragsübersicht</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/myStylesAfterLogin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="views/js/afterloginClickable.js"></script>


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
                <th>Zuständigkeit</th>
            </tr>
            </thead>
            <tbody id="myTable">

            <?php
            $result = $db->query("SELECT maintenancejob.jobnumber, VEHICLE.VEHICLENUMBER, maintenancejobstate.DESCRIPTION, USER.DISPLAYNAME
         FROM `maintenancejob`  JOIN `VEHICLE` ON maintenancejob.vehicle_id = VEHICLE.ID JOIN `maintenancejobstate`on maintenancejob.maintenancejobstate_id = maintenancejobstate.KEYNAME JOIN `USER` ON maintenancejob.clerk_id = USER.USERNAME
         WHERE order_id IN (SELECT id FROM `order`WHERE company_id = $login)");
            if ($result->num_rows > 0 ) {
                while($row = $result->fetch_assoc()) {
                    $id = $row["jobnumber"];
                    echo utf8_encode("<tr class='clickable-row' data-href='views/orderdetail.php'><td>".$row["jobnumber"]."</td><td>".$row["VEHICLENUMBER"]."</td><td>".$row["DESCRIPTION"]."</td><td>".$row["DISPLAYNAME"]. "</td></tr>");
                }

            } else {
                echo "0 results";
            }?>
            </tbody>

        </table>
        <script>
            function myFunktion() {
                // Declare variables
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");

                // Loop through all table rows, and hide those who don't match the search query
                for (i = 0; i < tr.length; i++) {
                    if (!tr[i].classList.contains('header')) {
                        td = tr[i].getElementsByTagName("td"),
                            match = false;
                        for (j = 0; j < td.length; j++) {
                            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                                match = true;
                                break;
                            }
                        }
                        if (!match) {
                            tr[i].style.display = "none";
                        } else {
                            tr[i].style.display = "";
                        }
                    }
                }
            }
        </script>
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