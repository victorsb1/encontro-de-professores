<html>
    <head>
        <title>Login</title>
        <script type="text/jscript" src="../js/jquery-min.js"></script>
        <script type="text/jscript" src="../js/script.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>
<header>
<nav class="nav">
  <div class="col">
      <img class="logo-header-peq" src="../img/logo-sigev.svg">
  </div>
  <div class="form-inline col-md5">
  <a class="nav-link" href="../datas.php"><b>Datas Importantes</b></a>
  <a class="nav-link" href="../apresentacao-v.php"><b>Formas de Apresentação</b></a>
  <a class="nav-link" href="login.php"><b>Inscrição</b></a>
  <a class="nav-link" href="../programacao.php"><b>Programação</b></a>
  <a class="nav-link" href="../organizacao.php"><b>Organização</b></a>
  </div>
</nav>
</header>
<div class="evento">
    <img src="../img/cefet-estagio_1.svg" class="logo-encontro">
    <h5 class="branco">VALORIZANDO PRÁTICAS PEDAGÓGICAS POSITIVAS DE PROMOÇÃO DO LETRAMENTO LITERÁRIO</h5>
</div>
<section class="container">
    <form id="form-login" method="POST" action="login-processa.php">
        <h1>Fazer Login</h1>
       <div class="form-group">
        <input type="user" name="user" class="form-control" placeholder="Nome de Usuário" required size="20">
        <input type="password" name="senha" class="form-control" placeholder="Senha" required size="20">
       </div>
       <div class="form-group">
           <input type="text" name="tipo" value="1" hidden>
           <button type="submit" class="btn btn-primary">Entrar</button>
       </div>
       <a href="cadastrar.php">Cadastrar-se</a>
    </form>
</section>
</body>
</html>
<!--alvaliação pos evento-->