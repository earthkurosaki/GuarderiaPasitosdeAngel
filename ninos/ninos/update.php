<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar niños</title>
</head>
<body>
<!-- Codigo PHP -->
<?php
include_once 'conectarBD.php'; 
$id = $_POST['id'];

$query = "SELECT * FROM ninos WHERE id='$id'";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if($total > 0) {
    $row = mysqli_fetch_assoc($data);
    $nombre= $row['nombre'];
    $fechanac= $row['fecha_nac'];
    $edad= $row['edad']; 
    $nacionalidad= $row['nacionalidad']; 
    $genero= $row['genero']; 
    $modnacer= $row['modo_nacer']; 
    $canthermanos= $row['cant_hermanos']; 
    $alergias= $row['alergias']; 
    $especificacion= $row['especificacion']; 
    $nivedu= $row['niv_educativo']; 
}
?>

<!-- Formulario para editar -->
<div class="container">
    <h1>Modificar niños</h1>
    <form action="actualiza.php" method="post">
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" id="id" name="id" value="<?php echo $id?>"> 
        </div> <br>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre?>">
        </div> <br>
        <div class="form-group">
            <label for="fechanac">Fecha nacimiento:</label>
            <input type="text" id="fechanac" name="fechanac" rows="5" value="<?php echo $fechanac?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad" value="<?php echo $edad?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="nacionalidad">Nacionalidad:</label>
            <input id="nacionalidad" name="nacionalidad" rows="5" value="<?php echo $nacionalidad?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="genero">Género:</label>
            <input type="text" id="genero" name="genero" rows="5" value="<?php echo $genero?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="modnacer">Modo de nacer:</label>
            <input type="text" id="modnacer" name="modnacer" rows="5" value="<?php echo $modnacer?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="canthermanos">Cantidad de hermanos:</label>
            <input type="text" id="canthermanos" name="canthermanos" rows="5" value="<?php echo $canthermanos?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="alergias">Alergias:</label>
            <input type="text" id="alergias" name="alergias" rows="5" value="<?php echo $alergias?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="especificaciones">Especificaciones:</label>
            <input type="text" id="especificaciones" name="especificacion" rows="5" value="<?php echo $especificacion?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="nivedu">Nivel académico:</label>
            <input type="text" id="nivedu" name="nivedu" rows="5" value="<?php echo $nivedu?>"></input>
        </div> <br>


        <button type="submit" name="update">Editar</button>
    </form>
</div>

</body>
</html>
