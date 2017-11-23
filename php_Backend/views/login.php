<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="myStylesLogin.css" rel="stylesheet">
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
        <p class="logintext"><b>LOGIN</b></p>
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
