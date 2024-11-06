<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$servername = "br612.hostgator.com.br";
$username = "hubsap45_usrordserv";
$password = "j@j!1502";
$dbname = "hubsap45_bd_ordserv";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$redEmail = $_POST['redEmail'];
$redNome = $_POST['redNome']; 

$nome = $_SESSION['nome'];
$email = $_SESSION['Email'];
$senha = $_SESSION['senha'];



    if (!empty($nome) && !empty($email) && !empty($senha)) {
       
    
        $sql = "SELECT * FROM tblCliente WHERE cliEmail = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $codigoVerificacao = rand(100000, 999999);
            $expiracao = date("Y-m-d H:i:s", strtotime('+10 minutes'));


            $sql = "UPDATE tblCliente SET codigo = '$codigoVerificacao', expiracao = '$expiracao' WHERE cliEmail = '$email'";

            if ($conn->query(query: $sql) === TRUE) {
                enviarEmailConfirmacao($email, $codigoVerificacao);
                header("location:verificar.php");
                exit();
            } else {
                echo "Erro ao armazenar o código de verificação: " . $conn->error;
            }
        } else {
            echo "E-mail não encontrado.";
        }
    } else if (!empty($redNome) && !empty($redEmail) && empty($senha)) {
        $sql = "SELECT * FROM tblCliente WHERE cliEmail = '$redEmail'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $codigoVerificacao = rand(100000, 999999);
            $expiracao = date("Y-m-d H:i:s", strtotime('+10 minutes'));

            $_SESSION['email'] = $redEmail;

            $sql = "UPDATE tblCliente SET codigo = '$codigoVerificacao', expiracao = '$expiracao' WHERE cliEmail = '$redEmail'";

            if ($conn->query(query: $sql) === TRUE) {
                redefinirSenha($redEmail, $codigoVerificacao);
                $_SESSION['Email'] = $redEmail;
                header("location:resenha.php");
                exit();
            } else {
                echo "Erro ao armazenar o código de verificação: " . $conn->error;
            }
        } else {
            echo "E-mail não encontrado.";
            var_dump($redEmail);
            var_dump($redNome);
            
        }
    }else{
        echo "nao funcionou";
        var_dump($senha);
        var_dump($email);
        var_dump($nome);
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

        $mail->setFrom('no-reply@osconnect.com', 'no-reply');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Seu código para a redefinição de senha';
        $mail->Body = "
            <h1>Seu código de verificação</h1>
            <p>Use o código abaixo para fazer login:</p>
            <h2>$codigoVerificacao</h2>
            <a href='http://localhost/OSConnect/validar_codigo.php?codigo=$codigoVerificacao'>
                <p>ou use clique aqui</p>
            </a>

            
            <p>Este código expira em 10 minutos.</p>
        ";

        $mail->send();
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}

function redefinirSenha($redEmail, $codigoVerificacao)
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

        $mail->setFrom('no-reply@osconnect.com', 'no-reply');
        $mail->addAddress($redEmail);

        $mail->isHTML(true);
        $mail->Subject = 'Seu código de verificação';
        $mail->Body = "
            <h1>Seu código de verificação</h1>
            <p>Use o código abaixo para fazer login:</p>
            <h2>$codigoVerificacao</h2>
            <a href='http://localhost/OSConnect/validar_codigo.php?codigo=$codigoVerificacao'>
                <p>ou use clique aqui</p>
            </a>

            
            <p>Este código expira em 10 minutos.</p>
        ";

        $mail->send();

    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}

?>