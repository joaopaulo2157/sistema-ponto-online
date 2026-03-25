<?php
//Copnfiguração de conexão
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema_ponto";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
  die("Erro de Conexão: " . $conn->connect_error);
}
?>
