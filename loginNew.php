<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<link rel="icon" href="../../assets/images/logo-page.png" type="image/x-icon" />
<link rel="stylesheet" href="css/login.css">


<?php 
$urllog = dirname($_SERVER['PHP_SELF']);
$urllog = str_replace("/views/login", "", $urllog);
?>







<div class="container">
  <div class="forms-container">
    <div class="signin-signup">
      <!-- Formulário de Login -->
      <form action="<?php echo $urllog; ?>/index.php" class="sign-in-form" method="post">
        <h2 class="title">
          <a href="<?php echo $urllog; ?>/index.php"><i class="bi bi-arrow-left-short"></i></a>
          Entrar
        </h2>
        <div class="input-field">
          <i class="bi bi-person-fill"></i>
          <input type="text" placeholder="Nome de usuário" />
        </div>
        <div class="input-field">
          <i class="bi bi-lock-fill"></i>
          <input type="password" id="password-login" placeholder="Senha" />
          <button type="button" class="btn-eye" onclick="togglePassword('password-login', 'togglePasswordIconLogin')">
            <i class="bi bi-eye-slash" id="togglePasswordIconLogin"></i>
          </button>
        </div>
        <input type="submit" value="Login" class="btn solid" />
        <p class="social-text">Ou entre com plataformas sociais</p>
        <div class="social-media">
          <a href="https://accounts.google.com/v3/signin/identifier?hl=pt-BR&ifkv=ARpgrqfWj22BqxhTZrTjZrB1vO_cxbiAKCvZc979C1Uq9G5cSUoiTYr2nQ3nTimecAaAla77afw1Bw&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S623225336%3A1728170604862927&ddm=1"
            class="social-icon">
            <i class="bi bi-google"></i>
          </a>
          <a href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=service%3A%3Aaccount.microsoft.com%3A%3AMBI_SSL+openid+profile+offline_access&response_type=code&client_id=81feaced-5ddd-41e7-8bef-3e20a2689bb7&redirect_uri=https%3A%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin-oauth&client-request-id=f15bf8ff-ffe9-4c61-b894-023b11b06a7f&x-client-SKU=MSAL.Desktop&x-client-Ver=4.61.3.0&x-client-OS=Windows+Server+2019+Datacenter&prompt=login&client_info=1&state=H4sIAAAAAAAEAA3Gt4KCMAAA0H9xdUAjdXBA0AQIoSgtGwQ4QeEoUuTr7970dhREOgAsuAoidxC2vEwH5l3VRmKmRBW-0m526jvvAtl0IuHYNRl4555EqFrRiy8-41c4Uga8L0iW78IffTtS4CcPJ1cgLhg4DQEkJSsu--Cms-Lh6dv60kBrq2VZX7ghavLXdowZdo3VbyzEphGuYl3A2Rw4eblJ6sglmX1qLSW3099EF58GXggkE5t1ze19rKUkNjyvA5D13b6wvHqB7aahAyCNZ8ufeq-eGIzCTlH8ILdyTuhGANH_MBKw2dakbg5i7-Rk0vay8wzc9cQnfNwpGde9QWtULv0uUt9ehmJGVYDlj3bH937OTBVvH8dpEzrL8XiMuDvJfkLyiNTzefcHHHN_l1oBAAA&msaoauth2=true&lc=1046&sso_reload=true"
            class="social-icon">
            <i class="bi bi-microsoft"></i>
          </a>
        </div>
      </form>

      <!-- Formulário de Cadastro -->
      <form action="<?php echo $urllog; ?>/index.php" class="sign-up-form">
        <h2 class="title"> <a href="<?php echo $urllog; ?>/index.php"><i class="bi bi-arrow-left-short"></i></a>
          Cadastrar</h2>
        <div class="input-field">
          <i class="bi bi-person-fill"></i>
          <input type="text" placeholder="Nome de usuário" />
        </div>
        <div class="input-field">
          <i class="bi bi-envelope-fill"></i>
          <input type="email" placeholder="E-mail" />
        </div>
        <div class="input-field">
          <i class="bi bi-lock-fill"></i>
          <input type="password" id="password-signup" placeholder="Senha" />
          <button type="button" class="btn-eye" onclick="togglePassword('password-signup', 'togglePasswordIconSignup')">
            <i class="bi bi-eye-slash" id="togglePasswordIconSignup"></i>
          </button>
        </div>
        <div class="input-field">
          <i class="bi bi-credit-card"></i>
          <input type="text" placeholder="Cpf" />
        </div>
        <input type="submit" class="btn" value="Cadastrar" />
        <p class="social-text">Ou cadastre-se com plataformas sociais</p>
        <div class="social-media">
          <a href="https://accounts.google.com/v3/signin/identifier?hl=pt-BR&ifkv=ARpgrqfWj22BqxhTZrTjZrB1vO_cxbiAKCvZc979C1Uq9G5cSUoiTYr2nQ3nTimecAaAla77afw1Bw&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S623225336%3A1728170604862927&ddm=1"
            class="social-icon">
            <i class="bi bi-google"></i>
          </a>
          <a href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=service%3A%3Aaccount.microsoft.com%3A%3AMBI_SSL+openid+profile+offline_access&response_type=code&client_id=81feaced-5ddd-41e7-8bef-3e20a2689bb7&redirect_uri=https%3A%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin-oauth&client-request-id=f15bf8ff-ffe9-4c61-b894-023b11b06a7f&x-client-SKU=MSAL.Desktop&x-client-Ver=4.61.3.0&x-client-OS=Windows+Server+2019+Datacenter&prompt=login&client_info=1&state=H4sIAAAAAAAEAA3Gt4KCMAAA0H9xdUAjdXBA0AQIoSgtGwQ4QeEoUuTr7970dhREOgAsuAoidxC2vEwH5l3VRmKmRBW-0m526jvvAtl0IuHYNRl4555EqFrRiy8-41c4Uga8L0iW78IffTtS4CcPJ1cgLhg4DQEkJSsu--Cms-Lh6dv60kBrq2VZX7ghavLXdowZdo3VbyzEphGuYl3A2Rw4eblJ6sglmX1qLSW3099EF58GXggkE5t1ze19rKUkNjyvA5D13b6wvHqB7aahAyCNZ8ufeq-eGIzCTlH8ILdyTuhGANH_MBKw2dakbg5i7-Rk0vay8wzc9cQnfNwpGde9QWtULv0uUt9ehmJGVYDlj3bH937OTBVvH8dpEzrL8XiMuDvJfkLyiNTzefcHHHN_l1oBAAA&msaoauth2=true&lc=1046&sso_reload=true"
            class="social-icon">
            <i class="bi bi-microsoft"></i>
          </a>
          <a href="https://account.apple.com/sign-in" class="social-icon">
            <i class="bi bi-apple"></i>
          </a>
        </div>
      </form>
    </div>
  </div>

  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
        <h3>Novo por aqui?</h3>
        <p>
          Clique no botão abaixo e realize seu cadastro!
        </p>
        <button class="btn transparent" id="sign-up-btn">
          Cadastre-se
        </button>
      </div>
      <img src="../../assets/images/log.svg" class="image" alt="" />
    </div>
    <div class="panel right-panel">
      <div class="content">
        <h3>Já faz parte?</h3>
        <p>
          Clique no botão abaixo e realize o login!
        </p>
        <button class="btn transparent" id="sign-in-btn">
          Entrar
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<script>
  function togglePassword(passwordId, iconId) {
    const passwordField = document.getElementById(passwordId);
    const toggleIcon = document.getElementById(iconId);

    // Se a senha estiver visível, ocultar e mudar o ícone
    if (passwordField.type === "text") {
      passwordField.type = "password";
      toggleIcon.classList.remove("bi-eye");
      toggleIcon.classList.add("bi-eye-slash"); // Exibir o ícone de ocultar
    }
    // Se a senha estiver oculta, exibir e mudar o ícone
    else {
      passwordField.type = "text";
      toggleIcon.classList.remove("bi-eye-slash");
      toggleIcon.classList.add("bi-eye"); // Exibir o ícone de mostrar
    }
  }
</script>



<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<script src="../../js/login.js"></script>