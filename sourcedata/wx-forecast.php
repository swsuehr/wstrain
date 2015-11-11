<?php

$zip = $_POST['zip'];
$data = array();
$zip = "54481";
switch ($zip) {
  case "54481":
    print "Sunday: Cloudy with a high of 36|Monday: 20% chance of snow with a high of 28";
    break;
  case "60610":
    print "Sunday: Sunny with a high of 43|Monday: Rain/snow with a high of 33";
    break;
  case "55413":
    print "Sunday: Snow with a high of 24|Monday: Sunny with a high of 28";
    break;
}

?>
