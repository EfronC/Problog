function drop(o) {
	up();
	var x = o.split('-')[1];
	switch(x) {
		case '1':
			document.getElementById("dconpost").classList.toggle("show");
			break;
		case '2':
			document.getElementById("dconnoticias").classList.toggle("show");
			break;
		case '3':
			document.getElementById("dconhumor").classList.toggle("show");
			break;
		case '4':
			document.getElementById("iniciarSesion").classList.toggle("show");
			break;
		case '5':
			document.getElementById("subirImagen").classList.toggle("show");
			break;
		default:
			alert(o);
	}
}

function up() {
	var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
}

//close dropdown
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtna')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
    }
  }
}


function sesionCerrada(){
	alert("Sesion Cerrada");
	window.location='post.php'			
}

/*window.onload = function() {
	var jsonhttp = new XMLHttpRequest(), url="";
	url = "xml/noticias.json";

	jsonhttp.onreadystatechange = function() {
		if (jsonhttp.readyState == 4 && jsonhttp.status == 200) {
			var jsonDoc = JSON.parse(jsonhttp.responseText);
			rellenar(jsonDoc);
		}
	};

	jsonhttp.open("GET",url,true);
	jsonhttp.send();

	function rellenar(arr) {
		var out = "";
		var i;
		//for(i=0;i<arr.length;i++){
			out += '<article class="nota"><a href="'+ arr[1].url +'" class="titulo-nota"><h3>' + arr[1].Titulo + '</h3></a><br>';
			out += '<div class="fecha-nota">' + arr[1].Fecha + '</div><br>';
			out += '<div class="contenido-nota">' + nota + '...</div></article><br><br>';
		//}
		document.getElementById("nota").innerHTML = out;
	}
}*/