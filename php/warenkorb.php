<?php

if(array_key_exists('add_to_cart', $_GET)) {
    add2Cart($_GET['add_to_cart']);
}

function add2Cart($itemid) {
    if(isset($_COOKIE['Warenkorb'])){
      $id = $_COOKIE['Warenkorb'];
      $id = $id . ',' . $itemid;
      setcookie('Warenkorb', $id, time()+3600, "/");
    }else{
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

//$Einkaufswagen_Tab = unserialize($_COOKIE['Wahrenkorb']);




?>
