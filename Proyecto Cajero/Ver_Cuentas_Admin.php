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
         if($sql = mysqli_query($conn,"Select * FROM Clientes ")){
             
             
        $row = mysqli_num_rows($sql);  
        //Mandamos buscar la cuenta
        if($row >= 1 ){

                ?> 
             <html>
                    <head> 
                        <meta http-equiv="content-type" content="text/html; charset=UTF-8">   
                        <link rel="stylesheet" type="text/css" href="general.css">

                    </head>   

                    <title>Clientes en el banco</title>    

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
                        
                    <div id="borrarCuenta">
                        <div id="ing">
                            <?php
                                                
                            $servidor="localhost";
                            $usuario="root";
                            $password="";
                            $dbname = "ddbb_banco";
                            $NCuenta;
                            $PIN;
                            // Establecemos la conexion
                            $conn = new mysqli($servidor, $usuario, $password, $dbname);
                            // Comprobamos la conexion
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $result = mysqli_query($conn,"SELECT * FROM clientes ORDER BY NCUENTA ASC");
                            $row = mysqli_num_rows($result);

                            if($row >= 1 ){
                                echo "<table border = '1' border-collapse= 'collapse'> \n"; 
                                echo "<tr><td><p>NCUENTA</p></td>
                                          <td><p>NOMBRE</p></td>
                                          <td><p>TELEFONO</p></td>
                                          <td><p>CORREO</p></td>
                                          <td><p>SALARIO</p></td>
                                      </tr> \n"; 
                                while ($row = mysqli_fetch_row($result)){ 
                                       echo "<tr><td><p>$row[0]</p></td>
                                                 <td><p>$row[2]</p></td>
                                                 <td><p>$row[3]</p></td>
                                                 <td><p>$row[4]</p></td>
                                                 <td><p>$row[5]</p></td>
                                            </tr> \n"; 
                                } 
                                echo "</table> \n"; 
                            }else{
                                echo "<p> No hay Cuentas en el banco</p>";
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
             header("Location: http://localhost/Intro_Admin.php");
            }
             
             
         }else{
             echo $conn->connect_error;
         }
       
    


?>