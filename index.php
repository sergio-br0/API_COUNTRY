<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA DE PAÍSES</title>
</head>
<body>
    <h1>BUSCAR INFORMACIÓN DE UN PAÍS</h1>
    <form id="formu">
        <select name="tipoBusqueda">
            <option value="nombre">Buscar por nombre</option>
            <option value="idioma">Buscar por idioma</option>
        </select>
        <input type="text" name="valorBusqueda" id="valorBusqueda">
        <button type="submit">Buscar</button>
        <button id="botonConsultarTodos" type="button">Todos los países</button>
    </form>
    <p id="resultado"></p>
    <table border="1">
        <thead>
            <tr>
                <th>PAÍS</th>
                <th>POBLACIÓN</th>
                <th>CAPITAL</th>
                <th>IDIOMA</th>
                <th>BANDERA</th>
            </tr>
        </thead>
        <tbody id="tablaResultados">
        </tbody>
    </table>
    <script src="script.js"></script>
</body>
</html>
