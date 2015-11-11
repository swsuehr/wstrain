<?php

$zip = $_GET['zip'];
$data = array();
switch ($zip) {
  case "54481":
    print "54|cloudy";
    break;
  case "60610":
    print "60|sunny";
    break;
  case "55413":
    print "43|rain";
    break;
}

?>
