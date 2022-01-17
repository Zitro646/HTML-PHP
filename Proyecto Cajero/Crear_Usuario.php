<!DOCTYPE html>
<?php
        session_start();
        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $NCuenta;
        $PIN;
        $NCuenta = $_POST['USUARIO'];
        $Contra1 = $_POST['contra1'];
        $Contra2 = $_POST['contra2'];
        $Nombre = $_POST['NOMBRE'];
        $Telefo = $_POST['TELEFONO'];
        $Correo = $_POST['CORREO'];


        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = mysqli_query($conn,"Select NCUENTA FROM Clientes WHERE NCUENTA='$NCuenta'");    
        $sql2 = mysqli_query($conn,"Select NCUENTA FROM cuentas_por_aprobar WHERE NCUENTA='$NCuenta'");    
        $row = mysqli_num_rows($sql); 
        $row2 = mysqli_num_rows($sql2); 

        if($row == 1){
            $_SESSION['error']=1;
        }else if($row2 == 1){
            $_SESSION['error']=2;
        }else{
             if($Contra1 == $Contra2){
                 $sql = mysqli_query($conn,"INSERT INTO cuentas_por_aprobar (NCUENTA, PIN) VALUES ('$NCuenta', '$Contra1')");
                 $_SESSION['error']=4;
                 if( $Nombre != "" ){
                        $sql = mysqli_query($conn,"UPDATE cuentas_por_aprobar SET Nombre = '$Nombre' WHERE NCUENTA = '$NCuenta'");
                }
                if( $Correo != "" ){
                    $sql = mysqli_query($conn,"UPDATE cuentas_por_aprobar SET Correo = '$Correo' WHERE NCUENTA = '$NCuenta'");
                }
                if( $Telefono != "" ){
                    $sql = mysqli_query($conn,"UPDATE cuentas_por_aprobar SET TELEFONO = '$Telefono' WHERE NCUENTA = '$NCuenta'");
                }
                  
             }else{
                  $_SESSION['error']=3;
             }
              
        }
        header("Location: http://localhost/Nueva_Cuenta.php");
?>