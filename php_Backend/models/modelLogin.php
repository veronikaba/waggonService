<?php
define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
require_once(ABS_PATH . 'models/modelDatabase.php');

class Model {

  public function getlogin() {

    if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {

        $abfrage = DB::getPassword(trim($_POST['username']));

        $pw = trim($_REQUEST['password']);
        if($pw==$abfrage['PASSWORT']){

          return 'login';
        }
        else {
          echo "ungültige Eingabe";
        }

    }
    }
}

?>
