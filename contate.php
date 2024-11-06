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

$nome = $_POST['Nome'];
$email = $_POST['Emailcli'];
$assunto = $_POST['Ass'];
$mensagem = $_POST['mensagem'];

if (!empty($nome) && !empty($email) && !empty($assunto) && !empty($mensagem)) {

    $stmt = $conn->prepare("SELECT cliNome, cliEmail FROM tblCliente WHERE cliNome = ? AND cliEmail = ?");
    $stmt->bind_param("ss", $nome, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        enviarEmailConfirmacao($email, $nome, $assunto, $mensagem);
        exit(); 
    } else {
        header("Location: contato.php?mensagem=nome/Email%20incorreto");
        exit();
    }
} else {
    header("Location: contato.php?mensagem=Email%20não-enviado");
    exit();
}

function enviarEmailConfirmacao($email, $nome, $assunto, $mensagem): void
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

        $mail->setFrom('no-reply@osconnect.com', $nome);
        $mail->addAddress('osconnect24@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body = "
            <h5>Email: $email</h5>
            <p>$mensagem</p>
            <p>Responder em no máximo 48H</p>
        ";

        $mail->send();

        header("Location: contato.php?mensagem=Email%20enviado");
        exit(); 
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}
?>
