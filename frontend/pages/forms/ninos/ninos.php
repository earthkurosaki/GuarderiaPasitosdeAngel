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
                    <!-- Información médica -->
                    <h2 class="text-xl font-semibold mb-4 text-blue-900">Información médica</h2>
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
                    <!-- Botón de enviar -->
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                       Registrar 
                    </button>
                        <br>
                        <br>
                    
                </div>

               
    </div>
    </form>
    </section>

  <!--  <div class="container mx-auto">
        <h3 class="text-lg font-bold mb-4">Lista de niños</h3>
        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-2 py-1">#</th>
                        <th class="px-2 py-1">Nombre</th>
                        <th class="px-2 py-1">Apellido</th>
                        <th class="px-2 py-1">FechaNac</th>
                        <th class="px-2 py-1">Edad</th>
                        <th class="px-2 py-1">Género</th>
                        <th class="px-2 py-1">Nacionalidad</th>
                        <th class="px-2 py-1">ModNacer</th>
                        <th class="px-2 py-1">CantHermanos</th>
                        <th class="px-2 py-1">NivEdu</th>
                        <th class="px-2 py-1">Alergia</th>
                        <th class="px-2 py-1">Desc</th>
                        <th class="px-2 py-1">Discapacidad</th>
                        <th class="px-2 py-1">Desc</th>
                        <th class="px-2 py-1">Modificar</th>
                        <th class="px-2 py-1">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    </*?php
                    include_once 'conectar_bd.php';

                    $query = "SELECT * FROM nino";
                    $data = mysqli_query($mysqli, $query);
                    $total = mysqli_num_rows($data);

                    if ($total != 0) {
                        while ($row = mysqli_fetch_assoc($data)) {
                            echo "<tr>
                            <td class='px-2 py-1'>" . $row['id_nino'] . "</td>
                            <td class='px-2 py-1'>" . $row['nombre'] . "</td>
                            <td class='px-2 py-1'>" . $row['apellido'] . "</td>
                            <td class='px-2 py-1'>" . $row['fecha_nac'] . "</td>
                            <td class='px-2 py-1'>" . $row['edad'] . "</td>
                            <td class='px-2 py-1'>" . $row['genero'] . "</td>
                            <td class='px-2 py-1'>" . $row['nacionalidad'] . "</td>
                            <td class='px-2 py-1'>" . $row['modo_nacer'] . "</td>
                            <td class='px-2 py-1'>" . $row['cant_hermanos'] . "</td>
                            <td class='px-2 py-1'>" . $row['niv_educativo'] . "</td>
                            <td class='px-2 py-1'>" . $row['alergia'] . "</td>
                            <td class='px-2 py-1'>" . $row['desc_alergia'] . "</td>
                            <td class='px-2 py-1'>" . $row['discapacidad'] . "</td>
                            <td class='px-2 py-1'>" . $row['desc_discapacidad'] . "</td>
                            <td class='px-2 py-1'><a href='update.php?rn=$row[id_nino]' class='text-blue-500 hover:underline'>Modificar</a></td>
                            <td class='px-2 py-1'><a href='delete.php?sn=$row[id_nino]' class='text-red-500 hover:underline'>Borrar</a></td>
                        </tr>";
                        }
                    }*/
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    </div>
<br>
<br> 
    <div class="flex justify-center">
    <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                <a href="http://localhost/GuarderiaPasitosdeAngel/frontend/pages/forms/padres/padres.php">Volver</a>
            </button>
    
    </div>
<br>
<br>
    <footer>

    </footer>
        </div>
                -->
        
        <!-- Sección de Padres            -->

        
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8 text-blue-900">Registro de Tutores</h1>

        <!-- Datos del Padre -->
        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-bold mb-4 text-blue-900">Datos del tutor</h2>
            <form action="inserta.php" method="post" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    
                    <div class="form-group">
                        <label for="nombre" class="text-blue-900">Nombre:</label>
                        <input type="text" id="nombre" name="nombre"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="text-blue-900">Apellido:</label>
                        <input type="text" id="fechanac" name="apellido"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>

                    

                    <div class="form-group">
                        <label for="fechanac" class="text-blue-900">Fecha de Nacimiento:</label>
                        <input type="text" id="fechanac" name="fechanac" placeholder="YYYY/MM/dd"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="cedula" class="text-blue-900">Cédula de Identidad:</label>
                        <input type="text" id="cedula" name="cedula" 
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    
                    <div class="form-group">
                        <label for="trabajo" class="text-blue-900">Lugar de Trabajo:</label>
                        <input type="text" id="trabajo" name="trabajo"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    
                    <div class="form-group">
                        <label for="cargo" class="text-blue-900">Cargo:</label>
                        <input type="text" id="cargo" name="cargo"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="nivel" class="text-blue-900">Nivel Académico:</label>
                        <input type="text" id="nivel" name="nivel"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="profesion" class="text-blue-900">Profesión:</label>
                        <input type="text" id="profesion" name="profesion" placeholder="Opcional"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="direccion" class="text-blue-900">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" 
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="text-blue-900">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" 
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="text-blue-900">Dirección Email:</label>
                        <input type="text" id="email" name="email" 
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="estado" class="text-blue-900">Estado Civil:</label>
                        <select id="estado" name="estado"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                            <option value="">Seleccione:</option>
                            <option value="Si">Casado</option>
                            <option value="No">Soltero</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="rp" class="text-blue-900">Relación Parental:</label>
                        <input type="text" id="rp" name="rp" 
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    
                    <div class="flex justify-center">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Registrar
            </button>

            
        </div>

                </div>
            </form>
        </section>

       
        <!-- Botón de registros -->

  
        
    </div>
</body>

</html>