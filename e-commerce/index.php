<?php
require_once 'procesar_formulario.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>  
    <meta charset="UTF-8">
    <title>Gestión de Productos</title>
</head>
<body>
    <h1>Catálogo de Productos</h1>

    <form method="post" action="index.php">
        <input type="text" name="nombre" placeholder="Nombre del producto" required>
        <input type="number" name="precio" placeholder="Precio" required>
        <button type="submit" name="agregar">Agregar Producto</button>
    </form>

    <h2>Productos en el Catálogo</h2>
    <table border="1">
        <tr>    
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php if (!empty($productos)): ?>
            <?php foreach ($productos as $id => $producto): ?>
            <tr>
                <td><?php echo htmlspecialchars($producto->getNombre()); ?></td>
                <td><?php echo htmlspecialchars($producto->getPrecio()); ?></td>
                <td>
                    <form method="post" action="index.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="submit" name="eliminar">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>  
            <tr>
                <td colspan="3">No hay productos en el catálogo.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
