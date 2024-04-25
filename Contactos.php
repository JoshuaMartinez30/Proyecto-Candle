<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
    <link rel="stylesheet" type="text/css" href="styles_Contactos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .font {
            text-align: center;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <a href="Inicio.php"><img src="\Proyecto Candle\Imagenes\Logo.png" alt="Decora Candel"></a>
        </div>
        <div>
            <nav>
                <ul>
                    <li><a href="Inicio.php">Inicio</a></li>
                    <li><a href="Productos.php">Productos</a></li>
                    <li><a href="Sobre_Nosotros.php">Sobre Nosotros</a></li>
                    <li><a href="Contactos.php">Contactos</a></li>
                </ul>
            </nav>
        </div>

        <div class="icons">
            <div>
                <?php
                $usuario_autenticado = false; 
                if ($usuario_autenticado) {
                    echo '<a href="#"><i class="far fa-user fa-lg"></i></a>';
                    echo '<span>Bienvenido, Usuario</span>';
                } else {
                    echo '<a href="Login.php"><i class="far fa-user fa-lg"></i></a>';
                    echo '<a href="Login.php"><span>Login/Registrarse</span></a>';
                }
                ?>
            </div>
            <div>
                <i class="fas fa-cart-shopping fa-lg"></i>
                <span>Mi Carrito</span>
            </div>
        </div>
    </header>

    <div class="formulario">
        <div class="input-box">
            <input type="email" id="email" placeholder="Correo electrónico">
            <label for="email"></label>
        </div>
        <button type="submit">Enviar</button>
    </div>

    <hr>
    <div class="font">
        <h2>
            Contactos:
            </h2>
                <ul>
                    <li>
                        CEL: +504 3397—9588 | +504 3229—8514
                    </li>
                    <li>
                        EMAIL: INFO@DECORACANDLE.COM
                    </li>
                </ul>
    </div>
    
    <hr>
    
    <div class="font">
        <h2>
            Ubicaciones:
            </h2>
                <ul>
                    <li>
                    San Pedro Sula: Barrio Rio de Piedras, 27 calle 10 avenida. Edif. Terravista Plaza; piso 1 frente a recepción.
                    </li>
                    <li>
                    Tegucigalpa: Blvr. Morazan intersección con Ave. Los Proceres. Dentro de Casa Marmól, en Dubu.    
                    </li>
                    <li>
                    Ocotepeque: Barrio concepción, calle que dirige a antigua normal mixta, local blanco contiguo a autopartes Polanco.
                    </li>
                </ul>
    </div>

    <hr>
    <div class="contenedor">
        <h2>
            Redes Sociales:
        </h2>
        <a href="https://www.facebook.com/decoracandle"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/decoracandle/"><i class="fa-brands fa-instagram"></i></a> 
        <a href="https://www.tiktok.com/@decoracandle"><i class="fa-brands fa-tiktok"></i></a>        
    </div>


    <footer>
        <div>
            <ul>
                <p><a href="#">Política de Privacidad</a></p>
                <p><a href="#">Términos y Condiciones</a></p>
            </ul>
        </div>
    </footer>
</body>
</html>
