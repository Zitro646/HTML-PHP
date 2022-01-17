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
        $Ingresar = $_GET['cantidad'];
        $total = $SALARIO + $Ingresar ; 


        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        if(10000 > $Ingresar){
            
            //Mandamos a actualizar la cuenta
            $sql = mysqli_query($conn,"UPDATE CLIENTES SET SALARIO = '$total'  WHERE NCUENTA = '$NCuenta'");        
            $_SESSION['salario']=$total;
            $_SESSION['error']=1;
            header("Location: http://localhost/Cajero_Ingresar.php");
        }else {
            $_SESSION['error']=2;
            header("Location: http://localhost/Cajero_Ingresar.php");
        }
        
        
        

$conn->close();

?>