<?php

include "conexao.php";
$desc = $_POST["descricao_digitada"] ;
$setor = $_POST["setor_escolhido"];
$cat = $_POST["categoria_digitada"];



// primeiro passo -> 
$sql = "INSERT INTO tb_inventarios
        (descricao, setor, categoria) VALUE
        ('$desc', '$setor', '$cat')";


// segundo passo -> Preparar a conexão
$inserir = $pdo->prepare($sql);


// terceiro passo -> Tentar executar

try{
    $inserir->execute();
    header("Location: index.php?mensagem1=OK");

}catch(PDOException $erro){
    echo "Falha ao inserir" . $erro->getMessage();
}

?>