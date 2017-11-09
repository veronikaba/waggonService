<html>
<head>
    <link href="myStylesLogin.css" rel="stylesheet"></link>
<title>Login</title>
</head>
  <body>
    <header>
        <p>Sprache deutsch englisch</p>
    </header>
    <?php
    echo $result;
      ?>
    <img src="01_WSG_logo.png" alt="Logo" style="width: 400px">

      <form action=" " method="POST">
          <p class="logintext"><b>LOGIN</b></p>
          <p class="abstand" >
          <input id="username"  name="username"  placeholder="Kundennummer" type="text" required="required" />

        </p>
        <p class="abstand">
          <input id="password" name="password" placeholder="Passwort" type="password" required="required"  />
        </p>

        <p class="abstandnachButton">
          <button type="submit" class="abstandButton"><span>Einloggen</span></button>
          <button type="reset"><span>Abbrechen</span></button>
        </p>
      </form>

  <footer>
      <a href="https://waggonservice.com/impressum.html" target="_blank">Impressum</a>
      <a href="https://waggonservice.com/#contact" target="_blank">Kontakt</a>
      <a href="https://waggonservice.com/" target="_blank">waggonservice.com</a>
  </footer>

  </body>

</html>
