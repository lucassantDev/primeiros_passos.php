<?php

include 'conexao.php';
$codigo=$_GET['cod'];


#1º comando SQL
$sql = "DELETE FROM tb_inventarios
        where codigo='$codigo'";

#2º preparar conexao
$deletar = $pdo->prepare($sql);


#3º tentar execução
try{
    $deletar-> execute();
    echo "Deletado com sucesso";
    echo 
    "
     <br> <a href='pagina_gerenciar.php'> Voltar </a>
    ";
}catch(PDOException $erro){
    echo "Falha ao deletar" . $erro->getMessage();

}


?>