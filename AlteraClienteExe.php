<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0d4fc; /* Cinza claro de fundo */
            color: #333; /* Cor do texto */
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #fff; /* Fundo branco */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Sombra suave */
            margin: 20px auto;
        }
        h1 {
            color: #333; /* Cor do título */
            border-bottom: 2px solid #333; /* Linha divisória */
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 10px;
        }
        .message {
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .success {
            background-color: #4CAF50; /* Verde */
            color: white;
        }
        .error {
            background-color: #f44336; /* Vermelho */
            color: white;
        }
        .btn {
            background-color: #7305bd; /* Azul */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #7305bd; /* Azul mais escuro ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Alteração de Dados</h1>
        <?php
            echo "<p>Id: $id</p>";
            echo "<p>Nome: $nome</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Senha: $senha</p>";
            $sql = "UPDATE cliente SET 
                        nome = '$nome',
                        email = '$email',
                        senha = '$senha'
                    WHERE id = $id";
            $result  = mysqli_query($con, $sql);
            if ($result) {
                echo '<div class="message success">Dados atualizados com sucesso!</div>';
            } else {
                echo '<div class="message error">Erro ao atualizar dados! ' . mysqli_error($con) . '</div>';
            }
        ?>
        <!-- Botão para voltar à página anterior -->
        <button class="btn" onclick="history.back()">Voltar</button>
    </div>
</body>
</html>