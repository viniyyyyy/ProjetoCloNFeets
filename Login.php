<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/styleLogin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">

        <title>Login Clinete:</title>
    </head>
    <body>
    <div class="container">
            <div class="buttons">
                <h2 id="value" >Login:</h2>
                    <form method="post" action="validadorLogin.php">
                        <label for="boxEmail">Email:</label>
                        <input type="email" name="boxEmail" id="boxEmail" required></span>
                        <label for="passSenha">Senha:</label>
                        <input type="password" name="passSenha" id="passSenha" required>
                        <button type="submit" value="Cadastrar" id="cadastrar">Login</button>
                    </form>
            </div>
            <div class="voltar"><span><a href="../index.html">voltar</a></span></div>
    </div>
    </body>
</html>