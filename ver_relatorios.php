<?php
session_start();

// Verificar se o usuário é um administrador
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: acesso_negado.php");
    exit();
}

// Exemplo de um relatório simples: Número de usuários cadastrados
$servername = "br612.hostgator.com.br";
$username = "hubsap45_usrordserv";
$password = "j@j!1502";
$dbname = "hubsap45_bd_ordserv";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Número de usuários
$sql = "SELECT COUNT(idCliente) AS totalUsuarios FROM tblCliente";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalUsuarios = $row['totalUsuarios'];


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .report {
            margin: 20px 0;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
        }
    </style>
</head>

<body>

    <h1>Relatorios</h1>
    <div class="report">

        <form method="POST" action="salvar_relatorio.php">
            <label for="relatorio_id">ID do Relatório (para edição):</label>
            <input type="number" name="relatorio_id" placeholder="Deixe em branco para criar novo">

            <label for="titulo">Título do Relatório:</label>
            <input type="text" name="titulo" required>

            <label for="descricao">Descrição:</label>
            <textarea name="descricao" required></textarea>

            <input type="submit" value="Salvar Relatório">
        </form>

    </div>

    <h2>Relatórios</h2>


    <div class="report">
        <h2>Total de Usuários Cadastrados</h2>
        <p>Número total de usuários no sistema: <strong><?php echo $totalUsuarios; ?></strong></p>
    </div>


    <h2>Relatórios Existentes</h2>
    <?php
    $stmt = $conn->prepare("SELECT id, titulo, descricao, data_criacao FROM tblRelatorios");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Relatórios Criados</h2>";
        echo "<table>";
        echo "<tr>
            <th>ID</th>
            <th>titulo</th>
            <th>descricao</th>
            <th>Criado Em</th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['titulo']) . "</td>";
            echo "<td>" . htmlspecialchars($row['descricao']) . "</td>";
            echo "<td>" . htmlspecialchars($row['data_criacao']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhum relatório encontrado.</p>";
    }

    $stmt->close();
    ?>


    <a href="admin_dashboard.php">Voltar para o Painel</a>

</body>

</html>