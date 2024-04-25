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
        <img src="\Proyecto Candle\Imagenes\Productos\Difussers\1.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Home Spray 8 oz - elige la fragancia</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>Aromatizantes para textiles. Se aplica sobre sábanas, cortinas, sillones, cojines, etc. Te desinfecta y aromatiza todo el espacio con un par de rociadas. El aroma fuerte dura 2 horas, pero si lo rocías por la mañana sobre tu cama, en la noche que llegues aún sentirás ese aroma suavemente.</p>
        <h3>L 450.00 HNL</h3>
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
        <img src="\Proyecto Candle\Imagenes\Productos\Difussers\2.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Wax Melt - elige la fragancia</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>Disfruta de la fragancia en tus espacios gracias a nuestras pastillas de cera de soya aromáticas. Perfectas para usar con quemadores o lámparas con plato para derretir, la cera de soya proporciona una liberación de fragancia suave y duradera. ¡Elige la fragancia que más te guste!</p>
        <h3>L 200.00 HNL</h3>
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
        <img src="\Proyecto Candle\Imagenes\Productos\Difussers\3.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Gotero 2 oz - elige la fragancia</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>Nuestro Gotero 2 oz es la perfecta combinación entre fragancia lujosa y usos múltiples. Todas nuestras fragancias están certificadas como clean scents, para uso en lámparas tipo quemadores o humificadores. Explora tu sentido del aroma, elige entre una amplia variedad de fragancias y crea un ambiente único en tu hogar.</p>
        <h3>L 400.00 HNL</h3>
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
        <img src="\Proyecto Candle\Imagenes\Productos\Difussers\4.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Reed Diffuser - Difusor de junco</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>Aromatiza tu hogar con la elegancia y confort de un difusor de junco Reed Diffuser. Incorpora las varillas de bambú para una difusión sin fuego ni electricidad y disfruta del aroma que embellece cada ambiente. Ideal para tu hogar, oficina o sala de estar. Un toque de exclusividad y estilo para tu hogar.</p>
        <h3>L 6500.00 HNL</h3>
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
