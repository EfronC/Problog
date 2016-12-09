<?php
session_start();

$host_db = "localhost";
$user_db = "root";
$pass_db = "root";
$db_name = "bdWeb";
$tbl_name = "usuarios";

$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

  if (!$conexion) {
    die("La conexion falló: " . mysqli_error($conexion));
  }

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM $tbl_name WHERE nombre_usuario = '$username'";

 $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));


if (mysqli_num_rows($result) > 0) {     
 
$row = mysqli_fetch_assoc($result);
  if($password===$row['password']){

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    //$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "<script lenguaje=\'JavaScript\'>window.location='post.php'; alert('" . "Bienvenido " . $_SESSION['username'] . "!" . "'); </script>";  
 } else { 
   echo "<script lenguaje=\'JavaScript\'>window.location='post.php'; alert('Username o Password estan incorrectos.'); </script>";  
 }
}else{
    echo "<script lenguaje=\'JavaScript\'>window.location='post.php'; alert('Username o Password estan incorrectos.'); </script>";  
 
}
 mysqli_close($conexion); 
 ?>