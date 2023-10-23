<?php
include("conexao.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $data = $_POST["data-nasc"];
    $email = $_POST["email"];
    $telefone= $_POST["telefone"];

     $sql = "UPDATE `pessoas` SET `nome` = '$nome', `data_nasc` = '$data', `email` = '$email', `telefone` = '$telefone' WHERE id = $id";// acao de atualizar os dados da tebela.

     if ($conexao->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
     }else{
        echo "Erro" . $conexao->error;
     }

}
?>