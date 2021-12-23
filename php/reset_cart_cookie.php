<?php
function showwindow(){
  setcookie("Warenkorb","",time()-3600, "/");
  $message = "Your order has been received";
  echo "<script type='text/javascript'>alert('$message'); window.location=\"/dhbw/ludomo/php/warenkorb.php\";</script>";
}
showwindow();
?>
