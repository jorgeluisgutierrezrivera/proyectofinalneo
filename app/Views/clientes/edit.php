<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Cliente</h1>
    <form action="/clientes/update/<?=$clientes['ci_cli']?>" method="post">
        <?= view('/clientes/_form',['op'=>'Actualizar']); ?>
    </form>
</body>
</html>