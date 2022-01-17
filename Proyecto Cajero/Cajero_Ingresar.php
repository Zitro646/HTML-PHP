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
                    <title>Ingreso de cuenta</title>    
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
                                    <p>Se ha realizado el ingreso</p>
                                </div></div>
                                <?php
                                $_SESSION['error']=0;
                            }
                            if($_SESSION['error']==2){
                                ?>
                                <div id="nng"><div id="ing">
                                    <p>Cantidad de dinero demasiado alta</p>
                                </div></div>
                                <?php
                                $_SESSION['error']=0;
                            }
                        ?>
                        <div id="nng">
                            <div id="ing">
                                <form action="Ingreso_Dinero.php" method="Get" >  
                                    <p>Cantidad de Dinero en la Cuenta </p>
                                    <br><p><?php 
                                            $Salario= $_SESSION['salario'];
                                            echo $Salario   ?></p><br>
                                    <p>Cantidad de dinero a ingresar:</p>
                                    <input type="text" id="cantidad" name="cantidad" placeholder="Ingresa..." onInput="Comprobar()" >     
                                    <div id="xng">
                                        <br><input type="submit" id=Ingresar value="Ingresar" ><br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </body> 

                     <script>    
                        function Comprobar(){
                             cant=document.getElementById("cantidad").value;
                             if ( cant > 10000){
                                 document.getElementById("Ingresar").style.display = "none";
                             }else{
                                document.getElementById("Ingresar").style.display = "initial";                            
                             }
                        }
                    </script>
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