<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/ico" href="./imagenes/taquito.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style_index.css">
    <link rel="stylesheet" href="style_menu.css">
    <link rel="stylesheet" href="footer_menu.css">
    <link rel="stylesheet" href="contac.css">
    <link rel="stylesheet" href="formulario.css">
    <link rel="stylesheet" href="modal.css">
    <title>Taco Store</title>
  </head>
  <body>
    <div id="app">
      <div class="menu">
        <div class="contenido">
          <div class="izquierda">
            <a class="buttonGen" href="menu.php">
              Menu
            </a>
            <a class="buttonGen" href="contact.php">
              Contacto
            </a>
          </div>
          <p class="texto">
            Taco
          </p>
          <a class="imagen"  href="index.php"></a>
          <p class="texto">
            Store
          </p>
          <div class="derecha">
          <?php
            if(isset($_SESSION['nombre']))
            {
              echo'
                  <p class="salir">
                    Bienvenido '.$_SESSION['nombre'].'
                  </p>
                  <a class="salir" href="salir.php">
                    Salir
                  </a>';
            }
            else
            {
              echo'
                  <a class="buttonGenR" href="#">
                    Registarte
                  </a>
                  <a class="buttonGenI" href="#">
                    Ingresar
                  </a>';
            }
          ?>
            
          </div>
        </div>
      </div>
      <div class="welcome">
        <div class="cont">
          <div class="titulo">
            ¡Bienvenidos a Tacos Store!
          </div>
          <div class="desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quae, tempore vel soluta sapiente accusamus possimus harum nostrum, eius et id? Deleniti tenetur dolore accusamus nam. Autem, distinctio? Reiciendis, explicabo.
          </div>
          <div class="fondo">
          </div>
        </div>
      </div>
    </div>
    <section class="modalR">
      <div class="modal__container">
        <img src="./imagenes/EditUser.png" classc="modal__img">
        <h2 class="modal__tittel">¡Bienvenido a Taco Store!</h2>
        <form action="registrar.php" method="post" class="formulario">
                <h1>Registrate</h1>
                <div class="contenedor">
                    <div class="input-contenedor">
                        <i class='bx bxs-user icon'></i>
                        <input type="text" name="txtNombre" placeholder="Nombre Completo" required>
                    </div>
        
                    <div class="input-contenedor">
                        <i class='bx bx-envelope icon'></i>
                        <input type="email" name="eCorreo" placeholder="correo electronico" required>
                    </div>
        
                    <div class="input-contenedor">
                        <i class='bx bx-lock-alt icon'></i>
                        <input type="password" name="pContrasenia" placeholder="contraseña" required>
                    </div>

                    <div class="input-contenedor">
                        <i class='bx bx-lock-alt icon'></i>
                        <input type="text" name="Tel" placeholder="Telefono" required>
                    </div>
        
                    <input type="submit" value="Registrate" class="button">
        
                    <p>Al registrarte, aceptas las condiciones de uso y privacidad.</p>
                    <p>¿Ya tienes cuenta? <a href="#" class="linkR">Iniciar Sesión</a></p>
                </div>
        </form>
        <a href="index.php" class="modal__close">Regresar</a>
      </div>
    </section>
    <section class="modalI">
      <div class="modal__container">
        <img src="./imagenes/EditUser.png" classc="modal__img">
        <h2 class="modal__tittel">¡Bienvenido a Taco Store!</h2>
        <form action="veriflogin.php" method="post" class="formulario">
                <h1>Login</h1>
                <div class="contenedor">
        
                    <div class="input-contenedor">
                        <i class='bx bx-envelope icon'></i>
                        <input type="text" name="correo" placeholder="correo electronico">
                    </div>
        
                    <div class="input-contenedor">
                        <i class='bx bx-lock-alt icon'></i>
                        <input name="contra" type="password" placeholder="contraseña">
                    </div>
                    <input type="submit" value="Login" class="button">
                    <p>¿No recuerdas tu contraseña? Contactanos, nosotros te ayudaremos!</p>
                    <p>¿No tienes cuenta? <a href="#" class="linkI">Registrate</a></p>
                </div>
            </form>
        <a href="index.php" class="modal__close">Regresar</a>
      </div>
    </section>
    <script type="module" src="main.js"></script>
  </body>
</html>
