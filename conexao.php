<?php

try {
    $pdo = new PDO("mysql: dbname=bd_cmedico;host=localhost", "root", "root");
} catch (Exception $e) {
    echo "Erro de conexão ao Banco de dados!" . $e;
}