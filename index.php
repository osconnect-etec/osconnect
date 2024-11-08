<?php
/*Não Mexer nessa poha*/
session_start();
$_SESSION['nomeUsuario'] = $_SESSION['nomeUSR'];
$_SESSION['emailUsuario'] = $_SESSION['emailUSR'];

if (empty($_SESSION['nomeUSR'])) {
  echo "Usuário não está logado ou sessão inválida.";
  var_dump($_SESSION);  // Mostra todas as variáveis de sessão
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="O Projeto O.S Connect é uma plataforma inovadora que facilita a comunicação entre clientes e prestadores de
  serviços, oferecendo um gerenciamento eficiente e seguro. Com uma interface intuitiva, permite registrar,
  acompanhar e avaliar serviços, desde o agendamento até o feedback pós-atendimento." />
  <meta name="author" content="" />

  <title>OS Connect</title>

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
    color: #000;
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

  /* slider section */
  .slider_section {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .slider_section .row {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .slider_section #customCarousel1 {
    width: 100%;
    position: unset;
    margin-top: 5rem;
  }

  .slider_section .detail-box {
    text-align: center;
    color: #ffffff;
  }

  .slider_section .detail-box h1 {
    font-weight: bold;
    margin-bottom: 20px;
  }

  .slider_section .detail-box .btn-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin: 0 -5px;
    margin-top: 45px;
  }

  .slider_section .detail-box .btn-box a {
    margin: 5px;
    text-align: center;
    width: 185px;
  }

  .slider_section .detail-box .btn-box .btn1 {
    display: inline-block;
    padding: 12px 15px;
    background-color: #3498db;
    color: #ffffff;
    border-radius: 5px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    border: 1px solid #3498db;
  }

  .slider_section .detail-box .btn-box .btn1:hover {
    color: #ffffff;
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px);
  }

  .slider_section .img-box video {
    width: 80%;
    border-radius: 50%;

  }

  .slider_section .img-box {
    display: flex;
    justify-content: center;
    align-items: center;

  }

  .slider_section .carousel-indicators {
    position: unset;
    margin: 0;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;

  }

  .slider_section .carousel-indicators li {
    background-color: #ffffff;
    width: 15px;
    height: 15px;
    border-radius: 100%;
    opacity: 1;
  }

  .slider_section .carousel-indicators li.active {
    width: 23px;
    height: 23px;
    background-color: #3498db;
  }

  .service_section {
    text-align: center;
  }

  .service_section .heading_container {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .service_section .box {
    margin-top: 25px;
    padding: 15px;
    border-radius: 10px;
    -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.25);
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.666);
    position: relative;
    overflow: hidden;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    height: 90%;
  }

  .service_section .box::before {
    content: "";
    width: 65vh;
    height: 65vh;
    position: absolute;
    right: -137.5px;
    bottom: -137.5px;
    background-color: #faf8fd;
    z-index: -1;
    border-radius: 100%;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
  }

  .service_section .box .img-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 125px;
    border-radius: 15px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
  }

  .service_section .box .img-box img {
    width: 75px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
  }

  .service_section .box .detail-box {
    margin-top: 15px;
  }

  .service_section .box .detail-box h5 {
    font-weight: bold;
    position: relative;
  }

  .service_section .box .detail-box a {
    color: inherit;
  }

  .service_section .box:hover {
    color: #ffffff;
  }

  .service_section .box:hover::before {
    -webkit-transform: scale(5);
    transform: scale(5);
    background-color: #0a2946;
  }

  .service_section .box:hover img {
    -webkit-filter: invert(1);
    filter: invert(1);
  }

  .service_section .btn-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-top: 45px;
  }

  .service_section .btn-box a {
    display: inline-block;
    padding: 10px 45px;
    background-color: #0a2946;
    color: #ffffff;
    border-radius: 5px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    border: 1px solid #0a2946;
  }

  .service_section .btn-box a:hover {
    color: #ffffff;
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px);
  }

  .about_section {
    background-color: #0a2946;
    color: #ffffff;
    border-radius: 250px 0 250px 0;
  }

  @media screen and (max-width: 620px) {
    .about_section {
      background-color: #0a2946;
      color: #ffffff;
      border-radius: 150px 0 150px 0;


    }
  }

  .about_section .row {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .about_section .img-box {
    position: relative;
  }

  .about_section .img-box img {
    width: 100%;
  }

  .about_section .detail-box p {
    margin-top: 5px;
    line-height: 2;
  }

  .about_section .detail-box a {
    display: inline-block;
    padding: 10px 45px;
    background-color: #3498db;
    color: #ffffff;
    border-radius: 5px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    border: 1px solid #3498db;
    margin-top: 15px;
  }

  .about_section .detail-box a:hover {
    color: #ffffff;
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px);
  }

  .case_section .heading_container {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .case_section .heading_container h2::before {
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
  }

  .case_section .box {
    margin-top: 45px;
    background-color: #ffffff;
    -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);
    text-align: center;
  }

  .case_section .box .img-box {
    position: relative;
  }

  .case_section .box .img-box img {
    width: 100%;
  }

  .case_section .box .detail-box {
    padding: 25px;
    text-decoration: none;
  }

  .case_section .box .detail-box h5 {
    font-weight: bold;
    text-decoration: none;
  }

  .case_section .box .detail-box p {
    font-size: 15px;
  }

  .case_section .box .detail-box a {
    color: #000;
  }

  .client_section .box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin: 45px 0;
    text-align: center;
  }

  .client_section .box .img-box {
    width: 125px;
    height: 125px;
    min-width: 125px;
    position: relative;
    margin-bottom: -62.5px;
  }

  .client_section .box .img-box img {
    width: 100%;
    border-radius: 100%;
  }

  .client_section .box .client_info .client_name h5 {
    font-weight: bold;
    margin-bottom: 0;
    text-transform: uppercase;
  }

  .client_section .box .client_info .client_name h6 {
    margin-bottom: 0;
    color: #7335b7;
    font-weight: normal;
    font-size: 15px;
    text-transform: uppercase;
  }

  .client_section .box .client_info i {
    font-size: 24px;
  }

  .client_section .box p {
    margin-top: 15px;
  }

  .client_section .box .detail-box {
    background-color: #ffffff;
    background-color: #7335b7;
    color: #ffffff;
    border-radius: 15px;
    padding: 85px 45px 15px 45px;
  }

  .client_section .carousel-indicators {
    position: unset;
    margin: 0;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .client_section .carousel-indicators li {
    background-color: #7335b7;
    width: 10px;
    height: 10px;
    border-radius: 100%;
    opacity: 1;
  }

  .client_section .carousel-indicators li.active {
    width: 20px;
    height: 20px;
    background-color: #3498db;
  }

  .contact_section {
    position: relative;
  }

  .contact_section form {
    margin-top: 45px;
  }

  .contact_section input {
    width: 100%;
    border: none;
    height: 50px;
    margin-bottom: 25px;
    padding-left: 15px;
    background-color: transparent;
    outline: none;
    color: #000000;
    border: 1px solid #a5a5a5;
  }

  .contact_section input::-webkit-input-placeholder {
    color: #1c1b1b;
  }

  .contact_section input:-ms-input-placeholder {
    color: #1c1b1b;
  }

  .contact_section input::-ms-input-placeholder {
    color: #1c1b1b;
  }

  .contact_section input::placeholder {
    color: #1c1b1b;
  }

  .contact_section input.message-box {
    height: 120px;
  }

  .contact_section button {
    font-family: "Poppins", sans-serif;
    display: inline-block;
    padding: 10px 65px;
    background-color: #7335b7;
    color: #ffffff;
    border-radius: 3px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    border: 1px solid #7335b7;
    color: #fff;
    margin-top: 10px;
  }

  .contact_section button:hover {
    color: #ffffff;
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px);
  }

  .contact_section .map_container {
    height: 100%;
    min-height: 325px;
    overflow: hidden;
    margin-left: 45px;
  }

  .contact_section .map_container .map {
    height: 100%;
  }

  .contact_section .map_container .map #googleMap {
    height: 100%;
  }

  /* não mexer no footer, obrigado*/
  .footer_container {
    background-color: #0a2946;
    color: #ffffff;
    border-radius: 350px 0 0 0;
    padding-top: 80px;
  }

  /* info section */
  .info_section h4 {
    font-weight: 600;
    margin-bottom: 20px;
  }

  .info_section .info_contact .contact_link_box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  .info_section .info_contact .contact_link_box a {
    margin: 5px 0;
    color: #ffffff;
  }

  .info_section .info_contact .contact_link_box a i {
    margin-right: 5px;
  }

  .info_section .info_contact .contact_link_box a:hover {
    color: #3498db;
  }

  .info_section .info_social {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-top: 20px;
  }

  .info_section .info_social a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: #ffffff;
    border-radius: 100%;
    margin-right: 10px;
    font-size: 24px;
  }

  .info_section .info_social a:hover {
    color: #3498db;
  }

  .info_section .info_links {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }

  .info_section .info_links a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 15px;
    color: #ffffff;
  }

  .info_section .info_links a:hover {
    color: #3498db;
  }

  .info_section form input {
    border: none;
    border-bottom: 1px solid #ffffff;
    background-color: transparent;
    width: 100%;
    height: 45px;
    color: #ffffff;
    outline: none;
  }

  .info_section form input::-webkit-input-placeholder {
    color: #ffffff;
  }

  .info_section form input:-ms-input-placeholder {
    color: #ffffff;
  }

  .info_section form input::-ms-input-placeholder {
    color: #ffffff;
  }

  .info_section form input::placeholder {
    color: #ffffff;
  }

  .info_section form button {
    width: 100%;
    text-align: center;
    display: inline-block;
    padding: 10px 55px;
    background-color: #3498db;
    color: #ffffff;
    border-radius: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    border: 1px solid #3498db;
    margin-top: 15px;
  }

  .info_section form button:hover {
    color: #ffffff;
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px);
  }

  /* end info section */
  /* footer section*/
  .footer_section {
    position: relative;
    text-align: center;
  }

  .footer_section p {
    padding: 25px 0;
    margin: 0;
  }

  .footer_section p a {
    color: inherit;
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

    .devlogs:hover{

      transform: scale(0.95);
      transition: ease-in-out 0.5s;
      
    }

    .devlogs{
      transition: ease-in-out 0.5s;
      text-decoration: none;
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
  <div class="hero_area">
    
    <?php require_once('php/header.php')?>

    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <video src="img/computador.mp4" alt="" autoplay loop>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Bem Vindo!
                    </h1>
                    <p>
                      gerecie suas OSs com facilidade e praticidade bem aqui
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <video src="img/analise.mp4" alt="" autoplay loop>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fácil visualização
                    </h1>
                    <p>
                      Visualize todas as suas ordens de serviço de um jeito rápido e fácil
                    </p>
                    <div class="btn-box">
                      <a href="history.php" class="btn1">
                        Suas OSs
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <video src="img/computador.mp4" alt="" autoplay loop>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fique Tranquilo!
                    </h1>
                    <p>
                      Nossa equipe preza pela privacidade e conforto de cada usuário!

                    </p>
                    <div class="btn-box">
                      <a href="contato.php" class="btn1">
                        Contate-nos
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
  </div>
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Nossos beneficios
        </h2>
        <p>
          Alguns dos Beneficios de usar nosso sistema
        </p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="box">
            <div class="detail-box">
              <h5>
                Comunicação Eficiente
              </h5>
              <p>
                O Projeto O.S Connect facilita uma comunicação robusta e eficiente entre clientes e prestadores de
                serviços, simplificando a interação e promovendo uma troca de informações ágil e segura.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="detail-box">
              <h5>
                Gestão de Serviços Integrada
              </h5>
              <p>
                A plataforma oferece uma visão completa do ciclo de vida dos serviços, desde o agendamento inicial até o
                acompanhamento pós-serviço, incluindo feedbacks e avaliações, tornando o gerenciamento de informações de
                serviço intuitivo e acessível.
              </p>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="detail-box">
              <h5>
                Histórico de Serviços
              </h5>
              <p>
                O Projeto atua como um repositório confiável, preservando o histórico de serviços com integridade. Isso
                permite análises detalhadas e a tomada de decisões informadas, fundamentais para aprimorar os serviços e
                desenvolver novas estratégias de negócios.
              </p>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="detail-box">
              <h5>
                Melhoria Contínua
              </h5>
              <p>
                A base de dados enriquecida do sistema é crucial para identificar tendências e promover a melhoria
                contínua dos serviços oferecidos, contribuindo para a excelência operacional e o desenvolvimento de
                estratégias de negócios eficazes.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Sobre nós
              </h2>
            </div>
            <p>
              Buscamos sempre fazer um trabalho de execlência e qualidade no
              menor tempo possível que satisfasa ao máximo as necessidades e
              expectativas dos clientes.
              Nossa equipe trabalha arduamente para alcançar seus objetivos de
              maneira rápida e eficiênte.
            </p>
            <a href="sobre.php">
              Nossa equipe
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="img/about-img.png" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="case_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Para o futuro
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="img/indexImg1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Técnicos e administradores
              </h5>
              <p>
                Estamos sempre a procura de novos técnicos e ADMs competentes para sua
                melhor experiência e confiabilidade em nossos recursos
              </p>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box devlogs">
          <a href="devlog.php">
            <div class="img-box">
              <img src="img/indexImg2.jpg" alt="">
            </div>
            <div class="detail-box">
              
                <h5>
                  Novas Atualizações
                </h5>
                <p>
                  Sempre buscamos o conforto e acessibilidade de nossos usuários, com isso,
                  estaremos sempre atualizando o site para ser cada vez melhor para todos.
                </p>

            </div>
          </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="footer_container">
    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
          </div>
          <div class="col-md-6 col-lg-2 mx-auto">
            <div class="info_link_box">
              <h4>
                Links
              </h4>
              <div class="info_links">
                <a class="" href="index.php">
                  Home
                </a>
                <a class="" href="sobre.php">
                  Sobre
                </a>
                <a class="" href="history.php">
                  Historico
                </a>
                <a class="" href="contato.php">
                  Contate-nos
                </a>
                <a class="" href="devlog.php">
                  Change log
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h4>
              Contate-nos!
            </h4>
            <form action="#">
              <button>
                Mensagem
              </button>
            </form>
          </div>
          <div class="col-md-6 col-lg-3 mb-0 ml-auto">
            <div class="info_contact">
              <h4>
                Contate-nos
              </h4>
              <div class="contact_link_box">
                <a href="12978115889">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Ligue +55 (12)99728-3962
                  </span>
                </a>
                <a href="osconnectteam@gmail.com">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    osconnectteam@gmail.com
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> todos os direitos reservados a
          <a href="index.phps-">OSConnect</a>
        </p>
      </div>
    </footer>
  </div>


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>


</body>

</html>