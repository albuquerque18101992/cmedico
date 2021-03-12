<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <title>Chamador Médico</title>
</head>

<body>
    <div class="login-form">
        <form method="POST" action="autenticar.php">
            <div class="logo">
                <img src="img/logo/logo-menu.png" alt="logo">
            </div>
            <h2 class="text-center">Login do Sistema</h2>
            <div class="form-group">
                <input class="form-control" id="login" type="text" name="usuario" placeholder="Insira seu Usuário" required autocomplete="off">
            </div>
            <div class="form-group">
                <input class="form-control" id="login" type="password" name="senha" placeholder="Insira sua Senha" required>
            </div>
            <div class="form-group">
                <button class="form-control btn btn-primary btn-lg" id="login" type="submit" name="btn-login">Login</button>
            </div>
            <div class="clearfix">
                <label class="checkbox-inline">
                    <input type="checkbox">
                    Lembrar-me
                </label>
                <a href="#">Recuperar Senha</a>
            </div>
        </form>
    </div>
</body>

</html>