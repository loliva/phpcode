<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mascota_preferida = $_POST['mascota_preferida'];

    $sql = "INSERT INTO personas (nombre, apellido, mascota_preferida) VALUES ('$nombre', '$apellido', '$mascota_preferida')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Persona</title>
</head>
<body>

<h2>Agregar Persona</h2>

<form method="post">
    Nombre: <input type="text" name="nombre" required><br>
    Apellido: <input type="text" name="apellido" required><br>
    Mascota Preferida: 
    <select name="mascota_preferida" required>
        <option value="Perro">Perro</option>
        <option value="Gato">Gato</option>
    </select><br>
    <input type="submit" value="Agregar">
</form>

</body>
</html>
