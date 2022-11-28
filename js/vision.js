
        //selector para sección misión
        document.getElementById("imgMision").onmouseover = function() {addMision()};
        document.getElementById("imgMision").onmouseout = function() {misionOut()};

        //Función para que aparezca texto de misión
        function addMision (){
          document.getElementById("mision").innerHTML="Somos un centro educativo incluyente comprometido con el desarrollo integral de nuestros estudiantes, proporcionando un sistema de <b> educación de calidad</b> al mismo tiempo que brindando los espacios para su <b> disfrute armónico</b>.";
        }
        //Función para que desaparezca texto de misión
        function misionOut() {
          document.getElementById("mision").innerHTML="";
        }

        //selector para sección visión
        document.getElementById("imgVision").onmouseover = function() {addVision()};
        document.getElementById("imgVision").onmouseout = function() {visionOut()};

         //Función para que aparezca texto de visión
        function addVision (){
          document.getElementById("vision").innerHTML="Ser un centro educativo <b> innovador </b> e <b> incluyente</b> que permita el desarrollo integral y armónico de nuestros estudiantes. Queremos contribuir a moldear a los ciudadanos del futuro que sean críticos y reflexivos con un alto grado de compromiso social.";
        }

        //Función para que desaparezca texto de visión
        function visionOut() {
          document.getElementById("vision").innerHTML="";
        }

       //selector para sección valores
        document.getElementById("imgValores").onmouseover = function() {addValores()};
        document.getElementById("imgValores").onmouseout = function() {valoresOut()};

      //Función para que aparezca texto de valores
        function addValores (){
          document.getElementById("valores").innerHTML="Nuestros valores son la <b> honestidad</b>, la <b> excelencia </b>y el <b> pensamiento crítico</b>.";
        }

        //Función para que desaparezca texto de valores
        function valoresOut() {
          document.getElementById("valores").innerHTML="";
        }