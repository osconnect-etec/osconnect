<?php

session_start();
$_SESSION['nomeUsuario'] = $_SESSION['nomeUSR'];
$_SESSION['emailUsuario'] = $_SESSION['emailUSR'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>OS Connect</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="fontawesome/css/all.min.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="/css/styleSobre.css">
  <link rel="stylesheet" href="css/style.css">
  



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");

    body {
      font-family: "Poppins", sans-serif;
      color: #0c0c0c;
      background-color: #ffffff;
      overflow-x: hidden;
    }

    .layout_padding {
      padding: 40px 0;
    }

    .layout_margin {
      margin: 90px 0;
    }

    .layout_padding2 {
      padding: 75px 0;
    }

    .layout_padding2-top {
      padding-top: 75px;
    }

    .layout_padding2-bottom {
      padding-bottom: 75px;
    }

    .layout_padding-top {
      padding-top: 90px;
    }

    .layout_padding-bottom {
      padding-bottom: 90px;
    }

    .heading_container {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: center;
    }

    .heading_container h2 {
      position: relative;
      font-weight: bold;
      font-size: 50px;
    }

    .heading_container.heading_center {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      text-align: center;
    }

    a,
    a:hover,
    a:focus {
      text-decoration: none;
    }

    a:hover,
    a:focus {
      color: initial;
    }

    .btn,
    .btn:focus {
      outline: none;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    /*header section*/
    .hero_area {
      position: relative;
      min-height: 80vh;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      background-color: #0a2946;
      border-radius: 0 0 350px 0;
    }

    .sub_page .hero_area {
      min-height: auto;
      border-radius: 0 0 45px 0;
    }

    .header_section {
      padding: 5px 0;
      display: flex;
      position: fixed;
      width: 100%;
      background-color: #0a2946;
      z-index: 1000;

    }

    .header_section .container-fluid {
      display: flex;
      padding-right: 25px;
      padding-left: 25px;
      justify-content: center;
      align-items: center;
    }

    .navbar-brand span {
      font-weight: bold;
      color: #ffffff;
      font-size: 24px;
    }

    .custom_nav-container {
      padding: 0;
      border-bottom: solid 2px rgb(255, 255, 255);
      width: 90%;
      padding-bottom: 10px;
      display: contents;
    }

    .custom_nav-container .navbar-nav {
      margin: auto;
    }

    .nav-item {
      margin: 0 2rem 0 2rem;
    }

    .custom_nav-container .navbar-nav .nav-item .nav-link {
      padding: 5px 25px;
      color: #ffffff;
      text-align: center;
      text-transform: uppercase;
      border-radius: 5px;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }

    .custom_nav-container .navbar-nav .nav-item:hover .nav-link,
    .custom_nav-container .navbar-nav .nav-item.active .nav-link {
      color: #000000;
      background-color: #ffffff;
    }

    .custom_nav-container .navbar-toggler {
      outline: none;
    }

    .custom_nav-container .navbar-toggler {
      padding: 0;
      width: 37px;
      height: 42px;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }

    .custom_nav-container .navbar-toggler span {
      display: block;
      width: 35px;
      height: 4px;
      background-color: #ffffff;
      margin: 7px 0;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
      position: relative;
      border-radius: 5px;
      transition: all 0.3s;
    }

    .custom_nav-container .navbar-toggler span::before,
    .custom_nav-container .navbar-toggler span::after {
      content: "";
      position: absolute;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: #ffffff;
      top: -10px;
      border-radius: 5px;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }

    .custom_nav-container .navbar-toggler span::after {
      top: 10px;
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] span {
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] span::before,
    .custom_nav-container .navbar-toggler[aria-expanded="true"] span::after {
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg);
      top: 0;
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] .s-1 {
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      margin: 0;
      margin-bottom: -4px;
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] .s-2 {
      display: none;
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] .s-3 {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      margin: 0;
      margin-top: -4px;
    }

    .custom_nav-container .navbar-toggler[aria-expanded="false"] .s-1,
    .custom_nav-container .navbar-toggler[aria-expanded="false"] .s-2,
    .custom_nav-container .navbar-toggler[aria-expanded="false"] .s-3 {
      -webkit-transform: none;
      transform: none;
    }

    .quote_btn-container {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }


    .quote_btn-container a {
      color: #000000;
      text-transform: uppercase;
    }

    .quote_btn-container a span {
      margin-left: 5px;
    }

    .quote_btn-container a:hover {
      color: #3498db;
    }

    .quote_btn-container .quote_btn {
      display: inline-block;
      padding: 5px 25px;
      background-color: #3498db;
      color: #ffffff;
      border-radius: 5px;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
      border: 1px solid #3498db;
    }

    .quote_btn-container .quote_btn:hover {
      color: #ffffff;
      -webkit-transform: translateY(-3px);
      transform: translateY(-3px);
    }


    .logo {
      width: 50%;
      height: 100%;
    }

    @media screen and (max-width: 682px) {
      .navbar-collapse {
        width: 100%;
        text-align: center;
      }

      .navbar-nav {
        display: flex;
        flex-direction: column;
        width: 100%;
      }

      .nav-item {
        display: block;
        margin: 5px 0;
      }

      /* Garante que o menu apareça logo abaixo do header */
      .navbar-collapse {
        position: absolute;
        top: 99%;
        left: 0;
        background-color: #0a2946;
        /* Ajuste a cor de fundo conforme o design */
        z-index: 999;
        padding-bottom: 1rem;
      }

      /* Garante que o header permaneça fixo no topo */
      .header_section {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
      }

      .quote_btn-container {
        text-align: center;
        margin-top: 15px;
        display: contents;
      }
    }

    /*

area de teste

*/

    .content {
      width: 80%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #ffffff;
    }

    .content h2,
    .content p {
      opacity: 0;
      transition: 0.4s 0.2s ease;
    }

    .content h2 {
      margin-bottom: 12px;
      scale: 0.7;
    }

    .content p {
      font-size: 14px;
      line-height: 1.5;
      color: #d1d1d1;
      transform: translateY(50%);
    }

    .card {
      width: 80%;
      height: 100%;
      box-shadow: 2px 2px 0px 0px black;
      background-color: #ffffff;
      border-radius: 5px;
      margin-bottom: 10px;
      overflow: hidden;
      position: relative;
      display: flex;
      transition: ease-in-out 0.5s;
    }

    .card:hover {
      box-shadow: 0px 0px 0px 0px black;
      width: 85%;
      height: 105%;
      transition: ease-in-out 0.5s;
    }


    @media screen and (max-width: 768px) {
      .content {
        flex-direction: column;
        justify-content: left;
        align-items: flex-start;
        padding-bottom: 50px;
      }

      .image-container {
        width: 100%;
        flex-direction: column;
      }

      .hero_area {
        border-radius: 0 0 0 0;
        width: 100%;
      }

      .text-container {
        position: relative;
      }


    }
      /*# sourceMappingURL=style.css.map */


      #loading {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
  }

  /* HTML: <div class="loader"></div> */
  .loader {
        width: fit-content;
        padding-bottom: 5px;
        font-weight: bold;
        font-family: monospace;
        font-size: 30px;
        overflow: hidden;
        color: #0000;
        text-shadow: 0 0 0 #000, 10ch 0 0 #000;
        background: linear-gradient(#000 0 0) bottom left/0% 3px no-repeat;
        animation: l14 1.5s infinite;
    }

    .loader:before {
        content: "osconnect";
    }

    @keyframes l14 {
        80% {
            text-shadow: 0 0 0 #000, 10ch 0 0 #000;
            background-size: 100% 3px
        }

        100% {
            text-shadow: -10ch 0 0 #000, 0 0 0 #000
        }
    }
</style>
</head>

<body>

  <div id="loading">
    <div class="loader"></div>
  </div>

  <script>
    window.onload = function () {
      document.getElementById("loading").style.display = "none";
    };
  </script>

  <script>
    // Esconde a tela de carregamento quando a página for carregada
    window.onload = function () {
      document.getElementById("loading").style.display = "none";
    };
  </script>
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <img class="logo" src="img/logo.png" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="sobre.php"> Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="history.php">Historico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.php">Contate-nos</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contribuintes.php">contribuintes</a>
              </li>
          </ul>
          <div class="quote_btn-container">
            <a href="perfil.php" class="quote_btn">
              <i class="icone bi bi-person-circle" style="font-size: 30px; margin: 0 2% 0 0; "></i>
              <?php echo $_SESSION['nomeUSR'] ?>
            </a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main class="tm-main">

    <div class="row tm-row tm-mb-40">
      <div class="col-12">
        <div class="mb-4">
          <h1>contribuintes</h1>
          <p>
            Tela dedicada aos contribuintes do projeto os connect
          </p>
        </div>
      </div>
    </div>

    <div class="card mb-3" style="margin-bottom: 100px;">
      <div class="row g-0">
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title">Sthefany Oliveira</h2>
            <p class="card-text">
              oque fez: Remodelação de design
            </p>
            <p>
              email: <strong> Sthefany.oliveira20@etec.sp.gv.br</strong>
            </p>
            <p>
              onde moro: Guaratinguetá SP Brasil
            </p>
            <p>
              formação academica:
            <p><strong>Etec Prof° Alfredo de barros Santos</strong><br>Desenvolvimento de sistemas</p>
            </p>
            <p>hobbies: Dançar, Cantar, Estetica</p>
            <p>
              redes sociais
            </p>
            <p>A arte é a expressão mais pura da alma, onde sentimentos ganham forma e cores.</p>
            <p class="card-text">
              <small class="text-body-secondary">17 anos</small>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="row g-0">
        
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title">Lucas S. Balbi</h2>
            <p class="card-text">
              oque fez: ajuda UI (User Interface) e UX (User Experiencie) e parte do banco de dados
            </p>
            <p>
              email: <strong> lucas.balbi@etec.sp.gob.br</strong>
            </p>
            <p>
              onde moro: Guaratinguetá SP, Brasil
            </p>
            <p>
              formação academica:
            <p><strong>Etec Prof° Alfredo de barros Santos</strong><br>Desenvolvimento de sistemas</p>
            </p>
            <p>hobbies: programação, música, jogos e arte.
            </p>
            <p>
              redes sociais
            </p>
            <p>E.</p>
            <p>Ó mal habite em quanto há tempo de habitar, pois quem resides ainda de expurgará.</p>lass="card-text">
              <small class="text-body-secondary">16 anos</small>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title">Miguel Queiroz</h2>
            <p class="card-text">
              O que fez: ajuda UI (User Interface) e UX (User Experiencie) e parte do banco de dados
            </p>
            <p>
              email: <strong>miguel.faustino@etec.sp.gov.br</strong>
            </p>
            <p>
              onde moro: Aparecida SP Brasil
            </p>
            <p>
              formação academica:
            <p><strong>Etec Prof° Alfredo de barros Santos</strong><br>Desenvolvimento de sistemas</p>
            </p>
            <p>hobbies: programação, música, jogos e animações.</p>
            <p>
              redes sociais
            </p>
            <p>Expansão de dominio: npm run reset-project.</p>
            <p class="card-text">
              <small class="text-body-secondary">Idade: 16 anos</small>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title">Luis Felipe</h2>
            <p class="card-text">
              Responsabilidades: ajuda UI (User Interface) e UX (User Experiencie) e parte do banco de dados
            </p>
            <p>
              email: <strong>luis.galhardo@etec.sp.gov.br</strong>
            </p>
            <p>
              onde moro: Guaratinguetá SP Brasil
            </p>
            <p>
              formação academica:
            <p><strong>Etec Prof° Alfredo de barros Santos</strong><br>Desenvolvimento de sistemas</p>
            </p>
            <p>hobbies: música, jogos, arte, leitura e espiritualidade</p>
            <p>
              redes sociais
            </p>
            <p>"Eu vos dou um novo mandamento, amai-vos uns aos outros. Como eu vos amei assim também vós deveis amar-vos
              uns aos outros" - João 13,34</p>
            <p class="card-text">
              <small class="text-body-secondary">Idade: 17 anos</small>
            </p>
          </div>
        </div>
      </div>
    </div>


  </main>
  <footer class="">
    <hr class="col-12" />
    <div class="col-md-6 col-12 tm-color-gray"></div>
    <div class="col-md-6 col-12 tm-color-gray tm-copyright">
      Copyright 2024 OSConnect Ltd.
    </div>
  </footer>
</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
<script src="js/bootstrap.js"></script>

</html>