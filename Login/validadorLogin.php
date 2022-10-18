<?php 
    //Controller

    //DAO
    require_once 'dao/LoginClienteDao.php';
    $LoginDao = new LoginClienteDao();

    //Model
    require_once 'model/LoginClienteModel.php';
    $LoginModel = new LoginClienteModel();
    $LoginModel->setEmailCliente($_POST['boxEmail']);
    $LoginModel->setSenhaCliente($_POST['passSenha']);
    
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styleLogin.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação do Login:</title>
</head>
    <body>
<div class="container">
            <div class="buttons">
                <h2 id="value" ><?php //Verificando se a turma existe e criando ela
    if($LoginDao->procurarEmail($LoginModel) and $LoginDao->procurarSenha($LoginModel)){
        echo "Logado com sucesso!";
    } else{
        echo "Nenhuma conta encontrada!";
    }?></h2>
                    
            </div>
            <div class="posicao">
                <div class="voltar"><span><a href="../index.html">voltar</a></span></div>
                <div class="login"><span><a href="Login.php">login</a></span></div>
            </div>
</div>
    </body>
</html>