/*	javascript de la pagina	*/
window.onload = function() {
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
		for(i=0;i<arr.length;i++){
			out += '<article class="nota"><a href="#" class="titulo-nota"><h3>' + arr[i].Titulo + '</h3></a><br>';
			out += '<div class="fecha-nota">' + arr[i].Fecha + '</div><br>';
			var nota = arr[i].Nota.substring(0,50);
			out += '<div class="contenido-nota">' + nota + '...</div></article><br><br>';
		}
		document.getElementById("noticias").innerHTML = out;
	}
}

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