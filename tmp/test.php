<?php

echo "Welcome to my Testing 123.... <BR>";

$pname = "In The Filed";
$lang = "Malayalam";
$fn = "Inthefield.jpg";

$trimpname = str_replace(" ","",$pname);

echo "new file" .substr($lang,0,4) .substr($trimpname,0,4);

?>