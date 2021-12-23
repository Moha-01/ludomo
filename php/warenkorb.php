<?php

if(array_key_exists('add_to_cart', $_GET)) {
    add2Cart($_GET['add_to_cart']);
}
// Funktion um den cookie für den Warenkorb  zu erstellen und erweitern
function add2Cart($itemid) {
    if(isset($_COOKIE['Warenkorb'])){
// Bestehenden Cookie erweitern
      $id = $_COOKIE['Warenkorb'];
      $id = $id . ',' . $itemid;
      setcookie('Warenkorb', $id, time()+3600, "/");
    }else{
// Cookie erstellen
      setcookie('Warenkorb', $itemid, time()+3600, "/");
    }
    header("Location: /dhbw/ludomo/php/shop.php");
}

include "../html/templates/head.html";
include "../html/others_css.html";
include "../html/templates/header.html";
include "../html/warenkorb.html";
include "../html/templates/footer.html";
include "../html/templates/foot.html";
?>
