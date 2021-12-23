<?php

// Contact-Form Daten werden abgeschickt und einen Popfenster erscheint
function showwindow(){
  $message = "Thank your for your message! Your message has been sent!";
  echo "<script type='text/javascript'>alert('$message'); window.location=\"/dhbw/ludomo/php/forms/contact.php\";</script>";
}
showwindow();
?>
