<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Usuario</h1>
    <form action="/usuarios/create" method="post">
    <?= view('/usuarios/_form',['op'=>'Crear']); ?>
    </form>
</body>
</html>