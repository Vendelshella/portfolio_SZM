<?php
$db_host="localhost";
$db_nombre="miwebSonia";
$db_usuario="root";
$db_contra="";

try{
    
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    if(!$conexion){
        echo "Fallo al conectar con la BBDD" . mysqli_error();
        exit();
    }

    mysqli_set_charset($conexion, "utf8");
    
    if(isset($_POST['enviar'])){
        $asunto=$_POST['asunto'];
        $mensaje=$_POST['mensaje'];
        $fecha=date("Y-m-d H:i:s");

        $sql="INSERT INTO formulario_contacto (`asunto`, `mensaje`, `fecha`) VALUES ('$asunto', '$mensaje', '$fecha')";

        $resultado=mysqli_query($conexion, $sql);

        //si todo va bien dirigir al usuario a una pagina distinta con un header

        header ('location:mensajeenviado.php');
    
        mysqli_close($conexion);
    }
}catch(Exception $e){
    die("Error: " . $e->GetMessage());

}finally{
    $conexion=null;
}
?>