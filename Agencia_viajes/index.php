<?php
require_once 'procesar_formulario.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Clientes</title>
</head>
<body>
    <h1>Gestión de Clientes</h1>

    <form method="post" action="index.php">
        <input type="text" name="nombre" placeholder="Nombre del cliente" required>
        <input type="email" name="correo" placeholder="Correo electrónico" required>
        <button type="submit" name="agregar">Agregar Cliente</button>
    </form>

    <h2>Clientes en el Catálogo</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Acciones</th>
        </tr>
        <?php if (!empty($clientes)): ?>
            <?php foreach ($clientes as $indice => $cliente): ?>
            <tr>
                <td><?php echo htmlspecialchars($cliente->getNombre()); ?></td>
                <td><?php echo htmlspecialchars($cliente->getCorreo()); ?></td>
                <td>
                    <form method="post" action="index.php">
                        <input type="hidden" name="indice" value="<?php echo $indice; ?>">
                        <button type="submit" name="eliminar">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>  
            <tr>
                <td colspan="3">No hay clientes en el catálogo.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
