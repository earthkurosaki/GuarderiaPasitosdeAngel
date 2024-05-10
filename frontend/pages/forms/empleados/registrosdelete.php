<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Registros</title>

    <style>
    /* Estilos para la tabla y el encabezado */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px; /* Espacio superior entre el encabezado y la tabla */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para la tabla */
        
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd; /* Borde inferior en las celdas */
    }

    th {
        background-color: #3498db; /* Color de fondo del encabezado */
        font-weight: bold;
        text-transform: uppercase; /* Convertir el texto del encabezado a mayúsculas */
        font-size: 0.9em;
        letter-spacing: 1px; /* Espaciado entre caracteres */
        color: white; /* Color del texto del encabezado */
    }

    td {
        background-color: #f0f8ff; /* Color de fondo de las celdas */
        color: #555; /* Color del texto en las celdas */
        font-size: 0.85em; /* Tamaño de la fuente en las celdas */
    }

    /* Estilos para el encabezado */
    h3 {
        font-size: 1.6em;
        font-weight: bold;
        color: #333; /* Color del texto del encabezado */
        margin-bottom: 20px; /* Espacio inferior entre el encabezado y la tabla */
        text-align: center;
        text-transform: uppercase; /* Convertir el texto del encabezado a mayúsculas */
        letter-spacing: 2px; /* Espaciado entre caracteres */
    }

    /* Estilos para el botón de borrar */
    .delete-button {
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 6px 12px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .delete-button:hover {
        background-color: #e0484e;
    }

    /* Estilos para el campo de búsqueda y de editar*/
    .search-container {
        text-align: right;
        margin-bottom: 20px;
    }

    .search-box {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 250px;
        margin-right: 10px;
    }

    .search-button {
        background-color: #e0484e;
        color: white;
        padding: 8px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .search-button:hover {
        background-color: black;
    }
    .table-container {
    overflow-x: auto;
    max-width: 100%;
}

</style>
</head>
<body>
<h3>Lista de empleados</h3>

<!-- Campo de búsqueda -->
<div class="search-container">
    <input type="text" placeholder="Buscar por nombre..." id="searchInput" class="search-box">
    <button type="button" class="search-button" onclick="searchTable()">Buscar</button>
</div>
 
<div class="search-container">
    <form action="update.php" method="POST">
        <input type="text" name="id_empleados" placeholder="ID" class="search-box">
        <button type="submit" name="update" class="search-button">Editar</button>
    </form>
    </div>
    <div class="table-container">
<table border="0" id="employeeTable">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cédula</th>
        <th>Fecha de Nacimiento</th>
        <th>Género</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo Electrónico</th>
        <th>Fecha de Ingreso</th>
        <th>Horario Laboral</th>
        <th>Formación Académica</th>
        <th>Teléfono de Emergencia</th>
        <th>Puesto</th>
        <th>Borrar</th>
        
    </tr>
    </div>
    

    <?php
    include_once 'conectarBD1.php'; 

    $query = "SELECT * FROM empleados";
    $data = mysqli_query($mysqli, $query);
    $total = mysqli_num_rows($data);

    if($total != 0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td>" . $row['id_empleados'] . "</td>
                    <td>" . $row['nombre'] . "</td>
                    <td>" . $row['apellido'] . "</td>
                    <td>" . $row['cedula'] . "</td>
                    <td>" . $row['fechanac'] . "</td>
                    <td>" . $row['genero'] . "</td>
                    <td>" . $row['direccion'] . "</td>
                    <td>" . $row['telefono'] . "</td>
                    <td>" . $row['correo_electronico'] . "</td>
                    <td>" . $row['fechaingreso'] . "</td>
                    <td>" . $row['horariolabo'] . "</td>
                    <td>" . $row['foracademica'] . "</td>
                    <td>" . $row['teleemergencia11'] . "</td>
                    <td>" . $row['id_puesto'] . "</td>
                    <td>
    <a href='delete.php?rn=" . $row['id_empleados'] . "' class='delete-button'>Borrar</a>
</td>

                    
                </tr>";
        }
    }
    ?>
</table>
<br>
<br>
<button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline  flex justify-center">
                <a href="http://localhost/GuarderiaPasitosdeAngel/frontend/pages/forms/empleados/empleado.php?insert=success">Volver</a>
            </button>

<script>
    function searchTable() {
        // Declarar variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("employeeTable");
        tr = table.getElementsByTagName("tr");

        // Recorrer todas las filas y ocultar aquellas que no coincidan con la búsqueda
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1]; // El índice 1 corresponde a la columna del nombre
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }


</script>

</body>
</html>



