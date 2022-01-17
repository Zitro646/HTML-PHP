<?php
        session_start();
    
        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $NCuenta;
        $PIN;
        $NCuenta = $_GET['ID'];
        $PIN = $_GET['PIN'];
            
        
        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Prueba 1";

        $sql = mysqli_query($conn,"Select * FROM Clientes WHERE NCUENTA='$NCuenta' AND PIN='$PIN'");

        $row=0; 
                
        foreach($sql as $result){ 
                $_SESSION['username'] = $result['NCUENTA'];
                $_SESSION['password'] = $result['PIN'];
                $_SESSION['salario'] = $result['SALARIO'];
                $_SESSION['nombre_usr'] = $result['NOMBRE'];
                $_SESSION['Correo'] = $result['Correo'];
                $_SESSION['tlf'] = $result['TELEFONO'];
                $_SESSION['error'] = 0 ;
                $row=1;
                header("Location: http://localhost/Cajero_Intro.php");
        }
                
         if($row==0){
                    header("Location: http://localhost/Ingreso_Usuario.html");
         }
             
        $conn->close();            
       
        

            
            
    
            
            

?>       
     
      
