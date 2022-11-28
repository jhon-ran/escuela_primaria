<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscripciones</title>

    <!-- <script>
        function myFunction() {
          var x = document.getElementById("phone").value;
          document.getElementById("demo").innerHTML = "You wrote: " + x;
        }
      </script>
      -->

</head>
<body>
    <!--Barra de navegación-->
    <div class="topnav">
        <a href="index.php">Principal</a>
        <a href="servicios.php">Servicios</a>
        <a class="active" href="inscripciones.php">Inscripciones</a>
        <a href="contacto.php">Contacto</a>
        <a href="login.php">Acceso usuarios</a>
      </div>


      <form action="validar-inscripcion.php" method="post" id="inscripcion">
        <div class="container">
          <h1>Formulario de inscripción</h1>
          <p>Ingrese los campos requeridos.</p>
          <hr>
      
          <label for="name"><b>Nombre del alumno</b></label>
          <input type="text" placeholder="Ingrese nombre" name="name" id="name" required>

          <label for="lastname"><b>Apellido paterno</b></label>
          <input type="text" placeholder="Ingrese apellido paterno" name="lastname" id="lastname" required>

          <label for="slastname"><b>Apellido materno</b></label>
          <input type="text" placeholder="Ingrese apellido materno" name="slastname" id="slastname" required>

          <label for="curp"><b>CURP</b></label>
          <input type="text" minlength="18" placeholder="Ingrese CURP de 18 digitos" name="curp" id="curp" required>

          <label for="date"><b>Fecha de nacimiento</b></label>
          <input type="date" name="date" id="date" required>

          <select name="estado" class="estado">
            <option value="">-- Seleccione Estado de la República --</option>
            <option value="Aguascalientes">Aguascalientes</option> 
            <option value="Baja California">Baja California</option> 
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Coahuila">Coahuila</option> 
            <option value="Colima">Colima</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Durango">Durango</option>
            <option value="Guanajuato">Guanajuato</option> 
            <option value="Guerrero">Guerrero</option> 
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="México">México</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
          </select><br />

          <label for="grado"><b>Grado al que desea inscribirse (entre 1 y 6):</b></label>
          <input class="estado" type="number" id="grado" name="grado" min="1" max="6">
          </select><br />
          <label for="phone"><b id="phone1">Número de teléfono</b></label>
          <input type="tel" placeholder="Ingrese número de teléfono" name="phone" id="phone" required>

          <!--oninput="validarTel()" -->
          <p id="demo"></p>


          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Ingrese email" name="email" id="email" required>

          <input  type="hidden" type="date" name="fechaSolicitud" id="fechaSolicitud" >
          <hr>
          <input type="submit" class="sendbtn" value="Enviar" onclick="validarInputs()">
          <button type="submit" class="cancellbtn">Cancelar</button>
        </div>
      </form>

        <!--Footer-->
        <footer>
        <?php 
          echo '<p>Estudiante: Jhonnatan Rangel Murueta</p>';
          echo '<p>Matrícula: ES1821015250 </p>';
          echo '<p>Materia: Programación Web I</p>';
          echo  date("Y/m/d H:i:s");
        ?>
      </footer> 

      <!--llama al archivo JS de las funciones-->
      <script type="text/javascript" src="js/validar-tel.js"> </script>
      <script src="js/validar-campos.js"> </script>
      <script src="js/fecha-soli.js"> </script>
      
</body>
</html>