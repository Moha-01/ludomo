<?php
$server = 'mysql:host=localhost';
$sqlBefehl = 'CREATE DATABASE IF NOT EXISTS ludomo;';
$verbindung = new PDO($server, "root", "");
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$verbindung=null;
$server = 'mysql:host=localhost;dbname=ludomo';
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS products(ID INTEGER AUTO_INCREMENT, brand_name VARCHAR (50), genre_name VARCHAR (50), S_M_id INTEGER, name VARCHAR (100), preis float, rabatt INTEGER, endpreis float,background varchar(200), discription varchar(200), picture varchar(200), fsk INTEGER, PRIMARY KEY (ID));';
$verbindung = new PDO($server, "root", "");
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS user_tabelle(ID INTEGER AUTO_INCREMENT, username varchar(100), password varchar(100), email varchar(100), privalage int, PRIMARY KEY (ID));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();

$csvInhalt = file("Products.csv", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
$daten = [];
$trennzeichen = ";";
foreach ($csvInhalt as $inhalt) {
 list($spalte1, $spalte2, $spalte3, $spalte4,$spalte5, $spalte6, $spalte7, $spalte8,$spalte9, $spalte10, $spalte11) = explode($trennzeichen, $inhalt); $daten[] = "('" . $spalte1 . "','" . $spalte2 . "','" . $spalte3 . "','" . $spalte4 ."','" . $spalte5 . "','" . $spalte6 . "','" . $spalte7 ."','" . $spalte8 . "','" . $spalte9 . "','" . $spalte10 ."','" . $spalte11 "')" . chr(13);
}
$sql = "INSERT INTO `Products` (`spalte1`, `spalte2`, `spalte3`, `spalte4`, `spalte5`, `spalte6`, `spalte7`, `spalte8`, `spalte9`, `spalte10`, `spalte11`) VALUES" . implode(",", $daten) . ";";

$csvInhalt = file("User_Tabelle.csv", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
$daten = [];
$trennzeichen = ";";
foreach ($csvInhalt as $inhalt) {
 list($spalte1, $spalte2, $spalte3, $spalte4,$spalte5) = explode($trennzeichen, $inhalt);
 $daten[] = "('" . $spalte1 . "','" . $spalte2 . "','" . $spalte3 . "','" . $spalte4 ."','" . $spalte5 "')" . chr(13);
}
$sql = "INSERT INTO `User_Tabelle` (`spalte1`, `spalte2`, `spalte3`, `spalte4`, `spalte5`) VALUES" . implode(",", $daten) . ";";

$verbindung=null;
 ?>
