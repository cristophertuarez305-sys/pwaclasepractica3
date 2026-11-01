<?php
session_start();

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    if (isset($_SESSION['carrito'][$id])) {
        $_SESSION['carrito'][$id]++;
    } else {
        $_SESSION['carrito'][$id] = 1;
    }

    echo array_sum($_SESSION['carrito']);
}
?>
