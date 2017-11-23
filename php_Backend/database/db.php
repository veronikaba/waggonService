<?php
/**
 * Created by PhpStorm.
 * User: Veronika Babic
 * Date: 23.11.2017
 * Time: 10:29
 */
echo date("H:i:s");
$db = new mysqli('localhost', 'root', '', 'waggonservice');
$ergDrei = $db->query("SELECT * FROM contact");
print_r($ergDrei);

$ergZwei = $db->query("SELECT id, firstname, lastname, title FROM contact");
print_r($ergZwei);
if ($ergZwei->num_rows) {
    echo "<p>Daten vorhanden: Anzahl ";
    echo $ergZwei->num_rows;
}
echo "<h1>Programm Adressbuch</h1>";
$ergDrei = $db->query("SELECT id, firstname, lastname, title FROM contact")
or die($db->error);
print_r($ergDrei);
if ($ergDrei->num_rows) {
    echo "<p>Daten vorhanden: Anzahl ";
    echo $ergDrei->num_rows;
}
$datensatz = $ergDrei->fetch_all();
echo "<pre>";
print_r($datensatz);
echo "</pre>";
?>