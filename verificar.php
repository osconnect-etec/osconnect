<?php
session_start();

$_SESSION['Email'];

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

        .form button {
      cursor: pointer;
      width: 100%;
      padding: 0.6rem 0;
      border-radius: 0.5rem;
      border: none;
      background-color: #3498db;
      color: #fff;
      font-size: 1.2rem;
      outline: none;
      transition: ease-in-out 0.5s;
    }

    .form button:hover {
      transition: 0.3s;
      background-color: #0a2946;
    }

    .input-group {
      position: relative;
      width: 100%;
      margin: 1rem 0;
    }

    .input-group input {
      width: 75%;
      padding: 1rem 3rem;
      font-size: 1rem;
      background-color: #efefef;
      border-radius: 0.5rem;
      border: 0.125rem solid #fff;
      outline: none;
    }
    </style>
</head>
<body>

<div class="container">
    <h1>Valide seu Código</h1>
    <form action="validar_codigo.php" method="post" class="form"> 
        <div class="input-group">
            <input type="text" id="codigo" name="codigo" required placeholder="Digite o código enviado pelo seu Email">
        </div>
        <button type="submit">Validar Código</button>
    </form>

    <div class="message">
        <!-- Mensagem de erro ou sucesso pode ser exibida aqui -->
        <?php
        if (isset($_GET['erro']) && $_GET['erro'] == 1) {
            echo "Código inválido ou expirado.";
        }
        ?>
    </div>
</div>

</body>
</html>