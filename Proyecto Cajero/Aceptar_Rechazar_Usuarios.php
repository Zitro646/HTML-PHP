<?php
        //Inicio la sesion
        session_start();

        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $Borrar = $_POST['rechazado'];
        $Aceptar = $_POST['aceptado'];

        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
       if($Borrar != ""){
           $sql = mysqli_query($conn,"DELETE FROM cuentas_por_aprobar WHERE NCUENTA ='$Borrar'"); 
       }
        if($Aceptar != ""){
           $sql = mysqli_query($conn,"Select * FROM cuentas_por_aprobar WHERE NCUENTA ='$Aceptar'");     
           foreach($sql as $result){ 
                $NCuenta = $result['NCUENTA'];
                $PIN = $result['PIN'];
                $Nombre = $result['SALARIO'];
                $Telefono = $result['NOMBRE'];
                $Correo = $result['Correo'];
                
               
        }
        $sql = mysqli_query($conn,"DELETE FROM cuentas_por_aprobar WHERE NCUENTA ='$Aceptar'");    
        $sql = mysqli_query($conn,"INSERT INTO clientes VALUES ('$NCuenta', '$PIN', '$Nombre', '$Telefono', '$Correo', '0');");   
         
       }    
         header("Location: http://localhost/Aceptar_Rechazar_Usuarios.php");        

$conn->close();

?>