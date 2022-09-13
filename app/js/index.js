var menu_navbar = document.getElementById('menu_navbar');


function open_login() {
  // menu_navbar.innerHTML = "<form class='px-4 py-3 h6' style='width: 12rem;'><div class='form-group'><label for='email_login'>Email</label><input type='email' class='form-control' id='email_login' placeholder='email@exemplo.com'></div><div class='form-group'><label for='password_login'>Senha</label><input type='password' class='form-control' id='password_login' placeholder='Senha'></div><div class='form-check pb-2'><input type='checkbox' class='form-check-input' id='check_login'><label class='form-check-label' for='check_login'>Lembre-me</label></div><button type='submit' class='btn btn-primary'>Entrar</button></form>";
  menu_navbar.innerHTML = `
  <form class='px-4 py-3 h6' style='width: 12rem;'>
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
  $(menu_navbar).dropdown('toggle')
}

function back_menu() {
  menu_navbar.innerHTML = `
  <a class="dropdown-item" href="#" onclick="open_login();">Entrar</a>
  <a class="dropdown-item" href="#">Registrar-se</a>
  `;
  $(menu_navbar).dropdown('toggle')
}

// Não funfa consertar depois
$(menu_navbar).on('hidden.bs.dropdown', function () {
  menu_navbar.innerHTML = `
  <a class="dropdown-item" href="#" onclick="open_login();">Entrar</a>
  <a class="dropdown-item" href="#">Registrar-se</a>
  `;
  console.log('ola');
});