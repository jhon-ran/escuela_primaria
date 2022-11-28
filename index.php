<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Escuela Jean Piaget</title>
</head>
<body>
    <!--Barra de navegación-->
    <div class="topnav">
        <a class="active" href="index.php">Principal</a>
        <a href="servicios.php">Servicios</a>
        <a href="inscripciones.php">Inscripciones</a>
        <a href="contacto.php">Contacto</a>
        <a href="login.php">Acceso usuarios</a>
      </div>

      <h1 class="center">Bienvenid@s a la escuela primaria Jean Piaget</h1>

      <!--Imagen central-->
      <img src="https://images.pexels.com/photos/3401403/pexels-photo-3401403.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Niños usando computadora" class="center">


     

  
      <div class="center">
        <div class="column">
          <h2>Misión</h2>
          <img src="https://images.pexels.com/photos/1815257/pexels-photo-1815257.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Snow" id="imgMision" style="width:33%">
          <p id="mision"></p>
        </div>
        <div class="column">
          <h2>Visión</h2>
          <img src="https://images.pexels.com/photos/939702/pexels-photo-939702.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Forest" id="imgVision" style="width:33%">
          <p id="vision"></p>
        </div>
        <div class="column">
          <h2>Valores</h2>
          <img src="https://images.pexels.com/photos/764681/pexels-photo-764681.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Mountains" id="imgValores" style="width:33%">
          <p id="valores"></p>
        </div>
      </div>

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
      <script src="js/vision.js"> </script>

</body>
</html>