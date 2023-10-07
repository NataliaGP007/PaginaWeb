<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alumno</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>

<body>

    <div class="container text-center">
        <div class="row align-items-start ">
            <div class="col-lg-3">
                <img src="/img/sep.png" class="img-fluid" alt="logo">
            </div>
        <div class="col-lg-4">
            <img src="/img/LOGO-TECNM.png" class="img-fluid" alt="logo">
        </div>
            <div class="col-lg-1">
            <img src="/img/itca_logo.jpeg" class="img-fluid" alt="logo">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="container col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">ITCA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:8000/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/prueba">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Programas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Noticias</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
            </div>
            </div>
        </div>


    <div class="container">

    <h1 class="text-center pt-3 pb-3">REGISTRO</h1>

    <div class="row">
        <div class="row col-xs-12 col-md-12 col-lg-3">
        </div>
        <div class="col-xs-12 col-md-12 col-lg-6 text-center">
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Nombre" type="text">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Apellido paterno" type="text">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Apellido materno" type="text">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="E-mail" type="text">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Telefono" type="text">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Fecha de nacimiento" type="text">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Sexo" type="text">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Calle" type="text">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Numero exterior" type="text">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Numero interior" type="text">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Colonia" type="text">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Password" type="password">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-md" placeholder="Semestre" type="text">
                </div>
            </form>
        </div>
    </div>


<script src="/js/bootstrap.bundle.min.js"></script>

</body>




</html>