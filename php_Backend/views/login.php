<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .col-12{
            width: 100%;
            text-align: center;
        }

        form{
            background-color: lightgrey;
            border-radius: 10px;
            width:300px;
            height:280px;
            line-height:60px;
            color:white;
            margin:20px auto;
            position:relative;
        }

        input{
            margin: 0 auto;
            margin-bottom: 20px;
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

        @media only screen and (min-width: 500px) {

            .logo {
                width: 470px;
                margin-left: 5px;
                margin-bottom: 10px;
                margin-top: 5%;
            }
        }

        @media only screen and (max-width: 499px){

            .logo{
                width:60%;
                margin-top:5%

            }

        }

    </style>

</head>
<body>
<header>
    <p>Sprache deutsch englisch</p>
</header>
<?php
echo $result;
?>

<div class="col-12">
    <img src="views/02_WSG_logo.png" alt="Logo" class="logo"">
    <form action=" "  method="POST">
        <p style="color:white; font-size: 35px; padding-top:10px; margin-bottom: 10px; "><b>LOGIN</b></p>
        <input id="username" class="form-control" style="width:180px;" name="username"  placeholder="Kundennummer" type="text" required="required" />
        <input id="password" class="form-control" style="width:180px;" name="password" placeholder="Passwort" type="password" required="required"  />
        <button type="submit" class="btn btn-default" >Einloggen</button>
        <button type="reset" class="btn btn-default">Abbrechen</button>
    </form></div>

<footer>
    <a href="https://waggonservice.com/impressum.html" target="_blank">Impressum</a>
    <a href="https://waggonservice.com/#contact" target="_blank">Kontakt</a>
    <a href="https://waggonservice.com/" target="_blank">waggonservice.com</a>
</footer>

</body>
</html>
