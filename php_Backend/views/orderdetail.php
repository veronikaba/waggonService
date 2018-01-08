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
        <p class="distanceTop"><span class="glyphicon glyphicon-user"></span>  Name Kunde</p>
        <p class="distanceTop">Abmelden</p>
    </div>
    <img src="02_WSG_logo.png" alt="Logo" class="logo"">

    <div class="rows orange textheader">
       <div class="col-3">Auftrag / Projekt</div>
        <div class="col-9 ansprechpartner"><?php  include(ABS_PATH . '/models/modelDatabase.php'); var_dump(DB::getCustomerData($GLOBALS["username"])); ?>Ansprechpartner: Tim Müller</div>
    </div>

    <div class="rows">
        <div class="col-3 col-12-Verlauf">Verlauf Ihres Auftrags</div>
        <div class="col-9 col-12-Verlauf">

            <div class="col-20 ">

                <img src="icons/einsblau.png" alt="icon" class="icon">
                <div class="icondescription">Auftrag eingeangen</div>

            </div>
            <div class="col-20">

                <img src="icons/zwei.png" alt="icon" class="icon">
                <div class="icondescription">Auftrag bestätigt</div>

            </div>
            <div class="col-20">

                <img src="icons/drei.png" alt="icon" class="icon">
                <div class="icondescription">in Bearbeitung</div>

            </div>
            <div class="col-20">

                <img src="icons/vier.png" alt="icon" class="icon">
                <div class="icondescription">Instandhaltung abgeschlossen</div>

            </div>
            <div class="col-20">

                <img src="icons/fünf.png" alt="icon" class="icon">
                <div class="icondescription">Auftrag abgeschlossen</div>

            </div>


        </div>

    </div>

    <div class="rows grey numberheader">
        <div class="col-3">Auftragsnummer</div>
        <div class="col-9">2017101201</div>
    </div>

    <div class="rows">
        <div class="col-3 distanceLeft">Wagennummer</div>
        <div class="col-9">37 60 4541 915-6</div>
    </div>

    <div class="divider"></div>

    <div class="rows">
        <div class="col-3 distanceLeft">Standort</div>
        <div class="col-9">Hamburg</div>
    </div>

    <div class="divider"></div>

    <div class="rows">
        <div class="col-3 distanceLeft">Status</div>
        <div class="col-9">
            <details>
                <summary style=" text-decoration: underline;">05.11.17 Abschluss durch Mobilteam</summary>
                <p>03.11.17 In Bearbeitung</p>
                <p>01.11.17 Warten auf Teile</p>
                <p>30.01.17 Arbeit geplant</p>
            </details>
        </div>
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