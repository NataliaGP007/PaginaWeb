<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
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

    

    <div class="row">
      <div class="col-12">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/img/foto1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/img/foto2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/img/foto3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
      </div>
    </div>


    <script src="/js/bootstrap.bundle.min.js"></script>
    <script>
        const myCarousel = document.getElementById('myCarousel')

        myCarousel.addEventListener('slide.bs.carousel', event => {
        // do something...
        })
    </script>

    


  </body>

</html>
