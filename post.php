<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $visibilidad='block'; 
  $sesion='none';
  $usuario=$_SESSION['username'];
 } else {  
  $visibilidad='none';
  $sesion='block';
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>The Web League</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/post.css">
	<script type="text/javascript" src="js/post.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<header>
	<div id="navbar" class="navbar">
		<a href="index.html"><img src="media/injustice.png" width="50" height="50"></a>
		<ul>
			<li class="dropdown">
				<a href="javascript:void(0)" id="dropdown-1" class="dropbtn" onclick="drop(this.id);">Posts</a>
				<div class="dropdown-content" id="dconpost">
					<a href="index.html">L1</a>
					<a href="index.html">L2</a>
					<a href="index.html">L3</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" id="dropdown-2" class="dropbtn" onclick="drop(this.id);">Noticias</a>
				<div class="dropdown-content" id="dconnoticias">
					<a href="index.html">L1</a>
					<a href="index.html">L2</a>
					<a href="index.html">L3</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" id="dropdown-3" class="dropbtn" onClick="drop(this.id)">Humor</a>
				<div class="dropdown-content" id="dconhumor">
					<a href="index.html">L1</a>
					<a href="index.html">L2</a>
					<a href="index.html">L3</a>
				</div>

			</li>
			<li class="dropdown" style="display:<?=$visibilidad?>;" id="inicioDeSesion">
				<a href="javascript:void(0)" id="dropdown-5" class="dropbtna" onClick="drop(this.id)">
					Perfil: <strong> <?=$_SESSION['username'];?> </strong>
					<img src='images/<?=$usuario?>.jpg' border='3' height='30' width='30' onerror="this.src='images/default.jpg';"/>
				</a>
				<div class="dropdown-content" id="subirImagen">
					<h5>Subir Imagen</h5>
		 			<form action="subir.php" method="POST" enctype="multipart/form-data" name="subir" id="subir"> 
						<input type="file" name="imagen" id="imagen" style="box-shadow:none;box-radius:none; border:0; margin:0; padding:0; width: 130px;" required/>
						<br>
						<br>
						<input type="submit" name="subir" value="Subir"/>
		  			</form>
		  			<br>
				</div> <!-- /Subir Imagen-->
				
			</li>
			<li class="dropdown" id="inicioDeSesion" style="display:<?=$sesion?>;">
				<a href="javascript:void(0)" id="dropdown-4" class="dropbtna" onClick="drop(this.id)">Iniciar Sesion</a>
				<div class="dropdown-content" id="iniciarSesion">
					<div id="InicioSesion">
					<form action="checklogin.php" method="post" >
						<label>Nombre de Usuario:</label><br>
						<input name="username" type="text" id="username" required>
						<br><br>
				 
						<label>Password:</label><br>
						<input name="password" type="password" id="password" required>
						<br><br>
				 
						<input type="submit" name="Entrar" value="Ingresar">
					</form>
					<br>
					<br>
					<p>Â¿No eres usuario?</p>
					<div id="registro">
						<button type="submit" id="registro" name="registro" onclick="abrirRegistro()">Registrarse</button>
					</div> <!-- /Registro-->
					<br>

					</div> <!-- /Usuarios Registrados-->
				</div> <!-- /Iniciar Sesion-->
			</li>
			<li id="cerradoDeSesion" style="display:<?=$visibilidad?>;">
				<a href="cerrarsesion.php" onclick="sesionCerrada()";>Cerrar Sesion</a>
			</li>
					
		</ul>

		<div id="audio">
				<audio autoplay="autoplay" loop="loop" width="300" height="32" ><source src="media/Injustice_Song.mp3" type="audio/mp3"></source></audio> 
		</div> <!-- /Audio-->
	</div> <!-- /NavBar-->
</header>

	<div id="banner"><center><img src="media/bannerblog.jpg"/></center></div>

	<div id="contenido">
		<div id="nota">
        <article>
			<section>
			<h1 id="titulo">Desvelados nuevos detalles de Injustice 2</h1>
			<h5 id="fecha">09/10/2016</h5></section><br>
			<section id="cont">No han habido muchas oportunidades concedidas por NetherRealm Studios sobre su próximo título basado en la licencia DC Cómics, Injustice 2. El juego de lucha que acaparó gran atención el pasado E3 se ha mantenido escondido la mayor parte del tiempo, salvo por algún gameplay que daba cuenta de algún nuevo héroe. Desde el estudio, Brian Goodman ha concedido una serie de pequeñas informaciones de gran relevancia, en una entrevista a Game Reactor.</section><br><br>
			<h4 id="referencias">Referencias: http://www.somosxbox.com/desvelados-nuevos-detalles-injustice-2/90190</h4>
		</article>
		</div>
		<div id="bio">
			<div id="Efrain">
				<div class="foto"><img src="media/efrain.jpg"> </div>
				<b>EfraÃ­n</b>
					<ul>
						<li>
							Programador
						</li>
						<li>
							Estudiante
						</li>
						<li>
							Ingenierio
						</li>
					</ul>
					<p>
						Efrain es un estudiante de la Facultad de Matematicas de la UADY
						Se encuentra en los ultimos semestres de la carrera de Ing en Computacion
						Esta Cursando la materia de Herramientas de HTML
						Y Actualmente esta realizando este proyecto junto con Mario para lograr una
						puntuacion en la materia lo mas alto posible.
					</p>
				</div>
			<div id="Mario">
				<div class="foto"><img src="media/mario.jpg"></div>
				<b>Mario</b>
					<ul>
						<li>
							Programador
						</li>
						<li>
							Estudiante
						</li>
						<li>
							Amante de los Videojuegos
						</li>
					</ul>
					<p>
						Mario es un estudiante de la Facultad de Matematicas de la UADY
						Se encuentra en los ultimos semestres de la carrera de Ing de Software
						Esta Cursando la materia de Herramientas de HTML
						Y Actualmente esta realizando este proyecto junto con Mario para lograr una
						puntuacion en la materia lo mas alto posible.
					</p>
				</div>
		</div>
	</div>	

	<footer>&copy Efraín Cárdenas, Mario López. All rigths reserved. Todas las marcas comerciales ™ son de sus respectivos dueños.</footer>

</body>
</html>