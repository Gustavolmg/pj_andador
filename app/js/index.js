  var contador_menu = 0;
  var menu_navbar = document.getElementById('menu_navbar');


function open_lr(open_chosen) {

  var open_login =`
  <form class='px-4 py-3 h6' style='width: 18rem;'>
    <div class='form-group'>
      <label for='email_login'>
      Email</label>
      <input type='email' class='form-control' id='email_login' placeholder='email@exemplo.com'>
     </div>
     <div class='form-group'>
      <label for='password_login'>
      Senha</label>
      <input type='password' class='form-control' id='password_login' placeholder='Senha'>
     </div>
     <div class='form-check pb-2'>
      <input type='checkbox' class='form-check-input' id='check_login'>
      <label class='form-check-label' for='check_login'>Lembre-me</label>
     </div><button type='submit' class='btn btn-primary'>Entrar</button>
  </form>
  <a class="dropdown-item"  href="#" onclick="back_menu()"><-Voltar</a>
  `;

  var open_register = `<form class='px-4 py-3 h6' style='width: 18rem;'>
  <div class='form-group'>
         <label for='email_singin'>
         Email</label>
         <input type='email' class='form-control' id='email_singin' placeholder='email@exemplo.com'>
   </div>
   <div class='form-group'>   
         <label for='password_singin'>
         Senha</label>
         <input type='password' class='form-control' id='password_singin' placeholder='Senha'>
   </div>
   <div class="form-group">
        <label for="password_singin_c">confirmar senha</label>
        <input type="password" class="form-control" id="password_singin_c" placeholder="Confirme Senha">
   </div>
   <button type='submit' class='btn btn-primary'>Registrar-se</button>
</form>
<a class="dropdown-item"  href="#" onclick="back_menu()"><-Voltar</a>`


  if (open_chosen == 'login') {
    menu_navbar.innerHTML = open_login
  }
  if (open_chosen == 'register') {
    menu_navbar.innerHTML = open_register
  }
  $(menu_navbar).dropdown('toggle');
  contador_menu = contador_menu + 1;

};

// Volta para o menu original
function back_menu() {
  menu_navbar.innerHTML = `
  <a class="dropdown-item" href="#" onclick="open_lr('login');">Entrar</a>
  <a class="dropdown-item" href="#" onclick="open_lr('register');">Registrar-se</a>
  `;
  $(menu_navbar).dropdown('toggle');
  contador_menu = 0;

};

  // reseta o menu de perfil - colocar filtros futuros para quando estiver logado
  $('#user_menu').on('hidden.bs.dropdown', function () {

    if (contador_menu == 1 & menu_navbar.innerText.replace(/\s/g, '') != "EntrarRegistrar-se") {
      back_menu();
      $(menu_navbar).dropdown('toggle');
    }else{
      contador_menu = 0;
    }
  
  });




