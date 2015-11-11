<?php

//Feature Complete Example of Output
//Needs sanitization of $_POST (week 5)
//Needs output success checking (week 6)

$_POST['zip'] = "54481";
$zip = $_POST['zip'];

require_once("DDCurl.php");
$cc = new DDCurl();
$data = array();
$data["response"]["version"] = 1;
$cc->setURL("http://cwa.braingia.org/ddwi/week4/sourcedata/wx-forecast.php");
$cc->setPostFields("zip=54481");
$cc->getURL();
$forecast = explode("|",$cc->output);
$data["response"][$zip]["dayOne"] = $forecast[0];
$data["response"][$zip]["dayTwo"] = $forecast[1];

$cc->setURL("http://cwa.braingia.org/ddwi/week4/sourcedata/wx-current.php?zip=54481");
$cc->getURL();
$curr = explode("|", $cc->output);
$data["response"][$zip]["temp"] = $curr[0];
$data["response"][$zip]["condition"] = $curr[1];

print json_encode($data);

//Student:
// -Accept input from a caller (choose GET or POST)
// -Gather data from different sources (see examples)
// -Send output to caller in JSON format.


?>
