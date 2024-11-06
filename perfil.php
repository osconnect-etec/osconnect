<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);



// Verifique se a sessão está ativa
if (empty($_SESSION['nomeUSR'])) {
  echo "Usuário não está logado ou sessão inválida.";
  var_dump($_SESSION);  // Mostra todas as variáveis de sessão
  exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>OSConnect</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="fontawesome/css/all.min.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    .logo {
      width: 50%;
    }

    .profile-info {
      margin-top: 30px;
      display: flex;
      justify-content: center;
    }

    .profile-nav {
      margin-top: 30px;
      display: flex;
      justify-content: start;
    }

    .profile-nav .user-heading {
      background: #4d5034;
      color: #fff;
      border-radius: 4px 4px 0 0;
      -webkit-border-radius: 4px 4px 0 0;
      padding: 30px;
      text-align: center;
    }

    .profile-nav .user-heading.round a {
      border-radius: 50%;
      -webkit-border-radius: 50%;
      border: 10px solid rgba(255, 255, 255, 0.3);
      display: inline-block;
    }

    .profile-nav .user-heading a img {
      width: 112px;
      height: 112px;
      border-radius: 50%;
      -webkit-border-radius: 50%;
    }

    .profile-nav .user-heading h1 {
      font-size: 22px;
      font-weight: 300;
      margin-bottom: 5px;
    }

    .profile-nav .user-heading p {
      font-size: 12px;
    }

    .profile-nav ul {
      margin-top: 1px;
    }

    .profile-nav ul>li {
      /*estlização das opções*/
      border-bottom: 1px solid #ebeae6;
      margin-top: 0;
      line-height: 30px;
    }

    .profile-nav li>a {
      /*estlização das opções*/
      font-size: 18px;
    }

    .profile-nav ul>li:last-child {
      border-bottom: none;
    }

    .profile-nav ul>li>a {
      /*Estilização dos campos das opções*/
      border-radius: 0;
      -webkit-border-radius: 0;
      color: #000000;
      border-left: 5px solid #fff;
    }

    .profile-nav ul>li>a:hover,
    .profile-nav ul>li>a:focus,
    .profile-nav ul li.active a {
      background: #f8f7f5 !important;
      /*hover do nav-link*/
      border-left: 5px solid #3498db;
      color: #000000 !important;
    }

    .profile-nav ul>li:last-child>a:last-child {
      border-radius: 0 0 4px 4px;
      -webkit-border-radius: 0 0 4px 4px;
    }

    .ativo {
      background-color: #3498db;
    }

    .profile-nav ul>li>a>i {
      /*estilização dos icones*/
      font-size: 16px;
      padding-right: 10px;
      color: #222;
    }

    .profile-nav ul>li {
      /*estlização dos campos*/
      font-size: 15px;
      padding-right: 10px;
      color: #bcb3aa;
    }

    .text-muted {
      /*estilização da fonte das informações*/
      font-size: 17px;
      padding-right: 10px;
      color: #6f6c6c;
    }

    .r-activity {
      margin: 6px 0 0;
      font-size: 12px;
    }


    .btn {
      color: #fff;
      background: #3498db;
      border: none;
    }

    .btn:hover {
      color: #fff;
      background: #0a2946;
      transition: 0.3s;
    }

    .btn-card {
      background: #3498db;
      border: none;
      border-radius: 5px;
      padding-left: 10px;
      padding-right: 10px;
    }

    .btn-card:hover {
      background: #0a2946;
      transition: 0.3s;
    }

    /* Remove as setas no Chrome, Safari, Edge, Opera */
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Remove as setas no Firefox */
    input[type="number"] {
      -moz-appearance: textfield;
    }

    input {
      width: 80%;
      background: none;
      padding: 5px;
      margin-bottom: 10px;
      border-radius: 4px;
      font-size: 15px;
    }

    #image-container {
      position: relative;
      display: inline-block;
      width: 50%;
    }

    #image-container img{
      border-radius: 50%;
    }


    .rounded-circle {
      border: 3px solid #3498db;
    }

    .overlay-text {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      color: white;
      font-size: 14px;
      line-height: 100px;
      /* Igual ao tamanho da imagem para centralizar verticalmente */
      text-align: center;
      border-radius: 50%;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .overlay-text:hover {
      background: rgba(0, 0, 0, 0.7);
      /* Efeito hover */
    }

    #profile-image {
      border-radius: 50%;
      /* Para manter a imagem redonda */
    }

    .cardGroup {
      display: flex;
      flex-direction: row-reverse;
    }

    .card {
      box-shadow: 1.5px 1.5px 2px 2px #dadada;
    }



    #upload-text {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      display: none;
      background: rgba(0, 0, 0, 0.5);
      color: white;
      font-size: 14px;
      font-weight: 500;
      line-height: 11em;
      text-align: center;
    }


    .info {
      text-align: center;
      font-size: 2rem;
    }

    .infoTitle {
      margin: 1rem 0;
    }

    .infoTitle h6 {
      font-size: 1.5rem;
    }

    .cardContent {
      margin-top: 3.5rem;
    }

    .btnSalvar {
      margin: 1rem 0;
      
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

    .cardMsg {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      width: 300px;
      margin: 20px auto;
      position: relative;
      display: none;
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

    .btnGroup{
    display: flex;
    justify-content: space-around;
    margin: 1rem 0;
  }
  </style>
</head>

<body>

  <div id="loading">
    <div class="loader"></div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById("loading").style.display = "none";

      var msgCard = document.getElementById('msgCard');
      if (msgCard) {
        msgCard.style.display = 'block';
      }
    });

    function fecharCard() {
      var msgCard = document.getElementById('msgCard');
      if (msgCard) {
        msgCard.style.display = 'none';
      }
    }
  </script>

  <?php
  if (isset($_GET['mensagem'])) {
    $mensagem = htmlspecialchars($_GET['mensagem']); // Sanitiza a mensagem
    echo "<div class='cardMsg' id='msgCard'>
                <button class='close-btn' onclick='fecharCard()'>&times;</button>
                <p class='message'>Mensagem:<br> $mensagem</p>
              </div>";
  }
  ?>

  <?php require_once('php/header.php')?>


  <div class="container bootstrap snippets bootdey">
    <div class="row cardGroup">
      <div class="profile-nav col-md-4">
        <div class="card">
          <div class="card-body text-center">
            <div id="image-container">
              <img src="<?php echo $_SESSION['imagem']; ?>" alt="Imagem do Cliente" class="img-thumbnail">
              <div id="upload-text" class="overlay-text">Editar imagem</div>
              <input id="image-upload" type="file" accept="image/*" style="display: none"
                onchange="previewImage(event)" />
            </div>
            <h1 id="display-username"><?php echo $_SESSION['nomeUSR']; ?></h1>
            <p id="display-email"><?php echo $_SESSION['emailUSR']; ?></p>
          </div>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item" style="width: 90%; margin-bottom: 0.5rem;">
              <a class="nav-link" href="altPerfil.php"><i class="fa fa-user"></i><span class="hover">Editar
                  Perfil</span></a>
            </li>
            <li class="nav-item" style="width: 90%; margin-bottom: 0.5rem;">
              <a class="nav-link" href="history.php"><i class="bi bi-clock-history"></i>Histórico</a>
            </li>
            <li class="nav-item" style="width: 90%; margin-bottom: 0.5rem;">
              <a class="nav-link" href="#"><i class="bi bi-arrow-repeat"></i>Em andamento</a>
            </li>
            <li class="nav-item" style="width: 90%; margin-bottom: 0.5rem;">
              <a class="nav-link" href="#"><i class="bi bi-check"></i>Finalizados</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="profile-info col-md-8">
        <div class="col-md-8">
          <div class="card cardInformação mb-3">
            <div class="card-body">
              <div class="info">
                <div class="infoTitle">
                  <h6>Informações do Perfil</h6>
                </div>
              </div>
              <hr />
              <div class="cardContent">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Nome:</h6>
                  </div>
                  <div class="col-sm-9 text-muted">
                    <?php echo $_SESSION['nomeUSR']; ?>
                  </div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Nome Completo:</h6>
                  </div>
                  <div class="col-sm-9 text-muted">
                    <?php echo $_SESSION['NmCompleto']; ?>
                  </div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Telefone:</h6>
                  </div>
                  <div class="col-sm-9 text-muted">
                    <?php echo $_SESSION['telefoneUsuario']; ?>
                  </div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Endereço:</h6>
                  </div>
                  <div class="col-sm-9 text-muted">
                    <?php echo $_SESSION['cidade']; ?>
                  </div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">CPF:</h6>
                  </div>
                  <div class="col-sm-9 text-muted">
                    <?php echo $_SESSION['CPF']; ?>
                  </div>
                </div>
                <hr />
              </div>
            </div>


            <div class="btnGroup">
                  <button class="btn col-sm-3" onclick="window.location.href='sair.php'">Sair</button>
                  <button class="btn col-sm-3" onclick="window.location.href='deletar.php'">Excluir Conta</button>
            </div>


            <div>
              <!-- Mais informações sobre atividades, histórico de compras etc. podem ser adicionadas aqui -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../../js/editar.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOx2h9Y5RxtC0Pe6VElS81h9B" crossorigin="anonymous">
    </script>
</body>

</html>