<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/ico" href="./imagenes/taquito.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style_index.css">
    <link rel="stylesheet" href="style_menu.css">
    <link rel="stylesheet" href="footer_menu.css">
    <link rel="stylesheet" href="contac.css">
    <link rel="stylesheet" href="formulario.css">
    <title>Taco Store</title>
  </head>
  <body>
    <div id="app">
      <div class="menu">
        <div class="contenido">
          <div class="izquierda">
            <a class="buttonGen" href="index.php">
              Inicio
            </a>
            <a class="buttonGen" href="contact.php">
              Contacto
            </a>
          </div>
          <p class="texto">
            Taco
          </p>
          <a class="imagen"  href="index.php">
          </a>
          <p class="texto">
            Store
          </p>
          <div class="derecha">
           
           
            <div class="two columns u-pull-right">
            <ul>
                <li class="submenu">
                    <img src="img/cart.png" alt="">
                    <div id="carrito">
                        <p class="vacio">carrito vacio</p>
                        <table id="lista-carrito" class="u-full-width">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Platillos</th>
                                    <th>Precios</th>
                                </tr>
                            </thead>
<tbody>
    
</tbody>
                        </table>
                        <a href="#" id="vaciar-carrito"
                        class="button u-full-width">vaciar carrito</a>
                    </div>
                </li>
            </ul>
        </div>
            </a>
            
          </div>
          
          
        </div>
        
      </div>
      <div class="hero">
    <div class="row">
        <div class="six columns">
            <div class="contenido hero">
                <h2>Prueba un taquito</h2>
                <p>Todos los taquitos a $15</p>
                <form>
                     <input class="u-full-width" type="text" placeholder="¿Que te gustaria probar?" id="buscador">
                     <input type="submit" class="sumit-buscador">

                </form>

            </div>
        </div>
    </div>
</div>
    
<div class="barra">
    <div class="conteiner">
        <div class="row">
            <div class="four colums icono icono1">
                <p>100 Platillos diferentes<br>
                Explora los nuevos platillos </p>
            </div>
            <div class="four colums icono icono2">
                <p>Cheff expertos<br>
                Prueba nuestros nuevos combos</p>
            </div>
            <div class="four colums icono icono3">
                <p>Bebida ilimitada<br>
                Prueba tu bebida favorita </p>
            </div>
        </div>
    </div>
</div>



<div id="lista-platillos" class="container">
    <h1 class="Encabezado">Pedidos en Linea</h1>

    <div class="row">
        <div class="four columns">
            <div class="card">
                <img src="img/platillo1.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos de camaron</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$23 <span class="u-pull-right">17</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="1">Agregar al Carrito</a>

                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/platillo2.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos de birria</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$19 <span class="u-pull-right">11</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="2">Aguregar al Carrito</a>

                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/platillo3.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos de carnitas</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$24 <span class="u-pull-right">18</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="3">Agregar al Carrito</a>

                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="four columns">
            <div class="card">
                <img src="img/platillo4.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos al vapor</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$25 <span class="u-pull-right">15</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="4">Agregar al Carrito</a>

                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/platillo5.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos Dorados</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$20 <span class="u-pull-right">13</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="5">Agregar al Carrito</a>

                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/platillo1.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos de camaron</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$23 <span class="u-pull-right">17</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="6">Agregar al Carrito</a>

                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="four columns">
            <div class="card">
                <img src="img/platillo2.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos de birria</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$19 <span class="u-pull-right">11</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="7">Agregar al Carrito</a>

                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/platillo3.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos de carnitas</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$24 <span class="u-pull-right">18</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="8">Agregar al Carrito</a>

                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/platillo4.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos al vapor</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$25 <span class="u-pull-right">15</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="9">Agregar al Carrito</a>

                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="four columns">
            <div class="card">
                <img src="img/platillo5.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos dorados</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$20 <span class="u-pull-right">13</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="10">Aguregar al Carrito</a>

                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/platillo1.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos de camaron</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$23 <span class="u-pull-right">17</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="11">Agregar al Carrito</a>

                </div>
            </div>
        </div>
        <div class="four columns">
            <div class="card">
                <img src="img/platillo2.jpg" class="imagen-platillo u-full-width">
                <div class="info-card">
                    <h4>Taquitos de birria</h4>
                    <p>bebida ilimitada</p>
                    <img src="img/estrellas.png">
                    <p class="precio">$19 <span class="u-pull-right">11</span></p>
                    <a href="#" class="u-full-width buton-primary button input agregar-carrito" data-id="12">Agregar al Carrito</a>

                </div>
            </div>
        </div>

    </div>
</div>

<footer class="footer">
<div class="container">
<div class="row">
    <div class="four columns">
        <nav class="menu-meduim">
            <a class="enlace" href="#">Pedidos a domicilio</a>
            <a class="enlace" href="#">Pedidos en linea</a>
            <a class="enlace" href="#">Pedidos por telefono</a>
            <a class="enlace" href="#">Menu</a>
            <a class="enlace" href="#">Bebidas</a>

        </nav>
    </div>
<div class="four columns">
    <nav class="menu-bajo">
        <a class="enlace" href="#">Restaurante</a>
        <a class="enlace" href="#">Ubicacion</a>
        <a class="enlace" href="contact.php">Telefono</a>
    </nav>

</div>
</div>
</div>
</footer>

<script src="js/app.js"></script>
  </body>
</html>
