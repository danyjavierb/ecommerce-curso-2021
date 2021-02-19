<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$archivoRegistro = fopen("cuentas/$username.txt",'a+');
fwrite($archivoRegistro,$username."\n");
fwrite($archivoRegistro,$password."\n");
fwrite($archivoRegistro,$email."\n");
fclose($archivoRegistro);
header('Location: account.php');


//tarea que pasa si ya existe el archivo

?>