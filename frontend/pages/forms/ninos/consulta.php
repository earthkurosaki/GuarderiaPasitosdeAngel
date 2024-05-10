<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias buscadas</title>
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

<h3>Noticias buscadas</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Texto</th>
        <th>Categoría</th>
        <th>Fecha</th>
    </tr>
 
<?php
include_once 'conectarBD.php'; 
$categoria = $_POST['id'];

$query = "SELECT * FROM noticia WHERE categoria='$categoria'";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if($total != 0) {
    while($row = mysqli_fetch_assoc($data)) {
        echo "<tr> <td>" . $row ['id'] . "</td> <td>" . $row['titulo'] .
        "</td> <td>" . $row['texto'] . "</td> <td>" . $row['categoria'] .
        "</td> <td>" . $row['fecha'] . "</td> </tr>";
    }
}
?>
</table>

</body>
</html>
