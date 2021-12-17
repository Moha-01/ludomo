<?php
$server = 'mysql:host=localhost';
$sqlBefehl = 'CREATE DATABASE IF NOT EXISTS ludomo;';
try {
  $verbindung = new PDO('mysql:host=localhost;dbname=ludomo', "root", "",);
} catch (\Exception $e) {

$verbindung = new PDO($server, "root", "");
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$verbindung=null;
$server = 'mysql:host=localhost;dbname=ludomo';
$verbindung = new PDO($server, "root", "",);
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS products(ID INTEGER AUTO_INCREMENT, brand_name VARCHAR (50), genre_name VARCHAR (50), S_M_id INTEGER, name VARCHAR (100), preis float, rabatt INTEGER, endpreis float,background varchar(200), discription varchar(200), picture varchar(200), fsk INTEGER, PRIMARY KEY (ID));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS user_tabelle(ID INTEGER AUTO_INCREMENT, username varchar(100), password varchar(100), email varchar(100), privalage int, PRIMARY KEY (ID));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = "LOAD DATA INFILE '/xampp/htdocs/ludomo/php/php-libraries/products.csv' INTO TABLE `Products` FIELDS TERMINATED BY ';'  LINES STARTING BY '...' IGNORE 1 LINES;";
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
//$sqlBefehl = "LOAD DATA INFILE '/xampp/htdocs/ludomo/php/php-libraries/User_Tabelle.csv' INTO TABLE User_Tabelle FIELDS TERMINATED BY ';'  LINES STARTING BY '' IGNORE 1 LINES;";
//$abfrage = $verbindung->prepare($sqlBefehl);
//$abfrage->execute();
}
$verbindung=null;
 ?>
