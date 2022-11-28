<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contacto</title>
</head>
<body>
    <!--Barra de navegación-->
    <div class="topnav">
        <a href="index.php">Principal</a>
        <a href="servicios.php">Servicios</a>
        <a href="inscripciones.php">Inscripciones</a>
        <a class="active" href="contacto.php">Contacto</a>
        <a href="login.php">Acceso usuarios</a>
      </div>

        <!--Imagen ubicación-->
    <img src="https://xiaomiui.net/wp-content/uploads/2022/05/Best-Fake-GPS-Apps-1.jpg" alt="Ubicación" class="center">


    <h2 class="center">Información de contacto</h2>
    <ul>
        <li>Dirección de la escuela: Calle 25 x 30 y 35, lote 12. Colonia Fundadores</li>
        <li>Teléfono de contacto: 1951-1321-221</li>
        <li>Correo electrónico: primariajp@gmail.com</li>
        <li>Horario de atención: lunes a viernes de 8am-12pm</li>
    </ul>

        <!--Footer-->
        <footer>
        <?php 
          echo '<p>Estudiante: Jhonnatan Rangel Murueta</p>';
          echo '<p>Matrícula: ES1821015250 </p>';
          echo '<p>Materia: Programación Web I</p>';
          echo  date("Y/m/d H:i:s");
        ?>
      </footer>


</body>
</html>