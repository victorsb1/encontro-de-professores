<html>
    <head>
        <title>Cadastar</title>
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
    <form id="form-singin" method="POST" action="cadastrar-processa.php">
        <h3>Cadastrar Usuário</h3>
       <div class="form-group">
       <h6>Dados do Usuário</h6>
        <input type="text" name="nome_completo" class="form-control" placeholder="Nome Completo" required size="50">
        <input type="text" name="nome_ident" class="form-control" placeholder="Nome de Identificação" required size="20">
        <input type="user" name="user" class="form-control" placeholder="Nome de Usuário" required size="20">
        <div class="form-inline">
            <input type="password" name="senha" class="form-control col" placeholder="Senha" required size="20">
            <input type="password" name="re-senha" class="form-control col" placeholder="Confirmação da senha" required size="20">
        </div>
       <h6>Perfil de Cadastro</h6>
       <select name="perfil-cadastro" class="form-control">
           <option hidden>Selecionar Perfil</option>
           <option>Ouvinte</option>
           <option>Participante</option>
       </select>
        <h6>Data de Nascimento:</h6>
        <div class="form-inline">    
        <input type="date" name="data_nasc" class="form-control col" required>
        <select class="form-control col" name="sexo">
            <option hidden>Selecione seu sexo</option>
            <option>Masculino</option>
            <option>Feminino</option>
        </select>
        </div>
        <div class="form-inline">
            <input type="number" class="form-control col" name="rg" placeholder="RG" required>
            <input type="number" class="form-control col" name="cpf" placeholder="CPF" required>
        </div>
        <h6>Endereço:</h6>
        <div class="form-group">
            <input type="text" class="form-control" name="rua" placeholder="Rua" required maxlength="100">
        </div>
        <div class="form-inline">
            <input type="number" class="form-control" name="numero" placeholder="Numero" required>
            <input type="text" class="form-control" name="complemento" placeholder="Complemento" required>
            <input type="text" class="form-control" name="bairro" placeholder="Bairro" required maxlength="100">
            <input type="text" class="form-control col" name="cidade" placeholder="Cidade" required maxlength="100">
            <select class="form-control col" name="estado" required>
                <option hidden>Selecione o estado</option>
                <option>Selecione o estado</option>
                <option value="AC">Acre</option>
	            <option value="AL">Alagoas</option>
	            <option value="AP">Amapá</option>
	            <option value="AM">Amazonas</option>
	            <option value="BA">Bahia</option>
	            <option value="CE">Ceará</option>
	            <option value="DF">Distrito Federal</option>
	            <option value="ES">Espírito Santo</option>
	            <option value="GO">Goiás</option>
	            <option value="MA">Maranhão</option>
	            <option value="MT">Mato Grosso</option>
	            <option value="MS">Mato Grosso do Sul</option>
	            <option value="MG">Minas Gerais</option>
	            <option value="PA">Pará</option>
	            <option value="PB">Paraíba</option>
	            <option value="PR">Paraná</option>
	            <option value="PE">Pernambuco</option>
	            <option value="PI">Piauí</option>
	            <option value="RJ">Rio de Janeiro</option>
	            <option value="RN">Rio Grande do Norte</option>
	            <option value="RS">Rio Grande do Sul</option>
	            <option value="RO">Rondônia</option>
	            <option value="RR">Roraima</option>
	            <option value="SC">Santa Catarina</option>
	            <option value="SP">São Paulo</option>
	            <option value="SE">Sergipe</option>
	            <option value="TO">Tocantins</option>
            </select>
        </div>
        <div class="form-inline">
           <input type="text" class="form-control" name="cep" placeholder="CEP" required>
        </div>
        <h6>Contato:</h6>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="Telefone" required size="12">
        <label class="">
            <input type="checkbox" class="" name="whatsapp"> Numero com WhatsApp
        </label><br>
        <label class="">
            <input type="checkbox" class="" name="almoco" title="Desejo almoçar na instuição nos dias do evento"> Desejo almoçar na instituição
        </label>
       </div>
       <h6>Maior Titulação:</h6>
       <select name="titulacao" class="form-control" required>
           <option hidden>Selecione</option>
           <option>Ensino Médio</option>
           <option>Graduação</option>
           <option>Especialização</option>
           <option>Mestrado</option>
           <option>Doutorado</option>
           <option>Pós-Doutorado</option>
       </select>
       <label></label>
        <h6>Dados da Instituição</h6>
           <input type="text" name="instituicao" class="form-control" placeholder="Instituição" required>
           <input type="text" name="f_instituicao" class="form-control" placeholder="Função na Instituição" required>
           <input type="tel" name="telefone_inst" class="form-control" placeholder="Telefone Instituição">
           <input type="email" name="email_inst" class="form-control" placeholder="Email da Instituição">
       <div class="form-group">
           <input type="text" name="tipo" value="3" hidden>
           <button type="submit" class="btn btn-primary">Cadastrar</button>
       </div>
    </form>
</section>
</body>
</html>