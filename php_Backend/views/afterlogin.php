<html>
<head>
    <title>Auftragsübersicht</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/myStylesAfterLogin.css">

</head>
 <body>
 <?php
 $db = new mysqli('localhost', 'root', 'Te17e4so', 'waggonservice');
 if(mysqli_connect_errno($db)) {
     echo "Failed to connect to MySQL:" . mysqli_connect_error();
 }
 ?>
 <div class="content">
 <header>
     <p>Sprache deutsch englisch</p>
 </header>

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

         ?>
        </p>
     <p class="textright">Abmelden</p>
 </div>

 <img src="views/02_WSG_logo.png" alt="Logo" class="logo"">
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

            <?php
            $result = $db->query("SELECT maintenancejob.jobnumber, VEHICLE.VEHICLENUMBER, maintenancejobstate.DESCRIPTION, USER.DISPLAYNAME
            FROM `maintenancejob`  JOIN `VEHICLE` ON maintenancejob.vehicle_id = VEHICLE.ID JOIN `maintenancejobstate`on maintenancejob.maintenancejobstate_id = maintenancejobstate.KEYNAME JOIN `USER` ON maintenancejob.clerk_id = USER.USERNAME
            WHERE order_id IN (SELECT id FROM `order`WHERE company_id = 321)");
            if ($result->num_rows > 0 ) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["jobnumber"]."</td><td>".$row["VEHICLENUMBER"]." </td><td>".$row["DESCRIPTION"]." </td><td>".$row["DISPLAYNAME"]. "</td></tr>";
                }
            } else {
                echo "0 results";
            }?>
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
