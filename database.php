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

  


<?php 

$servername = "database";
$username = "root";
$password = "a";
$dbname = "prueba";

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo '<div class="alert alert-danger">No se ha instalado mysqli!!!</div>';
} else {
    echo '<div class="alert alert-success"><strong>OK:</strong> El módulo mysqli está instalado!</div>';
}

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS info (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
web VARCHAR(50),
genero CHAR(2),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "<div class='alert alert-success'>La Tabla info se ha creado<br></div>";
} else {
  echo "<div class='alert alert-danger'>Error creating table: " . $conn->error . "</div></p>";
}

$sql = "INSERT INTO info (name, email, web, genero) VALUES ('Ico', 'ico@example.com', 'www.prueba.com', 'M')";
if ($conn->query($sql) === TRUE) {
  //echo "<div class='alert alert-success'>Se ha creado la entrada</div>";
  $last_id = $conn->insert_id;
  echo "<div class='alert alert-success'>Nueva entrada creada correctamente. El último ID es: " . $last_id . "</div>";
} else {
  echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
}


$GoogleipAddress = gethostbyname("database");  
echo "<div class='alert alert-primary'>Esta es la IP de database : ".$GoogleipAddress . "</div>";  
echo "</br>";  
  
?>
<p>Puedes comprobar el correcto funcionamiento conectándote a la base de datos. Verás que cada vez que entras en esta página se vuelve a meter una entrada y aumenta el contador de entradas en la base de datos.</p>
<hr>
<p>Utiliza este botón para volver al inicio: <a href="index.php" class="btn btn-info" role="button">Link</a></p>

</div> 
