<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <a href="/usuarios/new">Crear</a>
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
                Correo
            </th>
            <th>
                Contraseña
            </th>
            <th>
                Telefono
            </th>
            <th>
                Tipo de Usuario
            </th>
        </tr>
        
    <?php foreach ($usuarios as $key => $usu):?>
        <tr>
        <td><?= $usu['ci_usu'] ?></td>
        <td><?= $usu['nombre_usu'] ?></td>
        <td><?= $usu['apellido_usu'] ?></td>
        <td><?= $usu['direccion_usu'] ?></td>
        <td><?= $usu['correo_usu'] ?></td>
        <td><?= $usu['contrasena_usu'] ?></td>
        <td><?= $usu['telefono_usu'] ?></td>
        <td><?= $usu['tipo_usu'] ?></td>
        <td>
            <a href="/usuarios/show/<?=$usu['ci_usu']?>">Mostrar</a>
            <a href="/usuarios/edit/<?=$usu['ci_usu']?>">Editar</a>
            <form method="post" action="/usuarios/delete/<?=$usu['ci_usu']?>">
            <button type="submit">Eliminar</button>
            </form>
        </td>
        </tr>
    <?php endforeach ?>
    
    </table>
</body>
</html>