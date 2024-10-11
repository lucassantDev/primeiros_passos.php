<?php
include 'conexao.php';
$codigo = $_POST['codigo'];
$desc = $_POST['descricao_digitada'];
$setor = $_POST['setor_escolhido'];
$cat = $_POST['categoria_digitada'];

# primeiro passo - comando sql
$sql = "UPDATE tb_inventarios SET
        descricao='$desc', setor='$setor',
        categoria='$cat' WHERE codigo='$codigo' ";

# segundo passo - prepara conexão
$atualizar = $pdo->prepare($sql);


# terceiro passo - tentar executar
try{
    $atualizar->execute();
    echo "Atualizado com sucesso";
    echo "<br> <a href='pagina_gerenciar.php'> Voltar </a>";

}catch(PDOException $erro){

    echo 'Falha ao atualizar' . $erro -> getMessage();
}

?>