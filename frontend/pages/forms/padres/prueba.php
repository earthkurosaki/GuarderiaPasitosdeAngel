<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>

    <style>

table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed; /* Esto ayuda a manejar el ancho de las columnas */
}

th, td {
    border: 1px solid #cccccc;
    padding: 8px;
    text-align: left;
    font-family: Arial, sans-serif;
    font-size: 14px;
    overflow: hidden; /* Previene desbordamiento del contenido */
    text-overflow: ellipsis; /* Añade elipsis si el texto es demasiado largo */
    white-space: nowrap; /* Mantiene el contenido en una sola línea */
}

th {
    background-color: #f2f2f2;
}

tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

tbody tr:hover {
    background-color: #e9e9e9;
}

@media screen and (max-width: 600px) {
    thead {
        display: none;
    }

    table, tbody, tr, td {
        display: block;
    }

    tr {
        margin-bottom: 10px;
    }

    td {
        text-align: right;
        padding-left: 50%;
        position: relative;
    }

    td:before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 10px;
        text-align: left;
        font-weight: bold;
    }
}

    </style>
</head>
<body>

<div class="container">
<table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Apellido
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Parentezo
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Fecha de Nacimiento
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Cédula
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Lugar de Trabajo
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Cargo
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nivel Académico
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Profesión
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Dirección
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Teléfono
                </th>
           
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Correo
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Estado Civil
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ID niño
                </th>
            </tr>
        </thead>
        

        <?php
        include_once 'conecta.php';
       $ID= $_POST['buscar'];

        $query = "SELECT * FROM tutores WHERE id_tutor='$ID'";
        $data = mysqli_query($mysqli, $query);
        $total = mysqli_num_rows($data);

        if($total != 0){
            while($row = mysqli_fetch_assoc($data)){
                echo "<tr> <td>" . $row['id_tutor'] . 
                "</td> <td>" . $row['nombre'] . 
                "</td> <td>" . $row['apellido'] . 
                "</td> <td>" . $row['relacion_parental'] . 
                "</td> <td>" . $row['fechanac'] . 
                "</td> <td>" . $row['cedula'] . 
                "</td> <td>" . $row['lugar_trabajo'] . 
                "</td> <td>" . $row['cargo'] . 
                "</td> <td>" . $row['nivel_academico'] . 
                "</td> <td>" . $row['profesion'] . 
                "</td> <td>" . $row['direccion'] . 
                "</td> <td>" . $row['telefono'] . 
                "</td> <td>" . $row['email'] . 
                "</td> <td>" . $row['estado_civil'] . 
                "</td> <td>" . $row['id_nino'] . 
                "</td>" .
                "<td> <a href='delete.php>?rn=$row[id_tutor]'>Borrar</td></tr>";

            };
        };

        ?>
    </table>
    <br>
    <br>

    <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                <a href="http://guarderiapasitosdeangel.test/frontend/pages/forms/padres/padres.php?insert=success">Volver</a>
            </button>
        </div>
  
</div>
    
</body>
</html>