<?php
  include("conexion.php"); 
   //variables de input
   $id=$_POST['curp'];
   $name=$_POST['name'];
   $lastName=$_POST['lastname'];
   $sLastName=$_POST['slastname'];
   $curp=$_POST['curp'];
   $date=$_POST['date'];
   $estado=$_POST['estado'];
   $grado=$_POST['grado'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $status=$_POST['status'];

    //Actualizar en BD
    $actualizar = "UPDATE estudiantes SET nombre='$name', apellidoPater='$lastName', apellidoMater='$sLastName', curp='$curp', nacimiento='$date', estado='$estado', grado='$grado', tel='$phone', email='$email', status='$status' WHERE curp='$id' "; 
    $resultado = mysqli_query($conexion, $actualizar);

    
    if($resultado){
        echo "<script>alert('El registro se actualizó correctamente');window.history.go(-1);</script>";
    }else{
        echo "<script>alert('El registro no se pudo actualizar correctamente');window.history.go(-1);</script>";
    }

  ?>