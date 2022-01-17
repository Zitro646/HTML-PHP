 <?php
    



?>
        <!DOCTYPE html>
        <html>
            <head> 
                <meta http-equiv="content-type" content="text/html; charset=UTF-8">   
                <link rel="stylesheet" type="text/css" href="general.css">

            </head>   

            <title>Ingreso de cuenta</title>    

            <body>

                <nav>
                     <ul>
                         <li><a href="Ingreso_Usuario.html">Volver</a></li>
                     </ul>
                </nav>


                <div id="nng">
                <div id="ing">
                    <form  method="post" action="Crear_Usuario.php" >

                            <?php
                                session_start();
                                
                                if($_SESSION['error']== 1){
                                                ?>
                                                <br>
                                                    <p>La cuenta ya existe</p>
                                                <br>
                                                <?php
                                                $_SESSION['error']=0;
                                }
                                if($_SESSION['error']== 2){
                                                ?>
                                                <br>
                                                    <p>La cuenta ya ha sido solicitada</p>
                                                <br>
                                                <?php
                                                $_SESSION['error']=0;
                                }
                                if($_SESSION['error']== 3){
                                                ?>
                                                <br>
                                                    <p>Las contraseñas no concuerdan</p>
                                                <br>
                                                <?php
                                                $_SESSION['error']=0;
                                }
                                 if($_SESSION['error']== 4){
                                                ?>
                                                <br>
                                                    <p>Solicitud echa con exito</p>
                                                <br>
                                                <?php
                                                $_SESSION['error']=0;
                                } 
                                

                            ?>

                            <p>Ingrese el Nombre de Usuario*</p>
                            <input type="text" id="nombre" name="USUARIO" >

                            <p>Ingrese su Nombre</p>
                            <input type="text" name="NOMBRE" >

                            <p>Ingrese su Telefono</p>
                            <input type="text" name="TELEFONO" >

                            <p>Ingrese su Correo</p>
                            <input type="text" name="CORREO" >

                            <p>Ingrese su PIN*</p>
                            <input type="password" name="contra1" id="contra1" placeholder="Contraseña..." onInput="Comprobar()">
                            <button type="button" onclick="Contraseña_1()">Mostrar Contraseña</button><br>

                            <input type="password" name="contra2"  id="contra2" placeholder="Para Asegurarse..." onInput="Comprobar()" >
                            <button type="button" onclick="Contraseña_2()">Mostrar Contraseña</button>

                            <br><input type="submit" id="Crear_Cuenta" value="Crear Cuenta"><br>
                    </form>
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
                    </div>
                </div>

            </body>    
        </html>
?>