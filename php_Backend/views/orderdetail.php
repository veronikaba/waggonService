<html>
<head>
    <title>Auftrag</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/myStylesOrderDetail.css">
</head>
<body>
<div class="content">

    <div class="kunde">
        <p class="distanceTop"><span class="glyphicon glyphicon-user"></span>
            <?php
            define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
            include(ABS_PATH . '/models/modelOrderdetail.php');
            OrderDetail::getKundenName();
            ?>
            </p>
        <p class="textright"><a href="/index.php"><span class="glyphicon glyphicon-log-out"></span>Abmelden</a></p>

    </div>
    <img src="02_WSG_logo.png" alt="Logo" class="logo"">

    <div class="rows orange textheader">
       <div class="col-3">Auftrag / Projekt</div>
        <div class="col-9 ansprechpartner">

            Ansprechpartner:
            <?php define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);

            echo utf8_encode(DB::getContactPerson($_GET['order'])[0]['DISPLAYNAME']);
            ?></div>
    </div>

    <div class="rows">
        <?php
        include(ABS_PATH . '/views/orderDetailIcons.php');
        $status =  DB::getOrderStatus($_GET['order'])[0]['orderstate_id'];
        ?>
        <div class="col-3 col-12-Verlauf">Verlauf Ihres Auftrags</div>
        <div class="col-9 col-12-Verlauf">

            <div class="col-20 ">
                <img src="icons/einsblau.png" alt="icon" class="icon">
                <div class="icondescription">Auftrag eingeangen</div>
            </div>
            <div class="col-20">
                <img src="<?php echo myFunctionIcon(2,$status) ?>.png" alt="icon" class="icon">
                <div class="icondescription">Auftrag bestätigt</div>
            </div>
            <div class="col-20">
                <img src="<?php echo myFunctionIcon(3,$status) ?>.png" alt="icon" class="icon">
                <div class="icondescription">in Bearbeitung</div>
            </div>
            <div class="col-20">
                <img src="<?php echo myFunctionIcon(4,$status) ?>.png" alt="icon" class="icon">
                <div class="icondescription">Instandhaltung abgeschlossen</div>
            </div>
            <div class="col-20">
                <img src="<?php echo myFunctionIcon(5,$status) ?>.png" alt="icon" class="icon">
                <div class="icondescription">Auftrag abgeschlossen</div>
            </div>


        </div>

    </div>


    <?php

    $statement =  DB::getJobnumber($_GET['order']);
    foreach($statement as $row):

        echo utf8_encode( "<div class='rows grey numberheader'>
        <div class='col-3'>Auftragsnummer</div>
        <div class='col-9'>" . $row['jobnumber'] .    " </div></div>
        <div class='rows'>
        <div class='col-3 distanceLeft'>Wagennummer</div>
        <div class='col-9'> " .$row['VEHICLENUMBER'] . " </div>
    </div>
    <div class=\"divider\"></div>
    <div class=\"rows\">
        <div class=\"col-3 distanceLeft\">Standort</div>
        <div class=\"col-9\">"
            . DB::getLocation($_GET['order'])[0]['denotation']. "  
        </div>
    </div>
     <div class=\"divider\"></div>
       <div class=\"rows\">
        <div class=\"col-3 distanceLeft\">Status</div>
        <div class=\"col-9\">
                ".DB::getStatusHistory($row['jobnumber'])."
        </div>
    </div>
    <div class=\"push\"></div>
");



    $wert = utf8_encode($row['jobnumber']);

  if ($wert == 'abgeschlossen') {
      echo '<span style="color:green;" class="glyphicon glyphicon glyphicon-ok "></span>';
  }
    endforeach;

    ?>
<footer>
    <a href="https://waggonservice.com/impressum.html" target="_blank">Impressum</a>
    <a href="https://waggonservice.com/#contact" target="_blank">Kontakt</a>
    <a href="https://waggonservice.com/" target="_blank">waggonservice.com</a>
</footer>
</body>

</html>