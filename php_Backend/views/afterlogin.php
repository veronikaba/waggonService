<html>
<head>
    <title>Auftragsübersicht</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="myStylesAfterLogin.css">

</head>
 <body>
 <?php
 $db = new mysqli('localhost', 'root', '', 'waggonservice');
 if(mysqli_connect_errno($db)) {
     echo "Failed to connect to MySQL:" . mysqli_connect_error();
 }
 ?>
 <div class="content">
 <header>
     <p>Sprache deutsch englisch</p>
 </header>

 <div class="kunde">
     <p class="textright"><span class="glyphicon glyphicon-user"></span>Name Kunde</p>
     <p class="textright">Abmelden</p>
 </div>

 <img src="02_WSG_logo.png" alt="Logo" class="logo"">
 <p class="auftragstext">Auftragsübersicht</p>

 <div class="inner-addon right-addon">
     <i class="glyphicon glyphicon-search"></i>
     <input type="text" class="form-control" placeholder="Suche" />
 </div>

 <div style="overflow-x:auto;">
    <table class="table  table-striped table-hover">
        <thead>
        <tr>
            <th>Auftragsnummer</th>
            <th>Wagennummer</th>
            <th>Status</th>
            <th>Zuständigkeit</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php


            $result = $db->query("SELECT maintenancejob.jobnumber,VEHICLE.VEHICLENUMBER,  FROM maintenancejob JOIN VEHICLE ON maintenancejob.vehicle_id = VEHICLE.ID WHERE ");
            if ($result->num_rows > 0 ) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<td>".$row['maintenancejob.jobnumber']."</td><td>".$row['VEHICLE.VEHICLENUMBER']."</td>";
                }

            } else {
                echo "0 results";
            }?>
        </tr>
        <tr>
            <td>2017101201</td>
            <td>37 80 45 41 015-6</td>
            <td>Arbeit geplant</td>
            <td>Manuel Fischer</td>
        </tr>
        <tr>
            <td>2017100200</td>
            <td>37 80 45 41 015-6</td>
            <td>abgeschlossen</td>
            <td>Stefanie Haupt</td>
        </tr>
        <tr>
            <td>2017100010</td>
            <td>37 80 45 41 015-7</td>
            <td>abgeschlossen</td>
            <td>Manuel Fischer</td>
        </tr>
        </tbody>

    </table>
 </div>
     <div class="push"></div>
 </div>

 <footer>
     <a href="https://waggonservice.com/impressum.html" target="_blank">Impressum</a>
     <a href="https://waggonservice.com/#contact" target="_blank">Kontakt</a>
     <a href="https://waggonservice.com/" target="_blank">waggonservice.com</a>
 </footer>
  </body>

</html>
