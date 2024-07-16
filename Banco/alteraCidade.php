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
            <legend>Alteração de Cidades</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
            </div>
            <div>
                <label for="estado">Estado</label>
                <select name="estado" id="estado">
                    <option value="AC" <?php echo $row['estado'] == "AC" ? "selected" : "" ?>>Acre</option>
                    <option value="AL" <?php echo $row['estado'] == "AL" ? "selected" : "" ?>>Alagoas</option>
                    <option value="AP" <?php echo $row['estado'] == "AP" ? "selected" : "" ?>>Amapá</option>
                    <option value="AM" <?php echo $row['estado'] == "AM" ? "selected" : "" ?>>Amazonas</option>
                    <option value="BA" <?php echo $row['estado'] == "BA" ? "selected" : "" ?>>Bahia</option>
                    <option value="ES" <?php echo $row['estado'] == "ES" ? "selected" : "" ?>>Espírito Santo</option>
                    <option value="GO" <?php echo $row['estado'] == "GO" ? "selected" : "" ?>>Goiás</option>
                    <option value="MA" <?php echo $row['estado'] == "MA" ? "selected" : "" ?>>Maranhão</option>
                    <option value="MT" <?php echo $row['estado'] == "MT" ? "selected" : "" ?>>Mato Grosso</option>
                    <option value="MS" <?php echo $row['estado'] == "MS" ? "selected" : "" ?>>Mato Grosso do Sul</option>
                    <option value="MG" <?php echo $row['estado'] == "MG" ? "selected" : "" ?>>Minas Gerais</option>
                    <option value="PA" <?php echo $row['estado'] == "PA" ? "selected" : "" ?>>Pará</option>
                    <option value="PB" <?php echo $row['estado'] == "PB" ? "selected" : "" ?>>Paraíba</option>
                    <option value="PR" <?php echo $row['estado'] == "PR" ? "selected" : "" ?>>Paraná</option>
                    <option value="PE" <?php echo $row['estado'] == "PE" ? "selected" : "" ?>>Pernambuco</option>
                    <option value="PI" <?php echo $row['estado'] == "PI" ? "selected" : "" ?>>Piauí</option>
                    <option value="RJ" <?php echo $row['estado'] == "RJ" ? "selected" : "" ?>>Rio de Janeiro</option>
                    <option value="RN" <?php echo $row['estado'] == "RN" ? "selected" : "" ?>>Rio Grande do Norte</option>
                    <option value="RS" <?php echo $row['estado'] == "RS" ? "selected" : "" ?>>Rio Grande do Sul</option>
                    <option value="RO" <?php echo $row['estado'] == "RO" ? "selected" : "" ?>>Rondônia</option>
                    <option value="RR" <?php echo $row['estado'] == "RR" ? "selected" : "" ?>>Roraima</option>
                    <option value="SC" <?php echo $row['estado'] == "SC" ? "selected" : "" ?>>Santa Catarina</option>
                    <option value="SP" <?php echo $row['estado'] == "SP" ? "selected" : "" ?>>São Paulo</option>
                    <option value="SE" <?php echo $row['estado'] == "SE" ? "selected" : "" ?>>Sergipe</option>
                    <option value="TO" <?php echo $row['estado'] == "TO" ? "selected" : "" ?>>Tocantins</option>
                    <option value="DF" <?php echo $row['estado'] == "DF" ? "selected" : "" ?>>Distrito Federal</option>
                </select>
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
