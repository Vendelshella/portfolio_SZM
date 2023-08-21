<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inicio</title>
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            html, body{
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                background: linear-gradient(to right, lightgray, grey);
                height: 101%;
            }
            #main{
                text-align: center;
                padding-top: 50px;
            }
            #retrato{
                width: 200px;
            }
            h1{
                font-size: 60px;
                margin-bottom: 0px;
                margin-top: 30px;
                background-color: darkslategrey;
            }
            .subtitulo{
                padding: 15px;
                background-color: rgb(89, 138, 138);
            }
            .menu{
                margin-top: 30px;
                padding: 0;
            }
            .imgmenu{
                width: 200px;
            }
            li{
                list-style: none;
            }
            .redesmain{
                width: 100%;
                display: flex;
                justify-content: center;
                list-style: none;
                background: white;
                padding: 20px;
            }
            .text{
                margin-top: 20px;
                padding-right: 20px;
            }
            .proyectos{
                margin: 5% auto 0% auto;
                text-align: center;
                border: 20px solid rgb(89, 138, 138);
            }
            .proyectos h2{
                font-size: 200%;
                margin: 5% 0%;
            }
            .logo_deOroVerde{
                width: 50%;
            }
            
        </style>
    </head>
    <body>
        <div id="main">
        <a href="CV-Sonia Zamora Martín.pdf"><img id="retrato" src="imagenes/retrato.gif" onmouseout="this.src='imagenes/retrato.gif'" onmouseover="this.src='imagenes/cv.gif'"></a>
        <h1>Sonia Zamora Martín</h1>
        <h3 class="subtitulo">Desarrolladora de Aplicaciones Web</h3>
        <ul class="menu">
            <li><a href="sobremi.php"><img class="imgmenu" src="imagenes/sobremi.gif" onmouseout="this.src='imagenes/sobremi.gif'" onmouseover="this.src='imagenes/sobremimouseover.gif'" alt="Sobre mí"></a></li>
            <li><a href="contacto.php"><img class="imgmenu" src="imagenes/contacto.gif" onmouseout="this.src='imagenes/contacto.gif'" onmouseover="this.src='imagenes/contactomouseover.gif'" alt="Contacto"></a></li>
        </ul>
        </div>
        
        <div class="proyectos">
            <h2>Proyectos</h2>
            <ul>
                <li class="deOroVerde">
                    <h3>Proyecto en desarrollo:</h3>
                    <a href="www.deOroVerde.szmblog.es"><img class="logo_deOroVerde" src="imagenes/logo_deOroVerde.png" alt="deOroVerde"></a>
                </li>
            </ul>
        </div>
        
        <div>
        <ul class="redesmain">
            <li><h3 class="text">Redes sociales:</h3></li>
            <li><a class="redes" href="https://www.linkedin.com/in/sonia-zamora-mart%C3%ADn-daw-777a0a255/"><img width="60px" src="imagenes/linkedinemoji.gif" alt="Linkedin"></a></li>
            <li><a class="redes" href="https://www.instagram.com/szmblog/"><img width="60px" src="imagenes/instagramemoji.gif" alt="Instagram"></a></li>
        </ul>
        </div>

    </body>
</html>