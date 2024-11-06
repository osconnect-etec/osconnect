<?php
session_start();
$servername = "br612.hostgator.com.br";
$username = "hubsap45_usrordserv";
$password = "j@j!1502";
$dbname = "hubsap45_bd_ordserv";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter todos os relatórios
$result = $conn->query("SELECT * FROM tblRelatorios ORDER BY criadoEm DESC");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatórios</title>
</head>
<body>
    <h1>Relatórios Gerados</h1>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <strong><?php echo $row['relatorioTipo']; ?></strong> - <?php echo $row['criadoEm']; ?><br>
                <pre><?php echo $row['dados']; ?></pre>
            </li>
        <?php endwhile; ?>
    </ul>

    <?php
    if (isset($_SESSION['message'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']);
    }
    ?>
</body>
</html>
