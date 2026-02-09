<!DOCTYPE html>
<html lang="es">
<head>
  <title>Index PHPe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Entrada a la aplicación php</h1>
  <p>UT6 Docker - Servicios de Red e Internet - CIPFP Ausiás March</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Obtenemos datos de la máquina</h3>
      <p><?php  
      		$nombre_servicio="srv";
		$ipAddress = gethostbyname($nombre_servicio);  
		echo "Esta es la IP de localhost : ".$ipAddress;  
		echo "</br>";
		$nombrehost = gethostname();
		$server = $_SERVER['SERVER_NAME'];
		echo "<div class='alert alert-primary'><strong>Nombre host </strong>" . $nombrehost . "</div>";
		echo "<div class='alert alert-secondary'><strong>Nombre Server </strong>" . $server . "</div>";
  	?>
  	</p>
    </div>
    <div class="col-sm-4">
      <h3>Obtenemos datos de la máquina</h3>
      <p>Si en esta sección se muestra una ip de Google quiere decir que el código php se ha ejecutado correctamente.
      </p>
      <p><?php  
		$GoogleipAddress = gethostbyname("www.google.com");  
		echo "Esta es la IP de www.google.com : ".$GoogleipAddress;  
		echo "</br>";  
  	?>
  	</p>
    </div>
    <div class="col-sm-4">
      <h3>Conexión a la base de datos</h3> 
      <p>Este link abre otro fichero php que sólo funcionará si se ha desplegado la base de datos mysql y tiene conexión con ella</p>       
      <p><a href="database.php" class="btn btn-info" role="button">Link Acceso</a></p>
    </div>
  </div>
</div>

</body>
</html
