<?php
function showwindow(){
  $message = "Thank your for your message! Your message has been sent!";
  echo "<script type='text/javascript'>alert('$message'); window.location=\"/ludomo/php/forms/contact.php\";</script>";
}
showwindow();
?>
