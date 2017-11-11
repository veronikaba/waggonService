<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        * {
            box-sizing: border-box;
            font-family: Calibri;
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
            height:300px;
            line-height:60px;
            color:white;
            margin:20px auto;
            position:relative;
        }

        input{
            border: solid 1px grey;
            width: 180px;
            height:35px;
            padding: 5px;
            border-radius: 2px;
        }

        button{
            background-color: white;
            border: solid 1px grey;
            padding: 6px;
            width: 80px;
            border-radius: 2px;
        }

        button:hover{
            background-color:darkgrey;
            color: white;
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
    <img src="02_WSG_logo.png" alt="Logo" style="width:30%; margin-top:5%;">
        <form action=" " method="POST">
          <p style="color:white; font-size: 35px; padding-top:10px; margin-bottom: 10px; "><b>LOGIN</b></p>

          <input id="username"  name="username"  placeholder="Kundennummer" type="text" required="required" />
            </br>

          <input id="password" name="password" placeholder="Passwort" type="password" required="required"  />
            </br>
            <div class="flex">
          <button type="submit" style="margin-right:2px;"><span>Einloggen</span></button>
          <button type="reset"><span>Abbrechen</span></button>
            </div>
      </form>
    </div>


  <footer>
      <a href="https://waggonservice.com/impressum.html" target="_blank">Impressum</a>
      <a href="https://waggonservice.com/#contact" target="_blank">Kontakt</a>
      <a href="https://waggonservice.com/" target="_blank">waggonservice.com</a>
  </footer>

  </body>

</html>
