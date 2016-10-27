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