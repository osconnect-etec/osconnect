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

$senha = $_POST["senha"];
$email = $_SESSION["email"];


$senha_hash = password_hash($senha, PASSWORD_DEFAULT);


if(!empty($senha)){

    $sql = "SELECT * FROM tblCliente WHERE cliEmail = '$email'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
    $sql = "UPDATE tblCliente SET cliPassword = '$senha_hash' WHERE cliEmail = '$email'";

    if ($conn->query($sql) === TRUE) {
        echo "Senha alterada com sucesso!";
        header("location:login.php");
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
}else{
    echo "E-mail não encontrado.";
}
}else{
    echo "Por favor, preencha o e-mail e a senha.";
}



?>