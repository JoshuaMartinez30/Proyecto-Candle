<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="styles_Inicio.css">
</head>
<body>
    <header>
        <div>
            <img src="\Proyecto Candle\Imagenes\Logo.png" alt="Decora Candel">
        </div>
        <div>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Sobre Nosotros</a></li>
                    <li><a href="#">Contactos</a></li>
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
    <div class="slider-box">
        <ul>
            <li>
                <img src="\Proyecto Candle\Imagenes\Candles.png" alt="">
                <div class="Texto1">
                    <p>
                    Nuestra línea de frascos clásicos que encajaran en cualquier hogar. 
                    </p>
                    <p> 
                    En su etiqueta tendrás diferentes afirmaciones que te pueden acompañar en tu rutina positiva diaria.
                    </p>
            
                </div>
            </li>
        </ul>
    </div>
    <hr> 

    
    <h2 class="titulo">Refills</h2>
    <div class="slider-box">
        <ul>
            <li>
                <img src="\Proyecto Candle\Imagenes\Refills.png" alt="">
                <div class="Texto2">
                    <p>
                    Línea de refiles para rellenar cualquiera de nuestros productos. 
                    </p>
                    <p>
                    Eco amigable y una gran experiencia para hacer en casa.
                    </p>
            
                </div>
            </li>
        </ul>
    </div>
    <hr> 

    
    <h2 class="titulo">Diffusers</h2>
    <div class="slider-box">
        <ul>
            <li>
                <img src="\Proyecto Candle\Imagenes\Diffuser.png" alt="">
                <div class="Texto3">
                    <p>
                    Desde spray para textiles hasta lámparas y decoración que te ayudarán a aromatizar tu hogar.
                    </p>
            
                </div>
            </li>
        </ul>
    </div>
    <hr> 

    
    <h2 class="titulo">For car</h2>
    <div class="slider-box">
        <ul>
            <li>
                <img src="\Proyecto Candle\Imagenes\ForCar.png" alt="">
                <div class="Texto4">
                    <p>
                    Los mejores aromatizantes para automóviles, 
                    </p>
                    <p> 
                    con fragancias de alta calidad que te mantendrán tu carro lleno de deliciosos aromas.
                    </p>
            
                </div>
            </li>
        </ul>
    </div>
    <hr>

   
    <h2 class="titulo">Decor</h2>
    <div class="slider-box">
        <ul>
            <li>
                <img src="\Proyecto Candle\Imagenes\Decor.png" alt="">
                <div class="Texto5">
                    <p>
                    Una variedad de accesorios para tu hogar y para el cuidado de tus velas
                    </p>
            
                </div>
            </li>
        </ul>
    </div>
    <hr>

    <footer>
        <div>
            
            <p>Contacto:</p>
            <p>CEL: +504 3397—9588 | +504 3229—8514</p>
        </div>
        <div>
          
            <ul>
                <li><a href="#">Política de Privacidad</a></li>
                <li><a href="#">Términos y Condiciones</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>