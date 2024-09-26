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

$id = $_SESSION['id'];

$sql = "DELETE FROM  tblCliente WHERE idCliente = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Registro deletado com sucesso!";
    header("Location: login.php");
} else {
    echo "Erro ao deletar o registro: " . $conn->error;
}

$stmt->close();
$conn->close();
?>