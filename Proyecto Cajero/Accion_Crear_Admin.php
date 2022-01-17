<?php
        //Inicio la sesion
        session_start();

        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $NCuenta = $_SESSION['username'];
        $PIN = $_SESSION['password'];
        $Nombre = $_POST['nombre'];
        $ContraNueva1 = $_POST['contra1'];
        $ContraNueva2 = $_POST['contra2'];
        $ContraVieja  = $_POST['contra3']; 


        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        if( $PIN == $ContraVieja ){
            
            if($ContraNueva1 == $ContraNueva2){
                //Mandamos a actualizar la cuenta
                $sql = mysqli_query($conn,"UPDATE admin SET PIN = '$ContraNueva1'  WHERE NCUENTA = '$NCuenta'");        
                $_SESSION['password']=$ContraNueva1;
                $_SESSION['error']=2;  
            }else{
                $_SESSION['error']=3;
            }
            
            header("Location: http://localhost/Cambiar_Datos_Admin.php");
        }else {
            $_SESSION['error']=4;
            header("Location: http://localhost/Cambiar_Datos_Admin.php");
        }
        
        
        if( $Nombre != ""){
            
            $sql = mysqli_query($conn,"UPDATE admin SET Nombre = '$Nombre'  WHERE NCUENTA = '$NCuenta'");     
            $_SESSION['error']=4;
            header("Location: http://localhost/Cambiar_Datos_Admin.php");
        }

$conn->close();

?>