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

function verificarLogin($conn, $nome, $email, $senha) {
    $stmt = $conn->prepare("SELECT cliNome, idCliente, cliRG, cliTelefone, cliEmail, cliCPF, cliCidade, cliPassword FROM tblCliente WHERE cliNome = ? AND cliEmail = ?");
    
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
            $_SESSION['telefoneUsuario'] = $row['cliTelefone'];
            $_SESSION['id'] = $row['idCliente'];
            $_SESSION['RG'] = $row['cliRG'];
            $_SESSION['CPF'] = $row['cliCPF'];
            $_SESSION['cidade'] = $row['cliCidade'];

            header("Location: index.php");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? null;
    $email = $_POST['Email'] ?? null; // Usar `Email` se estiver no formulário
    $senha = $_POST['password'] ?? null;

    if (!empty($nome) && !empty($email) && !empty($senha)) {
        verificarLogin($conn, $nome, $email, $senha);
    } else if (!empty($_SESSION['nomeUsuario']) && !empty($_SESSION['emailUsuario']) && !empty($_SESSION['senhaUsuario'])) {
        $stmt = $conn->prepare("SELECT cliNome, idCliente, cliRG, cliTelefone, cliEmail, cliCPF, cliCidade, cliPassword FROM tblCliente WHERE cliNome = ? AND cliEmail = ?");
        
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
                $_SESSION['nomeUSR'] = $row['cliNome'];
                $_SESSION['emailUSR'] = $row['cliEmail'];
                $_SESSION['telefoneUsuario'] = $row['cliTelefone'];
                $_SESSION['id'] = $row['idCliente'];
                $_SESSION['RG'] = $row['cliRG'];
                $_SESSION['CPF'] = $row['cliCPF'];
                $_SESSION['cidade'] = $row['cliCidade'];

                header("Location: index.php");
                exit();
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Nome/Email incorretos.";
        }

        $stmt->close();
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}

$conn->close();
?>
