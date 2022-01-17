<!DOCTYPE html>
<?php
        session_start();
        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $NCuenta;
        $PIN;
        $NCuenta = $_SESSION['username'];
        $PIN = $_SESSION['password'];
        $Salario= $_SESSION['salario'];

        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
            

        //Creamos la conexion
         if($sql = mysqli_query($conn,"Select NCUENTA,Salario FROM Clientes WHERE NCUENTA='$NCuenta' AND PIN='$PIN'")){
             
             
        $row = mysqli_num_rows($sql);  
        //Mandamos buscar la cuenta
            if($row = 1 ){
                    ?> 
                     <html>
                        <head> 
                            <meta http-equiv="content-type" content="text/html; charset=UTF-8">   
                            <link rel="stylesheet" type="text/css" href="general.css">
                        </head>   
                        <title>Historial de Transacciones</title>    
                        <body>
                            <nav>
                                 <ul>
                                    <li><a href="Cajero_Intro.php">Volver al Menu</a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0)" class="dropbtn" id='user'>   Usuario</a>
                                            <div class="dropdown-content">
                                              <p>
                                                Esta cuenta es de <?php 
                                                $nom= $_SESSION['nombre_usr'];
                                                echo $nom   ?><br>
                                                Correo: <?php 
                                                $cor= $_SESSION['Correo'];
                                                echo $cor   ?><br>
                                                Telf: <?php 
                                                $telf= $_SESSION['tlf'];
                                                echo $telf   ?>
                                            </p>
                                                <a href="Cerrar_Sesion.php">Cerrar sesion</a>
                                                <a href="Cambiar_Datos_Usuario.php">Ajustes</a>
                                            </div>
                                    </li>
                                 </ul>
                            </nav>
                            <div id="nng">
                                <div id="ing">
                                    <?php
                                                            
                                    $result = mysqli_query($conn,"SELECT * FROM transacciones WHERE num_cuenta_envia = '$NCuenta' OR num_cuenta_recibe = '$NCuenta' ORDER BY fecha_transaccion ASC");
                                    $row = mysqli_num_rows($result); 
                                    if($row >= 1){
                                       echo "<table border = '1'> \n"; 
                                        echo "<tr>
                                            <td><p>Envia</p></td>
                                            <td><p>Recibe</p></td>
                                            <td><p>Cantidad</p></td>
                                            <td><p>Fecha</p></td>
                                        </tr> \n"; 
                                        while ($row = mysqli_fetch_row($result)){ 
                                           echo "<tr>
                                                   <td><p>$row[1]</p></td>
                                                   <td><p>$row[2]</p></td>
                                                   <td><p>$row[3]</p></td>
                                                   <td><p>$row[4]</p></td>
                                               </tr> \n"; 
                                        } 
                                        echo "</table> \n"; 
                                    }else{
                                        echo "<p>Esta cuenta no ha echo ninguna transferencia aun </p>";
                                    }
                                     
                                    ?> 
                                </div>
                            </div>
                        </body>    
                    </html>
                <?php
            }else {

             $conn->close();
                echo "Contraseña no correcta";
                header("Location: http://localhost/Cajero_Intro.html");
            }
             
         }else{
             echo $conn->connect_error;
         }
    
?>
