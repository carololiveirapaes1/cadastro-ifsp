<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0d4fc;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border: 2px solid #000; 
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #7305bd;
        }

        .input-container {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #000; /* Cor do texto */
        }

        .input-container input[type="text"],
        .input-container input[type="email"],
        .input-container input[type="password"],
        .input-container input[type="number"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: none;
            border-bottom: 1px solid #000; /* Borda inferior fina */
            outline: none; /* Remove a borda padrão ao focar */
            background-color: transparent; /* Fundo transparente */
        }

        .input-container input[type="text"]:focus,
        .input-container input[type="email"]:focus,
        .input-container input[type="password"]:focus,
        .input-container input[type="number"]:focus {
            border-bottom: 2px solid #7305bd; /* Borda inferior mais espessa ao focar */
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px; /* Espaçamento entre os botões */
            font-size: 16px;
            color: #fff;
            background-color: #7305bd; /* Azul */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #7305bd; /* Azul mais escuro ao passar o mouse */
        }

        .btn-secondary {
            background-color: #dc3545; /* Vermelho */
        }

        .btn-secondary:hover {
            background-color: #c82333; /* Vermelho mais escuro ao passar o mouse */
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastrar Cliente</h2>
        <form action="CadastroClienteExe.php" method="post" class="form-container">
            <div class="input-container">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="input-container">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input-container">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <div>
                <label for="Radio">Usuario Ativo</label>
                <input type="radio" name="ativo" id="ativo"value="1">Sim
                <input type="radio" name="ativo" id="ativo"value="0">Não
            </div>
            <!---<div class="input-container">
                <label for="cidade">Id Cidade</label>
                <input type="number" name="id_cidade" id="cidade" required>
            </div>-->
            <div class="button-container">
                <button type="submit" class="btn">Cadastrar</button>
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade"></select>
                <?php
                include('includes/conexão.php');
                $sql ="SELECT * FROM cidade";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['id']."'>".$row ['nome']."/".$row['estado']."</option>";
                }
                ?>
            </div>
        </form>
        <div class="btn-container">
            <a href="ListarCliente.php" class="btn btn-secondary">Consultar Clientes</a>
            <a href="index.html" class="btn btn-secondary">Voltar à página inicial</a>
        </div>
    </div>
</body>
</html>