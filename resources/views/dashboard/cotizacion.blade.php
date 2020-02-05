<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Solicitar Cotizaci&oacute;n</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="jumbotron">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-4 mx-auto">
                <form action={{route('cotizacion')}} method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <h2>Solicitar Presupuesto</h2>
                        <h3>Introduce tus datos</h3>
                        <p>*todos los campos son obligatorios</p>
                        <div class="form-group col-7">
                            <label for="name">E-Mail</label>
                            <input class="form-control" type="email" id="mail" name="mail" required>
                        </div>
                        <div class="form-group col-7">
                            <label for="name">Nombre</label>
                            <input class="form-control" name="nombre" type="text" required>
                        </div>
                        <div class="form-group col-7">
                            <label for="name">Cantidad de Usuarios</label>
                            <input class="form-control" name="cantusu" type="text" required>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" id='btn-contact' class="btn btn-primary col-6 ml-3">Solicitar Cotizaci&oacute;n</button>
                    </div>
                </form>
                <hr>
                <a href='javascript:history.back()'>pagina anterior</a>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    let email = document.getElementById("mail");

    email.addEventListener("keyup", function (event) {
        if (email.validity.typeMismatch) {
            email.setCustomValidity("Introduce una direccion de correo valida");

        } else {
            email.setCustomValidity("");
        }
    });

</script>
</html>
