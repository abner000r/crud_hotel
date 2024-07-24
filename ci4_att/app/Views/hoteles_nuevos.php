<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevos Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="text-center">Nuevos Planes</h1>
        <div class="row">
                <div class="col col-4">

                    <form action="agregar_hoteles" method="post">
                        <div class="mb-3">
                            <label for="txtHotelId" class="form-label">Hotel Id:</label>
                            <input type="text" id="txtHotelId" name="txtHotelId" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtNombre" class="form-label">Nombre:</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtCorreo" class="form-label">Correo Electronico:</label>
                            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtTelefono" class="form-label">Telefono:</label>
                            <input type="text" id="txtTelefono" name="txtTelefono" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtDireccion" class="form-label">Direccion:</label>
                            <input type="text" id="txtDireccion" name="txtDireccion" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtCiudad" class="form-label">Ciudad Id:</label>
                            <input type="text" id="txtCiudad" name="txtCiudad" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtCategoria" class="form-label">Categoria Id:</label>
                            <input type="text" id="txtCategoria" name="txtCategoria" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtUsuario" class="form-label">Uusario Id:</label>
                            <input type="text" id="txtUsuario" name="txtUsuario" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input type="submit" id="btnGuardarHoteles" name="btnGuardarHoteles" class="form-control"
                                value="GuardarrHoteles">
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