<?php
define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
require_once(ABS_PATH . '/models/modelLogin.php');

class Model {

  public function getlogin() {

    if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {

      if (( trim($_REQUEST['username']) == '305' && trim($_REQUEST['password']) == 'passwort') ||
        ( trim($_REQUEST['username']) == '321' && trim($_REQUEST['password']) == 'passwort')){
        return 'login';
      }

      else {
        return 'ungültige Eingabe';
      }
    }
    }
}

?>