<?php
    //Llamamos el archivo de conexión ala BD
    include("conexion.php"); 

    //variables de input
    $name=$_POST['name'];
    $lastName=$_POST['lastname'];
    $sLastName=$_POST['slastname'];
    $curp=$_POST['curp'];
    $date=$_POST['date'];
    $estado=$_POST['estado'];
    $grado=$_POST['grado'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $fechaSolicitud=$_POST['fechaSolicitud'];


    //Validación de grado, curp y edad
    if ($grado > 6){
        echo 'Grado no puede ser mayor a 6';
        echo '<br>';
        echo '<h3> Ingresa los datos correrctos <a href="inscripciones.php">por aquí</a></h3>';
    }else{
        if (strlen($curp)> 18){
            echo 'La CURP no puede ser mayor de 16 caracteres';
            echo '<br>';
            echo '<h3> Ingresa los datos correrctos <a href="inscripciones.php">por aquí</a></h3>';
        }else{
            //Calcula edad al día de hoy
            $age=date_diff(date_create($date),date_create('today'))->y;
            if($age<6){
                echo 'El alumno debe de tener más de 6 años';
                echo '<br>';
                echo '<h3> Ingresa los datos correrctos <a href="inscripciones.php">por aquí</a></h3>';
            }
        }
    }

    //Manejo de excepción si el nombre está vacío
    try {
        
        if (empty($name))
        {
          throw new Exception("Los nombres solo pueden contener letras");
        }
       
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }

    //curp de alumno inscrito
    $curp_inscrito = "GARA170826MTLRYRE6";

    //verificar alumno inscrito
    if($curp == $curp_inscrito){
        echo 'El alumno con esa CURP ya ha sido inscrito';
        echo '<br>';
        echo '<h3> Ingresa los datos correrctos <a href="inscripciones.php">por aquí</a></h3>';
    }

    //Insertar en BD
    $insertar = "INSERT INTO estudiantes(nombre, apellidoPater, apellidoMater, curp, nacimiento, estado, grado, tel, email, fechaSolicitud) VALUES('$name', '$lastName', '$sLastName', '$curp', '$date', '$estado', '$grado', '$phone', '$email', '$fechaSolicitud') "; 
    $resultado = mysqli_query($conexion, $insertar);
    if($resultado){
        echo "<script>alert('El registro se envió exitosamente');window.location='/escuela6/consulta.php';</script>";
    }else{
        echo "<script>alert('El registro se pudo enviar');window.history.go(-1);</script>";
    }


 

?>