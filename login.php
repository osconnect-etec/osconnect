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
  <title>Cadastro</title>
  <link rel="icon" href="img/OS_logo.png" type="png" />

  <style>
    :root {
      --primary-color: #0a2946;
      --secondary-color: #3498db;
      --black: #000000;
      --white: #ffffff;
      --gray: #efefef;
      --gray-2: #002325;
    }

    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap");

    * {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html,
    body {
      height: 100vh;
      overflow: hidden;
    }

    .container {
      position: relative;
      min-height: 100vh;
      overflow: hidden;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      height: 50vh;
    }

    .col {
      width: 50%;
    }

    .align-items-center {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      text-align: center;
    }

    .form-wrapper {
      width: 100%;
      max-width: 28rem;
    }

    .form {
      padding: 1rem;
      background-color: var(--white);
      border-radius: 1.5rem;
      width: 100%;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      transform: scale(0);
      transition: 1s ease-in-out;
      transition-delay: 0.5s;
    }

    .input-group {
      position: relative;
      width: 100%;
      margin: 1rem 0;
    }

    .input-group input {
      width: 100%;
      padding: 1rem 3rem;
      font-size: 1rem;
      background-color: var(--gray);
      border-radius: 0.5rem;
      border: 0.125rem solid var(--white);
      outline: none;
    }

    .input-group select {
      width: 100%;
      padding: 1rem 3rem;
      font-size: 1rem;
      background-color: var(--gray);
      border-radius: 0.5rem;
      border: 0.125rem solid var(--white);
      outline: none;
    }

    .input-group input:focus {
      border: 0.125rem solid var(--primary-color);
    }

    .input-group select:focus {
      border: 0.125rem solid var(--primary-color);
    }

    .form button {
      cursor: pointer;
      width: 100%;
      padding: 0.6rem 0;
      border-radius: 0.5rem;
      border: none;
      background-color: var(--secondary-color);
      color: var(--white);
      font-size: 1.2rem;
      outline: none;
      transition: ease-in-out 0.5s;
    }

    .form button:hover {
      transition: 0.3s;
      background-color: var(--primary-color);
    }

    .form p {
      margin: 1rem 0;
      font-size: 0.7rem;
    }

    .flex-col {
      flex-direction: column;
    }

    .pointer {
      cursor: pointer;
    }

    .container.sign-in .form.sign-in,
    .container.sign-in .sign-in,
    .container.sign-in .sign-in>div,
    .container.sign-up .form.sign-up,
    .container.sign-up .sign-up,
    .container.sign-up .sign-up>div {
      transform: scale(1);
    }

    .content-row {
      position: absolute;
      top: 0;
      left: 0;
      pointer-events: none;
      z-index: 6;
      width: 100%;
    }

    .text {
      margin: 4rem;
      color: var(--white);
    }

    .text h2 {
      font-size: 3.5rem;
      font-weight: 800;
      margin-top: 15rem;
      transition: 1.3s ease-in-out;
    }

    .text p {
      font-weight: 600;
      transition: 1s ease-in-out;
      transition-delay: 0.2s;
    }

    .text.sign-in h2,
    .text.sign-in p,
    .img.sign-in img {
      transform: translateX(-250%);
    }

    .text.sign-up h2,
    .text.sign-up p,
    .img.sign-up img {
      transform: translateX(250%);
    }

    .container.sign-in .text.sign-in h2,
    .container.sign-in .text.sign-in p,
    .container.sign-in .img.sign-in img,
    .container.sign-up .text.sign-up h2,
    .container.sign-up .text.sign-up p,
    .container.sign-up .img.sign-up img {
      transform: translateX(0);
    }


    .container::before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      height: 100vh;
      width: 300vw;
      transform: translate(35%, 0);
      background-image: linear-gradient(-45deg,
          var(--primary-color) 0%,
          var(--primary-color) 100%);
      transition: 1.5s ease-in-out;
      z-index: 6;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      border-bottom-right-radius: max(40vw, 50vh);
      border-top-left-radius: max(40vw, 50vh);
    }

    .container.sign-in::before {
      transform: translate(0, 0);
      right: 50%;
    }

    .container.sign-up::before {
      transform: translate(100%, 0);
      right: 50%;
    }


    @media only screen and (max-width: 425px) {

      .container::before,
      .container.sign-in::before,
      .container.sign-up::before {
        height: 100vh;
        border-bottom-right-radius: 0;
        border-top-left-radius: 0;
        z-index: 0;
        transform: none;
        right: 0;
      }

      .container.sign-in .col.sign-in,
      .container.sign-up .col.sign-up {
        transform: translateY(70%);
        z-index: 1;
      }

      .content-row {
        align-items: flex-start !important;
      }

      .content-row .col {
        transform: translateY(0);
        background-color: unset;
      }

      .col {
        width: 100%;
        position: absolute;
        padding: 2rem;
        background-color: var(--white);
        border-top-left-radius: 2rem;
        border-top-right-radius: 2rem;
        transform: translateY(100%);
        transition: 1s ease-in-out;
      }

      .row {
        align-items: flex-end;
        justify-content: flex-end;
      }

      .text {
        margin: 0;
      }

      .text p {
        display: none;
      }

      .text h2 {
        margin: 0.5rem;
        font-size: 3rem;
      }
    }

    .input-group.d-flex {
      display: flex;
      gap: 16px;
    }

    .input-group.d-flex div {
      flex: 1;
    }

    .ajusteMargin {
      margin-top: 185px;
    }

    @media screen and (max-width: 425px) {
      .ajusteMargin {
        margin-top: 0px;
      }
    }

    .techLink b a {
      text-decoration: none;
      color: #000000;
    }

    .techLink b a:hover {
      color: blue;
      cursor: pointer;
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
  <div id="container" class="container">
    <div class="row">
      <div class="col align-items-center flex-col sign-up">
        <div class="form-wrapper align-items-center">
          <form class="form sign-up" action="inserir.php" method="post">
            <div class="input-group">
              <input type="text" placeholder="Nome" name="nome" required />
            </div>
            <div class="input-group">
              <input type="email" placeholder="Email" name="email" required />
            </div>
            <div class="input-group d-flex" style="gap: 16px">
              <div style="flex: 1" class="inputInline">
                <input type="text" placeholder="CPF" name="CPF" maxlength="" re/>
              </div>
              <div style="flex: 1" class="inputInline">
                <input type="text" placeholder="RG" name="RG" required />
              </div>
            </div>
            <div class="input-group">
              <input type="text" placeholder="Telefone" name="Telefone" maxlength="11" required />
            </div>
            <div class="input-group">
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
            <div class="input-group">
              <input type="password" placeholder="Senha" name="password" required />
            </div>
            <div class="input-group">
              <input type="password" placeholder="Confirmar Senha" name="confirm_password" required />
            </div>
            <button type="submit" value="Cadastrar">Cadastrar</button>
            <p>
              <span> ja possui conta? </span>
              <b onclick="toggle()" class="pointer"> entre aqui </b>
            </p>
          </form>


          <script>
            document.querySelector('.form.sign-up').addEventListener('submit', function (event) {
              const senha = document.querySelector('input[name="password"]').value;
              const confirmarSenha = document.querySelector('input[name="confirm_password"]').value;

              if (senha !== confirmarSenha) {
                event.preventDefault();
                alert("As senhas não coincidem. Por favor, tente novamente.");
              }
            });
          </script>

        </div>
      </div>
      <div class="col align-items-center flex-col sign-in">
        <div class="form-wrapper align-items-center ajusteMargin">
          <form class="form sign-in" action="dados.php" method="post">
            <div class="input-group">
              <input type="text" placeholder="Nome de usuário" id="nome" name="nome" required />
            </div>
            <div class="input-group">
              <input type="text" placeholder="Email" id="Email" name="Email" required />
            </div>
            <div class="input-group">
              <input type="password" placeholder="senha" id="password" name="password" required />
            </div>
            <a href="verificar.php"><button type="submit" value="entrar">entrar</button></a>
            <p>
              <a href="senha.php"> Esqueçeu a senha? </a>
            </p>
            <p>
              <span> Não possui conta? </span>
              <b onclick="toggle()" class="pointer"> Cadastre-se aqui </b>
            </p>
            <p>
              <a href="index.html" style="  text-decoration: none;  font-weight: 700;  color: #000000;">Voltar</a>
            </p>
          </form>
        </div>
        <div class="form-wrapper"></div>
      </div>
    </div>
    <div class="row content-row">
      <div class="col align-items-center flex-col">
        <div class="text sign-in">
          <h2>Bem Vindo</h2>
        </div>
      </div>
      <div class="col align-items-center flex-col">
        <div class="img sign-up"></div>
        <div class="text sign-up">
          <h2>junte-se a nós</h2>
        </div>
      </div>
    </div>
  </div>
  <script>
    let container = document.getElementById("container");

    const toggle = () => {
      container.classList.toggle("sign-in");
      container.classList.toggle("sign-up");
    };

    setTimeout(() => {
      container.classList.add("sign-in");
    }, 200);
  </script>
</body>

</html>