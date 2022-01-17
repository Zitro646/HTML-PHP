<?php
        session_start();
        $servidor="localhost";
        $usuario="root";
        $password="";
        $dbname = "ddbb_banco";
        $Nombre = $_SESSION['nombre'];
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
                <title>Ajustes Usuario</title>    
                <body>

                    <nav>
                        <ul>
                            <li><a href="Intro_Admin.php">Volver al Menu</a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn" id='user'>   Usuario</a>
                                    <div class="dropdown-content">
                                      <p>
                                       Hola Admin<?php 
                                        $Nombre = $_SESSION['nombre'];
                                        echo $Nombre   ?><br>
                                    </p>
                                        <a href="Cerrar_Sesion.php">Cerrar sesion</a>
                                    </div>
                            </li>
                         </ul>
                     </nav>


                    <div id="nng">
                        <div id="ing">

                            <form method="post" action="Actualizar_Admin.php">
                                <p>Cambia el Nombre del Admin</p>
                                 <input type="text" name="nombre" placeholder="Cambia el nombre" ><br>
                                 <br><input type="submit" value="Actualizar" ><br>

                            </form>
                            <?php
                                    if($_SESSION['error']==2){
                                        ?>
                                        <br>
                                            <p>Se ha cambiado la contraseña</p>
                                        <br>
                                        <?php
                                        $_SESSION['error']=0;
                                    }
                                    if($_SESSION['error']==3){
                                        ?>
                                        <br>
                                            <p>La contraseña nueva y su aseguramiento no son iguales</p>
                                        <br>
                                        <?php
                                        $_SESSION['error']=0;
                                    }
                                    if($_SESSION['error']==4){
                                        ?>
                                        <br>
                                            <p>Contraseña Incorrecta</p>
                                        <br>
                                        <?php
                                        $_SESSION['error']=0;
                                    }
                             ?>
                            <form method="post" action="Actualizar_Admin.php">
                                 <p>Cambiar la Contraseña</p>
                                 <input type="password" name="contra1" id="contra1" placeholder="Contra Nueva..." onInput="Comprobar()">
                                 <button type="button" onclick="Contraseña_1()">Mostrar Contraseña</button><br>

                                 <input type="password" name="contra2"  id="contra2" placeholder="Contra Nueva..." onInput="Comprobar()" >
                                 <button type="button" onclick="Contraseña_2()">Mostrar Contraseña</button>

                                 <br><br><input type="password" name="contra3" id="contra3" placeholder="Contra Actual..." >
                                 <button type="button"  onclick="Contraseña_3()">Mostrar Contraseña</button><br>
                                 <br><input type="submit"  value="Cambiar Contra" ><br>
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
                      function Contraseña_3(){
                         if ( document.getElementById("contra3").type == 'text' ){
                             document.getElementById("contra3").type='password';
                         }else{
                             document.getElementById("contra3").type='text';
                         }
                    }
                </script>
            </html>
            <?php

        }else {
         $conn->close();
         header("Location: http://localhost/Intro_Admin.html");    
        }
  
?>