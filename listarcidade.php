<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('include/conexao.php');
    $sql = "SELECT * FROM cidade";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    ?>
    <h1>Consulta cidade</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['estado']."</td>";
            echo "</tr>";    
        }
        ?>
        <div>
        <a href="index.html" class="button">voltar</a>
        </div>
    </table>
</body>
</html>