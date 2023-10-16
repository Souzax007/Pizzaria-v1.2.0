<?php
include("funcoes.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/login/style.css">    
  </head>
<body>
<header class="content" >
      <div class="logo" >
        <img src="/img/logo.png" alt="logo">
        <h3>LOS_PEPE</h3>
      </div>
      <nav>
        <?php include("../navbar/nav.php")?>
      </nav>
     <div class="menu-toggle">
      <div class="one"></div>
      <div class="two"></div>
      <div class="three"></div>
     </div>
    </header>

    <section class="first-section" id="Home" >
     <?php include("./home/home.php")?>
     <form class="row g-3" method="POST" >
     <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputEmail4"  name="nome" placeholder="Ex: João da Silva" required >
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Ex: João@gmail.com" required >
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Telefone</label>
    <input type="number" class="form-control" id="inputEmail4" name="telefone"  placeholder="Ex: (00)000000000" required >
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" name="endereco"  placeholder="R: Lugar nem um,0000" required >
  </div>
  <div class="col-md-12">
    <label for="inputCity" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="inputCity" name="cidade"  placeholder="Ex: Joinville" required >
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="finalizar" >Cadastrar</button>
  </div>
</form>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
