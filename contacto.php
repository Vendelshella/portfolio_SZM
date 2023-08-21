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
                height: 110%;
                
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
            form{
                margin-top: 30px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            table{
                padding: 20px;
                background-color: rgb(89, 138, 138);
            }
            th{
                font-size: 25px;
                padding-bottom: 20px;
            }
            td{
                padding-bottom: 5px;
            }
            .tabletext{
                font-size: 20px;
            }
            #boxasunto{
                height: 20px;
                width: 400px;
            }
            .tableboxes{
                background-color: rgb(200, 200, 201);
                border-radius: 5px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                padding: 5px;
                font-size: 20px;
            }
            #despedida, #celdaenviar{
                text-align: center;
            }
            #botonenviar{
                width: 100%;
                border: none;
                background-color: darkslategrey;
                color: white;
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            #botonenviar:hover{
                background-color: white;
                color: darkslategrey;
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            .redesmain{
                margin-top: 40px;
                display:flex;
                justify-content: center;
                list-style: none;
                background: white;
                
                padding: 20px;
            }
            .text{
                margin-top: 20px;
                padding-right: 20px;
            }
        </style>
    </head>
    <body>
        <div id="main">
           <div class="titulo"></div> 
        <h1><img id="sobregif" src="imagenes/sobre.gif">Contacto</h1>
        <ul class="menu">
            <li><a href="index.php"><img class="imgmenu" src="imagenes/inicio.gif" onmouseout="this.src='imagenes/inicio.gif'" onmouseover="this.src='imagenes/iniciomouseover.gif'" alt="Inicio"></a></li>
            <li><a href="sobremi.php"><img class="imgmenu" src="imagenes/sobremi.gif" onmouseout="this.src='imagenes/sobremi.gif'" onmouseover="this.src='imagenes/sobremimouseover.gif'" alt="Sobre mí"></a></li>
        </ul>
        <div id="parrafos">
        <p>Estas son las formas de contactarme:</p><br>
        <p>Teléfono: 616849345</p>
        <p>E-mail: hechodeoroverde@gmail.com</p>
        </div>
        <form action="formulario_contacto.php" method="post">
            <table>
                <th>Formulario de contacto:</th>
                <tr>
                    <td class="tabletext">Asunto</td>
                </tr>
                <tr>
                    <td><input id="boxasunto" class="tableboxes" type="text" maxlength="45" name="asunto"></td>
                </tr>
                <tr>
                    <td class="tabletext">Mensaje</td>
                </tr>
                <tr>
                    <td><textarea class="tableboxes" name="mensaje" cols="70" rows="10" maxlength="1000"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" id="celdaenviar"><input id="botonenviar" type="submit" value="Enviar" name="enviar"></td>
                </tr>
            </table>
        </form>
        <div id="foot">
        <ul class="redesmain">
            <li><h3 class="text">Redes sociales:</h3></li>
            <li><a class="redes" href="https://www.linkedin.com/in/sonia-zamora-mart%C3%ADn-daw-777a0a255/"><img width="60px" src="imagenes/linkedinemoji.gif" alt="Linkedin"></a></li>
            <li><a class="redes" href="https://www.instagram.com/szmblog/"><img width="60px" src="imagenes/instagramemoji.gif" alt="Instagram"></a></li>
        </ul>
        </div>
        </div>
    </body>
</html>