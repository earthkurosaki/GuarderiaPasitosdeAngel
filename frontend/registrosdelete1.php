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

<h3>Contáctanos</h3>

<!-- Campo de búsqueda -->
<div class="search-container">
    <input type="text" placeholder="Buscar por nombre..." id="searchInput" class="search-box">
    <button type="button" class="search-button" onclick="searchTable()">Buscar</button>
</div>
 

    </div>
    <div class="table-container">
<table border="0" id="employeeTable">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Mensaje</th>
       
        
    </tr>
    </div>
    

    <?php
    include_once 'conectarBD2.php'; 

    $query = "SELECT * FROM contactanos";
    $data = mysqli_query($mysqli, $query);
    $total = mysqli_num_rows($data);

    if($total != 0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td>" . $row['id_contacto'] . "</td>
                    <td>" . $row['nombre'] . "</td>
                    <td>" . $row['correo'] . "</td>
                    <td>" . $row['telefono'] . "</td>
                    <td>" . $row['mensaje'] .  "</td>
                    

                    
                </tr>";
        }
    }
    ?>
</table>

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
