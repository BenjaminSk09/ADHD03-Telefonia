<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Lineas telefonicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-white">
    <h1 class="text-center display-1 text-white">Lineas telefonicas</h1>
    <div class="container text-center">
        <a href="nueva_linea" class="btn"><i class="bi bi-person-add text-white"> NUEVA LINEA TELEFONICA</i></a>
        <table class="table table-border table-bordered border-secondary border-opacity-50  ">
            <thead>
                <tr>
                    <th>No. Telefono </th>
                    <th>Fecha de pago</th>
                    <th>Meses de atraso</th>
                    <th>Plan id</th>
                    <th>Cliente Id</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $lineas): ?>
                <tr>
                    <td><?php echo $lineas ['no_telefono'] ?></td>
                    <td><?php echo $lineas ['fecha_pago'] ?></td>
                    <td><?php echo $lineas ['meses_atraso'] ?></td>
                    <td><?php echo $lineas ['plan_id'] ?></td>
                    <td><?php echo $lineas ['cliente_id'] ?></td>
                    <td>

                        <a href="<?= base_url('buscar_linea/').$lineas['no_telefono']?>" class="btn btn-info"><i
                                class="bi bi-arrow-clockwise">Actualizar</i></a>
                        <a href="<?= base_url('eliminar_linea/').$lineas['no_telefono']?>" class="btn btn-danger"><i
                                class="bi bi-person-fill-x">Eliminar</i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>