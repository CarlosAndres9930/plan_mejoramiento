<h1>Lista de Árboles</h1>
<a href="index.php?action=create">Agregar Árbol</a>
<table>
    <tr>
        <th>ID</th>
        <th>Fuente</th>
        <th>Especie</th>
        <th>Edad</th>
        <th>Número de Árbol</th>
        <th>Diámetro</th>
        <th>Altura</th>
        <th>Código de Sitio</th>
        <th>Fecha de Plantación</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($arboles as $arbol): ?>
        <tr>
            <td><?php echo $arbol['idArbol']; ?></td>
            <td><?php echo $arbol['fuente']; ?></td>
            <td><?php echo $arbol['especie']; ?></td>
            <td><?php echo $arbol['edad']; ?></td>
            <td><?php echo $arbol['numArbol']; ?></td>
            <td><?php echo $arbol['diametro']; ?></td>
            <td><?php echo $arbol['altura']; ?></td>
            <td><?php echo $arbol['codigoSitio']; ?></td>
            <td><?php echo $arbol['fechaPlan']; ?></td>
            <td>
                <a href="index.php?action=edit&id=<?php echo $arbol['idArbol']; ?>">Editar</a>
                <a href="index.php?action=delete&id=<?php echo $arbol['idArbol']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
