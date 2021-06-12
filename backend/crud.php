<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);

function permisos() {  
  if (isset($_SERVER['HTTP_ORIGIN'])){
      header("Access-Control-Allow-Origin: *");
      header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
      header("Access-Control-Allow-Headers: Origin, Authorization, X-Requested-With, Content-Type, Accept");
      header('Access-Control-Allow-Credentials: true');      
  }  
  if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS'){
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))          
        header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: Origin, Authorization, X-Requested-With, Content-Type, Accept");
    exit(0);
  }
}
permisos();

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$origen= (isset($_POST['origen'])) ? $_POST['origen'] : '';
$destino = (isset($_POST['destino'])) ? $_POST['destino'] : '';
$inicio = (isset($_POST['precio'])) ? $_POST['precio'] : '';
$fin = (isset($_POST['stock'])) ? $_POST['stock'] : '';

switch($opcion){
	case 1://Visualizar
        $consulta = "SELECT * FROM llamadas";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2://Insertar
        $consulta = "INSERT INTO llamadas (id, origen, destino, inicio,fin) VALUES('$id', '$origen', '$destino','$inicio','$fin')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                
        break;
    case 3://Actualizar
        $consulta = "UPDATE llamadas SET id='$id', origen='$origen', destino='$destino',inicio='$inicio',fin='$fin' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 4://Borrar
        $consulta = "DELETE FROM llamadas WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;         
    
}
print json_encode($data, JSON_UNESCAPED_UNICODE);//Se envia el array que contiene el resultado en formato JSON
$conexion = NULL;