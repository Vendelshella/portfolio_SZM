<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sobre mí</title>
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            html, body{
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                background: linear-gradient(to right,lightgray,grey);
                height: 100%;
            }
            #main{
                padding-top: 30px;
            }
            h1{
                text-align: center;
                font-size: 60px;
            }#lapizgif{
                height: 40px;
                width: 70px;
                padding-right: 5px;
            }
            .menu{
                padding-top: 10px;
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
                margin-left:200px;
                margin-right:200px;
            }
        </style>
    </head>
    <body>
        <div id="main">
        <h1><img id="lapizgif" src="imagenes/lapiz.gif">Sobre mí</h1>
        <ul class="menu">
            <li><a href="index.php"><img class="imgmenu" src="imagenes/inicio.gif" onmouseout="this.src='imagenes/inicio.gif'" onmouseover="this.src='imagenes/iniciomouseover.gif'" alt="Inicio"></a></li>
            <li><a href="contacto.php"><img class="imgmenu" src="imagenes/contacto.gif" onmouseout="this.src='imagenes/contacto.gif'" onmouseover="this.src='imagenes/contactomouseover.gif'" alt="Contacto"></a></li>
        </ul>

        <div id="parrafos">
        <p>
        Soy licenciada en Ciencias Ambientales por la Universidad de Castilla - La Mancha.
        </p><br>
        <p>
        Entre los años 2009 y 2010, estudié en la Universidad de Granada y entre los años 2010 y 2011,
        estudié en la Universidad de Cagliari en Cerdeña (Italia).
        </p><br>
        <p>
        En 2011 me licencié y decidí viajar a Londres donde mientras trabajaba aprendí a
        desenvolverme en inglés.
        </p><br>
        <img src="imagenes/fotos_sobre_mi/poste_londres.gif" alt="Londres" width="200px">
        <p><br>
        Pasé en Inglaterra cuatro años, entre los cuales me aventuré a ir a trabajar a una granja
        ecológica, la Treddafydd Organic Farm en Gales, donde pude conocer, además de a una familia
        encantadora, una forma de vida totalmente distinta a la que vivía en la ciudad.
        </p><br>
        <img src="imagenes/fotos_sobre_mi/granja.gif" alt="Granja" width="300px">
        <p><br>
        En 2015 decidí volver a España. En el año 2019 mientras trabajaba a tiempo parcial de
        camarera, decidí emprender y abrí una pequeña empresa donde fabricaba papel artesanal con semillas.
        Ésta actividad me enseñó a gestionar recursos, a comerciar y a diseñar, aprendiendo a usar herramientas
        digitales para poder desarrollar los proyectos que los clientes me demandaban.
        </p><br>
        <img src="imagenes/fotos_sobre_mi/papel_semillas.gif" alt="Papel con semillas" width="500px">
        <br>
        <p>
        Tras la pandemia, cesé mi actividad como autónoma y como empresaria para continuar trabajando en la
        hostelería.
        </p><br>
        <p>
        En este punto no sabía muy bien cómo enfocar mi vida profesional, así que tomé el ejemplo de mi hermana,
        la cual estudió ASIR y DAM, y comencé a interesarme por la programación.
        </p><br>
        <p>
        Empecé de forma totalmente fortuita e inesperada y, a medida que más conocía sobre la materia más
        me gustaba. Así que, finalmente, decidí estudiar la FP de Desarrollo de Aplicaciones Web.
        </p><br>
        <p>
        Este trabajo tiene muchos aspectos que me atraen como el diseño, la lógica y el desafío de cada proyecto.
        </p><br><br>
        
        </div>
        
        </div>
    </body>
</html>