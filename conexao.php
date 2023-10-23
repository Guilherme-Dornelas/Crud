<?php

        $servidor=  "localhost";
        $usuario=  "root";
        $senha=  "";
        $dbName = "cadastro";

        $conexao = new mysqli($servidor, $usuario, $senha, $dbName);

        if(!$conexao){
             die("houve um erro: " .mysqli_connect_error());
        }
       
?>