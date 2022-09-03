<?php

     require("app/php/config.php");          
     require("app/php/db_config.php");
?>

<!DOCTYPE html>
<html lang="Pt-Br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content=" initial-scale=1.0">
     <link rel='stylesheet' href='app\css\bootstrap.min.css'>

     <title>Mercadinho budega</title>
</head>
<body>

     <div class="container-fluid bg-secondary">

          <!-- Header -->
     <div class="row justify-content-md-center alert alert-success " style="border-bottom-right-radius: 40%; border-bottom-left-radius: 40%;">

          <!-- Barra de navegação -->
               <div class="col col-md-auto">
                    <nav class="navbar navbar-expand-lg navbar-light" >

                         <!-- Logo -->
                         <a class="navbar-brand" href="#"><img src="<?php echo site_logo ?>" width="70" height="70" ></a>

                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                         <span class="navbar-toggler-icon"></span>
                         </button>


                         <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                         <ul class="navbar-nav mr-auto">
                              <li class="nav-item alert-link">
                              <a class="nav-link" href="#">Inicio</a>
                              </li>
                              <li class="nav-item alert-link">
                              <a class="nav-link" href="#">Destaque</a>
                              </li>
                              <li class="nav-item alert-link">
                              <a class="nav-link" href="#">Promoção</a>
                              </li>
                              <li class="nav-item alert-link">
                              <a class="nav-link" href="#">Novidades</a>
                              </li>
                              <li class="nav-item alert-link">
                              <a class="nav-link" href="#">Categorias</a>
                              </li>
                              <li class="nav-item alert-link">
                              <a class="nav-link" href="#">Marcas</a>
                              </li>
                         </ul>
                              <form class="form-inline">
                                   <div class="input-group">
                                        <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                                        <div class="input-group-append">
                                        <button class="btn btn-outline-success"  type="submit">Pesquisar</button>
                                        </div>
                                   </div>
                              </form>
                         </div>
                    </nav>
               </div>
     
      </div> 

          <!-- Content -->
      <div class="row ">
          
          <!-- Carrosel -->
          <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                           <ol class="carousel-indicators">
                             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                           </ol>
                           <div class="carousel-inner">
                             <div class="carousel-item active">
                               <img class="d-block w-50 " src="asset/img/c1.jpg" alt="Primeiro Slide">
                             </div>
                             <div class="carousel-item">
                               <img class="d-block w-50 " src="asset/img/c1.jpg" alt="Segundo Slide">
                             </div>
                             <div class="carousel-item">
                               <img class="d-block w-50" src="asset/img/c1.jpg" alt="Terceiro Slide">
                             </div>
                           </div>
                           <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="sr-only">Anterior</span>
                           </a>
                           <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="sr-only">Próximo</span>
                           </a>
                    </div>
                </div>
          </div>

      </div>

          <!-- Footer -->
      <div class="row">
           
      </div>

      <!-- fim -->
     </div>

          <!-- bootstrap js -->
     <script src='app\js\popper.min.js'></script>
     <script src='app\js\jquery-3.3.1.slim.min.js'></script>
     <script src='app\js\bootstrap.min.js'></script>
     
</body>
</html>