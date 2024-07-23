<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; /* Fundo cinza claro */
            color: #333; /* Texto preto */
            margin: 0;
            padding: 0;
            text-align: center; /* Centraliza o conteúdo */
        }

        h1 {
            color: #6b3; /* Verde escuro para o título */
            margin-top: 20px;
        }

        h2 {
            color: #6b3; /* Verde escuro para mensagens de sucesso */
        }

        /* Estilo para mensagem de erro */
        h2.error {
            color: #c0392b; /* Vermelho escuro para mensagens de erro */
        }

        /* Estilo para o botão */
        button[type="submit"] {
            background-color: #6b3; /* Verde escuro */
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
            background-color: #4a2; /* Verde mais escuro no hover */
        }
    </style>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $ativo = $_POST['ativo'];
        $cidade = $_POST['cidade'];
        echo "<h1>Dados do cliente</h1>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";

        $sql = "INSERT INTO cliente (nome, email)";
        $sql .= " VALUES ('$nome', '$estado')";
        $result = mysqli_query($con, $sql);

        if($result){
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        } else {
            echo "<h2 class='error'>Erro ao cadastrar</h2>";
            echo "<h2 class='error'>" . mysqli_error($con) . "</h2>";
        }
    ?>
    <form action="index.html" method="get">
        <button type="submit">Voltar para página inicial</button>
    </form>
</body>
</html>
