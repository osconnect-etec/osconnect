<?php
session_start();

// Verificar se o usuário é um administrador
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: acesso_negado.php");
    exit();
}

$servername = "br612.hostgator.com.br";
$username = "hubsap45_usrordserv";
$password = "j@j!1502";
$dbname = "hubsap45_bd_ordserv";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta todos os usuários da tabela tblCliente
$sql = "SELECT idCliente, cliNome, cliEmail, cliCPF FROM tblCliente";
$defaultResult = $conn->query($sql);
$searchResult = null; // Variável para armazenar o resultado da pesquisa, se houver

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        .btn {
            padding: 5px 10px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-edit {
            background-color: #4CAF50;
        }

        .btn-delete {
            background-color: #f44336;
        }

        .btn-edit:hover,
        .btn-delete:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <h1>Gerenciar Usuários</h1>

    <form method="POST" action="">
        <input type="text" name="search" placeholder="Digite o que deseja pesquisar" required>
        <input type="submit" value="Pesquisar">
        <input type="reset" value="Limpar" onclick="window.location.href='';">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchTerm = $_POST['search'];
        $stmt = $conn->prepare("SELECT idCliente, cliNome, cliEmail, cliCPF FROM tblCliente WHERE cliNome LIKE ?");
        $searchTerm = "%$searchTerm%";
        $stmt->bind_param("s", $searchTerm);
        $stmt->execute();
        $searchResult = $stmt->get_result();

        if ($searchResult->num_rows > 0) {
            echo "<h2>Resultados da pesquisa para: '$searchTerm'</h2>";
        } else {
            echo "<h2>Nenhum resultado encontrado para: '$searchTerm'</h2>";
        }
    }
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>

        <?php
        // Se houver um resultado da pesquisa, exiba-o; caso contrário, exiba o resultado padrão
        if ($searchResult && $searchResult->num_rows > 0) {
            while ($row = $searchResult->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['idCliente'] . "</td>";
                echo "<td>" . $row['cliNome'] . "</td>";
                echo "<td>" . $row['cliEmail'] . "</td>";
                echo "<td>" . $row['cliCPF'] . "</td>";
                echo "<td>
                    <a href='editar_usuario.php?id=" . $row['idCliente'] . "' class='btn btn-edit'>Editar</a>
                    <a href='excluir_usuario.php?id=" . $row['idCliente'] . "' class='btn btn-delete'>Excluir</a>
                  </td>";
                echo "</tr>";
            }
        } elseif ($defaultResult->num_rows > 0) {
            // Se não houver uma pesquisa, exibe os usuários padrão
            while ($row = $defaultResult->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['idCliente'] . "</td>";
                echo "<td>" . $row['cliNome'] . "</td>";
                echo "<td>" . $row['cliEmail'] . "</td>";
                echo "<td>" . $row['cliCPF'] . "</td>";
                echo "<td>
                    <a href='editar_usuario.php?id=" . $row['idCliente'] . "' class='btn btn-edit'>Editar</a>
                    <a href='excluir_usuario.php?id=" . $row['idCliente'] . "' class='btn btn-delete'>Excluir</a>
                  </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum usuário encontrado</td></tr>";
        }
        ?>
    </table>

    <a href="admin_dashboard.php">Voltar para o Painel</a>

    <?php
    $conn->close();
    ?>

</body>

</html>
