<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="styles_Inicio.css">
    <style>
        .Mision {
            text-align: center;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        /* Estilos para centrar las imágenes */
        .imagen {
            text-align: center;
        }

        .imagen img {
            max-width: 100%; /* Asegura que las imágenes no se salgan de su contenedor */
            height: auto; /* Para mantener la proporción de la imagen */
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

    
    <h2 class="titulo">Candles</h2>
    <div class="imagen">
        <img src="\Proyecto Candle\Imagenes\Candles.png" alt="">
    </div>
    <div class="Mision">
        <p><u>Linea Candles</u> </p>
        <p>
            Nuestra línea de frascos clásicos que encajaran en cualquier hogar. 
        </p>
        <p> 
            En su etiqueta tendrás diferentes afirmaciones que te pueden acompañar en tu rutina positiva diaria.
        </p>
        <p><u>Informacion Del Producto:</u></p>
        <p>Siente la primavera con Moonflower. La perfecta combinación de pera,</p>
        <p>flor de cerezo, rosa y agave crea una fragancia exquisita y elegante.</p>
        <p>Disfruta de este aroma que se convertirá en tu preferido.</p>
    </div>
              
    <hr> 

    
    <h2 class="titulo">Refills</h2>
    <div class="imagen">
        <img src="\Proyecto Candle\Imagenes\Refills.png" alt="">
    </div>
    <div class="Mision">
        <p><u>Linea Refills</u></p>
         <p>
        Línea de refiles para rellenar cualquiera de nuestros productos. 
        </p>
        <p>
        Eco amigable y una gran experiencia para hacer en casa.
        </p>
        <p><u>Informacion Del Producto:</u></p>
        <p>¡Recarga tus home sprays en casa! Elige tu fragancia favorita y dale un segundo uso a tu frasco.</p>
        <p> Ahorra en cada compra y disfruta de la comodidad de tener tus propios home sprays en casa.</p>
         <p> ¡Haz que tu hogar siempre huela a fresco y limpio! ¡No esperes más y prueba nuestros refill ahora!</p>
    </div>
            
    <hr> 

    
    <h2 class="titulo">Diffusers</h2>
    <div class="imagen">
        <img src="\Proyecto Candle\Imagenes\Diffuser.png" alt="">
    </div>
    <div class="Mision">
        <p><u>Linea Diffuser</u></p>
        <p>
            Desde spray para textiles hasta lámparas y decoración que te ayudarán a aromatizar tu hogar.
        </p>
        <p><u>Informacion Del Producto:</u></p>
        <p>Aromatizantes para textiles. Se aplica sobre sábanas, cortinas, sillones, cojines, etc.</p>
        <p>Te desinfecta y aromatiza todo el espacio con un par de rociadas. El aroma fuerte dura 2 horas,</p>
         <p>pero si lo rocías por la mañana sobre tu cama, en la noche que llegues aún sentirás ese aroma suavemente.</p>
    </div>
    <hr> 

    
    <h2 class="titulo">For car</h2>
    <div class="imagen">
        <img src="\Proyecto Candle\Imagenes\ForCar.png" alt="">
    </div>
    <div class="Mision">
        <p><u>Linea For Car</u></p>
            <p>
                Los mejores aromatizantes para automóviles, 
            </p>
            <p> 
                con fragancias de alta calidad que te mantendrán tu carro lleno de deliciosos aromas.
            </p>
        <p><u>Informacion Del Producto:</u></p>
        <p>Potentes difusores que se colocan en la rejilla de ventilación de tu auto,</p>
        <p>al encender el aire acondicionado todo el aroma se esparce por la cabina.</p>
        <p>Su duración luego de que le quitas el seguro de plástico es de aproximadamente 1 mes,</p>
        <p>y con un buen uso puedes alargar la vida útil de este aparato por más tiempo.</p>
    </div>
    <hr>

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
