<?php
        //Inicio la sesion
        session_start();

        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $NCuenta = $_SESSION['username'];
        $PIN = $_SESSION['password'];
        $Nombre = $_POST['nom'];
        $Correo = $_POST['corr'];
        $Telefono = $_POST['tlf'];

        
         // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        

        //Establecemos las posibles actualizaciones

        if( $Nombre != "" ){
            $sql = mysqli_query($conn,"UPDATE CLIENTES SET Nombre = '$Nombre' WHERE NCUENTA = '$NCuenta'");
            $_SESSION['error']=1;
            $_SESSION['nombre_usr']=$Nombre;
        }

        if( $Correo != "" ){
            $sql = mysqli_query($conn,"UPDATE CLIENTES SET Correo = '$Correo' WHERE NCUENTA = '$NCuenta'");
            $_SESSION['error']=1;
            $_SESSION['Correo']=$Correo;
        }
        if( $Telefono != "" ){
            $sql = mysqli_query($conn,"UPDATE CLIENTES SET TELEFONO = '$Telefono' WHERE NCUENTA = '$NCuenta'");
            $_SESSION['error']=1;
            $_SESSION['tlf']=$Telefono;
        }

       
        header("Location: http://localhost/Cambiar_Datos_Usuario.php");
   
$conn->close();

?>