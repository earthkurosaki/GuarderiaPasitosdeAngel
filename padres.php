<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de padres</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #EADBC8;
    }

    .container {
        max-width: 1000px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    form {
        display: grid;
        grid-gap: 20px;
    }

    .form-group {
        display: grid;
        grid-template-columns: 1fr 3fr;
        align-items: center;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        cursor: pointer;
    }

    .form-group .submit-btn {
        grid-column: span 2;
        text-align: center;
    }


 .submit-btn button {
    width: 100%;
    padding: 10px;
    background-color: #1679AB;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer; 
}

.submit-btn button:hover{
    background-color: #074173;
}

</style>
</head>
<body>
<div class="container">
    <h1>Registro de padres</h1>
    <form action="insertar.php" method="post">
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" id="nombres" name="nombres" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" required>
        </div>
        <div class="form-group">
            <label for="cedula">Cedula</label>
            <input type="text" id="cedula" name="cedula" required>
        </div>
        <div class="form-group">
            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" id="nacionalidad" name="nacionalidad" required>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" id="direccion" name="direccion" required>
        </div>
        <div class="form-group">
            <label for="correo_electronico">Correo electronico</label>
            <input type="text" id="correo_electronico" name="correo_electronico" required>
        </div>

        <div class="form-group">
            <label for="parentesco">Parentesco:</label>
            <select id="parentesco" name="parentesco" required>
                <option value="">Seleccione el tipo de parentesco</option>
                <option value="madre">Madre</option>
                <option value="padre">Padre</option>
                <option value="tutor">Tutor</option>
            </select>
        </div>
        <!-- <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>
        </div> -->
        <div class="form-group submit-btn">
            <button type="submit">Enviar registro</button>
        </div>
    </form>
    <br>
    <form action="consulta.php" method="post">
        <input type="text" name="nombres" placeholder="Registro a buscar">
        <button type="submit" name="submit">Buscar</button>
    </form>

    <h3>Editar registro</h3>     
    <form action="update.php" method="POST">
        <input type="text" name="id_padres" placeholder="ID">
        <button type="submit" name="update">Editar</button>
    </form>

    <h3>Lista de tutores</h3>
    <table border=1>
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

$query = "SELECT * FROM padres";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if($total != 0) {
    while($row = mysqli_fetch_assoc($data)) {
        echo "<tr> <td>" . $row ['id_padres'] . "</td> <td>" . $row['nombres'] .
        "</td> <td>" . $row['Apellidos'] . "</td> <td>" . $row['cedula'] .
        "</td> <td>" . $row['nacionalidad'] . "</td> <td>" . $row['telefono'] .
        "</td> <td>" . $row['direccion'] .  "</td> <td>" . $row['correo_electronico'] .
        "</td> <td>" . $row['parentesco'] . "</td>
        <td> <a href='delete.php?rn=$row[id_padres]'>Borrar</td></tr>";
    }
}
?>

</div>
</body>
</html>
