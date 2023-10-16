<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LOS_PEPE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="img/icons8-pizza-96.png" type="image/x-icon">
  </head>
  <body>
    <header class="content" >
      <div class="logo" >
        <img src="/img/logo.png" alt="logo">
        <h3>LOS_PEPE</h3>
      </div>
      <nav>
        <?php include("./navbar/nav.php")?>
      </nav>
     <div class="menu-toggle">
      <div class="one"></div>
      <div class="two"></div>
      <div class="three"></div>
     </div>
    </header>

    <section class="first-section" id="Home" >
     <?php include("./home/home.php")?>
    </section>
    <section class="sobre-nos" id="sobrenos" >
      <?php include("./sobre/sobre.php")?>
    </section>
    <section class="Cardapio" id="Cardapio" >
      <?php include("./pizzas/pizza.php")?>
    </section>

    <section class="contatos" id="contatos">
         <?php include("./contatos/contato.php")?>
    </section>

    <footer class="footer" > 
      <h4 class="scrolling-text">
        Desenvolvido por -> Marcos
      </h4>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
  </body>
</html>
