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
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS products(ID INTEGER AUTO_INCREMENT, brand_id VARCHAR (50), genre_name VARCHAR (50), S_M_id INTEGER, name VARCHAR (100), preis float, rabatt INTEGER, endpreis float,background text, discription text, picture text, fsk INTEGER, PRIMARY KEY (ID));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS user_tabelle(ID INTEGER AUTO_INCREMENT, username varchar(100), password varchar(100), email varchar(100), privalage int, PRIMARY KEY (ID));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS brands_list(id INTEGER AUTO_INCREMENT, brand VARCHAR (50), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS fsk_list(id INTEGER AUTO_INCREMENT, fsk VARCHAR (50), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS preise_list(id INTEGER AUTO_INCREMENT, preise VARCHAR (50), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS genre_list(id INTEGER AUTO_INCREMENT, genre VARCHAR (50), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS mode_list(id INTEGER AUTO_INCREMENT, mode VARCHAR (50), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS price_sort(id INTEGER AUTO_INCREMENT, price VARCHAR (50), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = "LOAD DATA INFILE '/xampp/htdocs/ludomo/php/php-libraries/products.csv' INTO TABLE `Products` FIELDS TERMINATED BY ';'  LINES STARTING BY '...' IGNORE 1 LINES;";
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = "LOAD DATA INFILE '/xampp/htdocs/ludomo/php/php-libraries/User_Tabelle.csv' INTO TABLE User_Tabelle FIELDS TERMINATED BY ';'  LINES STARTING BY '' IGNORE 1 LINES;";
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = "LOAD DATA INFILE '/xampp/htdocs/ludomo/php/php-libraries/brands_list.csv' INTO TABLE brands_list FIELDS TERMINATED BY ';'  LINES STARTING BY '' IGNORE 1 LINES;";
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = "LOAD DATA INFILE '/xampp/htdocs/ludomo/php/php-libraries/fsk_list.csv' INTO TABLE fsk_list FIELDS TERMINATED BY ';'  LINES STARTING BY '' IGNORE 1 LINES;";
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = "LOAD DATA INFILE '/xampp/htdocs/ludomo/php/php-libraries/preise_list.csv' INTO TABLE preise_list FIELDS TERMINATED BY ';'  LINES STARTING BY '' IGNORE 1 LINES;";
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = "LOAD DATA INFILE '/xampp/htdocs/ludomo/php/php-libraries/genre_list.csv' INTO TABLE genre_list FIELDS TERMINATED BY ';'  LINES STARTING BY '' IGNORE 1 LINES;";
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = "LOAD DATA INFILE '/xampp/htdocs/ludomo/php/php-libraries/mode.csv' INTO TABLE mode_list FIELDS TERMINATED BY ';'  LINES STARTING BY '' IGNORE 1 LINES;";
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = "LOAD DATA INFILE '/xampp/htdocs/ludomo/php/php-libraries/price_sort.csv' INTO TABLE price_sort FIELDS TERMINATED BY ';'  LINES STARTING BY '' IGNORE 1 LINES;";
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
}
$verbindung=null;
 ?>
