<?php
  include("conexion.php"); 
  $id = $_GET["id"];
  $estudiantes = "SELECT * FROM estudiantes WHERE curp = '$id'";
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

      <h2 class="center">Modificar inscripciones</h2>
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
        </tr>
        <?php }?>
      </table>

      <form action="hacer-actualizar.php" method="post">
        <div class="container">
          
          <hr>
            
          <?php $resultado = mysqli_query($conexion, $estudiantes); 
          while($row= mysqli_fetch_assoc($resultado)) {?>

        <input type="hidden" name="id" value="<?php echo $row["curp"];?>">

          <label for="name"><b>Nombre del alumno</b></label>
          <input type="text" placeholder="Ingrese nombre" name="name" id="name" value="<?php echo $row["nombre"];?>" required>

          <label for="lastname"><b>Apellido paterno</b></label>
          <input type="text" placeholder="Ingrese apellido paterno" name="lastname" id="lastname" value="<?php echo $row["apellidoPater"];?>" required>

          <label for="slastname"><b>Apellido materno</b></label>
          <input type="text" placeholder="Ingrese apellido materno" name="slastname" id="slastname" value="<?php echo $row["apellidoMater"];?>" required>

          <label for="curp"><b>CURP</b></label>
          <input type="text" minlength="18" placeholder="Ingrese CURP de 18 digitos" name="curp" id="curp" value="<?php echo $row["curp"];?>" required>

          <label for="date"><b>Fecha de nacimiento</b></label>
          <input type="date" name="date" id="date" value="<?php echo $row["nacimiento"];?>" required>

          <label for="date"><b>Estado de la república</b></label>
          <input type="text" name="estado" id="estado" value="<?php echo $row["estado"];?>" required>
          
       <br />

          <label for="grado"><b>Grado al que desea inscribirse (entre 1 y 6):</b></label>
          <input class="estado" type="number" id="grado" name="grado" min="1" max="6" value="<?php echo $row["grado"];?>">
          </select><br />
          <label for="phone"><b>Número de teléfono</b></label>
          <input type="tel" placeholder="Ingrese número de teléfono" name="phone" id="phone" value ="<?php echo $row["tel"];?>" required>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Ingrese email" name="email" id="email" value="<?php echo $row["email"];?>" required>
          <label for="status"><b>Status</b></label>
          <input type="text" name="status" id="status" value="<?php echo $row["status"];?>" required>

          <?php }?>
          <hr>
          <input type="submit" class="sendbtn" value="Actualizar">
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