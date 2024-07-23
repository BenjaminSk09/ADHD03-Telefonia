<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .fondo-imagen {
            background-image: url('https://www.solofondos.com/wp-content/uploads/2015/11/21omxpw.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Ajusta la altura según tus necesidades */
        }
    </style>
  </head>
  <body class="fondo-imagen">
    <h1 class="text-center display-1 text-white">Planes</h1>
    <div class="container text-center">
    <table class="table table-border table-bordered border-secondary border-opacity-50  " >
        <thead class="table-dark ">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Pago Mensual</th>
                <th>Cantidad de Minutos</th>
                <th>Cantidad de Mensajes</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php foreach($datos as $plan): ?>
            <tr>
                <td><?php echo $plan['plan_id']; ?></td>
                <td><?php echo $plan['nombre']; ?> </td>
                <td><?php echo $plan['pago_mensual']; ?> </td>
                <td><?php echo $plan['cantidad_minutos']; ?> </td>
                <td><?php echo $plan['cantidad_mensajes']; ?></td>
                <td>
                    <a href="<?= base_url('buscar_plan/').$plan['plan_id']?>" class="btn btn-info"><i class="bi bi-arrow-clockwise">Actualizar</i></a>    
                    <!--boton Eliminar -->
                    <a href="<?= base_url('eliminar_plan/').$plan['plan_id']?>" class="btn btn-danger"><i class="bi bi-person-x-fill">Eliminar</i></a>    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>