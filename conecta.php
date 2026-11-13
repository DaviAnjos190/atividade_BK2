<?php
$host = "sql211.infinityfree.com";
$banco = "if0_43414576_BK2escola";
$usuario = "if0_43414576";
$senha = "Davi19032010";
$conexao = new mysqli($host, $usuario, $senha, $banco);
if ($conexao->connect_error) {
die("Erro na conexão: " . $conexao->connect_error);
}
$conexao->set_charset("utf8mb4");
?>