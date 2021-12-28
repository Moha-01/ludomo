<?php

// Wenn der Button Logout geklickt wird, dann werden die Cookies für die Anmeldung gelöscht
if(isset($_GET['btnLogout'])){
  setcookie("email", "", time()-(60*60*24*7),"/");
  setcookie("username", "", time()-(60*60*24*7),"/");
  setcookie("privalage", "", time()-(60*60*24*7),"/");
  echo "<script>window.location = 'http://localhost/dhbw/tinf20_ludomo_app/php/konto.php'</script>";
}
// Wenn der Button Delete geklickt wird, dann wird der User in der Selbe Reihe wie der Button gelöscht
if(isset($_GET['btnDelete'])){
  $btnNmbr = $_GET['btnDelete'];
  $conn = mysqli_connect("localhost","root","","ludomo");   //Verbindung zu DB aufbauen
  $sql = "DELETE FROM user_tabelle WHERE ID=$btnNmbr";      //SQL Statement zum löschen einer User
  mysqli_query($conn, $sql);                                //SQL Statement ausführen
  mysqli_close($conn);                                      //SQL Ausführung abschließen
  echo "<script>window.location = 'http://localhost/dhbw/tinf20_ludomo_app/php/konto.php'</script>";
}
// Wenn der Button Upgrade geklickt wird, dann wird der User in der Selbe Reihe wie der Button zum Admin gemacht
if(isset($_GET['btnUpgrade'])){
  $btnNmbr = $_GET['btnUpgrade'];
  $conn = mysqli_connect("localhost","root","","ludomo");  //Verbindung zu DB aufbauen
  $sql = "UPDATE user_tabelle SET privalage='10' WHERE ID = $btnNmbr";
  mysqli_query($conn, $sql);
  mysqli_close($conn);
  echo "<script>window.location = 'http://localhost/dhbw/tinf20_ludomo_app/php/konto.php'</script>";
}
// Wenn der Button Downgrade geklickt wird, dann wird der User in der Selbe Reihe wie der Button zdie Admin Rechte weg genommen
if(isset($_GET['btnDowngrade'])){
  $btnNmbr = $_GET['btnDowngrade'];
  $conn = mysqli_connect("localhost","root","","ludomo");  //Verbindung zu DB aufbauen
  $sql = "UPDATE user_tabelle SET privalage='1' WHERE ID = $btnNmbr";
  mysqli_query($conn, $sql);
  mysqli_close($conn);
  echo "<script>window.location = 'http://localhost/dhbw/tinf20_ludomo_app/php/konto.php'</script>";

}

//Diese PHP-Datei Sammelt Dateien um die Seite konto zu erstellen
include "../html/templates/head.html";
include "../html/others_css.html";
include "../html/templates/header.html";
// damit unterschiedliche Seiten angezeigt werden können abhängig von login-Status
if(isset($_COOKIE["username"])){
  include "../html/account.html";
}
else
{
  include "../html/konto.html";
}
include "../html/templates/footer.html";
include "../html/templates/foot.html";

?>
