<?php
        session_start();
        session_destroy('username');
        session_destroy('password');
        session_destroy('salario');
        session_destroy('nombre_usr');
        session_destroy('Correo');
        session_destroy('tlf');


        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $NCuenta;
        $PIN;
        $NCuentaAdmin = $_GET['ID'];
        $ContrAdmin = $_GET['PIN'];
            
        
        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Prueba 1";

        $sql = mysqli_query($conn,"Select * FROM Admin WHERE NCUENTA='$NCuentaAdmin' AND PIN='$ContrAdmin'");

        $row=0; 
                	
        foreach($sql as $result){ 
                $_SESSION['username'] = $result['NCUENTA'];
                $_SESSION['password'] = $result['PIN'];
                $_SESSION['nombre'] = $result['NOMBRE'];
                $_SESSION['error'] = 0;
                $row=1;
        }
                
         if($row==0){
                    header("Location: http://localhost/Ingreso_Admin.html");
        }elseif($row==1){
             header("Location: http://localhost/Intro_Admin.php");
         }

        $conn->close();            

?>