// Cargar productos desde el archivo JSON
fetch('productos.json')
    .then(response => response.json())
    .then(data => {
        const productosLista = document.getElementById('productos-lista');
        data.forEach(producto => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${producto.Producto}</td>
                <td>${producto.Ubicacion}</td>
                <td>${producto.Categoria}</td>
                <td>${producto.Descripcion}</td>
                <td>${producto.Marca}</td>
                <td>${producto.Modelo}</td>
                <td>${producto.Codigo}</td>
                <td>${producto.Fecha_de_compra}</td>
                <td>${producto.Garantia}</td>
                <td>${producto.Precio_de_compra}</td>
                <td>${producto.Ganancia_Neta}</td>
                <td>${producto.Porcentaje_Ganancia}%</td>
                <td>${producto.Precio_De_Venta}</td>
                <td><a href="editar-producto.html?codigo=${producto.Codigo}">Editar</a> | <a href="#" onclick="eliminarProducto(${producto.Codigo})">Eliminar</a></td>
            `;
            productosLista.appendChild(row);
        });
    });

// Eliminar producto
function eliminarProducto(codigo) {
    if (confirm('¿Estás seguro de que quieres eliminar este producto?')) {
        alert('Producto eliminado'); // Aquí puedes agregar lógica para eliminar el producto
    }
}
