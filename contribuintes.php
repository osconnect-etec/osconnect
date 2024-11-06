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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <style> 
.logo{
    width: 100%;
  }

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
      height: 30rem;
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
      height: 31rem;
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
    .tm-main{
  display: flex;
  flex-direction: column;
  align-items:center;
  justify-content: center;
 }

 .col-md-4 img {
  width: 100%;          /* A largura da imagem será sempre 100% do contêiner */
  height: 100%;         /* A altura ocupará 100% do contêiner */
  object-fit: cover;     /* A imagem será cortada para cobrir todo o contêiner sem distorção */
}

.col-md-4 {
  height: auto;          /* Deixe a altura automática para telas pequenas */
}

@media screen and (max-width: 768px) {
  .col-md-4 img {
    object-fit: contain; /* Em telas menores, a imagem será contida dentro do contêiner */
  }
}

.margin{
  margin: 2rem 0;
  text-align: center;
}

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

  <main class="tm-main">

    <div class="row tm-row tm-mb-40 margin">
      <div class="col-12">
        <div class="mb-4">
          <h1>Contribuintes</h1>
          <p>
            Tela dedicada aos contribuintes do projeto os connect
          </p>
        </div>
      </div>
    </div>

    <div class="card mb-3" style="margin-bottom: 100px;">
      <div class="row g-0">
      <div class="col-md-4">
      <img class="img-fluid" src="img/con_teffy.jpg" alt="">
    </div>
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title">Sthefany Oliveira</h2>
            <p class="card-text">
              Responsabilidades: Remodelação de design
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
            
            <p>"A arte é a expressão mais pura da alma, onde sentimentos ganham forma e cores."</p>
            <p class="card-text">
              <small class="text-body-secondary">17 anos</small>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="row g-0">
      <div class="col-md-4">
          <img class="img-fluid" src="img/con_balbi.jpg" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title">Lucas S. Balbi</h2>
            <p class="card-text">
              Responsabilidades: ajuda UI (User Interface) e UX (User Experiencie) e parte do banco de dados
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

            <p>"Ó mal habite em quanto há tempo de habitar, pois quem resides ainda de expurgará."</p>
              <small class="text-body-secondary">16 anos</small>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="img-fluid" src="img/con_queiroz.jpg" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title">Miguel Queiroz</h2>
            <p class="card-text">
              Responsabilidades: ajuda UI (User Interface) e UX (User Experiencie) e parte do banco de dados
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
            
            <p>"Expansão de dominio: npm run reset-project."</p>
            <p class="card-text">
              <small class="text-body-secondary">Idade: 16 anos</small>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="row g-0">
      <div class="col-md-4">
      <img class="img-fluid" src="img/con_galhardo.jpg" alt="">
    </div>
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
            
            <p>"Eu vos dou um novo mandamento, amai-vos uns aos outros. Como eu vos amei assim também vós deveis amar-vos
              uns aos outros" - João 13,34</p>
            <p class="card-text">
              <small class="text-body-secondary">Idade: 17 anos</small>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/about-03.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title">Ana luiza</h2>
            <p class="card-text">
              Responsabilidades: responsável pelo design do site.
            </p>
            <p>
              email: <strong>ana.pedrosa01@etec.sp.gov.br</strong>
            </p>
            <p>
              onde moro: Guaratinguetá SP Brasil
            </p>
            <p>
              formação academica:
            <p><strong>Etec Prof° Alfredo de barros Santos</strong><br>Desenvolvimento de sistemas</p>
            </p>
            <p>hobbies: ler, escrever, desenhar.</p>

            <p>"Livros não mudam, o mundo eles só mudam as pessoas e as pessoas mudam o mundo."</p>

          </div>
        </div>
      </div>
    </div>


  </main>
  <footer class="footer_section">
    <div class="container">
      <hr class="footer-line" />
      <p>
        &copy; <span id="displayYear"></span> todos os direitos reservados a
        <a href="index.phps-">OSConnect</a>
      </p>
    </div>
  </footer>
</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
<script src="js/bootstrap.js"></script>

</html>