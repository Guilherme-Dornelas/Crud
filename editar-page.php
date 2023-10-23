<?php
include("conexao.php");

if(isset($_GET['id'])){
    $Result = $conexao->query("SELECT * FROM pessoas WHERE id =" .$_GET['id']);
    $consult = $Result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form-edit.css">
    <link rel="icon" href="https://pbs.twimg.com/profile_images/580421045859024896/7mnZPHsS_400x400.png">
    <title>Editar DADOS</title>
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="index.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" title="Voltar" class="primary-color" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
             <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
    </svg>
</a></li>
            
        </ul>
    </nav>
</header>
<form action="edit-cod.php" method="post">
    <div style="width:100%; heigth:auto;">
        <div style="display: flex; justify-content: center; align-items: center;">
            <!-- <img style="width: 50px; heigth: 50px; margin-left:10px;" src="https://pbs.twimg.com/profile_images/580421045859024896/7mnZPHsS_400x400.png" alt="logo alphacode"> -->
            <img style="width: 200px; heigth: 50px;" src="https://site.alphacode.com.br/wp-content/uploads/2015/10/logocolor.png" alt="logo alphacode">
        </div>
    </div><br>

<div style=" width: auto; margin-left: 50px;">
    <div>
        <label class="form-label">Novo nome</label>
        <input type="text" value="<?php echo  $consult["nome"]?>" name="nome" id="nome" class="form-control"><br>
    </div>
   
    <div>
        <label  class="form-label">Nova data</label>
        <input type="date" value="<?php echo  $consult['data_nasc']?>" name="data-nasc" id="data-nasc" class="form-control"><br>
    </div>
    
    <div>
          <label class="form-label">Novo E-mail</label>
          <input type="email" value="<?php echo   $consult['email']?>" name="email" id="email" class="form-control"><br>
    </div>
  
    <div>
        <label class="form-label">Novo telefone</label>
        <input type="tel" value="<?php echo   $consult['telefone']?>" name="telefone" id="telefone" class="form-control"><br>
    </div>
</div><!--fim do codigo-->
   
  
    <input type="hidden" name="id" value="<?php echo  $consult['id']?>"><!--o erro pode estar aqui!-->
    <button type="submit" class="btn btn-primary" style="width: 320px; margin-left:40px;">Editar</button><br>
</form>
</body>
</html>