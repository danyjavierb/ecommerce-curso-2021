<?php 
$username = $_POST['username'];
$password = $_POST['password'];

$archivoUsuario = file_get_contents("cuentas/$username.txt");
$arrayArchivo = explode("\n",$archivoUsuario);

if($arrayArchivo[1]=== $password) {
setcookie('logueado',true, time() + 3600);
setcookie('username',$username, time() + 3600);
header('Location: index.php');

}else {
    header('Location: account.php?error=loginError');
}

//tarea que pasa si no existe el archivo


?>