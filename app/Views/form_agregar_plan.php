<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
<div class="container text-center">
    <h1>Agregar Planes</h1>
        <div class="row">
            <div class="col col-4">
                <form action="agregar_plan" method="post">
                    <div class="mb-3">
                        <label for="txtPlanId" class="form-label">Id del Plan</label>
                        <input type="text" id="txtPlanId" name="txtPlanId" class="form-control"
                            placeholder="ingrese el id del plan" >
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="ingrese su nombre">
                    </div>
                    <div class="mb-3">
                        <label for="txtPagoMensual" class="form-label">Pago Mensual</label>
                        <input type="text" id="txtPagoMensual" name="txtPagoMensual" class="form-control"
                            placeholder="ingrese el pago mensual">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadMinutos" class="form-label">Cantidad de Minutos</label>
                        <input type="text" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control"
                            placeholder="ingrese los minutos que desea">

                    </div>
                    <div class="mb-3">
                        <label for="txtCantidMensajes" class="form-label">Cantidad de Mensajes</label>
                        <input type="text" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control"
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