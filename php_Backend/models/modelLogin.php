<?php
define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
require_once(ABS_PATH . '/models/modelDatabase.php');

class Model {

  public function getlogin() {

    if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {

        $abfrage = DB::getPassword(trim($_POST['username']));
        setcookie("username",trim($_POST['username']),0);
        $falsch = "ungültige Eingabe";

        $pw = trim($_REQUEST['password']);
        if($pw==$abfrage[0]['PASSWORT']){

          return 'login';
        }
        else {
          echo "<h1>$falsch</h1>";
        }

    }
    }
}

?>
