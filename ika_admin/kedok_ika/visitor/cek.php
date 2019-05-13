<?php
include "rgx.php";
$counttotal = mysql_query("SELECT DISTINCT ip FROM visitor") or die(mysql_error());
$uniquetotal = mysql_num_rows($counttotal);
echo $uniquetotal;

?>