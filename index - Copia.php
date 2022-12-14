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
     <div class="row justify-content-md-center alert alert-success " style="border-bottom-right-radius: 20%; border-bottom-left-radius: 20%;">

          <!-- Barra de navegação -->
               <div class="col-auto col-md-auto">
                    <nav class="navbar navbar-expand-lg navbar-light" >

                         <!-- Logo -->
                         <a class="navbar-brand" href="#"><img src="<?php echo site_logo ?>" width="90" height="90" ></a>

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
          <div class="row ">
                <div class="col-md-auto">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                           <ol class="carousel-indicators">
                             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                           </ol>
                           <div class="carousel-inner" >
                             <div class="carousel-item active">
                               <img class="d-block w-100" src="asset/icon/c1.jpg" alt="Primeiro Slide">
                             </div>
                             <div class="carousel-item">
                               <img class="d-block w-100" src="asset/icon/c1.jpg" alt="Segundo Slide">
                             </div>
                             <div class="carousel-item">
                               <img class="d-block w-100" src="asset/icon/c1.jpg" alt="Terceiro Slide">
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

      <!-- conteudo principal do site -->
     <div class="row justify-content-center">

                    <div class="col-auto  p-1">

                         <p>
                              <strong class="h1 ">
                                   Categorias: 
                              </strong>
                         </p> 

                    </div>
     </div>

          <!-- Footer -->
     <div class="row justify-content-center bg-white">

          <div class="col-xl-3">
               
               <ol>
                    <ul><strong>Quem somos?</strong></ul>
                    <ul>Redes sociais empresa:</ul>
                    <ul><a href="#">facebook</a></ul>
                    <ul><a href="#">twitter</a></ul>
                    <ul><a href="#">instagram</a></ul>
                    <ul>Endereço:</ul>
                    <ul>Novo Horizonte/Aroeira</ul>
                    <ul>Conceição do Coité BA</ul>
                    <ul>Cep: 48730-000</ul>
               </ol>

          </div>
          
          <div class="col-xl-3">

               
               <ol>
                    <ul><strong>Area do funcionario</strong></ul>
                    <ul><a href="#">Entrar</a></ul>
                    <ul><a href="#">Pedir Cadastro</a></ul>
                    <ul><a href="#">Termos de Serviço</a></ul>
               </ol>

          </div>

          <div class="col-xl-3">

               
               <ol>
                    <ul><strong>Pagamento</strong></ul>
                    <ul><a href="#">Cartão de credito/debito</a></ul>
                    <ul><a href="#">Boletos</a></ul>
                    <ul><a href="#">Pix</a></ul>
                    <ul><a href="#">Segunda Via</a></ul>
               </ol>

          </div>   

          <div class="col-xl-3">

               <ol>
                    <ul><strong>Estamos aqui para ajudar</strong></ul>
                    <ul>contate-nos:</ul>
                    <ul>email: ###########@gmail.com</ul>
                    <ul>Telefone: (00) 90000-0000</ul>
               </ol>

          </div>        
     </div>

      <!-- fim -->
     </div>

          <!-- bootstrap js -->
     <script src='app\js\popper.min.js'></script>
     <script src='app\js\jquery-3.3.1.slim.min.js'></script>
     <script src='app\js\bootstrap.min.js'></script>
     
</body>
</html>