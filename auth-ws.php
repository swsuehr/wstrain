<?php

//Feature Complete Example of Output
//Needs sanitization of $_POST (week 5)
//Needs output success checking (week 6)

$_POST['username'] = "janeuser";
$_POST['password'] = "pass2";
$username = $_POST['username'];
$password = $_POST['password'];

//Sanitize those

require_once("DDCurl.php");
$cc = new DDCurl();
$data = array();
$data["response"]["version"] = 1;
$cc->setURL("http://cwa.braingia.org/ddwi/week4/sourcedata/authentication.php");
$cc->setPostFields("username={$username}&password={$password}");
$cc->getURL();
$data["response"]["result"] = $cc->output;

print json_encode($data);

//Student:
// -Accept input from a caller (choose GET or POST)
// -Gather data from different sources (see examples)
// -Send output to caller in JSON format.


?>
