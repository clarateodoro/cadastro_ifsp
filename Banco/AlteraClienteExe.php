<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Cliente</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            background-color: lightgreen; 
            color: #c039; 
            margin: 0;
            padding: 0;
            text-align: center; 
        }

        h1 {
            color: #c039;
            margin-top: 20px;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        /* Mensagem de sucesso */
        .success {
            color: darkgreen; 
            font-weight: bold;
        }

        /* Mensagem de erro */
        .error {
            color: #c039; /* Vermelho escuro para mensagens de erro */
            font-weight: bold;
        }

        /* Estilo para o botão */
        button[type="submit"] {
            background-color: darkgreen; 
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        button[type="submit"]:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>
    <h1>Alteração de cliente</h1>
    <?php
        echo "<p>Id: $id</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $emial</p>";
        $sql = "UPDATE cidade SET nome = '$nome', email = '$email' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<p class='success'>Dados atualizados!</p>";
        } else {
            echo "<p class='error'>Erro ao atualizar dados!<br>" . mysqli_error($con) . "</p>";
        }
    ?>
    <form action="index.html" method="get">
        <button type="submit">Voltar para página inicial</button>
    </form>
</body>
</html>
