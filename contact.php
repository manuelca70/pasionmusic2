<?php

$para = 'misoft1610@gmail.com, manuelcalderon18@msn.com';

$asunto? = 'Mensaje desde Pasion Music';
$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader = "Replay-To: ".$_POST["email"]."\r\n";
$mailheader = "Content-type: text/html; charsert=utf-8\r\n";
$MESSAGE_BODY = "Nombre: ".$_POST["name"]."\n";
$MESSAGE_BODY .= "\n<br>Email: ".$_POST["email"]."\n";
$MESSAGE_BODY .= "\n<br>Mensaje: ".nl2br($_POST["message"])."\n";


mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die("Error al enviar email!");

header('Location: file:///C:/Users/manue/Desktop/respabrilweb')

?>