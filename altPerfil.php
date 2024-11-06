<?php
session_start();

$servername = "br612.hostgator.com.br";
$username = "hubsap45_usrordserv";
$password = "j@j!1502";
$dbname = "hubsap45_bd_ordserv";

$conn = new mysqli($servername, $username, $password, $dbname);
//esta funcionando por favor nao mexer
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
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
</head>

<Style>
  .logo {
    width: 50%;
  }

  .profile-nav,
  .profile-info {
    margin-top: 30px;
    display: flex;
    justify-content: center;
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

  .bi-person-circle::before {
    content: "\f4d7";
    color: #3498db;
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

  .btnGroup, .btnGroup a{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
  }

  .btnGroup a{
    height: 30%;
  }

  .btnGroup a:hover{
    text-decoration: none;
  }

</Style>

<body>


  <div class="container bootstrap snippets bootdey">
    <div class="row cardGroup">
      <div class="profile-nav col-md-3">
        <div class="card">
          <div class="card-body text-center">
            <div id="image-container">
              <img src="<?php
              echo $_SESSION['imagem']; ?>" alt="Imagem do Cliente" class="img-thumbnail">
              <div id="upload-text" class="overlay-text">
                Editar imagem
              </div>
              <input id="image-upload" type="file" accept="image/*" style="display: flex"
                onchange="previewImage(event)" />
            </div>

            <h1 id="display-username"><?php echo $_SESSION['nome'] ?></h1>
            <!-- ID adicionado -->
            <p id="display-email"><?php echo $_SESSION['Email'] ?></p>
            <pid="display-email"><?php echo $_SESSION['id'] ?></p>
          </div>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item" style="width: 90%; margin-bottom: 0.5rem;">
              <a class="nav-link ativo" href="perfil.php"><i class="fa fa-user"></i><span class="hover">Meu Perfil</span></a>
            </li>
            <li class="nav-item" style="width: 90%; margin-bottom: 0.5rem;">
              <a class="nav-link" href="history.php
                "><i class="bi bi-clock-history"></i>Histórico</a>
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
      <form action="UPDT.php" method="post" class="profile-info col-md-9" enctype="multipart/form-data">
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Usuário</h6>
                </div>
                <div class="col-sm-9 text-muted">
                  <input id="username" type="text" placeholder="digite seu nome de Usuário" name="Nome" />
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Nome completo</h6>
                </div>
                <div class="col-sm-9 text-muted">
                  <input id="fullname" type="text" placeholder="digite seu nome completo" name="NmCompleto" />
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-muted">
                  <input id="email" type="email" placeholder="Digite seu Email" name="Email" />
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Número de telefone</h6>
                </div>
                <div class="col-sm-9 text-muted">
                  <input id="cellphone" type="number" placeholder="digite seu número de tellefone"
                    contenteditable="false" name="numero" />
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Cpf</h6>
                </div>
                <div class="col-sm-9 text-muted">
                  <input id="cpf" type="number" placeholder="Atualize seu CPF" contenteditable="false" name="CPF" />
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Endereço</h6>
                </div>
                <div>
                  <select name="cidade" id="cidade" required>
                    <option value="">--Escolha uma cidade--</option>
                    <?php
                    $sql = "SELECT id, CidNome FROM tblCidade";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["id"] . '">' . $row["CidNome"] . '</option>';
                      }
                    } else {
                      echo '<option value="">Nenhuma cidade disponível</option>';
                    }
                    ?>
                  </select>
                </div>
              </div>
              <hr />
              <div class="row">
                <input type="file" name="imagem" accept="image/*">
              </div>
              <hr />

                <div class="btnGroup">
                  <button class="btn col-sm-3" id="button" type="submit" value="editar">Editar</button>
                  <button class="btn col-sm-3" onclick="window.location.href='perfil.php'">Voltar</button>
                </div>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
<script src="editar.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>