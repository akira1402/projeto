<?php

$servidor = "127.0.0.1";

$usuario = "root";

$senha = "sebrae123";

$banco = "etec";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if (isset ($_GET['Nome'])){
    if($conexao->connect_error){
    echo "Não foi possivel conectar";
}else if (isset($_GET ['id_convidados']) && ($_GET['id_convidados'] != "")){
$id = $_GET['id_convidados'];
$sqlUpdate ="UPDATE tb_convidados SET nome='$_GET[Nome]', acompanhantes=$_GET[Acompanhantes] WHERE id_convidados ='$id'";
$conexao ->query($sqlUpdate);
$resultado =$conexao ->query("SELECT * FROM tb_convidados");
}else{ 
    $sqlgravar = "INSERT INTO tb_convidados(nome, acompanhantes) values ('$_GET[Nome]', $_GET[Acompanhantes])";
    $conexao -> query($sqlgravar);
    $resultado = $conexao -> query("SELECT * FROM  tb_convidados");

  }
}else{
    //$resultado = array();

    $resultado =  $conexao -> query("SELECT * FROM tb_convidados");

    }
  

//----------------------exemplo de mostrar resultado-------------
    //print_r($resultado >num_roms);
    //while($row = $resultado -> fetch_assoc())
    //{
    //printf("</br> <tr> <td>%s </td> </tr>", $row["Nome_convidado"], "</tables>");
    //$row["Acompanhates", "</tables>"]);
    //}


    //foreach($resultado as $convidado)
    //{
      //  echo "</br>", $convidado["Nome_convidado"];

    //}

?>