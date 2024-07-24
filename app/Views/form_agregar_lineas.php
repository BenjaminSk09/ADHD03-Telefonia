<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Lineas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
<div class="container text-center">
    <h1>Agregar Lineas</h1>
        <div class="row">
            <div class="col col-4">
                <form action="agregar_linea" method="post">
                    <div class="mb-3">
                        <label for="txtNoTelefono" class="form-label">No telefono</label>
                        <input type="text" id="txtNoTelefono" name="txtNoTelefono" class="form-control"
                            placeholder="ingrese el id del plan" >
                    </div>
                    <div class="mb-3">
                        <label for="txtFecha" class="form-label">Fecha de Pago</label>
                        <input type="text" id="txtFecha" name="txtFecha" class="form-control"
                            placeholder="ingrese su nombre">
                    </div>
                    <div class="mb-3">
                        <label for="txtMeses" class="form-label">Meses de atraso</label>
                        <input type="text" id="txtMeses" name="txtMeses" class="form-control"
                            placeholder="ingrese el pago mensual">
                    </div>
                    <div class="mb-3">
                        <label for="txtIdPlan" class="form-label">Id del plan</label>
                        <input type="text" id="txtIdPlan" name="txtIdPlan" class="form-control"
                            placeholder="ingrese los minutos que desea">

                    </div>
                    <div class="mb-3">
                        <label for="txtIdCliente" class="form-label">id del cliente</label>
                        <input type="text" id="txtIdCliente" name="txtIdCliente" class="form-control"
                            placeholder="ingrese los mensajes que desea">
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