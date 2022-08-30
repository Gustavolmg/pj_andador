<?php

     require("app/php/config.php");          
     require("app/php/db_config.php");
?>

<!DOCTYPE html>
<html lang="Pt-Br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=900, initial-scale=1.0">
     <link rel='stylesheet' href='node_modules/bootstrap/dist/css/bootstrap.min.css'>
     <script src='node_modules/bootstrap/dist/js/bootstrap.min.js'></script>

     <title>Mercadinho budega</title>
</head>
<body>
     <header class="conteiner-fluid">

     <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#"><img src="<?php echo site_logo ?>" width="90" height="90" ></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
               <a class="nav-link" href="#">Inicio <span class="sr-only">(página atual)</span></a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="#">Destaque</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="#">Promoção</a>
               </li>
               <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ação</a>
                    <a class="dropdown-item" href="#">Outra ação</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Algo mais aqui</a>
               </div>
               </li>
               <li class="nav-item">
               <a class="nav-link disabled" href="#">Desativado</a>
               </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
          </div>
     </nav>


     </header> 

     <div class="container">
          
     </div>
     
     <footer>
          
     </footer>

</body>
</html>