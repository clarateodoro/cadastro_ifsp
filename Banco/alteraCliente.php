<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Cidade</title>
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
            color: #c0392b; /* Vermelho escuro para o título */
            margin-top: 20px;
        }

        /* Estilo para o formulário */
        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='6' viewBox='0 0 12 6' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 0l5.5 5L12 0H1z' fill='%23000' fill-rule='evenodd'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 10px top 50%;
            background-size: 12px auto;
        }

        button[type="submit"] {
            background-color: #6b3; /* Verde escuro */
            color: white;
            border: none;
            padding: 12px 20px;
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
    <form action="AlteraCidadeExe.php" method="post">
        <fieldset>
            <legend>Alteração de Clientes</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" email="email" id="email" value="<?php echo $row['email']?>">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="text" senha="senha" id="senha" value="<?php echo $row['senha']?>">
            </div>
           
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div>
                <button type="submit">Alterar</button>
            </div>
        </fieldset>
    </form>
    <form action="index.html" method="get">
        <button type="submit">Voltar para a Página Inicial</button>
    </form>
</body>
</html>
