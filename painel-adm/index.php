<?php
$notificacoes = 554;

//VARIÁVEID DOS MENUS
$item1 = 'home';
$item2 = 'medico';
$item3 = 'funcionarios';
$item4 = 'notificacoes';

//VERIFICAR QUAL O MENU CLICADO ATUAL E PASSA A CLASSE COMO ATIVO E FICAR SELECIONADO O CAMPO DO MENU
if (@$_GET['acao'] == $item1) {
    $item1ativo = 'active';
} elseif (@$_GET['acao'] == $item2 or isset($_GET[$item2])){
    $item2ativo = 'active';
} elseif (@$_GET['acao'] == $item3) {
    $item3ativo = 'active';
} elseif (@$_GET['acao'] == $item4) {
    $item4ativo = 'active';
} else {
    $item1ativo = 'active';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../css/painel.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicon/favicon.ico" type="image/x-icon">
    <title>Chamador - Administrativo</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark" id="menu">
        <div class="col-md-12">
            <img src="../img/logo/logo-menu.png" alt="logo" class="float-left">
            <li class="float-right nav-item dropdown">
                <a class="nav-link dropdown-toggle float-right" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Paulo Albuquerque
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item float-right" id="black" href="#">Sair</a>
                </div>
            </li>
        </div>
    </nav>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link <?php echo $item1ativo ?>" id="v-pills-home-tab" href="index.php?acao=<?php echo $item1 ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-tachometer-alt mr-2"></i>Home</a>
                    <a class="nav-link <?php echo $item2ativo ?>" id="v-pills-medico-tab" href="index.php?acao=<?php echo $item2 ?>" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-user-md mr-2"></i></i>Cadastro de Médico</a>
                    <a class="nav-link <?php echo $item3ativo ?>" id="v-pills-messages-tab" href="index.php?acao=<?php echo $item3 ?>" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-user-nurse mr-2"></i>Cadastro de Funcionários</a>
                    <?php if ($notificacoes > 0) {
                    ?>
                        <a class="nav-link <?php echo $item4ativo ?>" id="v-pills-notifications-tab" href="index.php?acao=<?php echo $item4 ?>" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments"></i> Notificações <span class="badge badge-dark float-right"><?php echo $notificacoes; ?></span></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" role="tabpanel">
                        <?php
                        if (@$_GET['acao'] == $item1) {
                            include_once $item1 . ".php";
                        } elseif (@$_GET['acao'] == $item2 or isset($_GET[$item2])) {
                            include_once $item2 . ".php";
                        } elseif (@$_GET['acao'] == $item3) {
                            include_once $item3 . ".php";
                        } elseif (@$_GET['acao'] == $item4) {
                            include_once $item4 . ".php";
                        } else {
                            include_once $item1 . ".php";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e7b4566ef7.js" crossorigin="anonymous"></script>

</html>