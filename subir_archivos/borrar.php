<?php

	//NO MUESTRA ERROR al cargar
error_reporting(error_reporting() & ~E_NOTICE);
// Desactivar toda notificación de error
error_reporting(0);


$direccion_archivo=$_GET['eliminar'];
//echo $_GET['eliminar'];


if (!unlink("$direccion_archivo")){
	
	$dyn_table= "<table id='TablaError'class='table table-striped bg-danger'>";
    $dyn_table.="<th>" . "NO se pudo borrar el archivo " . "</th>";  
    $dyn_table.="<tr><td>" . " " . "</td></tr>"; 
    $dyn_table.="</table>";

}else{
	
	$dyn_table= "<table id='Tablaok'class='table table-striped bg-success'>";
    $dyn_table.="<th>" . "Se ELIMINO el archivo " . "</th>";  
    $dyn_table.="</table>";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>borrado</title>		
		 <meta name="viewport" content="width=device-width, initial-scale=1"> 
		  <!-- Bootstrap CSS -->
		  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!--fontawesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">	
	  	    
	</head>
	<body>
		<header>
	 <div class='container'>	
			<nav class="navbar navbar-dark bg-dark rounded">
  <!-- Navbar content -->
  		<form action="subir.php" method="POST">
		    <input name="Enviar" type="submit" value="volver" class="btn btn-warning btn-block" />
		 </form> 
	  <a href="#" class="navbar-brand"></a>
	  <input type="button" value="VOLVER" onClick="history.go(-1);" hidden>
	    <form action= "../destruir.php" method="POST"  class="form-inline">
	       <button class="btn btn-outline-danger sm" type="submit"><br>cerrar-sesion</button>
  	</form>
	</nav>
  
	</header>
		 <div class="container">
				   	<div class="row align-items-center p-4">
				        <div class="col-md-3">	</div>
						<div class="col-md-6">								
							<?php  echo $dyn_table ;      ?>
						</div>			
					<div class="col-md-3">	</div>	
			</div>	
	</body>
</html>