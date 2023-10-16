<?php
// Informações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "linuxville";
$dbname = "cadastro";

// Crie uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Suponha que você tenha o ID do usuário após o login (substitua 1 pelo ID do usuário logado)
$idDoUsuarioLogado = 1;

// Consulta SQL para obter informações do usuário com base no ID
$sql = "SELECT nome, email, telefone, endereco, cidade FROM registrados WHERE id = $idDoUsuarioLogado";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Recupere os dados do usuário
    $row = $result->fetch_assoc();
    $nomeDoBancoDeDados = $row["nome"];
    $emailDoBancoDeDados = $row["email"];
    $telefoneDoBancoDeDados = $row["telefone"];
    $enderecoDoBancoDeDados = $row["endereco"];
    $cidadeDoBancoDeDados = $row["cidade"];
} else {
    echo "Usuário não encontrado";
}

// Feche a conexão com o banco de dados
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
  <div class="update">
    <h3>INFORMAÇÕES</h3>
  </div>

  <div class="atualização">
    <form class="row g-3" method="POST" >
      <div class="up-perfil">
        <label for="inputEmail4" class="form-label">Nome</label>
        <input type="text" class="up-input" id="inputEmail4" name="nome" placeholder="Ex: João da Silva" value="<?php echo $nomeDoBancoDeDados; ?>" required >
      </div>
      <div class="up-perfil">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="up-input" id="inputEmail4" name="email" placeholder="Ex: João@gmail.com" value="<?php echo $emailDoBancoDeDados; ?>" required >
      </div>
      <div class="up-perfil">
        <label for="inputEmail4" class="form-label">Telefone</label>
        <input type="text" class="up-input" id="inputEmail4" name="telefone"  placeholder="Ex: (00)000000000" value="<?php echo $telefoneDoBancoDeDados; ?>" required >
      </div>
      <div class="up-perfil">
        <label for="inputAddress" class="form-label">Endereço</label>
        <input type="text" class="up-input" id="inputAddress" name="endereco" placeholder="R: Lugar nem um,0000" value="<?php echo $enderecoDoBancoDeDados; ?>" required >
      </div>
      <div class="up-perfil">
        <label for "inputCity" class="form-label">Cidade</label>
        <input type="text" class="up-input" id="inputCity" name="cidade" placeholder="Ex: Joinville" value="<?php echo $cidadeDoBancoDeDados; ?>" required >
      </div>
      <div class="col-12">
        <button type="submit" class="btn-sla" name="finalizar">Atualizar</button>
      </div>
    </form>
  </div>
</body>
</html>
