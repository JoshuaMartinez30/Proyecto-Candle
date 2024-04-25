<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="styles_Productos.css">
</head>
<body>
    <header>
        <div>
            <a href="Inicio.php"><img src="\Proyecto Candle\Imagenes\Logo.png" alt="Decora Candel"></a>
        </div>
        <div>
            <nav>
                <ul>
                    <li><a href="Productos.php">Candles</a></li>
                    <li><a href="Refills.php">Refills</a></li>
                    <li><a href="Difussers.php">Difussers</a></li>
                    <li><a href="For_Car.php">For Car</a></li>
                    <li><a href="Decor.php">Decor</a></li>
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

    <div class="producto">
    <div class="imagen">
        <img src="\Proyecto Candle\Imagenes\Productos\Refills\Refill1.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Refill para difusor para carro / elige la fragancia</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>¡Ahora puedes reutilizar tus difusores de carro llenándolos nuevamente con estos refills! Este frasco pequeño te alcanzará para dos usos más, solo recuerda seguir al pie de la letra las instrucciones de su uso. También puedes utilizarlo como gotero para tus difusores de agua.</p>
        <h3>L 150.00 HNL</h3>
        <div class="cantidad">
            <button onclick="restarCantidad(1)">-</button>
            <span id="cantidad_1">1</span>
            <button onclick="sumarCantidad(1)">+</button>
        </div>
        <button class="agregar-carrito" onclick="agregarAlCarrito(1)">Agregar al carrito</button>
    </div>
</div>


<div class="producto">
    <div class="imagen">
        <img src="\Proyecto Candle\Imagenes\Productos\Refills\Refill2.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Refill para Home sprays / elige la fragancia</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>¡Recarga tus home sprays en casa! Elige tu fragancia favorita y dale un segundo uso a tu frasco. Ahorra en cada compra y disfruta de la comodidad de tener tus propios home sprays en casa. ¡Haz que tu hogar siempre huela a fresco y limpio! ¡No esperes más y prueba nuestros refill ahora! </p>
        <h3>L 300.00 HNL</h3>
        <div class="cantidad">
            <button onclick="restarCantidad(2)">-</button>
            <span id="cantidad_2">1</span>
            <button onclick="sumarCantidad(2)">+</button>
        </div>
        <button class="agregar-carrito" onclick="agregarAlCarrito(2)">Agregar al carrito</button>
    </div>
</div>



<div class="producto">
    <div class="imagen">
        <img src="\Proyecto Candle\Imagenes\Productos\Refills\Refill3.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Refill para velas - Experiencia en casa</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>¡Crea un ambiente acogedor en tu hogar con nuestro Refill para velas! Este kit incluye un vaso con cera lista para derretir en el microondas y personalizar tu vela. Disfruta del placer de hacer tu propia vela y relájate con su caliente y aromático aroma.</p>
        <h3>L 380.00 HNL</h3>
        <div class="cantidad">
            <button onclick="restarCantidad(3)">-</button>
            <span id="cantidad_3">1</span>
            <button onclick="sumarCantidad(3)">+</button>
        </div>
        <button class="agregar-carrito" onclick="agregarAlCarrito(3)">Agregar al carrito</button>
    </div>
</div>


<div class="producto">
    <div class="imagen">
        <img src="\Proyecto Candle\Imagenes\Productos\Refills\Refill4.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Refill para Reed Diffuser / elige la fragancia</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>¡Recarga tus Difusores de junco en casa! Elige tu fragancia favorita y dale un segundo uso a tu frasco. Ahorra en cada compra y disfruta de la comodidad de tener tus Reed Diffuser en casa. ¡Haz que tu hogar siempre huela a fresco y limpio!</p>
        <h3>L 400.00 HNL</h3>
        <div class="cantidad">
            <button onclick="restarCantidad(4)">-</button>
            <span id="cantidad_4">1</span>
            <button onclick="sumarCantidad(4)">+</button>
        </div>
        <button class="agregar-carrito" onclick="agregarAlCarrito(4)">Agregar al carrito</button>
    </div>
</div>






    <footer>
        <div>
            <ul>
                <p><a href="#">Política de Privacidad</a></p>
                <p><a href="#">Términos y Condiciones</a></p>
            </ul>
        </div>
    </footer>

    <script>
    function sumarCantidad(id) {
        var cantidad = parseInt(document.getElementById('cantidad_' + id).innerText);
        document.getElementById('cantidad_' + id).innerText = cantidad + 1;
    }

    function restarCantidad(id) {
        var cantidad = parseInt(document.getElementById('cantidad_' + id).innerText);
        if (cantidad > 1) {
            document.getElementById('cantidad_' + id).innerText = cantidad - 1;
        }
    }

    function agregarAlCarrito(id) {
        var cantidad = parseInt(document.getElementById('cantidad_' + id).innerText);
        // Aquí puedes agregar la lógica para agregar el producto al carrito
        console.log("Producto " + id + " agregado al carrito con cantidad: " + cantidad);
    }
</script>

</body>
</html>
