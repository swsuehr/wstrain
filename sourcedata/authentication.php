<?php

//$_POST['username'] = 'joeuser';
//$_POST['password'] = 'pass1';
//$_POST['token'] = "123456789";

if (isset($_POST['token'])) {
  $token = $_POST['token'];
  $result = authorize($token);
} else if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  switch ($username) {
    case "joeuser":
      $result = authenticate($username,$password);
      break;
    case "janeuser":
      $result = authenticate($username,$password);
      break;
    default:
      $result = "User not found";
      break;
  }
} else {
  $result = "Invalid parameters sent to authentication service";
}

print $result;

function authenticate($user,$pass) {
  $result = "Authentication Failure";
  if ($user == "joeuser" && $pass == "pass1") {
    //Week 6
    //$token = createToken();
    //$result = "Success|" . $token;
    $result = "Success";
  } else if ($user == "janeuser" && $pass = "pass2") {
    //Week 6
    //$token = createToken();
    //$result = "Success|" . $token;
    $result = "Success";
  }
  return $result;
}

function createToken() {
  $token = array();
  $token[] = "123456789";
  $token[] = "3223456789";
  $token[] = "12wrefgw3456789";
  $token[] = "123456werf789";
  $token[] = "1tyjt23456789";
  $token[] = "wefwef123456789";
  $token[] = "12345678ghntntrn9";
  $token[] = "123456ebe789";
  $token[] = "123456nnnnn789";
  $token[] = "123456wefwef789";
  $token[] = "1234efwef56789";
  $num = rand(0,10);
  return $token[$num];
}

function authorize($incomingToken) {
  $result = "Invalid";
  $token = array();
  $token[] = "123456789";
  $token[] = "3223456789";
  $token[] = "12wrefgw3456789";
  $token[] = "123456werf789";
  $token[] = "1tyjt23456789";
  $token[] = "wefwef123456789";
  $token[] = "12345678ghntntrn9";
  $token[] = "123456ebe789";
  $token[] = "123456nnnnn789";
  $token[] = "123456wefwef789";
  $token[] = "1234efwef56789";
  foreach ($token as $tokenValue) {
    if ($incomingToken == $tokenValue) {
      $result = "Valid";
    }
  }
  return $result;
}
