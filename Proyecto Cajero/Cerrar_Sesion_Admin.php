<?php
 
  
        //echo "Has cerrado la sesion";
        session_destroy('username');
        session_destroy('password');
        session_destroy('nombre');
       header("Location:http://localhost/Ingreso_Admin.html");
       
 
 
   
?>