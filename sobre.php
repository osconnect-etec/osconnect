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


  <link rel="stylesheet" href="/css/styleSobre.css">
  <link rel="stylesheet" href="css/style.css">
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

 .tm-main{
  display: flex;
  flex-direction: column;
  align-items:center;
  justify-content: center;
 }

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
      height: 95%;
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
      height: 100%;
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


    /*Card Section-------------*/
    
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

    <div class="row tm-row tm-mb-40">
      <div class="col-12">
        <div class="mb-4">
          <h1>O.S Connect - Simplificando a Gestão de Serviços</h1>

          <p>O Projeto O.S Connect é uma plataforma inovadora que facilita a comunicação entre clientes e prestadores de
            serviços, oferecendo um gerenciamento eficiente e seguro. Com uma interface intuitiva, permite registrar,
            acompanhar e avaliar serviços, desde o agendamento até o feedback pós-atendimento.
          </p>
          <p>Voltado tanto para empresas quanto para consumidores finais, o O.S Connect proporciona:
          </p>
          <p>
            Facilidade de Uso: Agendamento e acompanhamento de serviços de forma simplificada.
            Gestão Completa: Visualização do ciclo de vida dos serviços e histórico detalhado, possibilitando análises e
            decisões mais assertivas.
            Integração e Personalização: Conexão com sistemas como ERPs e CRMs, garantindo um fluxo de informações
            otimizado.
            Segurança e Confiança: Criptografia avançada e controle de acesso para proteção de dados.
            Além disso, o O.S Connect é um projeto de código aberto disponível no GitHub, promovendo colaboração e
            inovação contínua. Desenvolvedores podem contribuir com novas funcionalidades e aprimorar a plataforma,
            ajudando a transformar o mercado de serviços.
          </p>
          <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">
            Sobre a Equipe
          </h2>
          <p>
            Nossa equipe trabalha arduamente para alcançar seus objetivos de
            maneira rápida e eficiênte. Somos compostos por pessoas com
            habilidades e experiências diferentes, mas com um objetivo em
            comum: trazer o conforto e bem estar de nossos clientes sempre
            os ajudando na media do possível.
          </p>
          <p>
            Buscamos sempre fazer um trabalho de execlência e qualidade no
            menor tempo possível que satisfasa ao máximo as necessidades e
            expectativas dos clientes. Siga-nos nas redes sociais para ficar
            por dentro das últimas novidades e comentar sobre nossos
            projetos.
            <br />
            Caso se interessem nosso Github está logo abaixo:
          </p>
          <p>
            Siga-nos nos Github!
            <a href="https://github.com/joaocavalca10" rel="noopener noreferrer"
              class="link-dark link-opacity-50-hover text-primary-emphasis">Clique aqui.</a>
          </p>
        </div>
      </div>
    </div>

    <div class="card mb-3" style="margin-bottom: 100px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img class="img-fluid" src="img/about-02.jpg" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title">João S. Cavalca</h2>
        <p class="card-text">
          o que fez: Responsável pelo banco de dados, parte da UI (user interface) e UX (user experience)
        </p>
        <p>
          email: <strong>joao.cavalca@etec.sp.gov.br</strong>
        </p>
        <p>
          onde moro: Guaratinguetá SP Brasil
        </p>
        <p>
          formação acadêmica:
        <p><strong>Etec Prof° Alfredo de barros Santos</strong><br>Desenvolvimento de sistemas</p>
        </p>
        <p>hobbies: Tocar violão, programar, conversar e jogar</p>
        <p>
          redes sociais
        </p>
        <p>
          <a href="https://www.instagram.com/cavalca.joao/" rel="noopener noreferrer"
            class="link-dark link-opacity-50-hover text-primary-emphasis">
            <img src="img/wired-flat-2542-logo-instagram-hover-pinch (1).gif" alt="">
          </a>
          <a href="https://www.linkedin.com/in/jo%C3%A3o-cavalca-38151a320/" rel="noopener noreferrer"
            class="link-dark link-opacity-50-hover text-primary-emphasis">
            <img src="img/wired-flat-2549-logo-linkedin-hover-pinch.gif" alt="">
          </a>
          <a href="https://www.facebook.com/joao.cavalca.505?locale=pt_BR" rel="noopener noreferrer"
            class="link-dark link-opacity-50-hover text-primary-emphasis">
            <img src="img/wired-flat-2540-logo-facebook-hover-pinch.gif" alt="">
          </a>
          <a href="https://github.com/joaocavalca10" rel="noopener noreferrer"
            class="link-dark link-opacity-50-hover text-primary-emphasis">
            <img src="img/github.png" alt="">
          </a>
        </p>
        <p>"As memórias são coisas que nem a morte pode matar. Elas me moldaram para ser quem sou hoje e construíram as relações que tenho na minha vida."</p>
      </div>
    </div>
  </div>
</div>


    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/about-04.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title">joão P. Nascimento</h2>
            <p class="card-text">
              oque fez: UI (User Interface) e UX (User Experiencie) e parte do banco de dados
            </p>
            <p>
              email: <strong> joao.pedro.nascimento.antonio@gmail.com</strong>
            </p>
            <p>
              onde moro: Aparecida SP, Brasil
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
            <p>
              <a href="https://www.instagram.com/j3vilying?igsh=aDZsaWR4N3E2bWJi" rel="noopener noreferrer"
                class="link-dark link-opacity-50-hover text-primary-emphasis">
                <img src="img/wired-flat-2542-logo-instagram-hover-pinch (1).gif" alt="">
              </a>
              <a href="https://www.linkedin.com/in/jo%C3%A3o-pedro-nascimento-a-9327a7322/" rel="noopener noreferrer"
                class="link-dark link-opacity-50-hover text-primary-emphasis">
                <img src="img/wired-flat-2549-logo-linkedin-hover-pinch.gif" alt="">
              </a>
              <a href="https://github.com/J3vilying" rel="noopener noreferrer"
                class="link-dark link-opacity-50-hover text-primary-emphasis">
                <img src="img/github.png" alt="">
              </a>
            </p>
            <p>"Não importa as adversidades que encontre, mantenha sempre sua determinação"</p>

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