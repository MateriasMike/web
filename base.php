<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cecytem";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aciertos = $_POST["aciertos"];
    $materia = $_POST["materia"];

    $sql = "INSERT INTO resultados (materia, aciertos) VALUES ('$materia', $aciertos)";

    if ($conn->query($sql) === TRUE) {
        echo "Resultados guardados correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
