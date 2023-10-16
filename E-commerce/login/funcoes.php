<?php
include("conexao.php");
/////////////////////////cadastro de usuario/////////////////////////////////

// Verifica se o formulário foi enviado
if(isset($_POST['finalizar'])) {
    try {
        // Dados a serem inseridos
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        
        // Conexão com o banco de dados (substitua pelas suas informações de conexão)
        $conexao = mysqli_connect("localhost", "root", "linuxville", "cadastro");
        
        // Verifica a conexão
        if (mysqli_connect_errno()) {
            die("Falha na conexão ao MySQL: " . mysqli_connect_error());
        }
        
        // Consulta SQL para inserir os dados
        $sql = "INSERT INTO registrados (nome, email, telefone, endereco, cidade) VALUES (?, ?, ?, ?, ?)";
        
        // Prepara a consulta
        $stmt = mysqli_prepare($conexao, $sql);
        
        // Vincula os parâmetros com os valores
        mysqli_stmt_bind_param($stmt, "sssss", $nome, $email, $telefone, $endereco, $cidade);
        
        // Executa a consulta
        if (mysqli_stmt_execute($stmt)) {

            // Recuperar o último ID criado
            $ultimo_id = $stmt->insert_id;            

            //SESSÃO ID
            $_SESSION['ss_id'] = $ultimo_id;

            //SESSÃO NOME
            $_SESSION['ss_nome'] = $nome;

            //SESSÃO E-MAIL
            $_SESSION['ss_email'] = $email;

            // Redireciona para a página index.php após a inserção bem-sucedidaail
            header("Location:../index.php");
            exit();
        } else {
            echo "Erro na inserção de dados: " . mysqli_error($conexao);
        }
        
        // Fecha a conexão
        mysqli_close($conexao);
    } catch (Exception $e) {
        echo "Erro na inserção de dados: " . $e->getMessage();
    }
}
?>

