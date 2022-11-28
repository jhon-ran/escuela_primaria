//Función que llama la validación de PHP
function validarInputs() {
    //Se selecciona el formulario de inscripcion
    var form = document.getElementById('inscripcion');
    //Se seleciona el valor del input tel
    var tel = document.getElementById("phone").value;
    //Minimo de num necesarios para tel
    var minlength = 10;
    //Expresion regular para validar email
    var mailformat = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Seleccionar el valore del input email
    var email = document.getElementById("email").value;

    //Validacion de telefono
    if (tel.length != minlength) {
        window.alert("Teléfono debe ser igual a 10 números");  
        form.addEventListener('submit', (event) => {
            event.preventDefault();
          });
      } else if (!mailformat.test(email)) {
        window.alert("El formato de correo no es correcto");  
        form.addEventListener('submit', (event) => {
            event.preventDefault();
          });
      } else {
        document.getElementById('inscripcion').submit();
      }
}




