<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css2/formulario.css">
    <title>Inicio de Sesión</title>
    
</head>
<body>
    
    <main>
        
        <div class="contenedor__todo">   
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
 
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Registrate para que puedas inciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            
            <!--Formulario de Iniciar sesión y registro-->
            <div class="contenedor__login-register">
                <!--Iniciar sesión-->
                    <form action="inicio.php" class="formulario__login" method="post">
                        <h2>Iniciar sesión</h2>
                        <input type="text" name="nombre" placeholder="Usuario" required>
                        <input type="password" name="contrasena" placeholder="Contraseña" required>
                        <button type="submit" name="iniciar">Entrar</button>
                    </form>
                    <!--Registro-->
                    <form action="registro.php" class="formulario__register" method="post">
                        <h2>Registrarse</h2>
                        <input type="text" name="nombre" placeholder="Nombre completo" required>
                        <input type="password" name="contrasena" placeholder="Contraseña" required>
                        <input type="email" name="correo" placeholder="Correo" required>
                        <button type="submit" name="registrarse">Registrarse</button>
                    </form>
            </div>
        </div>

    </main>
    <script src="js/script.js"></script>

    
</body>
</html>