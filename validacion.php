<?php
      $usuario = 'resp_escolar';
      $contrasena = 'unadm_responsable';


      $user_email=$_POST['email'];
      $user_psw=$_POST['psw'];

      if ($user_email == $usuario && $contrasena == $user_psw){
        header('Location:area-admin.php');
      }else{
        echo '<h2 class="center">Error de autentificación</h2>';
        echo '<br>';
        echo '<h3> Vuelve a intentarlo <a href="login.php">por aquí</a></h3>';
      }
      ?>