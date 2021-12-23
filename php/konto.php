<?php

include "../html/templates/head.html";
include "../html/others_css.html";
include "../html/templates/header.html";
// damit unterschiedliche Seiten angezeigt werden können abhängig von loginstatus
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
