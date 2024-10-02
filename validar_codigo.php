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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigoInserido = $_POST['codigo'];
    $emailUsuario = $_SESSION['Email'] ?? null;
    
    
    var_dump($_SESSION);
    var_dump($emailUsuario);
    var_dump($codigoInserido);



    $sql = "SELECT * FROM tblCliente WHERE cliEmail = '$emailUsuario' AND codigo = '$codigoInserido' AND expiracao > NOW()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Código de verificação válido. Login concluído!";
        header("Location: index.php");
        exit();
    } else {
        echo "Código de verificação inválido ou expirado.";
    }
}else if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $codigoInserido = $_GET['codigo'];
    $emailUsuario = $_SESSION['Email'] ?? null;
    ;

    var_dump($emailUsuario);
    var_dump($codigoInserido);



    $sql = "SELECT * FROM tblCliente WHERE cliEmail = '$emailUsuario' AND codigo = '$codigoInserido' AND expiracao > NOW()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Código de verificação válido. Login concluído!";
        header("Location: index.php");
        exit();
    } else {
        echo "Código de verificação inválido ou expirado.";
    }
}
$conn->close();
?>