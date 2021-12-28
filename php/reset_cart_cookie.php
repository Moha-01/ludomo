<?php
function showwindow(){
// Der Einkauf wird abgeschlossen und der Einkaufswagen wird gelehrt
  setcookie("Warenkorb","",time()-3600, "/");
  $message = "Your order has been received";
  echo "<script type='text/javascript'>alert('$message'); window.location=\"/dhbw/tinf20_ludomo_app/php/warenkorb.php\";</script>";
}
showwindow();
?>
