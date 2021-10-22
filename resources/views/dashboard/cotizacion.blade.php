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
            <div class="col-md-5 mx-auto">
                <form action={{route('cotizacion')}} method="POST">
                    {{ csrf_field() }}
                    <h4>Enviar consulta de cotizacion</h4>
                    <h5>Todos los campos son obligatorios</h5>
                    <hr>

                    <div class="form-group text-dark row">
                        <div class="col-sm-12">
                            <input type="email" class="form-control rounded-0" type="email" id="mail" name="mail" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control rounded-0" name="nombre" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control rounded-0" name="cantusu" placeholder="Cantidad de usuarios" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" id='btn-contact' class="btn btn-dark rounded-0" required>Enviar</button>
                        </div>
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
