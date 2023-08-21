<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contacto</title>
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            html, body{
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                background: linear-gradient(to right,lightgray,grey);
                height: 140%;
            }
            #main{
                padding-top: 20px;
            }
            
            h1{
                text-align: center;
                font-size: 60px;
            }
            #sobregif{
                height: 40px;
                width: 70px;
                padding-right: 5px;
            }
            ul{
                text-align: center;
            }
            .menu{
                margin-top:20px;
                list-style: none;
                display: flex;
                justify-content: center;
            }
            .imgmenu{
                width: 150px;
            }
            li a{
                text-decoration: none;
                color: white;
            }
            #parrafos{
                margin-top: 30px;
                text-align: center;
                font-size: 20px;
            }
           
        </style>
    </head>
    <body>
        <div id="main">
        
        <h1><img id="sobregif" src="imagenes/sobre.gif"></h1>
        
        <div id="parrafos">
        <p>Estas son las formas de contactarme:</p><br>
        <p>Teléfono: 616849345</p>
        <p>E-mail: hechodeoroverde@gmail.com</p>
        <br><br>
        <p><h1>Mensaje enviado</h1></p><br>
        <p><img src="imagenes/avion_papel.gif" alt="Avión" width="200px"></p>
        <br><br><br>
        <p>Volver a:</p>
        <ul class="menu">
            <li><a href="index.php"><img class="imgmenu" src="imagenes/inicio.gif" onmouseout="this.src='imagenes/inicio.gif'" onmouseover="this.src='imagenes/iniciomouseover.gif'" alt="Inicio"></a></li>
            <li><a href="sobremi.php"><img class="imgmenu" src="imagenes/sobremi.gif" onmouseout="this.src='imagenes/sobremi.gif'" onmouseover="this.src='imagenes/sobremimouseover.gif'" alt="Sobre mí"></a></li>
            <li><a href="contacto.php"><img class="imgmenu" src="imagenes/contacto.gif" onmouseout="this.src='imagenes/contacto.gif'" onmouseover="this.src='imagenes/contactomouseover.gif'" alt="Contacto"></a>
</li>
        </ul>
        </div>

    </body>
</html>