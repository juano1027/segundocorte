<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="social/bootstrap-social.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<header>
		<section class="container">
			<h1>REGISTRO USB</h1>
		</section>
	</header>
	<nav class="pull-right" >
		<section class="container-fluid" >
			<section class="row">
				
			
		    </section>

		</section>
		
		
	</nav>
	<br>
	<br>

	<section class="login container">
	<section class="row">
		
		<section  class=" col-xs-1 col-sm-2 col-md-2">
				
				
				
		</section>

		<section class="col-xs-12 col-sm-8 col-md-8">
			<form action="registro.php" method="POST">

				    <section class="form-group">
			              <label for="nombre">Nombre y Apellido</label>
		                  <input class="form-control" name="nombre" type="text" placeholder="Ingresar Nombre y Apellido" >
			
		            </section>
		            
		             <section class="form-group">
			              <label for="email">Email:</label>
		                  <input class="form-control" name="correo" type="email" placeholder="Ingrese su Correo:" >
			
		            </section>
		            <section class="form-group">
			              <label for="telefono">Telefono:</label>
		                  <input class="form-control" name="telefono" type="text" placeholder="Ingrese su Telefono:">
			
		            </section>
		            <section class="form-group">
			              <label for="contrasena">Seleccione Curso:</label>
		                  <select name="curso"  class="form-control" id="">
							<option value="">Seleccionar Curso</option>
							<option value="DESARROLLO WEB">DESARROLLO WEB</option>
							<option value="INGIENERIA DE SOFTWARE">INGIENERIA DE SOFTWARE</option>
							<option value="MATEMATICAS I">MATEMATICAS I</option>
							<option value="GESTION DE PROYECTOS">GESTION DE PROYECTOS</option>
							<option value="ESTRUCTURA DE DATOS">ESTRUCTURA DE DATOS</option>

						  </select>
			
		            </section>
		            
		            <section class="form-group">
		                        <button class="boton btn ">Registrarse</button>
		                        
	                </section>

				
			</form>
			
					<br>
	<?php 

error_reporting(0);

require_once 'crudes.php';

$j=new Crud();

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$curso=$_POST['curso'];

if (empty($nombre) & empty($correo) & empty($telefono)  & empty($curso)) {


}else{

$sentencia="INSERT INTO registro VALUES(default,'$nombre','$correo','$telefono','$curso');";

$j->insertar($sentencia);

header('location: exito.php');

}




?>
		</section>
		<section  class=" col-xs-1 col-sm-2 col-md-2">
				
				
				
		</section>
		




	</section>
	

</section>




<footer class="pie">
		<section class="container">
			<br>
			<span >Elaborado por: Juan Manuel Moreno</span>
			<br>
			<span >Email: manius1027@hotmail.com</span>
			<br>
			<span>Telefono: 3167398231</span>
			<br>
			<br>
			
			
		</section>
	</footer>




<!--no se  utiliza  nada  debajo de  esta linea-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>