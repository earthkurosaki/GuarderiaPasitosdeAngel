<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros buscados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h3 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid #3498db; /* Borde azul */
        }

        th, td {
            border: 1px solid #3498db; /* Borde azul */
            padding: 8px;
        }

        th {
            background-color: #3498db; /* Azul */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f0f8ff; /* Azul claro */
        }

        tr:hover {
            background-color: #cce6ff; /* Azul más claro al pasar el mouse */
        }
    </style>
</head>
<body>

<h3>Registros buscados</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cedula</th>
        <th>Nacionalidad</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Correo electronico</th>
        <th>Parentesco</th>
    </tr>
 
<?php
include_once 'conectarBD.php'; 
$nombre = $_POST['nombres'];

$query = "SELECT * FROM padres WHERE nombres='$nombre'";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if($total != 0) {
    while($row = mysqli_fetch_assoc($data)) {

        echo "<tr> <td>" . $row ['id_padres'] . "</td> <td>" . $row['nombres'] .
        "</td> <td>" . $row['Apellidos'] . "</td> <td>" . $row['cedula'] .
        "</td> <td>" . $row['nacionalidad'] . "</td> <td>" . $row['telefono'] .
        "</td> <td>" . $row['direccion'] .  "</td> <td>" . $row['correo_electronico'] .
        "</td> <td>" . $row['parentesco'] .  "</td> </tr>";
    }
}
?>
</table>

</body>
</html>
