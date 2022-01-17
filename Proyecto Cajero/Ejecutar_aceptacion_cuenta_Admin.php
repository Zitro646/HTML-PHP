<?php
        //Inicio la sesion
        session_start();

        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $Borrar = $_GET['cuenta'];

        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        /*echo $SALARIO;
        echo $NCuenta;
        echo $PIN;
        echo $Retirar;*/
        //Mandamos a actualizar la cuenta
       
        $sql = mysqli_query($conn,"DELETE FROM CLIENTES WHERE NCUENTA ='$Borrar'");        

        header("Location: http://localhost/Borrar_Cuenta_Admin.php");
            

        

$conn->close();

?>