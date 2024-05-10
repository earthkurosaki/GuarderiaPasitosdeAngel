<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar niños</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Codigo PHP -->
    <?php
    include_once 'conectar_bd.php';
    $id = $_GET['rn'];

    $query = "SELECT * FROM nino WHERE id_nino='$id'";
    $data = mysqli_query($mysqli, $query);
    $total = mysqli_num_rows($data);

    if ($total > 0) {
        $row = mysqli_fetch_assoc($data);
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $fecha_nac = $row['fecha_nac'];
        $edad = $row['edad'];
        $genero = $row['genero'];
        $nacionalidad = $row['nacionalidad'];
        $modo_nacer = $row['modo_nacer'];
        $cant_hermanos = $row['cant_hermanos'];
        $niv_educativo = $row['niv_educativo'];
        $alergia = $row['alergia'];
        $desc_alergia = $row['desc_alergia'];
        $discapacidad = $row['discapacidad'];
        $desc_discapacidad = $row['desc_discapacidad'];
    }
    ?>

    <!-- Formulario para editar -->
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8 text-gray-900">Modificar niño</h1>
        <form action="actualiza.php" method="post" class="space-y-4">
            <input type="hidden" name="id_nino" value="<?php echo $id ?>">
            <div>
                <label for="nombre" class="text-gray-700">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $nombre ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="apellido" class="text-gray-700">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value="<?php echo $apellido ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="fechanac" class="text-gray-700">Fecha nacimiento:</label>
                <input type="text" id="fechanac" name="fechanac" value="<?php echo $fecha_nac ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="edad" class="text-gray-700">Edad:</label>
                <input type="text" id="edad" name="edad" value="<?php echo $edad ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="nacionalidad" class="text-gray-700">Nacionalidad:</label>
                <input type="text" id="nacionalidad" name="nacionalidad" value="<?php echo $nacionalidad ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="genero" class="text-gray-700">Género:</label>
                <input type="text" id="genero" name="genero" value="<?php echo $genero ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="modnacer" class="text-gray-700">Modo de nacer:</label>
                <input type="text" id="modnacer" name="modnacer" value="<?php echo $modo_nacer ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="canthermanos" class="text-gray-700">Cantidad de hermanos:</label>
                <input type="text" id="canthermanos" name="canthermanos" value="<?php echo $cant_hermanos ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="nivedu" class="text-gray-700">Nivel educativo:</label>
                <input type="text" id="nivedu" name="nivedu" value="<?php echo $niv_educativo ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="alergias" class="text-gray-700">Alergias:</label>
                <input type="text" id="alergias" name="alergias" value="<?php echo $alergia ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="descalergia" class="text-gray-700">Descripción de alergias:</label>
                <input type="text" id="descalergia" name="descalergia" value="<?php echo $desc_alergia ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="discapacidad" class="text-gray-700">Discapacidad:</label>
                <input type="text" id="discapacidad" name="discapacidad" value="<?php echo $discapacidad ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="descdiscapacidad" class="text-gray-700">Descripción de discapacidad:</label>
                <input type="text" id="descdiscapacidad" name="descdiscapacidad" value="<?php echo $desc_discapacidad ?>" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
            </div>

            <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Editar</button>
        </form>
    </div>

</body>

</html>
