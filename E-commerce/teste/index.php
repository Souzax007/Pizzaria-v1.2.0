<!DOCTYPE html>
<html>
<head>
    <title>Página de Boas-Vindas</title>
</head>
<body>
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

if ($resultado) {
    $linha = mysqli_fetch_assoc($resultado);
    if ($linha) {
        $nome_usuario = $linha['nome'];
        echo "<h1>Bem-vindo, $nome_usuario!</h1>";
    } else {
        echo "<p>usuário-Offline</p>";
    }

    mysqli_free_result($resultado);
} else {
    echo "Erro na consulta: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
</body>
</html>
