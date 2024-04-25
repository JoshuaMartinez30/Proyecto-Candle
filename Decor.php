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
        <img src="\Proyecto Candle\Imagenes\Productos\Decor\1.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Bubble Candle - Mediana - Vela decorativa con aroma</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>Esta Bubble Candle - Mediana es la perfecta combinación de diseño moderno y juvenil con un delicado aroma. Una vela decorativa hecha con materiales de la más alta calidad para adornar su hogar con un toque de refinado estilo. ¡Una vela que destaca de lo común!</p>
        <h3>L 300.00 HNL</h3>
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
        <img src="\Proyecto Candle\Imagenes\Productos\Decor\2.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Palo Santo set de 3 sticks - Purificador de energías</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>El palo santo es una madera aromática que se utiliza comúnmente en la limpieza y la purificación espiritual en muchas culturas sudamericanas. Cuando se quema, el palo santo emite una fragancia dulce y fragante que se cree que tiene propiedades curativas y espirituales.</p>
        <h3>L 320.00 HNL</h3>
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
        <img src="\Proyecto Candle\Imagenes\Productos\Decor\3.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Donut Vase - Set de dos Jarrones de ceramica estilo Nórdico Moderno</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>Agrega un toque moderno y único a tu hogar con estos dos jarrones hechos a mano con cerámica en tonos beige. Esta elegante combinación estilo nórdico moderno encantará a todos. Decora el hogar y destaca tu estilo con el Set de los jarrones Donut Vase.</p>
        <h3>L 1,900.00 HNL</h3>
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
        <img src="\Proyecto Candle\Imagenes\Productos\Decor\4.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Juego de jarrones cerámica con Líneas acabado glass - piezas decorativas para el hogar</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>Juego de tres jarrones de cerámica, son tipo florero, tiene un acabado brillante tipo glass, su color es una combinación de beige y blanco. Decóralos con pampas, eucalipto, baby bread o cualquier tipo de flores.</p>
        <h3>L 1,400.00 HNL</h3>
        <div class="cantidad">
            <button onclick="restarCantidad(4)">-</button>
            <span id="cantidad_4">1</span>
            <button onclick="sumarCantidad(4)">+</button>
        </div>
        <button class="agregar-carrito" onclick="agregarAlCarrito(4)">Agregar al carrito</button>
    </div>
</div>

<div class="producto">
    <div class="imagen">
        <img src="\Proyecto Candle\Imagenes\Productos\Decor\5.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Lampara dorada con blanco con temporizador - Candle Warmer Lamp</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>Triplifica (x3) la vida de uso de tus velas. Con esta lámpara sacarás el mejor provecho a tus velas, alargando la vida de estas hasta 3 veces. Disfrutarás más tiempo de ese aroma. Una manera más segura de disfrutar tus velas: Programa por cuanto tiempo quieres que este encendida. También regula la intensidad de la luz.</p>
        <h3>L 1,650.00 HNL</h3>
        <div class="cantidad">
            <button onclick="restarCantidad(5)">-</button>
            <span id="cantidad_5">1</span>
            <button onclick="sumarCantidad(5)">+</button>
        </div>
        <button class="agregar-carrito" onclick="agregarAlCarrito(5)">Agregar al carrito</button>
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
