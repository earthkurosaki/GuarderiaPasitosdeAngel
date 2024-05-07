<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Padres</title>
</head>

<style>

#id_padre{
    display:none;
}

</style>
<body>
<!-- Codigo PHP -->
<?php
include_once 'conectarBD.php'; 
$id_padres = $_POST['id_padres'];

$query = "SELECT * FROM padres WHERE id_padres='$id_padres';";
$data = mysqli_query($mysqli, $query);                     
$total = mysqli_num_rows($data);



if($total > 0) {
    $row = mysqli_fetch_assoc($data);
    $nombres = $row['nombres'];
    $Apellidos = $row['Apellidos'];
    $cedula = $row['cedula'];    
    $nacionalidad = $row['nacionalidad'];  
    $telefono = $row['telefono'];      
    $direccion = $row['direccion']; 
    $correo_electronico = $row['correo_electronico'];   
    $parentesco = $row['parentesco'];        
}
?>

<!-- Formulario para editar -->
<div class="container">
    <h1>Registro de padres</h1>
    <form action="actualiza.php" method="post">
    <div class="form-group">
            <label for="id_padres">ID</label>
            <input type="text"  id="id_padre" name="id_padres" required value="<?php echo $id_padres?>">
        </div>
        <br>
        
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text"  id="nombres" name="nombres" required value="<?php echo $nombres?>">
        </div>
        <br>
        <div class="form-group">
            <label for="Apellidos">Apellidos</label>
            <input type="text" id="Apellidos" name="Apellidos" required  value="<?php echo $Apellidos?>">
        </div>
        <br>
        <div class="form-group">
            <label for="cedula">Cedula</label>
            <input type="text" id="cedula" name="cedula" required  value="<?php echo $cedula?>">
        </div>
        <br>
        <div class="form-group">
            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" id="nacionalidad" name="nacionalidad" required  value="<?php echo $nacionalidad?>">
        </div>
        <br>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" id="telefono" name="telefono" required  value="<?php echo $telefono?>">
        </div>
        <br>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" id="direccion" name="direccion" required  value="<?php echo $direccion?>">
        </div>
        <br>
        <div class="form-group">
            <label for="correo_electronico">Correo electronico</label>
            <input type="text"  id="correo_electronico" name="correo_electronico" required  value="<?php echo $correo_electronico?>">
        </div>
        <br>
        <div class="form-group">
            <label for="parentesco">Parentesco:</label>
            <input id="parentesco" name="parentesco" required  value="<?php echo $parentesco?>">
        </div>

        <button type="submit" name="update">Editar</button>
    </form>
</div>

</body>
</html>
