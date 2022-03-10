<?php
$price=$_GET['price'];
$tax=$_GET['tax'];
$aftertax;
$tax=$tax/100;
$aftertax=$price*(1-$tax);
echo "Podatek: $aftertax";
?>
