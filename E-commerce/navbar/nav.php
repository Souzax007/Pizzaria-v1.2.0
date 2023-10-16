
<?php 
include("msg.php");
?>
<link rel="stylesheet" href="/style.css">
<nav>
        <ul class="list-menu" >
        <li><a href="/index.php">Home</a></li>
        <li><a href="../index.php/#sobrenos">Sobre</a></li>
        <li><a href="../index.php/#Cardapio">Cardápio</a></li>
        <li><a href="../index.php/#contatos">Contatos</a></li>
        <li><a href="/pedido/pedido.php"><i class="bi bi-cart-plus"></i></a></li>
        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
        <li class="login-link">
        <a >
            <i class="bi bi-person-fill"></i>
            <div class="login-options">
                <a class="login-option" href="/perfil/perfil.php">login</a>
                <a class="login-option" href="/login/login.php">cadastrar</a>
            </div>
        </a>
    </li>
    <?php if ($resultado) {
    $linha = mysqli_fetch_assoc($resultado);
    if ($linha) {
        $nome_usuario = $linha['nome'];
        echo '<p style="color: green; font-size: 10px; margin-top: 20px; margin-left: 20px; ">Bem-vindo,' . $nome_usuario . '!</p>';
    } else {
        echo '<p style="color: red;">usuário-Offline</p>';
    }
    

    mysqli_free_result($resultado);
} else {
    echo "Erro na consulta: " . mysqli_error($conexao);
}
?>
        </ul>
</nav>