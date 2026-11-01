<?php
session_start(); 

$productos = [
    [
        "id" => 1,
        "nombre" => "Laptop Gamer",
        "descripcion" => "Laptop de alto rendimiento con 16GB RAM y RTX 3060.",
        "precio" => 1200.00,
        "imagen" => "img/Laptop.webp"
    ],
    [
        "id" => 2,
        "nombre" => "Celular",
        "descripcion" => "Celular de última generación con pantalla AMOLED y cámara de 108MP.",
        "precio" => 300.00,
        "imagen" => "img/Celular.jpg"
    ],
    [
        "id" => 3,
        "nombre" => "Teclado Mecánico",
        "descripcion" => "Teclado RGB con switches azules para gaming.",
        "precio" => 45.00,
        "imagen" => "img/Teclado_mecanico.jpg" 
    ],
    [
        "id" => 4,
        "nombre" => "Televisor 4k",
        "descripcion" => "Televisor con resolución 4K y HDR para una experiencia visual inmersiva.",
        "precio" => 400.00,
        "imagen" => "img/Televisor.jpg"
    ],
    [
        "id" => 5,
        "nombre" => "Impresora",
        "descripcion" => "Impresora multifunción con conexión Wi-Fi.",
        "precio" => 150.00,
        "imagen" => "img/Impresora.jpg"
    ],
    [
        "id" => 6,
        "nombre" => "Auricular",
        "descripcion" => "Auriculares inalámbricos con cancelación de ruido y sonido envolvente.",
        "precio" => 80.00,
        "imagen" => "img/Auricular.jpg"
    ]
];

$totalItems = 0;
if (isset($_SESSION['carrito'])) {
    $totalItems = array_sum($_SESSION['carrito']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Práctica 3</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <header>
        <h1>Mi Tienda Web</h1>
        <div class="cart-icon">
            🛒 Carrito: <span id="cart-count"><?php echo $totalItems; ?></span>
        </div>
    </header>

    <main class="product-grid">
        <?php foreach ($productos as $prod): ?>
            <div class="product-card">
                <img src="<?php echo $prod['imagen']; ?>" alt="<?php echo $prod['nombre']; ?>">
                <div class="product-info">
                    <h2><?php echo $prod['nombre']; ?></h2>
                    <p><?php echo $prod['descripcion']; ?></p>
                    <p class="price">$<?php echo number_format($prod['precio'], 2); ?></p>

                    <button onclick="agregarAlCarrito(<?php echo $prod['id']; ?>)">Agregar al Carrito</button>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <script src="script.js"></script>
</body>
</html>