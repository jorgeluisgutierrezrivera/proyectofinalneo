<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Usuario</h1>
    <form action="/usuarios/update/<?=$usuarios['ci_usu']?>" method="post">
        <?= view('/usuarios/_form',['op'=>'Actualizar']); ?>
    </form>
</body>
</html>