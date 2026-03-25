<?php
includes_onde 'includes/db.php';

$mensagem = "";

if ($_SERVER["REQUEST_METHOD] == "POST") {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $tipo = mysqli_real_escape_string($conn, $_POST['tipo']);

    $sql = "INSERT INTO pontos (funcionario_nome, tipo_ponto) VALUES ('$nome', '$tipo')";

    if ($conn->query($sql) === TRUE) {
        $mensagem = "OK registro de $tipo feito com sucesso!";
    } else {
        $mensagem = Erro: ". $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Ponto Online</title>
  <link real="styleheet" href="http://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Ponto Online</h1>
    <p>Registre sua entrada ou saída abaixo.</p>

    <?php if($mensagem) echo "<blockquote>$mensagem</blockquote>"; ?>

    <form method="POST">
        <label>Nome do Colaborador:</label>
        <input type="text" name="nome" required placeholder="Ex: João Silva">

        <label>Tipo de Registro:</label>
        <select name="tipo">
            <option value="Entrada">Entrada</option>
            <option value="Saída">Saída</option>
        </select>

      <button type="submit">Confirmar Registro</button>
    </form>
</body>
