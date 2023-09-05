<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contacto</title>
        <link rel="stylesheet" href="css/contacto.css">
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
            <li><a class="redes" href="https://github.com/Vendelshella"><img width="60px" src="imagenes/github.gif" alt="GitHub"></a></li>
        </ul>
        </div>
        </div>
    </body>
</html>