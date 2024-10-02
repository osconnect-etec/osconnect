<?
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Função para enviar o código de verificação por e-mail
function enviarEmailConfirmacao($email, $codigoVerificacao) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP do Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'osconnect24@gmail.com'; // Seu e-mail do Gmail
        $mail->Password = 'b g u i t z g l k f x l q g c w'; // Sua senha do Gmail ou senha de aplicativo
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Criptografia TLS
        $mail->Port = 587; // Porta do servidor SMTP do Gmail

        $mail->setFrom('no-reply@osconnect.com', 'www.osconnect.hubsapiens.com.br');
        $mail->addAddress($$email);

        $mail->isHTML(true);
        $mail->Subject = 'Seu código de verificação';
        $mail->Body = "
            <h1>Seu código de verificação</h1>
            <p>Use o código abaixo para fazer login:</p>
            <h2>$codigoVerificacao</h2>
            <p>Este código expira em 10 minutos.</p>
        ";

        $mail->send();
        echo 'E-mail enviado.';
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}


$servername = "br612.hostgator.com.br";
$username = "hubsap45_usrordserv";
$password = "j@j!1502";
$dbname = "hubsap45_bd_ordserv";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$_SESSION['nome'] = $_POST['nome'] ?? null;
$_SESSION['email'] = $_POST['Email'] ?? null; // Usar `Email` se estiver no formulário
$_SESSION['senha'] = $_POST['senha'] ?? null;

$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];


// Verifica se o e-mail e a senha estão corretos no banco de dados
$sql = "SELECT * FROM tblCliente WHERE cliEmail = '$email' AND cliPassword = '$senha' and CliEmail = '$email";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login bem-sucedido, agora gerar um novo código de verificação
    $_SESSION['codigoVerificacao'] = rand(100000, 999999); // Novo código de 6 dígitos
    $expiracao = date("Y-m-d H:i:s", strtotime('+10 minutes')); // O código expira em 10 minutos

    // Verifica se já existe um código de verificação para esse e-mail
    $sql = "SELECT * FROM tblCliente WHERE CliEmail = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Atualizar o código de verificação existente
        $sql = "UPDATE tblCliente SET codigo = '$codigoVerificacao', expiracao = '$expiracao' WHERE CliEmail = '$email'";
    } else {
        // Inserir um novo código de verificação
        $sql = "INSERT INTO tblCliente (CliEmail, codigo, expiracao) VALUES ('$email', '$codigoVerificacao', '$expiracao')";
    }

    if ($conn->query($sql) === TRUE) {
        $_SESSION['codigoVerificacao'] = $codigoVerificacao;
        enviarEmailConfirmacao($emailUsuario, $_SESSION['codigoVerificacao']);
        echo "Código de verificação enviado. Verifique seu e-mail.";
        header("Location:validar.html");
    } else {
        echo "Erro ao armazenar o código de verificação: " . $conn->error;
    }
} else {
    echo "E-mail ou senha incorretos.";
}

$conn->close();



?>