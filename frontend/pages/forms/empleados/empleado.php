<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>

    <!-- Tailwind CSS -->
    <!-- <script src="/frontend/js/tailwind.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="/frontend/assets/imgs/favicon.png" type="image/png" />
</head>

<body class="bg-blue-50">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8 text-blue-900">Formulario de empleados</h1>

        <!-- Datos del Niño -->
        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-bold mb-4 text-blue-900">Datos del empleado</h2>
            <form action="insertar1.php" method="post" class="space-y-4">
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
                        <label for="cedula" class="text-blue-900">Cedula:</label>
                        <input type="number" id="cedula" name="cedula"pattern="\d{11}" title="Por favor ingrese exactamente 11 dígitos"  placeholder="Cedula sin los guiones" 
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="fechanac" class="text-blue-900">Fecha de nacimiento</label>
                        <input type="text" id="fechanac" name="fechanac" placeholder="aaaa/mm/dd"
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
                        <label for="direccion" class="text-blue-900">Dirección:</label>
                        <input type="text" id="direccion" name="direccion"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="text-blue-900">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" pattern="\d{10}" title="Por favor ingrese exactamente 10 dígitos"  placeholder="Teléfono sin los guiones" 
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="correo_electronico" class="text-blue-900">Correo electrónico:</label>
                        <input type="email" id="correo_electronico" name="correo_electronico"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="fechaingreso" class="text-blue-900">Fecha de ingreso</label>
                        <input type="text" id="fechaingreso" name="fechaingreso" placeholder="aaaa/mm/dd"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="horariolabo" class="text-blue-900">Horario laborable:</label>
                        <input type="text" id="horariolabo" name="horariolabo"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="foracademica" class="text-blue-900">Formación académica:</label>
                        <input type="text" id="foracademica" name="foracademica"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="teleemergencia11" class="text-blue-900">Teléfono en caso de emergencia:</label>
                        <input type="text" id="teleemergencia11" name="teleemergencia11" pattern="\d{10}" title="Por favor ingrese exactamente 10 dígitos"  placeholder="Teléfono sin los guiones" 
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="id_puesto" class="text-blue-900">Puesto:</label>
                        <select id="id_puesto" name="id_puesto"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required>
                            <option value="">Seleccione:</option>
                            <option value="1">Cuidador/a</option>
                            <option value="2">Asistente</option>
                            <option value="3">Docente</option>
                            <option value="4">Mantenimiento</option>
                        </select>
                    </div>
                </div>
                 <!-- Botón de enviar -->
        <div class="flex justify-center">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Registrar
            </button>
        </div>

        <div class="flex justify-center">
    <a href="registrosdelete.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Registros
    </a>
</div>

                </section>

            </form>

          
    <br>
   


    
</body>

</html>