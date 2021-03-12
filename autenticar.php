<?php
require_once("conexao.php");
@session_start();

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header("location:index.php");
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$res = $pdo->prepare("SELECT * from adms_usuarios where usuario = :usuario and senha = :senha");

$res->bindValue(":usuario", $usuario);
$res->bindValue(":senha", $senha);
$res->execute();

$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);



if ($linhas > 0) {
    header("location:painel-adm/index.php");
} else {
    echo "<script language='javascript'>window.alert('Dados incorretors!!');</script>";
    echo "<script language='javascript'>window.location='index.php';</script>";
}