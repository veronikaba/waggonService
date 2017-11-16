<html>
<head>
    <title>Auftragsübersicht</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        body {
            font-family: Tahoma;
            background-color: #ededed;
        }

        header{
            text-align: right;
            font-size: small;
        }

        thead{
            background-color:#d1cdca;
        }
        tbody{
            background-color:white;
        }

        footer{
            background-color: lightgrey;
            text-align: center;
            position: fixed;
            bottom:0;
            padding:10px;
            left:0;
            right:0;
            font-size: small;
        }
        a {
            color:#4f4e4e;
        }
        a:hover{
            color:black;
        }

        @media only screen and (min-width: 500px){

            .logo{
                width:470px;
                margin-left:5px;
                margin-bottom:10px;
            }

            .auftragstext{
                background-color: #eb5f0a;
                border-radius:1px;
                font-size: 35px;
                width:480px;
                color:white;
                text-align:center;
                margin-bottom:30px;

            }

        }

        @media only screen and (max-width: 499px){

            .logo{
                width:50%;
                margin-left:1%;
                margin-bottom:10px;
            }

            .auftragstext{
                background-color: #eb5f0a;
                border-radius:1px;
                font-size: 20px;
                width:250px;
                color:white;
                text-align:center;
                margin-bottom:30px;

            }

            thead{
                font-size: small;
            }
            tbody{
                font-size: small;
            }

        }
    </style>
</head>
 <body>
 <header>
     <p>Sprache deutsch englisch</p>
 </header>

 <img src="views/02_WSG_logo.png" alt="Logo" class="logo"">
 <p class="auftragstext">Auftragsübersicht</p>



    <table class="table  table-striped table-hover">
        <thead>
        <tr>
            <th>Auftragsnummer</th>
            <th>Jobnummer</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>201710193</td>
            <td>2017101201</td>
            <td>Arbeit geplant</td>
        </tr>
        <tr>
            <td>201710100</td>
            <td>2017100200</td>
            <td>abgeschlossen</td>
        </tr>
        <tr>
            <td>201710088</td>
            <td>2017100010</td>
            <td>abgeschlossen</td>
        </tr>
        </tbody>

    </table>


 <footer>
     <a href="https://waggonservice.com/impressum.html" target="_blank">Impressum</a>
     <a href="https://waggonservice.com/#contact" target="_blank">Kontakt</a>
     <a href="https://waggonservice.com/" target="_blank">waggonservice.com</a>
 </footer>
  </body>

</html>
