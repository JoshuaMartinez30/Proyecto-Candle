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
        <img src="\Proyecto Candle\Imagenes\Productos\Candles\Kit.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Kit para descubrir nuestras fragancias</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>Este Kit para descubrir nuestras fragancias es la mejor manera de explorar la variedad de aromas de nuestro amplio catálogo. Cada kit incluye 5 velitas pequeñas, cada una con un aroma* diferente, y con una duración aproximada de 2 horas.</p>
        <h3>L 250.00 HNL</h3>
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
        <img src="\Proyecto Candle\Imagenes\Productos\Candles\Aurora.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Aurora Candle color Universo- aroma nuevo Raspberry & Vanilla</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>El "frasco" de esta vela está moldeado artesanalmente con cera. Solo se puede hacer una vela a la vez, lo cual las hace exclusivas y únicas. Puedes notar variaciones entre cada una, siendo así; irrepetibles. </p>
        <h3>L 450.00 HNL</h3>
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
        <img src="\Proyecto Candle\Imagenes\Productos\Candles\Sweet.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Sweet Home "M” 12 oz - Elige la fragancia</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>Transforma tu hogar en un oasis acogedor con Sweet Home "M” 12 oz. Con una vela aromática de estás que te brindarán una excelente potencia de aroma y sumado su decoración de flores naturales secas, crea una atmósfera relajante y decorativa.</p>
        <h3>L 520.00 HNL</h3>
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
        <img src="\Proyecto Candle\Imagenes\Candles.png" alt="Producto">
    </div>
    <div class="descripcion">
        <h3>Moonflower - Apothecary Candle 16 oz</h3>
        <p><u>Informacion Del Producto:</u></p>
        <p>Siente la primavera con Moonflower. La perfecta combinación de pera, flor de cerezo, rosa y agave crea una fragancia exquisita y elegante. Disfruta de este aroma que se convertirá en tu preferido.</p>
        <h3>L 700.00 HNL</h3>
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
