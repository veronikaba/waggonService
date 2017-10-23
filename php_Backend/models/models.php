<?php
require_once("models/models.php");

class Model {

  public funktion getLogin() {

    if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {

      if($_REQUEST)['username']=='Team2' && $_REQUEST['password'] == 'passwort'{
        return 'login';
      }

      else {
        return 'ungültige Eingabe'
      }
    }
  }
}
 ?>
