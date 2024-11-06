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

// Verifica se o ID do usuário foi passado pela URL
if (isset($_GET['id'])) {
    $usuario_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    // Prepara a consulta para excluir o usuário
    $stmt = $conn->prepare("DELETE FROM tblCliente WHERE idCliente = ?");
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("i", $usuario_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Usuário excluído com sucesso!";
    } else {
        $_SESSION['error'] = "Erro ao excluir usuário: " . $stmt->error;
    }

    $stmt->close();
} else {
    $_SESSION['error'] = "ID do usuário não especificado.";
}

$conn->close();
header("Location: admin_dashboard.php");
exit();
?>
