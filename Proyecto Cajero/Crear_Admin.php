<!DOCTYPE html>
<?php
        session_start();
        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $NCuenta;
        $PIN;
        $NCuentaAdmin = $_SESSION['username'];
        $ContraAdmin = $_SESSION['password'];

        // Establecemos la conexion
        $conn = new mysqli($servidor, $usuario, $password, $dbname);
        // Comprobamos la conexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
            

        //Mandamos buscar la cuenta
         $sql = mysqli_query($conn,"Select * FROM admin WHERE NCUENTA='$NCuentaAdmin' AND PIN='$ContraAdmin'"); 
    
         $row = mysqli_num_rows($sql);  
                        
         if($row == 1 ){
            ?> 
           <html>

                <head> 
                    <meta http-equiv="content-type" content="text/html; charset=UTF-8">   
                    <link rel="stylesheet" type="text/css" href="general.css">

                </head>    
                <body>
                    <nav>
                        <ul>
                            <li><a href="Intro_Admin.php">Volver</a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn" id='user'>   Administrador</a>
                                    <div class="dropdown-content">
                                      <p>
                                         Bienvenido <?php 
                                        $nom= $_SESSION['nombre'];
                                        echo $nom   ?><br>
                                    </p>
                                        <a href="Cerrar_Sesion.php">Cerrar sesion</a>
                                    </div>
                            </li>
                        </ul>    
                    </nav>
                <div id="nng">
                    <div id="ing">
                        <?php
                           
                            if($_SESSION['error']==1){
                                ?>
                                <p>Pongale un numero de cuenta</p>
                                <?php
                                $_SESSION['error']=0;
                            }
                           if($_SESSION['error']==2){
                                ?>
                                <p>Las contraseñas son distintas</p>
                                <?php
                                $_SESSION['error']=0;
                            }
                            if($_SESSION['error']==3){
                                ?>
                                <p>Admin creado con exito</p>
                                <?php
                                $_SESSION['error']=0;
                            }
                           ?>
                        <form action="Crear_Admin_Admin.php" method="post">
                              <p>Introduzca la cuenta a Crear</p>
                              <br><input type="text" name="cuenta" placeholder="Nuevo NCuenta..."><br>   
                              <br><input type="text" name="nombre" placeholder="Nuevo Nombre..."><br>   
                              <br><input type="password" id="contra1" name="contra1" onInput="Comprobar()" placeholder="Nueva Contraseña..."><button type="button"  onclick="Contraseña_1()">Mostrar Contraseña</button><br>
                              <br><input type="password" id="contra2" name="contra2" onInput="Comprobar()" placeholder="Seguro Contraseña..."><button type="button"  onclick="Contraseña_2()">Mostrar Contraseña</button><br>
                              <div id="xng">
                              <br><input type="submit" value="Crear Cuenta" ><br>
                              </div>   
                                <p> </p>
                              <div id="xng">

                            </div>
                        </form>
                     </div>
                </div>
            </body>
            <script>    
                    function Comprobar(){
                         c1=document.getElementById("contra1").value;
                         c2=document.getElementById("contra2").value;
                         if ( c1 == c2 ){
                             document.getElementById("contra1").style.backgroundColor = "#78e26c";
                             document.getElementById("contra2").style.backgroundColor = "#78e26c";
                         }else{
                            document.getElementById("contra1").style.backgroundColor = "#e07750"; 
                            document.getElementById("contra2").style.backgroundColor = "#e07750"; 
                         }

                        if(c1 == ""){
                           document.getElementById("contra1").style.backgroundColor = "#ffffff";  
                        }
                        if(c2 == ""){
                           document.getElementById("contra2").style.backgroundColor = "#ffffff";  
                        }
                    }
                     function Contraseña_1(){
                         if ( document.getElementById("contra1").type == 'text' ){
                             document.getElementById("contra1").type='password';
                         }else{ 
                             document.getElementById("contra1").type='text'; 
                         }
                    }
                    function Contraseña_2(){
                         if ( document.getElementById("contra2").type == 'text' ){
                             document.getElementById("contra2").type='password';
                         }else{
                             document.getElementById("contra2").type='text';
                         }
                    }
                </script>   
            </html>
            <?php
        }else {

         $conn->close();
            echo "Contraseña no correcta";
            header("Location: http://localhost/Intro_Admin.php");
        }
?>