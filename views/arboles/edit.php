<h1>Editar Árbol</h1>

<form method="POST" action="index.php?action=edit&id=<?php echo $arbol['idArbol']; ?>">
    <label>Fuente:</label>
    <input type="text" name="fuente" value="<?php echo $arbol['fuente']; ?>" required>
    
    <label>Especie:</label>
    <input type="text" name="especie" value="<?php echo $arbol['especie']; ?>" required>
    
    <label>Edad:</label>
    <input type="number" name="edad" value="<?php echo $arbol['edad']; ?>" required>
    
    <label>Número de Árbol:</label>
    <input type="number" name="numArbol" value="<?php echo $arbol['numArbol']; ?>" required>
    
    <label>Diámetro:</label>
    <input type="text" name="diametro" value="<?php echo $arbol['diametro']; ?>" required>
    
    <label>Altura:</label>
    <input type="text" name="altura" value="<?php echo $arbol['altura']; ?>" required>
    
    <label>Código de Sitio:</label>
    <input type="text" name="codigoSitio" value="<?php echo $arbol['codigoSitio']; ?>" required>
    
    <label>Fecha de Plantación:</label>
    <input type="date" name="fechaPlan" value="<?php echo $arbol['fechaPlan']; ?>" required>
    
    <button type="submit">Actualizar</button>
</form>
