<?php
        //Inicio la sesion
        session_start();

        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $NCuenta = $_SESSION['username'];
        $PIN = $_SESSION['password'];
        $SALARIO = $_SESSION['salario'] ;
        $Retirar = $_GET['cantidad'];
        $total = $SALARIO - $Retirar ; 


        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //Mandamos a actualizar la cuenta
        if ($SALARIO >= $Retirar){ 
            $sql = mysqli_query($conn,"UPDATE CLIENTES SET SALARIO = $total  WHERE NCUENTA = $NCuenta");        
            $_SESSION['salario']=$total;
            $_SESSION['error']=2; 
            header("Location: http://localhost/Cajero_Retirar.php");  
        }else {
            $_SESSION['error']=1;
            header("Location: http://localhost/Cajero_Retirar.php");
            
        }


        

$conn->close();

?>