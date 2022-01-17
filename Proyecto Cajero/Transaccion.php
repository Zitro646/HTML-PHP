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


        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
            

        //Creamos la conexion
         if($sql = mysqli_query($conn,"Select NCUENTA,Salario FROM Clientes WHERE NCUENTA='$NCuenta' AND PIN='$PIN'")){
           
            $row = mysqli_num_rows($sql);  
            if($row = 1 ){

                    ?> 
                    <html>
                        <head> 
                            <meta http-equiv="content-type" content="text/html; charset=UTF-8">   
                            <link rel="stylesheet" type="text/css" href="general.css">

                        </head>    
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
                            <?php
                                if($_SESSION['error']==1){
                                    ?>
                                    <div id="nng"><div id="ing">
                                        <p>Cliente no encontrado</p>
                                    </div></div>
                                    <?php
                                    $_SESSION['error']=0;
                                }
                                if($_SESSION['error']==2){
                                    ?>
                                    <div id="nng"><div id="ing">
                                        <p>Transaccion realizada con exito</p>
                                    </div></div>
                                    <?php
                                    $_SESSION['error']=0;
                                }
                                if($_SESSION['error']==3){
                                    ?>
                                    <div id="nng"><div id="ing">
                                        <p>Cantidad de dinero no suficiente en fondos</p>
                                    </div></div>
                                    <?php
                                    $_SESSION['error']=0;
                                }
                            ?>
                            <div id="nng">
                                <div id="ing">
                                    <form name="ingreso" action="Realizar_transferencia.php" method="get" >
                                            <p>Numero de Cuenta a la que realizar transaccion</p>
                                            <input type="text" name="ID" placeholder="Ingresar al ID..." >    
                                            <p>Cantidad a Transferir</p>
                                            <input type="text" name="Dinero" placeholder="Cantidad a transferir..." >
                                            <p> </p>
                                            <div id="xng">
                                             <br><input type="submit" value="Ingresar"><br>
                                            </div>
                                    </form> 
                                </div>                                  
                            </div>
                        </body>
                    </html>
                <?php
            }else {
             $conn->close();
                header("Location: http://localhost/Cajero_Intro.html");    
            }
             
             
         }else{
             echo $conn->connect_error;
         }
       
    


?>
