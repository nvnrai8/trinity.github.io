<?php

$to_email="trinityeducationsolution@gmail.com"
$subject="Sending email via php";
$body="hello testing"t;
$headers="From : nvnrai8@gmail.com";

if (mail($to_email,$subject,$body,$headers))
{
    echo "Email send";
}
else{
    echo "Email failed";
}
?>  