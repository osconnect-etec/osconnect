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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
  .logo {
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


  /*main saction*/

  .main {
    padding: 5rem 5rem;
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

  .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            padding: 30px;
            text-align: center;
            width: 300px;
            margin: 0 auto;
            position: relative;
            top: 20rem;
            display: none;
            z-index: 1001;
        }

        .message {
            color: black;
            font-size: 18px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: transparent;
            border: none;
            font-size: 18px;
            cursor: pointer;
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

            var msgCard = document.getElementById('msgCard');
            if (msgCard) {
                msgCard.style.display = 'flex';
                msgCard.style.marginTop = '-9.5rem'
            }
        };

        function fecharCard() {
            var msgCard = document.getElementById('msgCard');
            if (msgCard) {
                msgCard.style.display = 'none';
            }
        }
    </script>
    
    <?php require_once('php/header.php')?>

  <?php
        if (isset($_GET['mensagem'])) {
            $mensagem = htmlspecialchars($_GET['mensagem']); // Sanitiza a mensagem
            echo "<div class='card' id='msgCard'>
                    <button class='close-btn' onclick='fecharCard()'>&times;</button>
                    <p class='message'>Mensagem:<br> $mensagem</p>
                  </div>";
        }
        ?>

  <div class="main">
    <div class="title">Fale Conosco</div>
    <hr class="under-title" />
    <div class="form-area row">
      <form class="form col" action="contate.php" method="post">
        <div class="input-group">
          <input type="text" placeholder="Nome" name="Nome" required />
        </div>
        <div class="input-group">
          <input type="email" placeholder="Email" name="Emailcli" required />
        </div>
        <div class="input-group">
          <input type="text" placeholder="Assunto" name="Ass" required />
        </div>
        <div class="input-group">
          <textarea name="mensagem" id="" class="form-control" placeholder="Mensagem..."></textarea>
        </div>
        <a href="#"><button type="submit">Enviar</button></a>
      </form>

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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>