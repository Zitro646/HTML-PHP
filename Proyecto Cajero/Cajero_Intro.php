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
            //Mandamos buscar la cuenta
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
                            <li><a id=izq href="Cajero_Retirar.php">Retirar Dinero</a></li>
                            <li><a id=izq href="Cajero_Ingresar.php">Depositar Dinero</a></li>
                            <li><a id=izq href="Cajero_Ver_Liquido.php">Ver Liquido</a></li>
                            <li><a id=izq href="Transaccion.php">Transaccion</a></li>
                            <li><a id=izq href="Historial_transacciones.php">Historial</a></li>
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

                       
                    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 700px;
  position: relative;
  margin: auto;
    margin-top: 90px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 50px;
  padding: 70px 150px;
  position: absolute;
  bottom: 80px;
  width: 100%;
  text-align: center;
}
    
#txt1 {
    color: black;
    font-size: 50px;
    padding: 150px 150px;
    position: absolute;
    bottom: 80px;
    width: 100%;
    text-align: center;
}
    
#txt2{
    color:black;
    font-size: 50px;
    padding: 70px 150px;
    position: absolute;
    bottom: 80px;
    width: 100%;
    text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="oficina.jpg" style="width:100%">
  <div id="txt1" class="text">Bienvenido a ZitroBank <?php 
                                        $nom= $_SESSION['nombre_usr'];
                                        echo $nom   ?></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="gente_traba.jpg" style="width:100%">
  <div id="txt2" class="text">Trabajamos con total atención sobre tus necesidades</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="dinero3.jpg" style="width:100%">
  <div id="txt3" class="text">Consulta tus datos bancarios con total facilidad</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
                   
                            
                           
        <?php

    }else {

     $conn->close();
        echo "Contraseña no correcta";
     //header("Location: http://localhost/Cajero_Intro.html");    
     header("Location: http://localhost/Ingreso_Cuenta.html");
    }


 }else{
     echo $conn->connect_error;
 }

    


?>





