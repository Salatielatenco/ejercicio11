<?php
    function conexion(){
        $conexion = new mysqli('localhost', 'root', '', 'Prueba');
        if($conexion->connect_errno){
            echo 'Error en la conexion'.$conexion->connect_error;

        }
        $conexion->set_charset("utf8");
        return $conexion;
    }

    $conexion = conexion();

    $datosrecibidos = array (
    
        $nombre_usuario = $_POST['registro_nombre']
    
    
    );
    
        $query_insert = "INSERT INTO registro1(nombre_usuario)values(?)"; 
        $insert_preparado = $conexion->prepare($query_insert);
        $insert_preparado->bind_param('s', $datosrecibidos[0]); 

        echo $insert_preparado -> execute();
        $insert_preparado -> close();

?>