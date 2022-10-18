<?php 
    //Controller

    //DAO
    require_once 'dao/LoginAdmDao.php';
    $LoginAdmDao = new LoginAdmDao();

    //Model
    require_once 'model/LoginAdmModel.php';
    $LoginAdmModel = new LoginAdmModel();
    $LoginAdmModel->setNomeAdm($_POST['txtNome']);
    $LoginAdmModel->setSenhaAdm($_POST['passSenha']);
    // $LoginAdmDao::cadastrar($LoginAdmModel);

    
    //Verificando se a turma existe e criando ela
    if($LoginAdmDao->procurarNome($LoginAdmModel) and $LoginAdmDao->procurarSenha($LoginAdmModel)){
        echo '      <link rel="stylesheet" href="../css/styleLogin.css">
                    <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">

        <div class="container">
        <div class="buttons">
            <h2 id="value" >Logado com sucesso! Seja Bem-vindo Administrador(a)</h2>
                
        </div>
        <div class="posicao">
            <div class="login"><span><a href="../ADMscreen/Adm.php">Acessar Dashboard</a></span></div>
        </div>
        </div>';

    } else {
        echo '      <link rel="stylesheet" href="../css/styleLogin.css">
                    <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">

        <div class="container">
        <div class="buttons">
            <h2 id="value" >Conta inexistente! Verifique se o email ou senha estão corretos</h2>
        </div>
        <div class="posicao">
            <div class="voltar"><span><a href="../index.html">voltar</a></span></div>
            <div class="login"><span><a href="LoginAdm.php">Login Adm</a></span></div>
        </div>
        </div>';

    }
?>