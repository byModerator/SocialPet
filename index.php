<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/stilologin/style.css">
    <link rel="icon" href="images/IMAGENES_RED_SOCIAL/Favicon-32x32.webp" type="image/x-icon">
    <link rel="shortcut icon" href="images/IMAGENES_RED_SOCIAL/Favicon-32x32.webp" type="image/x-icon">
    <title>SnapPet</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="signup_save.php" method="post" autocomplete="on">
                <h1>Crear Cuenta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span> o utilice su correo electrónico para registrarse</span>
                <input id="usernamesignup" name="username" required="required" type="text" placeholder="Usuario" />
                <input id="passwordsignup" name="password" required="required" type="password" placeholder="Contraseña"/>
                <!--  <input id="passwordsignup" name="firstname" required="required" type="text" placeholder=" Name"/>-->
                <!--     <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Last Name"/> -->

                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="">Tu género </label>
									<select id="passwordsignup"  name="gender">
										
										<option>Macho</option>
										<option>Hembra</option>
									</select>
                                </p>

                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>            </form>
        </div>

        
        <div class="form-container sign-in">
            <form  method="post" action="login.php" >
                <h1>Iniciar Sesión</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>o utiliza tu contraseña de correo electrónico</span>
                <input id="username" name="username" required="required" type="text">
                <input id="password" name="password" required="required" type="password" />
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button  class="login button" type="submit"  name="login">Iniciar Sesión</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¡Volviste!</h1>
                    <p>Ingrese sus datos personales para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>¡Hola amigo!</h1>
                    <p>Regístrese con sus datos personales para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="register">Crear Cuenta</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="scripts/script.js"></script>

</html>

