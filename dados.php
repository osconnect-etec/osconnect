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

$nome = $_POST['nome'] ?? null;
$email = $_POST['Email'] ?? null;
$senha = $_POST['password'] ?? null;

$_SESSION['nome'] = $nome ?? null;
$_SESSION['Email'] = $email ?? null;
$_SESSION['senha'] = $senha ?? null;

function verificarLogin($conn, $nome, $email, $senha)
{
    // Consulta agora também busca a coluna 'role'
    $stmt = $conn->prepare("SELECT cliNome, cliNmCompleto, idCliente, cliRG, cliTelefone, cliEmail, cliCPF, cliCidade, cliPassword, cliImagem, role FROM tblCliente WHERE cliNome = ? AND cliEmail = ?");
    
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("ss", $nome, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['cliPassword'];

        if (password_verify($senha, $hashed_password)) {
            $_SESSION['emailUSR'] = $row['cliEmail'];
            $_SESSION['nomeUSR'] = $row['cliNome'];
            $_SESSION['NmCompleto'] = $row['cliNmCompleto'];
            $_SESSION['telefoneUsuario'] = $row['cliTelefone'];
            $_SESSION['id'] = $row['idCliente'];
            $_SESSION['RG'] = $row['cliRG'];
            $_SESSION['CPF'] = $row['cliCPF'];
            $_SESSION['cidade'] = $row['cliCidade'];
            $_SESSION['imagem'] = $row['cliImagem'];
            $_SESSION['role'] = $row['role'];  // Guarda a função do usuário (admin ou user)

            if ($row['role'] === 'admin') {
                // Se o usuário for administrador, redireciona para o painel admin
                header("Location: admin_dashboard.php");
            } else {
                // Se o usuário for comum, redireciona para o perfil
                header("Location: validar.php");
            }
            exit();
        } else {
            header("Location: senhaincorreta.php");
        }
    } else {
        header("Location: usrnencontrado.php");
    }

    $stmt->close();
}

if (!empty($nome) && !empty($email) && !empty($senha)) {
    verificarLogin($conn, $nome, $email, $senha);
} else if (!empty($_SESSION['nomeUsuario']) && !empty($_SESSION['emailUsuario']) && !empty($_SESSION['senhaUsuario'])) {
    $stmt = $conn->prepare("SELECT cliNome, cliNmCompleto, idCliente, cliRG, cliTelefone, cliEmail, cliCPF, cliCidade, cliPassword, cliImagem, role FROM tblCliente WHERE cliNome = ? AND cliEmail = ?");
    
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("ss", $_SESSION['nomeUsuario'], $_SESSION['emailUsuario']);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['cliPassword'];

        if (password_verify($_SESSION['senhaUsuario'], $hashed_password)) {
            $_SESSION['senhaUSR'] = $row['senhaUsuario'];
            $_SESSION['NmCompleto'] = $row['cliNmCompleto'];
            $_SESSION['nomeUSR'] = $row['cliNome'];
            $_SESSION['emailUSR'] = $row['cliEmail'];
            $_SESSION['telefoneUsuario'] = $row['cliTelefone'];
            $_SESSION['id'] = $row['idCliente'];
            $_SESSION['RG'] = $row['cliRG'];
            $_SESSION['CPF'] = $row['cliCPF'];
            $_SESSION['cidade'] = $row['cliCidade'];
            $_SESSION['imagem'] = $row['cliImagem'];
            $_SESSION['role'] = $row['role'];

            if ($row['role'] === 'admin') {
                header("Location: admin_dashboard.php");
            } else {
                header("Location: perfil.php");
            }
            exit();
        } else {
            header("Location: senhaincorreta.php");
        }
    } else {
        header("Location: usrnencontrado.php");
    }

    $stmt->close();
} else {
    header("location:index.php");
}

$conn->close();
?>

















