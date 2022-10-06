<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = 'sebrae123';
$banco = 'etec';

$conexao = new mysqli($servidor,$usuario,$senha,$banco);
if($conexao->connect_error){
    echo "Não possível conectar";
}else{        
    
    $id = $_GET ['id'];
    $sqlGravar = "DELETE FROM tb_convidados WHERE id_convidados = {$id}";
    $conexao->query($sqlGravar);
    header('Location:convidados.php');

   
}
?>