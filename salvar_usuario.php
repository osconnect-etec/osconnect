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



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
    $RG = filter_input(INPUT_POST, 'RG', FILTER_SANITIZE_STRING);
    $Telefone = filter_input(INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $tipoUsuario = filter_input(INPUT_POST, 'tipoUsuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Prepara a consulta para atualizar os dados do usuário
    $stmt = $conn->prepare("UPDATE tblCliente SET cliNome=?, cliEmail=?, cliCPF=?, cliRG=?, cliTelefone=?, cliCidade=?, cliPassword=? , role=? WHERE idCliente=?");
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("ssisssssi", $nome, $email, $CPF, $RG, $Telefone, $cidade, $senha_hash, $tipoUsuario, $usuario_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Usuário atualizado com sucesso!";
        header("Location: admin_dashboard.php");

    } else {
        $_SESSION['error'] = "Erro ao atualizar usuário: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

exit();
?>
