<?php
 include('conexao.php');
$result = $conexao->query("SELECT * FROM pessoas");

$lista = ''; 

while ($cliente = $result->fetch_assoc()) {
    $lista .= '
    <tr>
        <td>' . $cliente['id'] . '</td>
        <td>' . $cliente['nome'] . '</td>
        <td style="padding-left: 40px;">' . $cliente['data_nasc'] . '</td>
        <td>' . $cliente['email'] . '</td>
        <td style="padding-left: 40px;">' . $cliente['telefone'] . '</td>
        
        <td style="display: flex; gap:10px;"><a href="editar-page.php?id='.$cliente["id"].'"  class="btnEdit" title="Editar" style="display: flex; align-items: center; justify-content: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"  class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg></a>    
        
        
        <a href="excluir-code.php?id='.$cliente["id"].'" class="btnEXIT" style="display: flex; align-items: center; justify-content: center;" title="Apagar" >
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="red" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
        </svg>
        </a>  </td>
    </tr>';
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/tabela.css"> 
     <link rel="icon" href="https://pbs.twimg.com/profile_images/580421045859024896/7mnZPHsS_400x400.png">

    <title>Tela de Contato</title>
</head>
<body>

    <form id="Form" action="cadastro.php" method="post">
        
        <div class="container-titulo">
            <img src="https://pbs.twimg.com/profile_images/580421045859024896/7mnZPHsS_400x400.png" alt="logo da empresa AlphaCode">
            <h1>Cadastro de contato</h1>
        </div>

        <div class="container1">

            <div class="container2">


         <div class="container-input1">
                <div class="div-input">
                                <label for="username">Nome completo</label>
                                <input type="text" name="Name" id="username" placeholder="Digite seu Nome completo" required>
              </div>

            <div class="div-input">
                                    <label for="email" class="label-name">E-mail</label>
                                    <input type="email" name="email" id="email" placeholder="Digite seu E-mail" autocomplete="email">
            </div>

            <div class="div-input">
                                <label for="Telefone" class="label-name">Telefone para contato</label>
                                <input type="tel" name="Telefone" id="Telefone">
             </div>

             <div class="container-check">
                <div class="div-check">
                    <input type="checkbox" name="check" id="check">
                    <label for="check">Número de celular possui Whatsapp</label>
                     
                </div>
               
                <div class="div-check">
                     <input type="checkbox" name="SMS" id="SMS">
                    <label for="SMS">Enviar notificações por SMS</label>
                </div>
               
             </div><!--fim da conteiner-check-->

            </div> <!-- fim da conteiner input1-->

            <div class="conteiner-input2">

                <div class="div-input">
                    <label for="date" class="label-name">Data de nascimento</label>
                    <input type="date" name="data-nascimento" id="date" placeholder="Digite sua data de nascimento">
                </div>

                <div class="div-input">
                    <label for="profissao" class="label-name">Profissão</label>
                    <input type="text" name="profissao" id="profissao" placeholder="Digite sua Profissão">
                </div>
                <div class="div-input">
                    <label for="cel-contato" class="label-name">Celular para contato</label>
                    <input type="tel" name="celular" id="cel-contato" placeholder="Digite seu contato">
                </div>

                  <div class="div-check">
                        <input type="checkbox" name="check-email" id="check-email">
                        <label for="check-email">Enviar notificações por E-mail</label>
                </div>

                
            </div><!--fim da conteiner-input 2-->


            </div> <!--fim da conteiner das inputs-->

           <div class="container-button">
                <button class="btn btn-primary" type="submit" value="Enviar">Cadastrar Contato</button>
           </div>
                
        </div><!--fim da conteiner 1-->

        <div style="padding: 5px;  width: 850px auto; heigth:auto; margin-top: 100px;">
             <table class="table  table-hover table-bordered" border="2">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>E-mail</th>
                    <th>Celular para contato</th>
                    <th>Ações</th> 
                </tr>
            </thead>
            <tbody  id="contact-list">
                 <?php echo $lista?>              
            </tbody>
        </table>
        </div>
       

        <footer>
            <div>
                <h1>Termos | Políticas</h1>
            </div>

            <div class="devAlpha" style=" width: 100px auto; height: 30px auto;">
                <h1>© Copyright 2022 | Desenvolvido por</h1>
                 <img style="width:50px; height:50px;" src="https://pbs.twimg.com/profile_images/580421045859024896/7mnZPHsS_400x400.png" alt="roda pe da AlphaCode">
                 <h1>Alphacode</h1>
            </div>

            <div>
                <h1>©Alphacode IT Solutions 2022</h1>
            </div>
        </footer> 
    </form>
 
    <script src="js/script.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>