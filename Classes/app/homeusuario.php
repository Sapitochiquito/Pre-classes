<!DOCTYPE html>
<html lang="es-Co">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pre-Recorded classes</title>
  <meta name="theme-color" content="#bf916d">
  <meta name="MobileOptimized" content="width">
  <!--Tags SEO-->
  <meta name="authors" content="Alejandra Serna, Maria Isabel Isaza, Jesica Quintero">
  <meta name="description" content="Aplicativo web para la recapitulación de las clases dadas en el Fray Julio">
  <meta name="keywords" content="Estudio, clases, recapitular, colegio, Fray Julio">

  <!--Favicon-->
  <link href="media/img/rodrigo.png" rel="icon" type="image/x-icon">

 <!--Styles bootstrap 5.3.0-->
   <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
   <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
</head>
<body>
  <header>
    <nav class="navbar naxvbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#xx" style="cursor:pointer" aria-expanded="true">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="xx" style="">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="logout.php" class="btn btn-primary">Cerrar</a> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>    
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="container">
    <div class="row p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">Theater Hat</h1>
        <p class="lead my-3">Bienvenid@ a Theater Hat, esta página está a tu total disposición para facilitar tu encuentro con el teatro en El Carmen De Viboral. </p>
        <p class="lead my-3"> Recuerda que este proyecto esta en una faceta inicial, por ende solo es posible informarte de 3 de los 5 teatros ubicados en el pueblo; pero en nuestra pagina podras encontrar los mas frecuentados.</p>
        <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
      </div>
      <div class="col-md-6 px-0">
       <figure>
        <img src="../media/img/man.png">
      </div>
      <div id="accordion">

        <div class="card">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
              Collapsible Group Item #1
            </a>
          </div>
          <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
              Collapsible Group Item #2
            </a>
          </div>
          <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
              Collapsible Group Item #3
            </a>
          </div>
          <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>

      </div>


    </div>
  </body>
  </html>