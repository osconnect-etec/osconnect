<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


session_start();

$servername = "br612.hostgator.com.br";
$username = "hubsap45_usrordserv";
$password = "j@j!1502";
$dbname = "hubsap45_bd_ordserv";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? null;
    $email = $_POST['Email'] ?? null;
    $senha = $_POST['password'] ?? null;

    $_SESSION['nome'] = $nome;
    $_SESSION['Email'] = $email;
    $_SESSION['senha'] = $senha;

    if (!empty($email)) {
        $sql = "SELECT * FROM tblCliente WHERE cliEmail = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $codigoVerificacao = rand(100000, 999999);
            $expiracao = date("Y-m-d H:i:s", strtotime('+10 minutes'));



            $sql = "UPDATE tblCliente SET codigo = '$codigoVerificacao', expiracao = '$expiracao' WHERE cliEmail = '$email'";

            if ($conn->query(query: $sql) === TRUE) {
                enviarEmailConfirmacao($email, $codigoVerificacao);
                echo "Código de verificação enviado. Verifique seu e-mail.";
                header("location:verificar.php");
                exit();
            } else {
                echo "Erro ao armazenar o código de verificação: " . $conn->error;
            }
        } else {
            echo "E-mail não encontrado.";
        }
    } else {
        echo "Por favor, preencha o e-mail e a senha.";
    }
}

function enviarEmailConfirmacao($email, $codigoVerificacao)
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'osconnect24@gmail.com';
        $mail->Password = 'b g u i t z g l k f x l q g c w';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('no-reply@osconnect.com', 'OSConnect');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'redefinir senha';
        $mail->Body = "
            <h1>seu link de redeçfiniçao de senha</h1>
            <p>Use o código abaixo para fazer login:</p>
            <h2>$codigoVerificacao</h2>
            <a href='http://localhost/OSConnect/validar_codigo.php?codigo=$codigoVerificacao'>
                <p>ou use clique aqui</p>
            </a>

            
            <p>Este código expira em 10 minutos.</p>
        ";

        $mail->send();
        echo 'E-mail enviado.';
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}

?>