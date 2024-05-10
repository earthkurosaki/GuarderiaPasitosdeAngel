<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niños</title>

    <!-- Tailwind CSS -->
    <!-- <script src="/frontend/js/tailwind.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="./frontend/assets/imgs/favicon.png" type="./image/png" />
</head>

<body class="bg-blue-50">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8 text-blue-900">Formulario de niños</h1>

        <!-- Datos del Niño -->
        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-bold mb-4 text-blue-900">Datos del niño</h2>
            <form action="insertar.php" method="post" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="nombre" class="text-blue-900">Nombre:</label>
                        <input type="text" id="nombre" name="nombre"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="text-blue-900">Apellido:</label>
                        <input type="text" id="apellido" name="apellido"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="fechanac" class="text-blue-900">Fecha de nacimiento:</label>
                        <input type="text" id="fechanac" name="fechanac" placeholder="aaaa/mm/dd"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="edad" class="text-blue-900">Edad:</label>
                        <input type="text" id="edad" name="edad"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="genero" class="text-blue-900">Género:</label>
                        <select id="genero" name="genero"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                            <option value="">Seleccione:</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nacionalidad" class="text-blue-900">Nacionalidad:</label>
                        <input type="text" id="nacionalidad" name="nacionalidad"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="modnacer" class="text-blue-900">Modo de nacer:</label>
                        <select id="modnacer" name="modo_nacer"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                            <option value="">Seleccione:</option>
                            <option value="Natural">Natural</option>
                            <option value="Cesarea">Cesárea</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="canthermanos" class="text-blue-900">Cantidad de hermanos:</label>
                        <input type="text" id="canthermanos" name="canthermanos"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="nivedu" class="text-blue-900">Nivel educativo:</label>
                        <input type="text" id="nivedu" name="nivedu"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                </div>
            </form>
        </section>

        <!-- Información médica -->
        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4 text-blue-900">Información médica</h2>
            <form action="insertar.php" method="post" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="alergia" class="text-blue-900">¿Tiene alergias?</label>
                        <select id="alergia" name="alergia"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                            <option value="">Seleccione:</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desc_alergia" class="text-blue-900">Especifique:</label>
                        <input type="text" id="desc_alergia" name="desc_alergia"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
                    </div>
                    <div class="form-group">
                        <label for="discapacidad" class="text-blue-900">¿Tiene alguna discapacidad?</label>
                        <select id="discapacidad" name="discapacidad"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                            <option value="">Seleccione:</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desc_discapacidad" class="text-blue-900">Especifique:</label>
                        <input type="text" id="desc_discapacidad" name="desc_discapacidad"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none">
                    </div>

                </div>
                <div class="flex justify-center">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Registrar
                        </button>
                    </div>
            </form>
        </section>

        <!-- Botón de enviar -->


        <h3>Lista de niños</h3>
        <table border=1>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>FechaNac</th>
                <th>Edad</th>
                <th>Género</th>
                <th>Nacionalidad</th>
                <th>ModNacer</th>
                <th>CantHermanos</th>
                <th>NivEducativo</th>
                <th>Alergia</th>
                <th>Especificacion</th>
                <th>Discapacidad</th>
                <th>Especificacion</th>
            </tr>


            <?php
            include_once 'conectar_bd.php';

            $query = "SELECT * FROM nino";
            $data = mysqli_query($mysqli, $query);
            $total = mysqli_num_rows($data);
            
            if ($total != 0) {
                while ($row = mysqli_fetch_assoc($data)) {
                    echo "<tr> <td>" . $row['id'] . "</td> <td>" . $row['nombre'] .
                        "</td> <td>" . $row['fecha_nac'] . "</td> <td>" . $row['edad'] .
                        "</td> <td>" . $row['nacionalidad'] . "</td> <td>" . $row['genero'] .
                        "</td> <td>" . $row['modo_nacer'] . "</td> <td>" . $row['cant_hermanos'] .
                        "</td> <td>" . $row['alergias'] . "</td> <td>" . $row['especificacion'] .
                        "</td> <td>" . $row['niv_educativo'] . 
                        "</td> <td> <a href='delete.php?rn=$row[id]'>Borrar</td></tr>";
                }
            }
            ?>
    </div>
</body>

</html>