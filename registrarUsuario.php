<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "root";
 $db_name = "bdweb";
 $tbl_name = "usuarios";
 
 //$form_pass = $_POST['password'];
 
 //$hash = password_hash($form_pass, PASSWORD_BCRYPT); 

 $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

	 if (!$conexion) {
	 	die("La conexion falló: " . mysqli_error());
	 }

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE nombre_usuario = '$_POST[username]' ";

 
 $result = mysqli_query($conexion,$buscarUsuario) or die(mysqli_error($conexion));

 $count = mysqli_num_rows($result);

	 if ($count == 1) {
	 	 echo "<br />";
		 echo "El Nombre de Usuario ya ha sido tomado.";
		 echo "<br />";
		 echo "<a href='registroDeUsuarios.html'>Por favor escoja otro Nombre de usuario</a>";
	 	 echo "<br />";
	 }
	 else{
	
		 $query = "INSERT INTO $tbl_name (nombre_usuario, password, email, nombre_imagen)
		           VALUES ('$_POST[username]', '$_POST[password]', '$_POST[email]', 'default.jpg')";
		
		 if ((mysqli_query($conexion,$query) or die(mysqli_error($conexion))) === TRUE) {
		 
		 	 echo "<link rel='stylesheet' type='text/css' href='css/post.css'>";
			 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
			 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
			 echo "<h5>" . "<br><br><button type='submit' id='regresarPost' name='RegresarPost' onclick='RegresarPagina()'>Cerrar Ventana</button>". "</h5>";
		 }
		
		 else {
		 	echo "Error al crear el usuario." . $query . "<br />" . mysqli_error($conexion); 
		    
		   }
		 }
	 
 mysqli_close($conexion);