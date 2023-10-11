<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP y MySQL</title>
</head>
<body>

<h2>Personas y sus Mascotas Preferidas</h2>
<?php
$sql = "SELECT * FROM personas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Mascota Preferida</th><th>Acciones</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nombre"]."</td>
                <td>".$row["apellido"]."</td>
                <td>".$row["mascota_preferida"]."</td>
                <td>
                    <a href='editar.php?id=".$row["id"]."'>Editar</a> |
                    <a href='eliminar.php?id=".$row["id"]."'>Eliminar</a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 resultados";
}
?>
</body>
</html>
