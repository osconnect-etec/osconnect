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

// Verifica se o ID do usuário foi passado pela URL
if (isset($_GET['id'])) {
    $usuario_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    // Prepara a consulta para obter os dados do usuário
// Prepara a consulta para obter os dados do usuário
    $stmt = $conn->prepare("SELECT cliNome, cliEmail, cliCPF, cliRG, cliTelefone, cliCidade, role FROM tblCliente WHERE idCliente = ?");
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }
    $stmt->bind_param("i", $usuario_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        die("Usuário não encontrado.");
    }

    $usuario = $result->fetch_assoc();

} else {
    die("ID do usuário não especificado.");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>

<body>
    <h2>Editar Usuário</h2>
    <form method="POST" action="salvar_usuario.php">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($usuario_id); ?>">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo htmlspecialchars($usuario['cliNome']); ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($usuario['cliEmail']); ?>" required>

        <label for="CPF">CPF:</label>
        <input type="text" name="CPF" value="<?php echo htmlspecialchars($usuario['cliCPF']); ?>" required>

        <label for="RG">RG:</label>
        <input type="text" name="RG" value="<?php echo htmlspecialchars($usuario['cliRG']); ?>" required>

        <label for="Telefone">Telefone:</label>
        <input type="text" name="Telefone" value="<?php echo htmlspecialchars($usuario['cliTelefone']); ?>" required>

        <label for="cidade">Cidade:</label>
        <select name="cidade" id="cidade" required>
                <option value="">--Escolha uma cidade--</option>
                <?php
                $sql = "SELECT id, CidNome FROM tblCidade";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row["id"] . '">' . $row["CidNome"] . '</option>';
                  }
                } else {
                  echo '<option value="">Nenhuma cidade disponível</option>';
                }
                ?>
              </select>

        <label for="senha">Senha:</label>
        <input type="password" name="Password" required>

        <label for="tipoUsuario">Tipo de Usuário:</label>
        <select name="tipoUsuario">
            <option value="usuario" <?php echo ($usuario['role'] === 'usuario') ? 'selected' : ''; ?>>Usuário
            </option>
            <option value="admin" <?php echo ($usuario['role'] === 'admin') ? 'selected' : ''; ?>>Admin</option>
        </select>

        <input type="submit" value="Atualizar Usuário">
    </form>

    <a href="admin_dashboard.php">Voltar ao Painel de Administração</a>
</body>

</html>