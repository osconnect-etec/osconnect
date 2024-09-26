<?php

session_start();


$servername = "br612.hostgator.com.br";
$username = "hubsap45_usrordserv";
$password = "j@j!1502";
$dbname = "hubsap45_bd_ordserv";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
    $RG = filter_input(INPUT_POST, 'RG', FILTER_SANITIZE_STRING);
    $Telefone = filter_input(INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING);
    $cidade_id = filter_input(INPUT_POST, 'cidade', FILTER_VALIDATE_INT);
    $senha = $_POST["password"];


    if (!empty($cidade_id)) {
        $sql = "SELECT CidNome FROM tblCidade WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $cidade_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            header("Location: login.php");
        } else {
            echo "Cidade não encontrada.";
        }
    } else {
        echo "Nenhuma cidade foi selecionada.";
    }

    $senha = $_POST["password"];
    $confirmar_senha = $_POST["confirm_password"];

    if ($senha !== $confirmar_senha) {
        die("As senhas não coincidem. Tente novamente.");
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO tblCliente (cliNome, cliEmail, cliPassword, cliCPF, cliRG, cliTelefone, cliCidade) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        error_log("Erro na preparação da consulta: " . $conn->error);
        die("Erro ao processar a solicitação.");
    }

    $stmt->bind_param("sssissi", $nome, $email, $senha_hash, $CPF, $RG, $Telefone, $cidade_id);
    if ($stmt->execute()) {
        header("Location: login.php");
    } else {
        error_log("Erro ao inserir registro: " . $stmt->error);
        echo "Erro ao inserir registro.";
    }

     $stmt->close();
    $conn->close();
}
?>