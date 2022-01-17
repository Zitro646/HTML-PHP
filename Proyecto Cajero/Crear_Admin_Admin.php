<?php
        //Inicio la sesion
        session_start();

        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $Nombre = $_POST['nombre'];
        $NCuenta = $_POST['cuenta'];
        $Contrasena1 = $_POST['contra1'];
        $Contrasena2 = $_POST['contra2'];
        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
       if($NCuenta != ""){
           
           if($Contrasena1 == $Contrasena2 ){
               
               if($Nombre==""){
                   $Nombre="-";
               }
               $sql = mysqli_query($conn,"INSERT INTO admin (NCUENTA,PIN,NOMBRE) VALUES ('$NCuenta', '$Contrasena1', '$Nombre');"); 
               $_SESSION['error']=3;
           }else{
               $_SESSION['error']=2;
           }
           
       }else{
            $_SESSION['error']=1;
       }

       header("Location: http://localhost/Crear_Admin.php"); 

?>    