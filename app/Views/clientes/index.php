<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <a href="/clientes/new">Crear</a>
    <table>
        <tr>
            <th>
                Cédula de Identidad
            </th>
            <th>
                Nombre
            </th>
            <th>
                Apellido
            </th>
            <th>
                Dirección
            </th>
            <th>
                Celular
            </th>
            <th>
                Correo
            </th>

        </tr>
        
    <?php foreach ($clientes as $key => $cli):?>
        <tr>
        <td><?= $cli['ci_cli'] ?></td>
        <td><?= $cli['nombre_cli'] ?></td>
        <td><?= $cli['apellido_cli'] ?></td>
        <td><?= $cli['direccion_cli'] ?></td>
        <td><?= $cli['celular_cli'] ?></td>
        <td><?= $cli['correo_cli'] ?></td>
        <td>
            <a href="/clientes/show/<?=$cli['ci_cli']?>">Mostrar</a>
            <a href="/clientes/edit/<?=$cli['ci_cli']?>">Editar</a>
            <form method="post" action="/clientes/delete/<?=$cli['ci_cli']?>">
            <button type="submit">Eliminar</button>
            </form>
        </td>
        </tr>
    <?php endforeach ?>
    
    </table>
</body>
</html>