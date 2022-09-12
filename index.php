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
                              <li class="nav-item">
                              <form class="form-inline">
                                   <div class="input-group">
                                        <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                                        <div class="input-group-append">
                                        <button class="btn btn-outline-success"  type="submit">Pesquisar</button>
                                        </div>
                                   </div>
                              </form>
                              </li>
                              <li class="nav-item dropdown ml-3">
                                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="" src="asset/icon/perfil.png">
                                   </a>
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                       <a class="dropdown-item" href="#">Entrar</a>
                                       <a class="dropdown-item" href="#">Registrar-se</a>
                                     </div>
                              </li>
                         </ul>
                         </div>
                    </nav>
               </div>
     
      </div> 

          <!-- Content -->
      <div class="row ">
          
          <!-- Carrosel -->
                <div class="col-12 pb-2">
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

      <!-- conteudo principal do site -->
     <div class="row justify-content-center bg-light">

                    <div class="col-auto p-2" >

                         <p>
                              <strong class="h1">
                                   Categorias
                              </strong>
                         </p> 

                              <div class="card-deck p-2">

                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_fruit.jfif">
                                        </div>
                                             <div class="card-body">Categoria do item</div>
                                             <div class="card-footer">[preço] [quantidade]</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_livros.jfif">
                                        </div>
                                             <div class="card-body">Categoria do item</div>
                                             <div class="card-footer">[preço] [quantidade]</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_moveis.jfif">
                                        </div>
                                             <div class="card-body">Categoria do item</div>
                                             <div class="card-footer">[preço] [quantidade]</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class=" card-img-top">
                                                  <img class="" src="asset/icon/cat_roupas.jfif">
                                        </div>
                                             <div class="card-body">Categoria do item</div>
                                             <div class="card-footer">[preço] [quantidade]</div>
                                   </div>
                              </div>

                              <div class="card-deck p-2">

                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">Categoria do item</div>
                                             <div class="card-footer">[preço] [quantidade]</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">Categoria do item</div>
                                             <div class="card-footer">[preço] [quantidade]</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">Categoria do item</div>
                                             <div class="card-footer">[preço] [quantidade]</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">Categoria do item</div>
                                             <div class="card-footer">[preço] [quantidade]</div>
                                   </div>

                              </div>


                              <div class="card-deck p-2">

                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">Categoria do item</div>
                                             <div class="card-footer">[preço] [quantidade]</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">Categoria do item</div>
                                             <div class="card-footer">[preço] [quantidade]</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">Categoria do item</div>
                                             <div class="card-footer">[preço] [quantidade]</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">Mais Categorias</div>
                                             <div class="card-footer">Explore Mais</div>
                                   </div>

                              </div>


                    </div>

                    <div class="col-auto p-2">

                         <p>
                              <strong class="h1">
                                   Destaques
                              </strong>
                         </p> 

                         <div class="card-deck p-2">

                              
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/img/senhor_aneis.jpg">
                                        </div>
                                             <div class="card-body">Senhor dos Anais</div>
                                             <div class="card-footer">121,50R$</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">nome do item</div>
                                             <div class="card-footer">descriçao do item</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">nome do item</div>
                                             <div class="card-footer">descriçao do item</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">nome do tem</div>
                                             <div class="card-footer">descricao do item</div>
                                   </div>

                         </div>

                    </div>

                    <div class="col-auto p-2">

                         <p>
                              <strong class="h1">
                                   Promoções
                              </strong>
                         </p> 

                         <div class="card-deck p-2">

                              
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">Nome do item</div>
                                             <div class="card-footer">descriçao do item</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">nome do item</div>
                                             <div class="card-footer">descriçao do item</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">nome do item</div>
                                             <div class="card-footer">descriçao do item</div>
                                   </div>
                                   <div class="card border-dark" style="width: 16rem;">
                                        <div class="card-img-top">
                                                  <img class="" src="asset/icon/cat_escritorio.jfif">
                                        </div>
                                             <div class="card-body">nome do tem</div>
                                             <div class="card-footer">descricao do item</div>
                                   </div>

                         </div>

                    </div>


     </div>

          <!-- Footer -->
     <div class="row justify-content-center bg-white p-3">

          <div class="col-auto">
               
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
          
          <div class="col-auto">

               
               <ol>
                    <ul><strong>Area do funcionario</strong></ul>
                    <ul><a href="#">Entrar</a></ul>
                    <ul><a href="#">Pedir Cadastro</a></ul>
                    <ul><a href="#">Termos de Serviço</a></ul>
               </ol>

          </div>

          <div class="col-auto">

               
               <ol>
                    <ul><strong>Pagamento</strong></ul>
                    <ul><a href="#">Cartão de credito/debito</a></ul>
                    <ul><a href="#">Boletos</a></ul>
                    <ul><a href="#">Pix</a></ul>
                    <ul><a href="#">Segunda Via</a></ul>
               </ol>

          </div>   

          <div class="col-auto">

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