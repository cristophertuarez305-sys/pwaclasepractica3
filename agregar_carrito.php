<?php
session_start();

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Si el carrito no existe, lo creamos como un arreglo
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    // Si el producto ya está en el carrito, sumamos 1 a su cantidad
    if (isset($_SESSION['carrito'][$id])) {
        $_SESSION['carrito'][$id]++;
    } else {
        // Si no está, lo agregamos con cantidad 1
        $_SESSION['carrito'][$id] = 1;
    }

    // Devolvemos el total de items para actualizar el HTML
    echo array_sum($_SESSION['carrito']);
}
?>