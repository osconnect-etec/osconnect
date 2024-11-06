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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>


  <style> 
.logo{
    width: 50%;
  }

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



    /*Main section*/
    .main {

      padding: 1rem 5rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
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
    .andamento{
      margin-top: 9rem;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .andamento p {
      font-size: 40px;
      margin-top: 2rem;
      font-weight: 600;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .andamento img {
      width: 60%;
      height: 50%;
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
    
    <?php require_once('php/header.php')?>

    <div class="main">
      <div class="andamento">
        <img src="img/EmAndamento.gif" alt="Andamento" />
        <p>Página em andamento...</p>
      </div>
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
