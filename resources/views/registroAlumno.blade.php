
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro de Alumno</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    </head>

    <style>
        .logo {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            
        }
        .col-auto{
            background-color: rgb(6, 6, 58);
        }
        .nav-pills li a:hover {
            background-color: rgb(20, 92, 160);
        }
    </style>

    <body>
    
        <div class="container-fluid">
            <div class="row">
                    <div class="d-flex flex-column justify-content-between col-auto min-vh-100">
                        <div class="mt-4">
                            <a class="text-white d-none d-sm-inline text-decoration-none d-flex aling-items-center ms-4" role="button">
                                <img src="/img/itca_logo.jpeg" class=" logo img-fluid" alt="ITCA logo">
                                <span class="fs-4 fw-bolder mt-2"> ITCA</span>
                            </a>
                            <hr class="text-white"/>
                            <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white" aria-current="page">
                                        <i class="bi bi-house-door-fill"></i>
                                        <span class="ms-2 d-none d-sm-inline">Inicio</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white" aria-current="page">
                                        <i class="bi bi-mortarboard-fill"></i>
                                        <span class="ms-2 d-none d-sm-inline">Alumnos</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white" aria-current="page">
                                        <i class="bi bi-person-workspace"></i>
                                        <span class="ms-2 d-none d-sm-inline">Instructor</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white" aria-current="page">
                                        <i class="bi bi-book-fill"></i>
                                        <span class="ms-2 d-none d-sm-inline">Carrera</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white" aria-current="page">
                                        <i class="bi bi-journal-check"></i>
                                        <span class="ms-2 d-none d-sm-inline">Actividad</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white" aria-current="page">
                                        <i class="bi bi-diagram-3-fill"></i>
                                        <span class="ms-2 d-none d-sm-inline">Organigrama</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white" aria-current="page">
                                        <i class="bi bi-person-vcard"></i>
                                        <span class="ms-2 d-none d-sm-inline">Rol</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white" aria-current="page">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <span class="ms-2 d-none d-sm-inline">Localidades</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class="col-xs-10 col-md-10 col-lg-10">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="#">Alumnos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Registro de Alumnos</li>
                            </ol>
                        </nav>
                        <h1 class="text-center pb-3">REGISTRO DE ALUMNOS</h1>
                        <form class="row" action="/registroAlumno" method="POST">
                            @csrf
                            <h1 class="fst-normal fs-5">Informacion personal</h1>
                            <hr class="text-darck"/>
                            <div class="col-4 mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input class="form-control" placeholder="Nombre" type="text" id="nombre">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3 ml-5">
                                <label for="aPaterno" class="form-label">Apellido paterno</label>
                                <input class="form-control" placeholder="Apellido paterno" type="text" id="aPaterno">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="aMaertno" class="form-label">Apellido materno</label>
                                <input class="form-control" placeholder="Apellido materno" type="text" id="aMaertno">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="sexo" class="form-label">Sexo</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Elije...</option>
                                    <option>Mujer</option>
                                    <option>Hombre</option>
                                </select>
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="fechaN" class="form-label">Fecha de nacimiento</label>
                                <input class="form-control" placeholder="Fecha de nacimiento" type="text" id="fechaN">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input class="form-control" placeholder="Telefono" type="text" id="telefono">
                            </div>
                            <h1 class="fst-normal fs-5">Domicilo</h1>
                            <hr class="text-darck"/>
                            <div class="col-4 mb-3">
                                <label for="localidad" class="form-label">Localidad</label>
                                <input class="form-control" placeholder="Localidad" type="text" id="localidad">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="colonia" class="form-label">Colonia</label>
                                <input class="form-control" placeholder="Colonia" type="text" id="colonia">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="calle" class="form-label">Calle</label>
                                <input class="form-control" placeholder="Calle" type="text" id="calle">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="numeroE" class="form-label">Numero exterior</label>
                                <input class="form-control" placeholder="Numero exterior" type="text" id="numeroE">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="numeorI" class="form-label">Numero interior</label>
                                <input class="form-control" placeholder="Numero interior" type="text" id="numeorI">
                            </div>
                            <h1 class="fst-normal fs-5">Informacion academica</h1>
                            <hr class="text-darck"/>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="nControl" class="form-label">Numero de control</label>
                                <input class="form-control" placeholder="Numero de control" type="text" id="nControl">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="e-mail" class="form-label">E-mail</label>
                                <input class="form-control" placeholder="E-mail" type="email" id="e-mail">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="semestre" class="form*-label">Semestre</label>
                                <input class="form-control" placeholder="Semestre" type="text" id="semestre">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="estatus" class="form-label">Estatus</label>
                                <input class="form-control" placeholder="Estatus" type="text" id="estatus">
                            </div>
                            <div class="col-xs-10 col-md-10 col-lg-4 mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input class="form-control" placeholder="Password" type="password" id="password">
                            </div>
                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-primary col-2 center">Registrar</button>
                            </div>
                        </form>
                    </div>
                    
            </div>
            <div class="row">
                
            </div>
        </div>



        <script src="/js/bootstrap.bundle.min.js"></script>
    </body>

    <footer>

    </footer>

</html>
