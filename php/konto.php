<?php

include "../html/head.html";
include "../html/othersCss.html";
include "../html/header.html";
if(isset($_COOKIE["username"])){
  include "../html/account.html";
}
else
{
  include "../html/konto.html";  
}
include "../html/footer.html";
include "../html/foot.html";

?>
