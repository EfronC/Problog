<?php
session_start();

$host_db = "localhost";
$user_db = "root";
$pass_db = "root";
$db_name = "bdWeb";
$tbl_name = "usuarios";

$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

    if (!$conexion) {
        die("La conexion falló: " . mysqli_error());
    }
  
    // Ruta donde se guardarán las imágenes 
    $directorio = $_SERVER['DOCUMENT_ROOT'].'/Problog/images/'; 
   
    //Cambio nombre a la imagen con el nombre del usuario (el cual es unico)
    $nombre=$_SESSION['username'];
    $nombre= $nombre.".jpg";
    $_FILES['imagen']['name']=$nombre;
  
    // Recibo los datos de la imagen 
    //$nombre = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type']; 
    $tamano = $_FILES['imagen']['size'];
    $direccion= $nombre;
    // Muevo la imagen desde su ubicación 
    // temporal al directorio definitivo 
   if(move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre)){



    $usuario=$_SESSION['username'];
    // Guardo en la BBDD 
    $sql = "UPDATE $tbl_name set nombre_imagen='$direccion' WHERE nombre_usuario='$usuario'";
    if ((mysqli_query($conexion,$sql) or die(mysqli_error($conexion))) === TRUE) {
        echo "<script lenguaje=\'JavaScript\'>window.location='post.php'; alert('Imagen Subida Con Exito!'); </script>";  
    }else{
        echo "Error al subir la imagen." . $sql . "<br />" . mysqli_error($conexion); 
    }
}

       
?>