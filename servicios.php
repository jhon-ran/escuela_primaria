<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Servicios</title>
</head>
<body>
    <!--Barra de navegación-->
    <div class="topnav">
        <a href="index.php">Principal</a>
        <a class="active" href="servicios.php">Servicios</a>
        <a href="inscripciones.php">Inscripciones</a>
        <a href="contacto.php">Contacto</a>
        <a href="login.php">Acceso usuarios</a>
      </div>

      <h2 class="center">Conoce nuestros servicios</h2>

      <table>
        <tr>
            <th>Servicio</th>
            <th>Descripción</th>
            <th>Foto</th>
        </tr>
        <tr>
            <td>Primaria mixta</td>
            <td>Cualquier género es bienvenido, incluído el no binario</td>
            <td><img src="https://images.pexels.com/photos/5905482/pexels-photo-5905482.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Niños platicando" class="photo-table"></td>
        </tr>
        <tr>
            <td>Turno matutino</td>
            <td>De 8am a 12pm</td>
            <td><img src="https://images.pexels.com/photos/1537268/pexels-photo-1537268.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Reloj" class="photo-table"></td>
        </tr>
        <tr>
            <td>Lengua extranjera</td>
            <td>Inglés en todos los niveles</td>
            <td><img src="https://images.pexels.com/photos/5598288/pexels-photo-5598288.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Letrero en inglés" class="photo-table"></td>
        </tr>
        <tr>
            <td>Salones climatizados</td>
            <td>Todos nuestros salones son climatizados</td>
            <td><img src="https://images.pexels.com/photos/6585615/pexels-photo-6585615.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Cuarto con clima" class="photo-table"></td>
        </tr>
        <tr>
            <td>Asesoría psicológica</td>
            <td>Psicólogo de planta</td>
            <td><img src="https://images.pexels.com/photos/5699469/pexels-photo-5699469.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Psicólogo" class="photo-table"></td>
        </tr>
        <tr>
            <td>Enfermería</td>
            <td>Enfermera de planta</td>
            <td><img src="https://images.pexels.com/photos/6098047/pexels-photo-6098047.jpeg" alt="Enfermera" class="photo-table"></td>
        </tr>
        <tr>
            <td>Seguridad privada</td>
            <td>Cámaras de seguridad y agente de planta</td>
            <td><img src="https://images.pexels.com/photos/7714714/pexels-photo-7714714.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Vigilante" class="photo-table"></td>
        </tr>
      </table>

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