<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar empleados</title>
</head>
<style>

#id_tutor{
    display:none;
}
 </style>
<body>
<!-- Codigo PHP -->
<?php
include_once 'conecta.php'; 
$id_tutor = $_POST['id_tutor'];

$query = "SELECT * FROM tutores WHERE id_tutor='$id_tutor'";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if($total > 0) {
$row = mysqli_fetch_assoc($data);
$nombre= $row['nombre'];
$apellido= $row['apellido'];
$rp= $row['relacion_parental']; 
$fechanac= $row['fechanac']; 
$cedula= $row['cedula']; 
$trabajo= $row['lugar_trabajo']; 
$cargo= $row['cargo']; 
$nivel= $row['nivel_academico']; 
$profesion= $row['profesion']; 
$direccion= $row['direccion']; 
$telefono= $row['telefono']; 
$email= $row['email']; 
$estado= $row['estado_civil']; 
}
?>

<!-- Formulario para editar -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="/frontend/assets/imgs/favicon.png" type="image/png" />
</head>

<body class="bg-blue-50">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8 text-blue-900">Editar tutor</h1>

        <!-- Datos del Niño -->
        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-bold mb-4 text-blue-900">Datos del tutor:</h2>
            <form action="actualizacion.php" method="post" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                
         
<input type="text" id="id_tutor" name="id_tutor"
    class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
    required value="<?php echo $id_tutor?>">
                
                    
                    <div class="form-group">
                        <label for="nombre" class="text-blue-900">Nombre:</label>
                        <input type="text" id="nombre" name="nombre"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $nombre?>">
                    </div>

                    <div class="form-group">
                        <label for="apellido" class="text-blue-900">Apellido:</label>
                        <input type="text" id="apellido" name="apellido"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $apellido?>">
                    </div>
                    <div class="form-group">
                        <label for="relacion_parental" class="text-blue-900">Relación Parental:</label>
                        <input type="text" id="relacion_parental" name="relacion_parental"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $rp?>">
                    </div>
                    <div class="form-group">
                        <label for="fechanac" class="text-blue-900">Fecha de nacimiento:</label>
                        <input type="text" id="fechanac" name="fechanac" placeholder="aaaa/mm/dd"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $fechanac?>">
                    </div>
                    <div class="form-group">
                        <label for="cedula" class="text-blue-900">Cédula:</label>
                        <input type="text" id="cedula" name="cedula" placeholder="aaaa/mm/dd"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $cedula?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="lugar_trabajo" class="text-blue-900">Lugar de trabajo:</label>
                        <input type="text" id="lugar_trabajo" name="lugar_trabajo"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $trabajo?>">
                    </div>
                    <div class="form-group">
                        <label for="cargo" class="text-blue-900">Cargo:</label>
                        <input type="text" id="cargo" name="cargo" 
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $cargo?>">
                    </div>
                    <div class="form-group">
                        <label for="nivel_academico" class="text-blue-900">Nivel Académico:</label>
                        <input type="text" id="nivel_academico" name="nivel_academico"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $nivel?>">
                    </div>
                    <div class="form-group">
                        <label for="profesion" class="text-blue-900">Profesión:</label>
                        <input type="text" id="profesion" name="profesion" placeholder="aaaa/mm/dd"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $profesion?>">
                    </div>
                    <div class="form-group">
                        <label for="direccion" class="text-blue-900">Dirección:</label>
                        <input type="text" id="direccion" name="direccion"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $direccion?>">
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="text-blue-900">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $telefono?>">
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-blue-900">Correo Eléctronico:</label>
                        <input type="text" id="email" name="email" 
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $email?>">
                    </div>
                    <div class="form-group">
                        <label for="estado_civil" class="text-blue-900">Estado Civil:</label>
                        <select id="estado_civil" name="estado_civil"
                            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:border-blue-500 focus:outline-none"
                            required value="<?php echo $estado?>">
                            <option value="">Seleccione:</option>
                            <option value="1">Soltero</option>
                            <option value="2">Casado</option>
                        </select>
                    </div>
                </div>
                 <!-- Botón de editar -->
        <div class="flex justify-center">
            <button type="submit" name="update" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Editar
            </button>
        </div>
                </section>

            </form>


       
    </form>
</div>

</body>
</html>
