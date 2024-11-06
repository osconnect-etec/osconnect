<?php
session_start();

// Verificar se o usuário está logado e se é um administrador
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // Se não for administrador, redireciona para a página de login ou uma página de erro
    header("Location: acesso_negado.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {    
            background-color: #0a2946;      
            color: black;
            padding: 0.5px;
            text-align: center;
        }

        nav {
            background-color: #0a2946;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        nav ul li {
            display: flex;
            justify-content: space-around;

        }
        nav ul li .btn {
            color: white;
            padding: 0.5rem;
            text-decoration: none;
            border-radius: 10px;
            transition: ease-in-out 0.3s;
            width: 10rem;
        }
        nav ul li .btn:hover {
            background-color: #fff;
            color: #000;
            border-radius: 10px;
            transition: ease-in-out 0.3s;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container h1{
            text-align: center;
            font-size: 2rem;
            padding-bottom: 0.5rem;
            border-bottom: solid 2px #0a2946;
            font-family: 'Courier New', Courier, monospace;
        }

        .card {
            background-color: white;
            width: 60%;
            padding: 20px;
            margin: 1rem 0;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            align-items: center;
        }


        .card h2 {
            padding-bottom: 0.2rem;
            border-bottom: solid 2px #0a2946;
            width: 60%;
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
            font-size: 1.5rem;
        }

        .card .btn{
            background-color: #3498db;
            color: #fff;
            border-radius: 12px;
            width: 10rem;
            height: 2.5rem;
            cursor: pointer;
            border: none;
            transition: ease-in-out 0.2s;
        }

        .card .btn:hover{
            background-color: #0a2946;
            transition: ease-in-out 0.2s;
        }

        .logout-btn {
            background-color: #3498db;
            color: #fff;
            border-radius: 12px;
            width: 10rem;
            height: 2.5rem;
            cursor: pointer;
            border: none;
            transition: ease-in-out 0.2s;
        }
        .logout-btn:hover {
            background-color: darkred;
            transition: ease-in-out 0.3s;
            text-decoration: none;
        }

    </style>

<body>

<header>
<nav>
    <ul>
        <li><a href="gerenciar_usuarios.php" class="btn">Gerenciar Usuários</a></li>
        <li><a href="ver_relatorios.php" class="btn">Ver Relatórios</a></li>
        <li><a href="sair.php" class="logout-btn">Sair</a></li>
        

    </ul>
</nav>
</header>

<div class="container">
    <h1>Painel de Administração</h1>
    <h2>Bem-vindo, <?php echo $_SESSION['nomeUSR']; ?>!</h2>

    <div class="card">
        <h2>Gerenciamento de Usuários</h2>
        <p>Acesse as opções para gerenciar, editar ou excluir usuários do sistema.</p>
        <a href="gerenciar_usuarios.php"><button class="btn">Gerenciar Usuários</button></a>
    </div>

    <div class="card">
        <h2>Relatórios</h2>
        <p>Veja relatórios de atividades, estatísticas e mais.</p>
        <a href="ver_relatorios.php"><button class="btn">Visualizar Relatórios</button></a>
    </div>

</div>

</body>
</html>
