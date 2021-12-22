<?php
function showwindow(){
  $message = "Your message has been sent!";
  echo "<script type='text/javascript'>alert('$message'); window.location=\"/ludomo/php/forms/contact.php\";</script>";
}
showwindow();
?>
