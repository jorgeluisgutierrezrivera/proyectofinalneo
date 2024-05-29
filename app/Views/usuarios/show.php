<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$usuarios['nombre_usu']?></title>
</head>
<body>
        <h1><?= $usuarios['ci_usu'] ?></h1>
        <h1><?= $usuarios['nombre_usu'] ?></h1>
        <h1><?= $usuarios['apellido_usu'] ?></h1>
        <p><?= $usuarios['direccion_usu'] ?></p>
        <p><?= $usuarios['correo_usu'] ?></p>
        <p><?= $usuarios['contrasena_usu'] ?></p>
        <p><?= $usuarios['telefono_usu'] ?></p>
        <p><?= $usuarios['tipo_usu'] ?></p>
</body>
</html>