<?php
$server = 'mysql:host=localhost';
$sqlBefehl = 'CREATE DATABASE IF NOT EXISTS ludomo;';
$verbindung = new PDO($server, "root", "");
$abfrage = $verbindung->prepare($sqlBefehl);
try {
  $abfrage->execute();
} catch (\Exception $e) {
  echo "fail1";
}

$verbindung=null;
$server = 'mysql:host=localhost;dbname=ludomo';
$verbindung = new PDO($server, "root", "");
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS products(ID INTEGER AUTO_INCREMENT, brand_name VARCHAR (50), genre_name VARCHAR (50), S_M_id INTEGER, name VARCHAR (100), preis float, rabatt INTEGER, endpreis float,background varchar(200), discription varchar(200), picture varchar(200), fsk INTEGER, PRIMARY KEY (ID));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS user_tabelle(ID INTEGER AUTO_INCREMENT, username varchar(100), password varchar(100), email varchar(100), privalage int, PRIMARY KEY (ID));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
//$csvInhalt = file("php-libraries\Products.csv", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
//$daten = [];
//$trennzeichen = ";";
//foreach ($csvInhalt as $inhalt) {
//  list($ID, $brand_name, $genre_name, $S_M_ID,$name, $preis, $rabatt, $endpreis,$background, $discription, $picture, $fsk) = explode($trennzeichen, $inhalt);
//  $daten[] = "'('" . $ID . "','" . $brand_name . "','" . $genre_name . "','" . $S_M_ID . "','" . $name ."','" . $preis . "','" . $rabatt . "','" . $endpreis ."','" . $background . "','" . $discription . "','" . $picture ."','" . $fsk "')'" . chr(13);
//}
//$sql = `INSERT INTO 'Products' ('ID', 'brand_name', 'genre_name', 'S_M_id', 'name', 'preis', 'rabatt', 'endpreis', 'background', 'discription', 'picture', 'fsk') VALUES" . implode(",", $daten) . ";`;
//$csvInhalt = file("php-libraries\User_Tabelle.csv", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
//$daten = [];
//$trennzeichen = ";";
//foreach ($csvInhalt as $inhalt) {
// list($ID, $username, $password, $email, $privalage) = explode($trennzeichen, $inhalt);
// $daten[] = "('" . $ID . "','" . $username . "','" . $password . "','" . $email ."','" . $privalage "')" . chr(13);
//}
//$sql = `INSERT INTO 'User_Tabelle' ('ID', 'username', 'password', 'email', 'privalage') VALUES" . implode(",", $daten) . ";`;
//$verbindung=null;
 ?>
