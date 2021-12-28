<?php
//Diese PHP-Datei Sammelt Dateien um die Seite shop zu erstellen

//Prüft ob Delete-Button geklickt wurde
if(array_key_exists('delete', $_GET)) {
    deleteProduct($_GET['delete']);
}
// Funktion löscht Produkt aus der Datenbank
function deleteProduct($itemid) {

    $conn = mysqli_connect("localhost","root","","ludomo");  //Verbindung zu DB aufbauen
    $sql = "DELETE FROM products WHERE ID=$itemid";
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: /dhbw/ludomo/php/shop.php");
}


include "../html/templates/head.html";
include "../html/templates/header.html";
include "../html/shop.html";
include "../html/templates/footer.html";
include "../html/templates/foot.html";

?>
