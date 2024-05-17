<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>softvigitecol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/e6d3741188.js" crossorigin="anonymous"></script>
    
    <style>
         
     :root{
    --color1: #0a42fc;
    --color2: #0044ff;
    --color3: #0659ff;
    --fondo: #f2f2f2;
    --titulos: 33px;
    --margenes: 60px;
    --espacios: 10px;
    --espacios-contenido:45px;}

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
    font-family: 'open sans';
    background: var(--fondo);
    }

    img{
    vertical-align: top;
    }




    /* Header */

    header{
    width: 100%;
    height:600px;
    background: linear-gradient(to bottom,
    #010645,
    #0314fd,
    #dbaa2e,
    #f4e2b3
    ), url(img/fondo.jpg);
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    }

    nav{
    width: 100%;
    position: fixed;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.5);
    }

    .nav1{
    background: white;
    height: 80px;
    color:#000000; /*color del texto dentro de este nav*/
    }

    /*El siguiente estilo aplica a un nombre de clase (nav2) que se asigna mediante JavaScript*/
    .nav2{
    background: var(--fondo);
    height:100px;
    color:#fcfcfc; /*color del texto dentro de este segundo estilo para el nav*/
    }

    .contenedor-nav{
    display: flex;
    margin: auto; /*el elemento toma el ancho que le doy, y después tomará el espacio sobrante para establecer automáticamente las márgenes*/
    width: 90%;
    justify-content: space-between; /*espacio adecuado entre los diferentes elementos de este contenedor*/
    align-items: center;  /*Los elementos se centran automáticamente con respecto a la parte superior e inferior del contenedor, es decir, en el eje y*/
    max-width:1000px;
    height:inherit;
    overflow: hidden;
    }

    nav .enlaces a{  /*Aquí estoy diciendo que se aplica el estilo a la etiqueta a de la clase enlaces del elemento nav*/
    display: inline-block;
    padding: 5px 0;
    margin-right: 17px;
    font-size: 17px;
    font-weight: 300;
    text-decoration: none;
    border-bottom: 3px solid transparent;
    color: inherit; /*se hereda el color de texto del nav como se definió ya en nav1*/
    }

    nav .enlaces a:hover{
    border-bottom: 3px solid #030154;
    transition: 0.6s;
    }

    .logo, .logo img{ height:120px;}

    .logo{
    justify-content: right;
    }

    .icono{
    display:none;
    font-size: 24px;
    padding: 23.5px 20px;
    }

    /*textos*/

    .textos{
    width: 100%;
    height: 100%;
    display:flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    color:rgb(7, 7, 7);
    overflow: hidden;
    text-align: center;
    }

    .textos>h1{
    font-size:80px;
    }

    .textos>h2{
    font-size: 30px; font-weight: 300;
    }

    /* Main */

    .contenedor{
    margin:auto;
    padding: var(--margenes) 0;
    width: 90%;
    max-width: 1000px;
    text-align: center;
    overflow: hidden;
    }

    .contenedor h3{
    font-size: var(--titulos);
    color: var(--color1);
    margin-bottom: var(--espacios);
    }

    .contenedor p{
    font-size: var(--subtitulos);
    font-weight: 300;
    color: var(--color1);
    }

    .after::after{
    content:'';
    display: block;
    margin: auto;
    margin-top: var(--espacios);
    width: 100px;
    height: 2px;
    background: var(--color1);
    margin-bottom: var(--espacios-contenido);
    }

    .card{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    
    }

    .content-card{
    width: 21%;
    box-shadow: 0 0 6px 0 rgba(4, 23, 110, 0.5);
    overflow: hidden;
    height:400px;
    }

    .people{
    height: 80%; /* cuánta altura me va a ocupar del content-card */
    }

    .content-card img{
    width: 100%;
    height: 100%;
    object-fit: cover; /* el objeto reemplazado (la imagen) se redimensiona para ajustarse al al tamaño del div*/
    }

    .texto-team{
    height: 20%;
    width: 100%;
    padding: var(--espacios) 0;
    }

    .about{
    background: url(img/teclado.jpg);
    height: auto;
    }

    .servicios{
    display: flex;
    color:#fff;
    justify-content: space-between;
    margin: auto;
    flex-wrap: wrap; /*responsive, útil para para pantallas más pequeñas*/
    
    }

    .caja-servicios{
    width: 31%;
    margin: auto;
    text-align: center;
    }

    .caja-servicios>h4{
    margin-bottom: var(--espacios);
    } 

    .caja-servicios>p{
    text-align: center;
    }

    .botones-work{
    overflow: hidden;
    }

    .botones-work li{
    display: inline-block;
    text-align: center;
    margin-left: var(--espacios);
    margin-bottom: var(--espacios-contenido);
    padding: 6px 12px;
    border: 1px solid var(--color1);
    list-style: none;
    color: var(--color1);
    }

    .botones-work li:hover{
    background: var(--color1);
    color:#fff;
    cursor: pointer;
    }

    .botones-work .active{
    background: var(--color1);
    color:#fff;
    }

    .galeria-work{
    display:flex;
    flex-wrap: wrap;
    justify-content: space-around;
    }

    .cont-work{
    width: 31%;
    box-shadow: 0 0 6px 0 rgba(0,0,0,.5);
    height:300px;
    overflow: hidden;
    margin-bottom: var(--espacios-contenido);
    }

    .img-work{
    height: 90%;
    width: 100%;
    }

    .img-work img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    }

    .textos-work{
    height: 10%;
    }

    .textos-work h4{
    line-height: 30px;
    font-weight: 300;
    }

    /*Diseño del footer*/

    footer{background:url(img/teclado.jpg);}

    .marca-logo{
    width: 20%;
    margin: auto;
    margin-bottom: var(--espacios);
    /*background: yellow;*/
    }

    .marca-logo img{
    width: 100%;
    }

    .iconos{
    display: flex;
    margin: auto;
    justify-content: space-around;
    width: 100%;
    /*background: blue;*/
    }

    .fab{
    font-size:60px;
    color: #FFF;
    margin-bottom: var(--espacios);
    display: inline-block;
    /*background: green;*/
    }

    footer p{
    margin-top:var(--espacios);
    /*background:#FFF;*/
    }
    /*
    .fa-youtube, .fa-facebook-square, .fa-github{
    color: #fff;
    border: 1px solid red; 
    
    } */

    /*se usa @media para especificar estilos que solo se reflejarán si se cumplen ciertas condiciones*/
    @media screen and (max-width: 700px){                  /*debe ser una pantalla y no tener más de 700px de ancho*/
    .nav2{
        color: #fff;  /*color del texto*/
    }

    .icono{
        display:block;
        cursor: pointer;
    }

    .enlaces{
        position: fixed;
        top:80px;
        background: #2c3e50; /*color de fondo del contenedor de los enlaces del nav*/
        left: 0; /*dentro del nav por el lado izquierdo no tednrá margen*/
        height: 100%;
        transition: 1s;
        width: 0;  /*esconde el div ya que el ancho es 0*/
        overflow: hidden; /*oculta los textos*/
    }

    .enlaces a{
        display: block;
        width: 100%;  /*el 100% de la caja enlances*/
        height: 50px;    /*altura de la caja elemento "a"*/
        padding: 20px;
        text-align: center;
        background: #34495e; /*color de fondo de la caja elemento "a"*/
        color:#fff;
    }

    .textos>h1{font-size: 70px;}
    .textos>h2{font-size:35px;}

    .content-card{     /*2     */
        width: 48%;     /*se redujo el ancho del content-card */
        margin-bottom:var(--margenes);
    }

    :root{
        --margenes: 30px;
    }

    }

    @media screen and (max-width: 500px){
    :root{
        --espacios-contenido: 25px;
    }

    .content-card{   /*3     */
        width: 90%;   /*se aumentó el tamaño del content-card  */
    }

    .caja-servicios{
        width: 90%;
        margin-bottom: var(--margenes);
    }

    .cont-work{
        width: 85%;
    }

    .marca-logo{
        width: 80%;
    }

    .iconos{
        margin: auto;
    }
    }
    </style>
</head>

<body>
    <body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                
                <div class="logo">
                <img src="img/logo-vigitecol.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="#Servicios" id="enlace-servicios" class="btn-header">Servicios</a>
                    <a href="#Equipo" id="enlace-equipo" class="btn-header">Equipo</a>
                    <a href="#Software" id="enlace-inicio" class="btn-header">Software</a>
                    <a href="#Trabaja" id="enlace-trabajo" class="btn-header">Trabaja con nosotros</a>
                    <a href="#Contacto" id="enlace-contacto" class="btn-header">Contacto</a>
                    <a href="GRIDS/index_inicioSesion.html" class="btn-header">Iniciar sesion</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Softvigitecol</h1>
            <h2>Software de Vigilancia y seguridad privada</h2>
        </div>
    </header>
    <main>
        <section class="about" id="Servicios">
            <div class="contenedor">
                <h3>Nuestros servicios</h3>
                <p class="after">Siempre mejorando para ti</p>
                <div class="servicios">
                    <div class="caja-servicios">
                        <img src="img/heart.png" alt="">
                        <h4>vigilancia humana y canina</h4>
                        <p>Esta modalidad esta establecida para el cuidado de bienes e inmuebles residenciales o industriales.</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/responsive.png" alt="">
                        <h4>Circuito cerrado de Television</h4>
                        <p>Elemento 2. Será afectado por justify-content. Architecto debitis quos cumque similique</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/efectos.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                        <p>Elemento 3. Será afectado por justify-content.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="team contenedor" id="equipo">
            <h3>Sobre Nosotros</h3>
            <p class="after">Conoce a nuestro equipo</p>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="imag/jheison.jpeg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Jheison rojas</h4>
                        <p>Guarda de seguridad Vigitecol y Aprendiz SENA ADSO 2027091</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="imag/Arbey.jpeg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Harvey Bernal</h4>
                        <p>Natalicio de briceño boyaca, líder social y gremial  de la seguridad privada y Aprendiz SENA ADSO 2027091</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="anak jun 2023_fondo blanco.jpg">
                    </div>
                    <div class="texto-team">
                        <h4>Ana Karina Yepes</h4>
                        <p>Profesional Ambiental SIG, Bioinformatica, Analísta de datos, ilustradora científica y Aprendiz SENA ADSO 2027091</p>
                    </div>
                </div>
                <!--agrego un nuevo content-card a mi gusto-->
                <div class="content-card">
                    <div class="people">
                        <img src="adan.jpg" alt=""> <!--cambio imagen-->
                    </div>
                    <div class="texto-team">
                        <h4>Adan de Jesus Restrepo Zapata</h4>
                        <p>39 años. De Barranquilla, Atlántico. Técnico en administración de empresas y Aprendiz SENA ADSO 2027091</p>
                    </div>
                </div>
                
            </div>
        </section>
        
        <section class="work contenedor" id="trabajo">
            <h3>Nuestro trabajo</h3>
            <p class="after">Hacemos de algo simple algo extraordinario</p>
            <div class="botones-work">
                <ul>
                    <li class="filter active" data-nombre='todos'>Todos</li>
                    <li class="filter" data-nombre='diseño'>Diseño</li>
                    <li class="filter" data-nombre='programacion'>Programacion</li>
                    <li class="filter" data-nombre='marketing'>Marketing</li>
                </ul>
            </div>
            <div class="galeria-work">
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/programacion2.jpeg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Programacion</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/frontend-04.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Diseño</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/marketing1.jpeg" alt="">
                    </div>
                    <h4>Marketing</h4>
                </div>
            </div>
        </section>
    </main>
    <footer id="contacto">
        <div class="footer contenedor">
            <div class="marca-logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="iconos">
                <i class="fab fa-youtube"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter"></i>
            </div>
            <p>Formando a los mejores aprendices</p>
        </div>

    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>
   
</html>
