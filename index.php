<?php
//isset = verificar se existe algum elemento
if(isset($_GET ['mensagem1'])){
    echo "
        <script>
            alert('Cadastrado com sucesso');
        </script>
        ";
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="pagina_cadastrar.php">Cadastrar item</a> <br><br>
    <a href="pagina_gerenciar.php">Gerenciar item</a> <br><br>
</body>
</html>