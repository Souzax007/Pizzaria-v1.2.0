
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pedido</title>
    <link rel="stylesheet" href="/pedido/style.css">
    <link rel="stylesheet" href="/style.css">
    <script src="funcoes.js" ></script>
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
    <div class="janela">

      <div class="janela_px">

      <div class="pedido_caixa">
        <div class="pedido">
          <h3>Pizza Gigante <span>(16 FATIAS)</span> </h3>
          <p>Calabresa, Alho e Óleo, Portuguesa, Chocolate - Adic. Maionese, Bacon, Ovo</p>
          <p class="valor" >R$ 30,00</p>
        </div>
        <div class="funcao">
          <button onclick="diminuirValor('quantidade1')">-</button>  
            <input type="text" id="quantidade1" value="0">
          <button onclick="aumentarValor('quantidade1')">+</button>
        </div>
      </div>

      <div class="pedido_caixa">
        <div class="pedido">
          <h3>Pizza Gigante <span>(16 FATIAS)</span> </h3>
          <p>Calabresa, Alho e Óleo, Portuguesa, Chocolate - Adic. Maionese, Bacon, Ovo</p>
          <p class="valor" >R$ 30,00</p>
        </div>
        <div class="funcao">
          <button onclick="diminuirValor('quantidade2')">-</button>  
            <input type="text" id="quantidade2" value="0">
          <button onclick="aumentarValor('quantidade2')">+</button>
        </div>
      </div>      

      

      </div> 

      <button class="finalizar" >Finalizar</button>
    </div>
        
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
  </body>
</html>