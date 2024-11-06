<?php
session_start();

$_SESSION['Email'];

var_dump($_SESSION['Email']);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Código</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            display: block;
            width: 100%;
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Valide seu Código</h1>
    <form action="senharedefinir.php" method="post">
        <label for="codigo">Código de Verificação:</label>
        <input type="text" id="codigo" name="codigo" required placeholder="Digite o código enviado">

        <button type="submit">Validar Código</button>
    </form>

    <div class="message">
        <?php
        if (isset($_GET['erro']) && $_GET['erro'] == 1) {
            echo "Código inválido ou expirado.";
        }
        ?>
    </div>
</div>

</body>
</html>
