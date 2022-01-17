<?php
 
        
       //echo "Has cerrado la sesion";
        session_destroy('username');
        session_destroy('password');
        session_destroy('salario');
        session_destroy('nombre_usr');
        session_destroy('Correo');
        session_destroy('tlf');
        session_destroy('error');
       header("Location:http://localhost/Ingreso_Usuario.html");
       
 
 
   
?>