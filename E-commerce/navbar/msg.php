<?php
$host = "localhost";
$usuario = "root";
$senha = "linuxville";
$banco_de_dados = "cadastro";

$conexao = mysqli_connect($host, $usuario, $senha, $banco_de_dados);

if (!$conexao) {
    die("Falha na conexão ao MySQL: " . mysqli_connect_error());
}

// Supondo que você tenha um ID de usuário específico que deseja buscar
$usuario_id = 1; // Substitua pelo ID do usuário desejado

$query = "SELECT nome FROM registrados WHERE id = $usuario_id"; // Substitua 'sua_tabela' e 'id' pelo nome da sua tabela e campo de ID

$resultado = mysqli_query($conexao, $query);

mysqli_close($conexao);
?>