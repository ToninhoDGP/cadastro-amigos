<?php
$host = "127.0.0.1";
$usuario = "root";
$senha = "";
$banco = "sistema_amigos";
$porta = 3307;

try {
    $conn = new mysqli($host, $usuario, $senha, $banco, $porta);
} catch (Exception $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>