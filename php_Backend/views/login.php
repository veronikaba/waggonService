<html>
<head>
<title>Login</title>
</head>
  <body>
    <?php
      echo $result;
      ?>
      <form action=" " method="POST">
        <p>
          <label> Username</label>
          <input id="username" value=" " name="username" type="text" required="required" />
          <br />
        </p>
        <p>
          <label>Passwort</label>
          <input id="password" name="password" type="password" required="required"  />
        </p>
        <br />
        <p>
          <button type="submit"><span>Login</span></button>
          <button type="reset"><span>Abbrechen</span></button>
        </p>
      </form>
  </body>

</html>
