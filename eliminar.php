<?php
  include("conexion.php"); 
   
  $id = $_GET['id'];

   //Eliminar registro
   $eliminar = "DELETE FROM estudiantes WHERE curp ='$id'";

   // DELETE FROM `estudiantes` WHERE `estudiantes`.`curp` = 'OOAZ900824MTSRLL08'

   $resultado = mysqli_query($conexion, $eliminar);

   if($resultado){
    echo "<script>alert('El registro se eliminó ');window.history.go(-1);</script>";
    }else{
    echo "<script>alert('El registro no se pudo eliminar');window.history.go(-1);</script>";
    }

   ?>