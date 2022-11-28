<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Acceso usuarios</title>
</head>
<body>
    <!--Barra de navegación-->
    <div class="topnav">
        <a href="index.php">Principal</a>
        <a href="servicios.php">Servicios</a>
        <a href="inscripciones.php">Inscripciones</a>
        <a href="contacto.php">Contacto</a>
        <a class="active" href="login.php">Acceso usuarios</a>
      </div>

    <!--action="validacion.php" method="post"-->
      <form action="validacion.php" method="post" id="your_form_id">
        <div class="container">
          <h1>Iniciasr sesión</h1>
          <p>Ingrese sus datos para iniciar sesión.</p>
          <hr>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Ingrese email" name="email" id="email" required>
      
          <label for="psw"><b>Contraseña</b></label>
          <input type="password" placeholder="Ingrese contraseña" name="psw" id="psw" required>
      
          <hr>
      
          <button type="submit" id="iniciar" class="iniciarbtn" value="Send" onclick="llamarPHP()">Iniciar sesión</button>
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
      
          <!--llama al archivo JS de la función-->
          <script src="js/login.js"> </script>

</body>
</html>