<?php 

require_once 'conexion.php';

Class Crud{


public function insertar($sql){

$n=new Conexion();


$mt= $n->conectar()->prepare($sql);

	$mt->execute();


return "datos ingresados exitosamente
	<br>";


}



}

 ?>