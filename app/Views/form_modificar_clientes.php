<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
<div class="container text-center">
    <h1>Agregar Clientes</h1>
        <div class="row">
            <div class="col col-4">
            <form action="<?= base_url('modificar_datos_clientes') ?>" method="post">
                    <div class="mb-3">
                        <label for="txtClienteId" class="form-label">Id del cliente</label>
                        <input type="text" id="txtClienteId" name="txtClienteId" class="form-control"
                            placeholder="ingrese el id del Cliente" >
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control"
                            placeholder="ingrese su apellido">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="ingrese su Nombre">
                    </div>.
                    <div class="mb-3">
                        <label for="txtCorreo" class="form-label">Correo Electronico</label>
                        <input type="text" id="txtCorreo" name="txtCorreo" class="form-control"
                            placeholder="ingrese su Correo Electronico">

                    </div>
                    <div class="mb-3">
                        <label for="txtCalle" class="form-label">Calle o Avenida</label>
                        <input type="text" id="txtCalle" name="txtCalle" class="form-control"
                            placeholder="ingrese su Calle o avenida">
                    </div>
                    
                    <div class="mb-3">
                        <label for="txtNoCasa" class="form-label">No de Casa</label>
                        <input type="text" id="txtNoCasa" name="txtNoCasa" class="form-control"
                            placeholder="ingrese su Numero de Casa">
                    </div>

                    <div class="mb-3">
                        <label for="txtZona" class="form-label">Zona</label>
                        <input type="text" id="txtZona" name="txtZona" class="form-control"
                            placeholder="ingrese su zona">
                    </div>
                    
                    <div class="mb-3  ">
                        <input type="submit" class="btn btn-success form-control" value="Guardar Cambios">
                    </div>
                </form>

            </div>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
