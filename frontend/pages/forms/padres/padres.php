<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padres</title>

    <!-- Tailwind CSS -->
    <!-- <script src="/frontend/js/tailwind.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="/frontend/assets/imgs/favicon.png" type="image/png" />


</head>

<body class="bg-blue-50">


    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8 text-blue-900">Registro de Tutores</h1>

        <!-- Datos del Niño -->
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
                        <label for="rp" class="text-blue-900">Relación Parental:</label>
                        <input type="text" id="rp" name="rp"
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

        <form action="prueba.php" method="post">
<label for="emp">Buscar tutor:</label>
    <input type="text" name="buscar" placeholder="ID">
    <button type="submit" name="submit">Buscar</button>
</form>
        
    </div>
</body>

</html>