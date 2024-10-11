<h1>Agregar Árbol</h1>

<form method="POST" action="index.php?action=create">
    <label>Fuente:</label>
    <input type="text" name="fuente" required>
    
    <label>Especie:</label>
    <input type="text" name="especie" required>
    
    <label>Edad:</label>
    <input type="number" name="edad" required>
    
    <label>Número de Árbol:</label>
    <input type="number" name="numArbol" required>
    
    <label>Diámetro:</label>
    <input type="text" name="diametro" required>
    
    <label>Altura:</label>
    <input type="text" name="altura" required>
    
    <label>Código de Sitio:</label>
    <input type="text" name="codigoSitio" required>
    
    <label>Fecha de Plantación:</label>
    <input type="date" name="fechaPlan" required>
    
    <button type="submit">Guardar</button>
</form>
