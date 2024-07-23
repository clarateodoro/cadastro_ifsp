<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Clientes</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #6b3; /* Verde escuro */
            margin-top: 20px;
        }

        /* Estilo para o link 'Cadastrar Nova Cidade' */
        a.button {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #6b3; /* Verde escuro */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        a.button:hover {
            background-color: #4a2; /* Verde mais escuro */
        }

        /* Estilo para a tabela */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #6b3; /* Verde escuro */
            color: white;
        }

        /* Estilo para os links de Alterar e Deletar */
        td a {
            display: inline-block;
            padding: 5px 10px;
            color: #6b3; /* Verde escuro */
            text-decoration: none;
            border: 1px solid #6b3;
            border-radius: 3px;
        }

        td a:hover {
            background-color: #4a2; /* Verde mais escuro */
            border-color: #4a2;
            color: white;
        }

        /* Estilo para o link de voltar */
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #6b3; /* Verde escuro */
            text-decoration: none;
        }

        .back-link:hover {
            color: #4a2; /* Verde mais escuro */
        }
    </style>
</head>
<body>
    <h1>Consulta de Cliente</h1>
    <a href="CadastroCliente.html" class="button">Cadastrar Novo Cliente</a>
    <table align="center" border="1" width="80%">
        <tr>
            <th style="background-color: #6b3; color: white;">Email</th>
            <th style="background-color: #6b3; color: white;">Nome</th>
            <th style="background-color: #6b3; color: white;">Senha</th>
            <th style="background-color: #6b3; color: white;">Ativo</th>
            <th style="background-color: #6b3; color: white;">Alterar</th>
            <th style="background-color: #6b3; color: white;">Deletar</th>
        </tr>
        
    </table>
    <a href="index.html" class="back-link">Voltar para a Página Inicial</a>
</body>
</html>
