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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_SESSION['id'])) {
        die("ID de sessão não encontrado.");
    }

    $id = $_SESSION['id'];
    $novo_nome = $_POST['Nome'];
    $novo_NmCompleto = $_POST['NmCompleto'];
    $novo_email = $_POST['Email'];
    $novo_numero = $_POST['numero'];
    $novo_CPF = $_POST['CPF'];
    $novo_cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);



    if (isset($_FILES['imagem'])) {
        if ($_FILES['imagem']['error'] == UPLOAD_ERR_OK) {
            $fileType = mime_content_type($_FILES['imagem']['tmp_name']);
            if (strpos($fileType, 'image/') === 0) {
                $diretorio = 'uploads/';
                $nomeArquivo = uniqid() . '-' . basename($_FILES['imagem']['name']);
                $caminhoImagem = $diretorio . $nomeArquivo;

                if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem)) {
                    header("Location: perfil.php");
                } else {
                    die("Erro ao mover o arquivo para o diretório.");
                }
            } else {
                die("O arquivo enviado não é uma imagem válida.");
            }
        } else {
            header("Location: perfil.php?mensagem=campo%20no%20upload%20" . $_FILES['imagem']['error']);

        }
    } else {
        header("Location: perfil.php?mensagem=campo%20de%20imagem%20não%20encontrado");
    }

    if ($id > 0 && !empty($novo_nome) && !empty($novo_NmCompleto) && !empty($novo_email) && !empty($novo_numero) && !empty($novo_CPF) && !empty($novo_cidade)) {
        $sql = "UPDATE tblCliente SET cliNome = ?, cliNmCompleto = ?, cliEmail = ?, cliTelefone = ?, cliCPF = ?, cliCidade = ?, cliImagem = ? WHERE idCliente = ?";
        $stmt = $conn->prepare($sql);
                
        $stmt->bind_param("sssssssi", $novo_nome, $novo_NmCompleto, $novo_email, $novo_numero, $novo_CPF, $novo_cidade, $caminhoImagem, $id);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $_SESSION['nomeUsuario'] = $novo_nome;
                $_SESSION['emailUsuario'] = $novo_email;
                $_SESSION['senhaUsuario'] = $_SESSION['senha'];
                header("Location: dados.php");
                exit;
            } else {
                header("Location: perfil.php?mensagem=perfil%20Não%20atualizado");
            }
        } else {
            header("Location: perfil.php?mensagem=arro%20ao%20atualizar");
        }

        $stmt->close();
    } else {
        header("Location: perfil.php?mensagem=dados%20incompletos");
    }

    $conn->close();
}
?>
