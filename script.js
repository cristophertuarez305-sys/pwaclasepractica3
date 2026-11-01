function agregarAlCarrito(idProducto) {
    const formData = new FormData();
    formData.append('id', idProducto);

    fetch('agregar_carrito.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('cart-count').innerText = data;
        
        alert('¡Producto agregado al carrito!');
    })
    .catch(error => console.error('Error:', error));
}