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

</head>

<style>
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

    .hero_area {
        position: relative;
        min-height: 80vh;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        background-color: #0a2946;
        border-radius: 0 0 350px 0;
    }

    .sub_page .hero_area {
        min-height: auto;
        border-radius: 0 0 45px 0;
    }

    .header_section {
        padding: 5px 0;
        display: flex;
        position: fixed;
        width: 100%;
        background-color: #0a2946;
        z-index: 1000;

    }

    .header_section .container-fluid {
        display: flex;
        padding-right: 25px;
        padding-left: 25px;
        justify-content: center;
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
        background-color: none;
        color: #ffffff;
        border-radius: 5px;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        border: 1px solid #3498db;
    }


    .quote_btn-container .quote_btn:hover {
        background-color: #3498db;
        color: #ffffff;
        -webkit-transform: translateY(-3px);
        transform: translateY(-3px);
    }

    .content {
        display: flex;
        gap: 20px;
        flex-direction: row;

    }

    .image-container {
        background-color: #0a2946;
        border-radius: 0 0 350px 0;
        padding: 10px;
        height: 90vh;
        width: 70vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .image-container img {
        width: 30vh;
        max-height: 40vh;
        border-radius: 350px 350px 350px 350px;
        display: flex;
    }

    .text-info-perf {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        color: white;
    }

    .text-container {
        max-width: 62%;
        display: flex;
        flex-direction: column;
        margin-top: 4%;
    }

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

        .navbar-collapse {
            position: absolute;
            top: 99%;
            left: 0;
            background-color: #0a2946;
            z-index: 999;
            padding-bottom: 1rem;
        }

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

        table {
            display: none;
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
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.php">
                    <img class="logo" src="img/logo.png" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php"> home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php"> Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Historico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contate-nos</a>
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
    </section>
    <div class="content">
        <div class="image-container">
            <img src="img/about-03.jpg" alt="Imagem">
            <div class="text-info-perf">
                <h3><?php echo $_SESSION['nomeUSR']; ?></h3>
                <p>ID: <?php echo $_SESSION['id']; ?></p>
                <div class="quote_btn-container">
                    <a href="sair.php" class="quote_btn">
                        <i class="icone bi bi-person-circle" style="font-size: 30px; margin: 0 2% 0 0; "></i>
                        sair
                    </a>
                </div>
                <div class="quote_btn-container">
                    <a href="deletar.php" class="quote_btn">
                        excluir conta
                    </a>
                </div>

            </div>
        </div>
        <div class="text-container">
            <div>
                <p>Nome: <?php echo $_SESSION['nomeUSR']; ?></p>
                <p>CPF: <?php echo $_SESSION['CPF']; ?></p>
                <p>RG: <?php echo $_SESSION['RG']; ?></p>
                <p>Cidade:
                    <?php

                    $servername = "br612.hostgator.com.br";
                    $username = "hubsap45_usrordserv";
                    $password = "j@j!1502";
                    $dbname = "hubsap45_bd_ordserv";

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    //esta funcionando por favor nao mexer
                    if ($conn->connect_error) {
                        die("Conexão falhou: " . $conn->connect_error);
                    }
                    if (!empty($_SESSION['cidade'])) {
                        $cidade = $_SESSION['cidade'];
                        $sql = "SELECT CidNome FROM tblCidade WHERE id = ?";
                        $stmt = $conn->prepare(query: $sql);
                        $stmt->bind_param("i", $cidade);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo $row["CidNome"];
                        } else {
                            echo "Nenhuma cidade encontrada com o ID fornecido.";
                        }

                        $stmt->close();
                    } else {
                        echo "ID da cidade não informado.";
                    }
                    ?>

                </p>
                <p>Telefone: <?php echo $_SESSION['telefoneUsuario']; ?></p>
                <p>Email: <?php echo $_SESSION['emailUSR']; ?></p>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="8">
                            <h5 style="display: flex;flex-wrap: nowrap;
              align-content: center;
              justify-content: center;"><strong>produtos recentes</strong></h5>
                        </th>
                    </tr>
                    <tr>
                        <th>tipo do Serviço </th>
                        <th>Produto(s)</th>
                        <th>Quantidade</th>
                        <th>Valor </th>
                        <th>serviço realizado </th>
                        <th>Tecnico / Prestador de serviço</th>
                        <th>Data</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Serviço 1</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati possimus
                            vitae, illo
                            natus provident molestias placeat! Dolorem,</td>
                        <td>1</td>
                        <td>R$ 100,00</td>
                        <td>inspeção</td>
                        <td>inspeção</td>
                        <td>dd/mm/year</td>
                        <td>Finalizado</td>
                    </tr>
                    <tr>
                        <td>Serviço 2</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et velit iste ratione blanditiis
                            eius
                            laboriosam? Deserunt qui sunt est architecto,</td>
                        <td>1</td>
                        <td>R$ 200,00</td>
                        <td>reparo</td>
                        <td>inspeção</td>
                        <td>dd/mm/year</td>
                        <td>Finalizado</td>
                    </tr>
                    <tr>
                        <td>Serviço 3</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consequatur debitis nobis
                            dignissimos
                            aliquam laboriosam aliquid in nam!</td>
                        <td>1</td>
                        <td>R$ 300,00</td>
                        <td>transporte</td>
                        <td>inspeção</td>
                        <td>dd/mm/year</td>
                        <td>Finalizado</td>
                    </tr>
                    <tr>
                        <td>Serviço 4</td>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga iure,
                        </td>
                        <td>1</td>
                        <td>R$ 400,00</td>
                        <td>troca de peça</td>
                        <td>inspeção</td>
                        <td>dd/mm/year</td>
                        <td>Finalizado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="js/bootstrap.js"></script>

</html>