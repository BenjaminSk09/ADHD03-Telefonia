<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  </head>
  <body class="bg-dark text-white">
    <h1 class="text-center display-1 ">Clientes</h1>
    <div class="container text-center">
    <a href="nuevo_cliente" class="btn"><i class="bi bi-person-add text-white"> NUEVOS CLIENTES</i></a>
    <table class="table table-border table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>correo Electronico</th>
                <th>Calle/avenida</th>
                <th>No. casa</th>
                <th>Zona</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($datos as $cliente): ?>
            <tr>
                <td> <?php echo $cliente['cliente_id']; ?> </td>
                <td> <?php echo $cliente['apellido']; ?> </td>
                <td> <?php echo $cliente['nombre']; ?> </td>
                <td> <?php echo $cliente['correo_electronico']; ?> </td>
                <td> <?php echo $cliente['calle_avenida']; ?> </td>
                <td> <?php echo $cliente['no_casa']; ?> </td>
                <td> <?php echo $cliente['zona']; ?> </td>
                <td> 

                <a href="<?= base_url('buscar_cliente/').$cliente['cliente_id']?>" class="btn btn-info"><i 
                class="bi bi-arrow-clockwise">Actualizar</i></a>
                <a href="<?= base_url('eliminar_cliente/').$cliente['cliente_id']?>" class="btn btn-danger"><i 
                class="bi bi-person-fill-x">Eliminar</i></a>    
              </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>