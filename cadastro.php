<?php
include("conexao.php");

$nome = isset($_POST["Name"]) ? $_POST["Name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$telefone = isset($_POST["Telefone"]) ? $_POST["Telefone"] : "";
$profissao = isset($_POST["profissao"]) ? $_POST["profissao"] : "";
$nascimento = isset($_POST["data-nascimento"]) ? $_POST["data-nascimento"] : "";

$sql = "INSERT INTO pessoas (nome, email, data_nasc, telefone) VALUES ('$nome','$email','$nascimento','$telefone')";

if (mysqli_query($conexao, $sql)) {
       header('Location: index.php');
       exit();
} else {
    echo "Erro: " . mysqli_error($conexao);
}


mysqli_close($conexao);


?>