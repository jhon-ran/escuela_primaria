//Función para validar extensión de número de telefono
    
    function validarTel() {
      var tel = document.getElementById("phone").value;
      var maxlength = 10;
      
         if(tel.length != maxlength)
            {  	
                document.getElementById("demo").innerHTML = "Teléfono debe ser igual a 10 números";
                return true;  	
            }
         else
            {  	
                document.getElementById("phone").disabled = true;	
            }  

    }
