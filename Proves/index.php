<?php/*
$servername = "localhost";
$username = "admin";
$password = "Admin@123";
$conn = new mysqli ($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$mysqli = mysql_connect($servername, $username, $password);

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

mysql_query("USE insegura",$mysqli);
$query = "SELECT * FROM users";
$result = mysql_query($query);

while ($data = mysql_fetch_object($result)){
    $nom = "nom_".$id."_mask";
    $edad = $data->edad;
    $dni = $data->dni;

    mysql_query("USE segura",$mysqli);
    $sql = "INSERT INTO users SET (null,$nom,$edad,substr($dni,0));";
       if (!mysql_query($sql)) {
        echo '<p>Error adding data into database: ' . mysql_error() . '</p>';
      }
    mysql_query("USE insegura",$mysqli);
}*/
$password="rakelkn21"
echo password_verify($password,'$2y$10$X6YjYrwAH634NvYSfYY18eYQhwaTOhOaiRcaVh1uT2c.VhjFQYqk6');
?>