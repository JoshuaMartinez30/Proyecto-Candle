<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="styles_Sobre_Nosotros.css">
    <style>
        .Mision {
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
                    <li><a href="Spbre_Nosotros.php">Sobre Nosotros</a></li>
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

    <div class="Mision">
        <h2>
            Mision
            </h2>
                <p>
                    En Candle, nos dedicamos a ofrecer velas aromáticas de la más alta calidad, elaboradas con ingredientes naturales y fragancias exquisitas. 
                    Nos esforzamos por crear experiencias sensoriales únicas para nuestros clientes, transformando los espacios en entornos acogedores y relajantes. Nuestro compromiso 
                    es proporcionar 
                    productos que promuevan el bienestar y el equilibrio emocional, contribuyendo así al estilo de vida de nuestros clientes y al cuidado del medio ambiente.
                </p>
    </div>

    <div class="Mision">
        <h2>
        Vision
            </h2>
                <p>
                Ser reconocidos como líderes en el mercado de velas aromáticas, ofreciendo una amplia gama de productos innovadores y de calidad premium. Nos esforzamos por expandir 
                nuestra presencia a nivel nacional e internacional, manteniendo siempre nuestro compromiso con la excelencia y la sostenibilidad. 
                Buscamos ser la primera opción para aquellos que buscan crear ambientes cálidos, aromáticos y reconfortantes en sus hogares, oficinas y espacios de relajación.
                </p>
    </div>
    <div class="Mision">
        <h2 >
        Valores
            </h2>
    </div>
    <div class>
                <ul>
                    <li><b><u>Calidad:</u></b> Nos comprometemos a ofrecer productos de la más alta calidad, utilizando ingredientes naturales y 
                        fragancias cuidadosamente seleccionadas para proporcionar una experiencia aromática excepcional.</li>
                    <li><b><u>Innovación:</u></b> Buscamos constantemente nuevas formas de mejorar y ampliar nuestra gama de productos, 
                        desarrollando nuevas fragancias, diseños y técnicas de fabricación que sorprendan y satisfagan las necesidades de nuestros clientes.</li>
                    <li><b><u>Sostenibilidad:</u></b> Nos preocupamos por el medio ambiente y nos esforzamos por reducir nuestro impacto ambiental. Utilizamos prácticas de fabricación sostenibles y 
                        nos comprometemos a minimizar nuestro uso de plásticos y productos químicos nocivos.</li>
                    <li><b><u>Integridad:</u></b> Actuamos con honestidad, transparencia y ética en todas nuestras operaciones. 
                        Nos comprometemos a mantener altos estándares de conducta en nuestras relaciones con clientes, proveedores y empleados.</li>
                    <li><b><u>Bienestar:</u></b> Nos preocupamos por el bienestar de nuestros clientes y de la comunidad en general. 
                        Nuestros productos están diseñados para crear ambientes acogedores y relajantes que promuevan el bienestar emocional y mental.</li>
                    <li><b><u>Pasión por el servicio al cliente:</u></b> Nos dedicamos a proporcionar un excelente servicio al cliente, 
                        ofreciendo asesoramiento experto, atención personalizada y una experiencia de compra placentera en todo momento.</li>
                    <li><b><u>Creatividad:</u></b> Fomentamos la creatividad y la expresión personal a través de nuestros productos. Animamos a nuestros clientes a explorar y experimentar con diferentes fragancias 
                        y estilos para encontrar la combinación perfecta que se adapte a sus gustos y necesidades.</li>
                    <li><b><u>Compromiso social:</u></b> Nos comprometemos a contribuir positivamente a la comunidad. 
                        Colaboramos con organizaciones benéficas locales y apoyamos iniciativas que promuevan el bienestar de las personas y del medio ambiente.</li>
                </ul>
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
