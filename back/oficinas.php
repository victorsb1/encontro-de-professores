<?php
include_once("banco.php");
session_start();

?>
<html>
    <head>
        <title>Cadastrar Oficinas</title>
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
        <h1>Cadastrar participação em Oficinas</h1>
    <div class="row">
    <div class="oficinas col">
        <?php
        
        $recebe = buscar_oficina($conexao);
        foreach($recebe as $vai):
        ?>
         <div class="form-control box">
             <h4><?php echo $vai['titulo']; ?></h4>
             <p class="form-text text-justify"><?php echo $vai['descricao']; ?></p>
             <h6>Dados:</h6>
             <p><?php echo $vai['dia']; ?></p>
             <p>Status: <b><?php echo $vai['status']; ?></b></p>
             <h6 class="form-control"><input type="checkbox" name = "oficina[]" value="<?php echo $vai['titulo']; ?>" class="click"> Participar</h6>
         </div>
         <?php
        endforeach;
        ?>
       <a href="painel-user.php">Voltar</a>
    </div>
    <div class="col-5 form-control" id="rum">
        <h3>Oficinas selecionadas</h3>
        <form action="" method="POST" class="form-sigin">
        <div class="form-group" id="add_oficinas">
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-primary">Cadastrar</button>
       </div>
        </form>
        <?php
            if(isset($_POST['oficina'])){
                foreach($_POST['oficina'] as $oficina){
                    $usuario = $_SESSION['id_usuario'];
            
                    $cad = cadastra_participacao_oficina($conexao, $usuario, $oficina);
                }
                 echo "Cadastro feito com sucesso!";
                
            }
        ?>
    </div>
    </div>
</section>
<script>
    $(".click").change(function(){
       var valor = $(this).val();
        
       $("#add_oficinas").append($('<input type="text" class="form-control" name ="oficina[]" placeholder="'+ valor +'" value="'+ valor +'">'));
    });
</script>
</body>
</html>