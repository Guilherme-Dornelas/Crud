<?php

include("conexao.php");
if(isset($_GET['id'])){// verifica se existe alguma variavel variel id no get, esta variavel id contem os valores do usuario
    
$id = $_GET["id"];

$sql = "DELETE FROM `pessoas`  WHERE id = $id";

if ($conexao->query($sql) === TRUE) {
   header("Location: index.php");
   exit();
}else{
   echo "Erro" . $conexao->error;
}

}
?>