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
    <title>Histórico</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />

    <link rel="icon" href="img/OS_logo.png" type="png" />
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

    /*Main section*/
    .main {
      margin-top: 9rem;
      padding: 1rem 5rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .main p {
      font-size: 40px;
      margin-top: 2rem;
      font-weight: 600;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .main img {
      width: 20%;
      height: auto;
    }

    @media screen and (max-width: 992px) {
      .main {
        margin-top: 20rem;
        padding: 1rem 5rem;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .main p {
        font-size: 20px;
        margin-top: 2rem;
        font-weight: 600;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }

      .main img {
        width: 50%;
        height: auto;
      }
    }

    /*Card style*/
    .card {
      width: 100%;
      max-width: 300px;
      margin: 0 auto;
      background-color: #dadada;
      border-radius: 15px;
      margin-bottom: 1rem;
      padding: 2rem;
      outline: #000000 solid 1px;
    }

    a .img {
      position: relative;
      display: block;
    }

    img {
      width: 100%;
      border-radius: 15px;
      display: block;
    }

    .avatar {
      width: 2rem;
      border-radius: 200px;
      outline: solid 2px white;
      margin-right: 1.4rem;
    }

    .flex-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .situation,
    .time-left,
    .card-attribute {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem 0;
    }

    .card-attribute p {
      font-size: 10px;
    }

    .main-card {
      display: block;
      unicode-bidi: isolate;
    }

    .main-card h1 {
      padding: 1.2rem 0;
    } #loading {
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
              <li class="nav-item active">
                <a class="nav-link" href="history.php"
                  >Historico <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.php">Contate-nos</a>
              </li>
              <li class="nav-item">
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
      <img src="img/EmAndamento.gif" alt="Andamento" />
      <p>Página em andamento...</p>
    </div>

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
