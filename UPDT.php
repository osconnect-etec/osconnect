<?php
session_start(); 

$servername = "br612.hostgator.com.br";
$username = "hubsap45_usrordserv";
$password = "j@j!1502";
$dbname = "hubsap45_bd_ordserv";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão falhou
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// O ID do usuário
$id = intval($_SESSION['id']); 

// Novos dados enviados via POST
$novo_nome = $_POST['nome']; 
$novo_email = $_POST['email']; 

// Armazena os valores na sessão, se necessário
$_SESSION['nomeUsuario'] = $novo_nome; 
$_SESSION['emailUsuario'] = $novo_email; 

// Verifica se os dados são válidos
if ($id > 0 && !empty($novo_nome) && !empty($novo_email)) {
    // SQL para atualizar o registro
    $sql = "UPDATE tblCliente SET cliNome = ?, cliEmail = ? WHERE idCliente = ?";

    // Prepara a query
    $stmt = $conn->prepare($sql);

    // Liga os parâmetros à query (nome, email e id)
    $stmt->bind_param("ssi", $novo_nome, $novo_email, $id);

    // Executa a query
    if ($stmt->execute()) {
        echo "Registro atualizado com sucesso!";
        // Redireciona para a página de dados
        header("Location: dados.php");
        exit; // Certifique-se de que o script para após o redirecionamento
    } else {
        echo "Erro ao atualizar o registro: " . $stmt->error;
    }

    // Fecha a conexão
    $stmt->close();
} else {
    echo "Dados inválidos ou incompletos.";
    var_dump($_SESSION);
    var_dump($_POST);
}

$conn->close();
?>
