/**
 * @author Mario
 */
	function check(input) {
			if	(input.value !== document.getElementById('email').value) {
					input.setCustomValidity('Los dos correos deben coincidir.');
					event.preventDefault(); // para FF standard
         			event.returnValue=false; // Para IE
			}
			else {
					//	Entrada	válida,	se	resetea	el	mensaje	de	error
					input.setCustomValidity('');
			}
	}
	function abrirRegistro() { 
		open('registroDeUsuarios.html','','top=100,left=300,width=350,height=480') ; 
} 

