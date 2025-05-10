// Cargar productos desde el archivo JSON o localStorage
function cargarProductos() {
    let productos = JSON.parse(localStorage.getItem('productos')) || [];

    const productosLista = document.getElementById('productos-lista');
    productosLista.innerHTML = '';  // Limpiar la tabla antes de agregar los productos

    productos.forEach(producto => {
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
            <td>
                <a href="editar-producto.html?codigo=${producto.Codigo}">Editar</a> |
                <a href="#" onclick="eliminarProducto(${producto.Codigo})">Eliminar</a>
            </td>
        `;
        productosLista.appendChild(row);
    });
}

// Eliminar producto
function eliminarProducto(codigo) {
    let productos = JSON.parse(localStorage.getItem('productos')) || [];
    productos = productos.filter(producto => producto.Codigo !== codigo);
    localStorage.setItem('productos', JSON.stringify(productos));
    cargarProductos(); // Recargar la lista después de eliminar
}

// Cargar productos al cargar la página
document.addEventListener('DOMContentLoaded', cargarProductos);
