<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LOS_PEPE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="img/icons8-pizza-96.png" type="image/x-icon">
    <link rel="stylesheet" href="./perfil-div.css">
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

    <div class="perfil-div">

    <section class="atualizar" id="atualizar" >
        <?php include("./atualizar/atualizar.php"); ?>
    </section>

    <section class="historico" id="historico" >
        <?php include("./historico/historico.php"); ?>
    </section>
    </Div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
  </body>
</html>