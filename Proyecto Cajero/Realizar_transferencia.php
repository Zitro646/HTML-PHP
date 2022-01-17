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
        $NCuentaVecina = $_GET['ID'];
        $Ingresar = $_GET['Dinero'];



        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = mysqli_query($conn,"Select NCUENTA,SALARIO FROM Clientes WHERE NCUENTA='$NCuentaVecina'");
        
        $row = mysqli_num_rows($sql); 

        if($row == 1){
            
            
             foreach($sql as $result){ 
                
                $salario_del_ingresado=$result['SALARIO'];
                
            }
            
            if( $Ingresar <= $SALARIO ){
                $salario_final_al_ingresado=$Ingresar+$salario_del_ingresado;
                $salario_final_del_que_transfiere=$SALARIO-$Ingresar;
                
                $sql = mysqli_query($conn,"UPDATE CLIENTES SET SALARIO = '$salario_final_al_ingresado'  WHERE NCUENTA = '$NCuentaVecina'");
                $sql = mysqli_query($conn,"UPDATE CLIENTES SET SALARIO = '$salario_final_del_que_transfiere'  WHERE NCUENTA = '$NCuenta'");
                
                $sql = mysqli_query($conn,"SELECT MAX(NTRANSACCION) FROM transacciones");
                $resultado = mysqli_fetch_assoc($sql);
                    
                $NTrans =$resultado['MAX(NTRANSACCION)'];
                $NTrans = $NTrans + 1 ;
                
                $sql = mysqli_query($conn,"INSERT INTO transacciones VALUES ('$NTrans','$NCuenta','$NCuentaVecina','$Ingresar',now())");

                $_SESSION['salario']=$salario_final_del_que_transfiere; 
                $_SESSION['error']=2;
            }else{
                $_SESSION['error']=3;  
            }
            
        }else{
            $_SESSION['error']=1;
        }
          
         header("Location: http://localhost/Transaccion.php");

$conn->close();

?>