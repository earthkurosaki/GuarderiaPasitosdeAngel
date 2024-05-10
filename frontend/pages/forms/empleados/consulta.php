<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutores Regitrados</title>
</head>
<body>
    <h3>Tutor Registrado:
    
    </h3>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Relación</th>
            <th>Fecha de Nacimiento</th>
            <th>Cédula</th>
            <th>Trabajo</th>
            <th>Cargo</th>
            <th>Nivel Educativo</th>
            <th>Profesión</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
            <th>Estado Civil</th>
            <th>Niño</th>
        </tr>

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
                "</td> </tr>";

            };
        };

        ?>
    </table>
</body>
</html>