<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Encriptar la contraseña
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password_hashed')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
        header("Location: ../index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
