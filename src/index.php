<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desercion escolar</title>
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark" ng-controller="navSection">
    <div class="container">
        <div class="user-icon">
            <a class="navbar-brand" href="#">
              <img src="assets/images/test.png" alt="User profile" style="width:50px;" class="rounded-pill">
            </a>
            <span>
                Username
            </span>
        </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mis estadísticas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hacer el test</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Welcome Screen -->
  <!-- Carousel -->
<section id="home">
    <div id="voluntariados" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#voluntariados" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#voluntariados" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#voluntariados" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#voluntariados" data-bs-slide-to="3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/test2.jpg" alt="voluntariado 1" class="d-block w-100">
                <div class="carousel-caption">
                    <h3>Imagen prueba 1</h3>
                    <p>Descripción dle voluntariado</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/test2.jpg" alt="voluntariado 2" class="d-block w-100">
                <div class="carousel-caption">
                    <h3>Imagen prueba 2</h3>
                    <p>Descripción dle voluntariado</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/test2.jpg" alt="voluntariado 1" class="d-block w-100">
                <div class="carousel-caption">
                    <h3>Imagen prueba 3</h3>
                    <p>Descripción dle voluntariado</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/test2.jpg" alt="Sukuna" class="d-block w-100">
                <div class="carousel-caption">
                    <h3>Imagen prueba 4</h3>
                    <p>Descripción dle voluntariado</p>
                </div>
            </div>
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#voluntariados" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#voluntariados" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>
    <!-- Boostrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>