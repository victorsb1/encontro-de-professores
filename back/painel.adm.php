<?php
include_once("banco.php");
session_start();
$tipo = $_SESSION['tipo'];

if(!isset($_SESSION['tipo']) && tipo != '2'){
    echo "Acesso negado";
    header('Location: login.php');
} else{
    //
}

?>
<html>
    <head>
        <title>Painel do Adm</title>
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
<a href="../index.php" class="btn btn-primary">Pagina Inicial</a>
<a href="sair.php" class="btn btn-danger">Sair</a>
<h1>Trabalhos Cadastrados</h1>
<table class="table">
   <thead>   
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Tipo</th>
        <th>Situação</th>
        <th>Gerenciar</th>
    </tr>
   </thead>
   <tbody>
      <tr>   
       <?php
          $id = $_SESSION['id_usuario'];
              
          $recebe = buscar_apresentacao($conexao);
          foreach($recebe as $vai):
       ?>
        <td><?php echo $vai['id_trabalho']; ?></td>
        <td><?php echo $vai['titulo']; ?></td>
        <td><?php if($vai['tipo'] == 0){ echo "Trabalho(Poster)";} else{ echo "Oficina"; } ?></td>
        <td><?php echo $vai['status']; ?></td>
        <td><a href="mais.php?id=<?php echo $vai['id_trabalho']; ?>" class="btn btn-primary">Gerenciar</a></td>
      </tr>
      <?php
       endforeach;
       ?>
   </tbody>
</table>
<div>
<h1>Oficinas</h1>
<a href="oficina_cad.php" class="btn btn-primary">Cadastar</a>
<table class="table">
   <thead>   
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Situação</th>
    </tr>
   </thead>
   <tbody>
      <tr>   
       <?php
          $id = $_SESSION['id_usuario'];
              
          $recebe = buscar_oficina($conexao);
          foreach($recebe as $vai):
       ?>
        <td><?php echo $vai['id_oficina']; ?></td>
        <td><?php echo $vai['titulo']; ?></td>
        <td><?php echo $vai['status']; ?></td>
      </tr>
      <?php
       endforeach;
       ?>
   </tbody>
</table>    
    
</div>
</section>
</body>
</html>