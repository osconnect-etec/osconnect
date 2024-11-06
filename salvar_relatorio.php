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
    $relatorioID = filter_input(INPUT_POST, 'relatorio_id', FILTER_SANITIZE_NUMBER_INT);
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

    // Se o campo relatorioID estiver preenchido, fazemos o UPDATE (edição)
    if (!empty($relatorioID)) {
        $stmt = $conn->prepare("UPDATE tblRelatorios SET titulo = ?, descricao = ? WHERE id = ?");
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $conn->error);
        }

        $stmt->bind_param("ssi", $titulo, $descricao, $relatorioID);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Relatório atualizado com sucesso!";
        } else {
            $_SESSION['error'] = "Erro ao atualizar o relatório: " . $stmt->error;
        }
    } else {
        // Se o campo relatorioID estiver vazio, fazemos o INSERT (criação)
        $stmt = $conn->prepare("INSERT INTO tblRelatorios (titulo, descricao) VALUES (?, ?)");
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $conn->error);
        }

        $stmt->bind_param("ss", $titulo, $descricao);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Relatório criado com sucesso!";
        } else {
            $_SESSION['error'] = "Erro ao criar relatório: " . $stmt->error;
        }
    }

    $stmt->close();
}

$conn->close();
header("Location: ver_relatoriosa.php");
exit();
?>
