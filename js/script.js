/**
 * @author Mario
 */
//window.onload = function() {

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

	function RegresarPagina()
    {

    	self.close();
		window.close()
		window.opener.document.location.reload()
    }
	
	function cambiarVisibilidad() {
       var div1 = document.getElementById('usuariosRegistrados');
       var div2 = document.getElementById('imagenPerfil');
       if(div1.style.display == 'block'){
           div1.style.display = 'none';
           div2.style.display = 'block';
       }else{
          div1.style.display = 'block';
          div2.style.display = 'none';
         }
   }
   


//};