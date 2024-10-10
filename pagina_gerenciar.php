<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    include "conexao.php";
    //primeiro passo -> comando sql 
    $sql = "SELECT * FROM tb_inventarios";

    //segundo passo -> preparar a conexão
    $consultar = $pdo->prepare($sql);

    //terceiro passo -> tentar executar e mostrar na página
    try{
        $consultar->execute();
        $resultados = $consultar->fetchALL(PDO::FETCH_ASSOC);
        foreach($resultados as $item){
            $codigo = $item["codigo"];
            $descricao = $item["descricao"];
            $setor = $item["setor"];
            $categoria = $item["categoria"];

            echo "
    
                <div class='cartoes'>
                    <h1> Nº $codigo </h1> <br>
                    <p> $descricao </p>
                    <p> Setor: $setor </p>
                    <p> Categoria: $categoria </p>

                    <a href='pagina_editar.php?cod=$codigo'>
                        <button> ✍️ Editar </button>
                    </a> 

                    <a href='confirmar_deletar.php?cod=$codigo'>
                        <button> 🗑️ Deletar</button>
                    </a>
                </div>
            ";
        }
    }catch(PDOException $erro){
        echo "Falha ao consultar" . $erro->getMessage();
    }
    
    ?>
</body>
</html>