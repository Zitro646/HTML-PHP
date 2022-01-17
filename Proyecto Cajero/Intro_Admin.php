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
                                <li><a href="Ver_Cuentas_Admin.php">Ver Cuentas</a></li>
                                <li><a href="Borrar_Cuenta_Admin.php">Eliminar Cuenta</a></li>
                                <li><a href="Aceptar_Rechazar_Usuarios_Admin.php">Aceptar/Rechazar Cuenta</a></li>
                                <li><a href="Crear_Admin.php">Crear Admin</a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropbtn" id='user'>   Administrador</a>
                                        <div class="dropdown-content">
                                          <p>
                                             Bienvenido <?php 
                                            $nom= $_SESSION['nombre'];
                                            echo $nom   ?><br>
                                        </p>
                                            <a href="Cerrar_Sesion.php">Cerrar sesion</a>
                                            <a href="Cambiar_Datos_Admin.php">Ajustes de Admin</a>
                                        </div>
                                </li>
                            </ul>    
                        </nav>
                    </body>
                </html>
        <?php

        }else {

         $conn->close();
            echo "Contraseña no correcta";
            header("Location: http://localhost/Ingreso_Admin.html");
        }



// echo $conn->connect_error;





?>