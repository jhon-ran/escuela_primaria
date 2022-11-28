<?php
  include("conexion.php"); 
  $estudiantes = "SELECT * FROM estudiantes";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connsultar inscripciones</title>
</head>
<body>

    <!--Barra de navegación para área administrativa-->
    <div class="topnav">
        <a href="area-admin.php">Area administrativa</a>
        <a class="active" href="consulta.php">Consultar inscripciones</a>
        <a href="index.php">Cerrar sesión</a>
      </div>

      <h2 class="center">Consulta de inscripciones</h2>
      <!--Tabla de consultas-->
      <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>CURP</th>
            <th>Fecha de nacimiento</th>
            <th>Estado</th>
            <th>Grado</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Status</th>
            <th>Fecha solicitud</th>
            <th>Acciones</th>
        </tr>
        <?php $resultado = mysqli_query($conexion, $estudiantes); 
        
        while($row= mysqli_fetch_assoc($resultado)) {?>
        <tr>
            <td> <?php echo $row["nombre"];?> </td>
            <td> <?php echo $row["apellidoPater"];?> </td>
            <td> <?php echo $row["apellidoMater"];?> </td>
            <td> <?php echo $row["curp"];?></td>
            <td> <?php echo $row["nacimiento"];?></td>
            <td> <?php echo $row["estado"];?></td>
            <td> <?php echo $row["grado"];?></td>
            <td> <?php echo $row["tel"];?></td>
            <td> <?php echo $row["email"];?></td>
            <td> <?php echo $row["status"];?></td>
            <td> <?php echo $row["fechaSolicitud"];?></td>
            <td> <a href="actualizar.php?id=<?php echo $row['curp'];?>" > Editar </a> | 
            <a href="eliminar.php?id=<?php echo $row['curp'];?>" > Eliminar </a></td>
        </tr>
        <?php }?>
      </table>


      <form action="validar-inscripcion.php" method="post">
        <div class="container">
          <h1>Dar de alta alumnos</h1>
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
          <label for="phone"><b>Número de teléfono</b></label>
          <input type="tel" placeholder="Ingrese número de teléfono" name="phone" id="phone" required>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Ingrese email" name="email" id="email" required>
          <hr>
          <input type="submit" class="sendbtn" value="Enviar">
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

</body>
</html>