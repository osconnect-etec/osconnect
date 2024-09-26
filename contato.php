<?php

session_start();
$_SESSION['nomeUsuario'] = $_SESSION['nomeUSR'];
$_SESSION['emailUsuario'] = $_SESSION['emailUSR'];

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conatato</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
    body {
      font-family: "Poppins", sans-serif;
      color: #0c0c0c;
      background-color: #ffffff;
      overflow-x: hidden;
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
        background-color: #0a2946; /* Ajuste a cor de fundo conforme o design */
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

    .hero_area {
      display: flex;
    }

    .header_section {
      padding: 5px 0;
      display: flex;
      width: 100%;
      background-color: #0a2946;
      z-index: 1000;
    }

    .header_section .container-fluid {
      display: flex;
      padding-right: 25px;
      padding-left: 25px;
      justify-content: space-between;
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
      justify-content: center;
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

    /*end header section*/

    /*main saction*/

    .main {
      margin-top: 1rem;
      padding: 1rem 5rem;
    }

    @media screen and (max-width: 992px) {
      .main {
        margin-top: 4.5rem;
        padding: 1rem 5rem;
      }
    }

    .title {
      text-align: center;
      font-weight: 500;
      font-size: 2.5rem;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .under-title {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #0a2946;
      height: 2px;
      border-radius: 50px;
    }

    /*Form Section*/
    .form-area {
      max-width: 100%;
      width: 85%;
      margin: 0 auto;
      margin-top: 2rem;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .input-group {
      position: relative;
      width: 100%;
      margin: 1rem 0;
    }

    .input-group input,
    .input-group textarea {
      width: 100%;
      padding: 0.2rem 3rem;
      margin: 0.8rem 0;
      font-size: 1rem;
      border: solid 2px #fff;
      outline: none;
      transition: ease-in-out 0.2s;
    }

    .input-group input:hover,
    .input-group textarea:hover {
      width: 100%;
      padding: 0.2rem 3rem;
      font-size: 1rem;
      border-bottom: solid #929292 2px;
      border-radius: 0;
      transition: ease-in-out 0.2s;
      outline: none;
    }

    .form-wrapper {
      width: 100%;
      max-width: 28rem;
    }

    .form button {
      cursor: pointer;
      width: 100%;
      padding: 0.6rem 0;
      border-radius: 0.5rem;
      border: none;
      background-color: #3498db;
      color: #ffffff;
      font-size: 1.2rem;
      outline: none;
      transition: ease-in-out 0.5s;
    }

    .form button:hover {
      transition: 0.3s;
      background-color: #0a2946;
    }

    .info {
      display: flex;
      flex-direction: column;
      text-align: center;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      justify-content: center;
      align-items: center;
    }

    @media screen and (max-width: 992px) {
      .form-area {
        display: contents;
      }

      .info {
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        margin-top: 2rem;
      }
    }

    /*end of Form Section*/
    /*end of main section*/

    /*footer section*/

    footer {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 2rem;
    }

    .container {
      text-align: center;
    }

    .footer-line {
      width: 100%;
      background-color: #0a2946;
      height: 0.1px;
    }

    @media screen and (max-width: 992px) {
      footer {
        font-size: 15px;
        display: flex;
        justify-content: center;
      }
    }
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
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img class="logo" src="img/logo.png" alt="logo" />
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sobre.php">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="history.php">Historico</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contato.php"
                  >Contate-nos <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item ">
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
    <div class="main">
      <div class="title">Fale Conosco</div>
      <hr class="under-title" />
      <div class="form-area row">
        <div class="form col">
          <div class="input-group">
            <input type="text" placeholder="Nome" />
          </div>
          <div class="input-group">
            <input type="email" placeholder="Email" />
          </div>
          <div class="input-group">
            <input type="text" placeholder="Assunto" />
          </div>
          <div class="input-group">
            <textarea
              name="mensagem"
              id=""
              class="form-control"
              placeholder="Mensagem..."
            ></textarea>
          </div>
          <a href="#"><button>Enviar</button></a>
        </div>

        <div class="info col">
          <p>Entre em contato com nossa equipe!</p>
          <p>
            Sua opinião é muito importante para nós. Caso você tenha encontrado
            algum erro, bug ou mau funcionamento em nosso site, não hesite em
            nos informar para que possamos corrigi-lo o mais rápido possível.
          </p>
          <p>
            Além disso, se você tiver sugestões, ideias ou melhorias que possam
            tornar o site mais funcional e agradável para todos os usuários,
            adoraríamos ouvir sua opinião. Estamos comprometidos em fornecer a
            melhor experiência possível e seu feedback é essencial para isso.
          </p>
          <p>aguardamos seu contato!</p>
        </div>
      </div>
    </div>
    <footer class="footer_section">
      <div class="container">
        <hr class="footer-line" />
        <p>
          &copy; <span id="displayYear"></span> todos os direitos reservados a
          <a href="index.phps-">OSConnect</a>
        </p>
      </div>
    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
