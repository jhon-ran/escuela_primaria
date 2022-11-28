<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Area administrativa</title>
</head>
<body>

    <!--Barra de navegación para área administrativa-->
    <div class="topnav">
        <a class="active" href="area-admin.php">Area administrativa</a>
        <a href="consulta.php">Consultar inscripciones</a>
        <a href="index.php">Cerrar sesión</a>
      </div>

      <h2 class="center">Bienvenid@s al área administrativa</h2>

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