<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="contenedortodo">
            <div class="cajatrasera">
                <div class="cajatraseralogin">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia sesión para solicitar tu cita</p>
                    <button id="btn_iniciar">Iniciar Sesion</button>

                </div>
                <div class="cajatraseraregistrar">
                    <h3>¿aun no tienes una cuenta?</h3>
                    <p>Registrate para iniciar sesion</p>
                    <button id="btn_registro">Registrarse</button>

                </div>

            </div>

            <div class="contenedor_formularioinicio">
                <form action="" class="formulariologin">
                    <h2>Inicio de sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contrasena" name="contrasena">
                    <button>Entrar</button>
                </form>
                
                <form action="" class="Formularioregistro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre"name ="nombre">
                    <input type="text" placeholder="Apellido"name="apellido">
                    <input type="text" placeholder="Cedula"name="cedula">
                    <input type="text" placeholder="Sexo"name="sexo">
                    <input type="text" placeholder="Correo Electronico"name="correo">
                    <input type="text" placeholder="Contrasena"name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>



        </div>
    </main>
    <script src="scripts.js"></script>

</body>

</head>