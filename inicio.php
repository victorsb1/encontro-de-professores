<html>
    <head>
        <title>1º Encontro de Professores</title>
        <meta charset="utf-8">
        <script src="../js/jquery-min.js"></script>
        <script src="../js/script.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    </head>
    <style>
        body{

        }
        .fundo{
            height: 60vh;
            width: 80%;
            margin-top: 8%;
            margin-left: 10%;

        }
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            text-decoration: none;
            color: black;
        }
        .fundo img{
            height: 100%;
            width: 100%;
            opacity: 10px;
            opacity: 0.4;

        }
        .topo {
            z-index: 3;
            position: fixed;
            background-color: white;
            width: 100%;
            height: 10vh;
            top: 0;
            left: 0;
        }

        #logo {
            margin-top: 0;
            margin-left: 2%;
            width: 30%;
            height: 96%;
        }




        .topo img{
            width: 50%;
            height: 100%;
        }

        nav ul li{
            padding: 15px;
            margin-left: 2%;
            white-space: nowrap;
        }
        nav{
            background-color: white !important;

        }
        nav ul{
            margin-right: 16%;
            margin-top: 1%;

        }
        .la{
            background: white;

        }
        nav li a{
            color: black !important;
            font-family: Georgia, sans-serif !important;
            font-size: 15.6px;
            text-align: center;
            text-shadow: 0.3px 0px black;
        }
        nav li a:hover{
            color: background !important;
            font-size: 15.9px;
        }
        
        .frase{
            position: fixed;
            width: 100%;
            top: 10%;
            background-color: #8F9ECC;
            height: 8%;
            z-index: 4;
        }
        .frase h3{
            font-family: Helvetica;
            text-transform: uppercase;
            text-align: center;       
            font-size: 19px;
            margin-top: 0.8%;
            color: white;
            text-shadow: 1px 1px black;
        }
        .imgtema img{
            position: absolute;
            width: 11%;
            height: 80%;
            left: 1.5%;
        }
        #rodape{
            position: fixed;
            height: 12%;
            width: 100%;
            top: 88%;
            background-color: white;
            border-top: 2px solid background;
        }

        .cardinf{
            margin-top: 6%;
            margin-bottom: 6%;
            margin-left: 8%;
            margin-right: 8%;
        }
        .imgc{
            height: 50%;
        }
        .cc{
            height: 70%;
        }
        .ctxt{
            overflow: hidden;
            text-align: justify;
        }
        #text{
            text-align: center;
            font-family: 'Cinzel';
            margin-top: 3%;
            text-shadow: 1px 0px black;
            border-bottom: 1px solid darkblue;
            margin-right: 34%; 
            margin-left: 34%;          
        }
        #text h3{
            font-size: 25px;
        }
        .patro{
            width: 100%;
            height: 100%;
        }
        .pat{
            position: absolute;
            top: 5%;
        }
        #ap1{
            
            left: -1%;
            width: 11%;
            height: 95%;
            top: 25%;
        }
        #ap2{
            left: 9%;
            width: 8%;
            height: 90%;
            top: 24%;
        }
        #pat1{
            left: 92%;
            width: 5%;
            height: 65%;
            top: 30%;
        }
        #pat2{
            left: 81%;
            width: 8%;
            height: 100%;
            top: 15%;
        }
        #pat3{        
            left: 20%;
            width: 14%;
            height: 75%;
            top: 30%;
        }
        #pat4{
            left: 37%;
            width: 7%;
            height: 60%;
            top: 35%;
        }
        #pat5{
            left: 47%;
            width: 10%;
            height: 85%;
            top: 25%;
        }
        #pat6{
            left: 60%;
            width: 8%;
            height: 90%;
            top: 20%;
        }
        #pat7{
            left: 72%;
            width: 8%;
            height: 65%;
            top: 35%;
        }
        #tex{
            font-family: sans-serif;
            margin-top: 0;
            margin-bottom: 0;
            color: white;
            font-size: 22px;
            text-shadow: 1px 1px black;
        }
        .sobre{
            margin-bottom: 6% !important;
            margin-top: 2% !important;
        }
        .sobre p{
            color: black;
            font-family: sans-serif;
        }
        .sobre ul li{
            color: black;
            font-family: sans-serif;
            margin-left: 3%;
        }
        .cardnot{
            margin-top: 3%;
            max-width: 80%;
            margin-left: 10%;
        }
        #ic1{
            position: absolute;
            top: 50%;
            left: 22%;
            width: 10%;    
            text-align: center;
            text-shadow: 1px 1px white;
            margin-top: 30%;
        }
        #icone1{
            position: absolute;
            top: 40%;
            left: 30%;
            width: 10%; 
            height: 10%;
        }
        #icone1 img{
            width: 100%;
            height: 100%;
        }
        #icone2{
            position: absolute;
            top: 40%;
            left: 45%;
            width: 10%; 
            height: 10%;

        }
        #icone2 img{
            width: 100%;
            height: 100%;
        }
        #icone3{
            position: absolute;
            top: 40%;
            left: 60%;
            width: 10%; 
            height: 10%;
        }
        #icone3 img{
            width: 100%;
            height: 100%;
        }
        #ic2{
            position: absolute;
            top: 50%;
            left: 18%;
            margin-top: 30%;
            width: 10%;
            text-align: center;
            text-shadow: 1px 1px white;
        }
        #ic3{
            position: absolute;
            top: 50%;
            left: 20%;
            margin-top: 30%;
            width: 10%;
            text-shadow: 1px 1px white;

        }
        #tl{
            position: absolute;
            left: 20%;
            font-size: 16px;
        }
        #t2{
            position: absolute;
            left: 1%;
            font-size: 16px;
        }
        #logoSobre{
            position: absolute;
            width: 10%;
            height: 30%;
            top: 50%;
            left: 40%;
        }
        #logoSobre img{
            width: 100%;
            height: 100%;
        }
    </style>

    <body>



        <nav class="navbar navbar-expand-lg navbar-light topo">
            <a class="navbar-brand" href="inicio.php">
                <img src="img/logo-sigev.svg" width="30" height="30" class="d-inline-block align-top" alt="">

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="datas.php">Datas Importantes<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="apresentacao-v.php">Formas de Apresentação</a>
                    </li>
                    <li class="nav-item b">
                        <a class="nav-link" href="back/login.php">Inscrição</a>
                    </li>

                    <li class="nav-item b">
                        <a class="nav-link disabled" href="programacao.php">Programação</a>
                    </li>
                    <li class="nav-item b">
                        <a class="nav-link disabled" href="organizacao.php">Organização</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="frase">
            <a class="navbar-brand imgtema" href="inicio.php">
                <img src="img/cefet-estagio.svg" width="30" height="30" class="d-inline-block align-top" alt="">

            </a>
            <div>
                <h3>Valorizando Práticas Pedagógicas Positivas de Promoção do Letramento Literário</h3>

            </div>
        </div>

        <div class="fundo">

            <div>
                <div>
                    <img src="img/book-1945515_1920.jpg" alt="First slide">

                </div>

            </div>

        </div>
        <div id="icone1"><a href="inicio.php"><img src="img/baseline-brush-24px.svg"/></a>
            <div id="ic1"><a href="inicio.php"><h5>Oficinas</h5></a></div>
        </div>

        <div id="icone2"><a href="inicio.php"><img src="img/baseline-work-24px.svg"/></a>
            <div id="ic2"><a href="inicio.php"><h5>Trabalhos</h5></a></div>
        </div>

        <div id="icone3"><a href="inicio.php"><img src="img/baseline-local_library-24px.svg"/></a>
            <div id="ic3"><a href="inicio.php"><h5>Palestras</h5></a></div>
        </div>



        <div class="card-deck cardinf">
            <div class="card cc">
                <img class="card-img-top imgc" src="img/img4.jpg" alt="Card image cap">
                <div class="card-body ctxt">
                    <h5 class="card-title">Oficinas</h5>
                    <p class="card-text">No dia do evento, diversas oficinas estarão disponíveis para a participação de todos, desde que corretamente inscritos, tanto como ouvinte quanto com um trabalho a ser apresentado.</p>
                    <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>
            <div class="card cc">
                <img class="card-img-top imgc" src="img/img2.jpg" alt="Card image cap">
                <div class="card-body ctxt">
                    <h5 class="card-title">Sobre o Encontro</h5>
                    <p class="card-text">O 1º Encontro de Professores de Divinópolis e Região pretende valorizar
                        as práticas pedagógicas positivas de promoção do letramento literário de toda a comunidade.
                    </p>
                    <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>
            <div class="card cc">
                <img class="card-img-top imgc" src="img/img1.png" alt="Card image cap">
                <div class="card-body ctxt">
                    <h5 class="card-title">Projetos</h5>
                    <p class="card-text">Os projetos a serem inscritos deverão, de alguma forma, contribuir para a promoção do letramento literário e conter título, autor e resumo a serem submetidos pelo participante através desta plataforma.</p>
                    <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>
        </div>

        <div class="card mb-3 cardnot sobre" style="border: 0px solid black;">
            <div class="card-header" style="background-color: #8F9ECC; border-bottom: 0px solid black;"><h4 id="tex">Sobre nós - Equipe de Desenvolvimento do SIGEV</h4></div>
            <div class="card-body cb">     

                <p class="card-text">
                    Alunos e professores do CEFET-MG Campus Divinópolis dispostos a inovar. Equipe SIGEV:
                </p>
                <ul>
                    
                    <li>Gabriel Rabelo Camargos </li>
                    <li>Victor Santos Batista</li>
                    <li>Rodrigo Alves dos Santos</li>
                    <li>Luis Augusto Mattos Mendes</li>
                    <li>Maria de Lourdes Couto Nogueira</li>              

                </ul>
                <div id="logoSobre"><img src="img/logocefet.jpg"/></div>
            </div>
        </div>


        <div id="rodape">
            <h6 id="t2">Apoio:</h6>
            <div id="ap1" class="pat"><img class="patro" src="img/logo Verona Jeans.jpg"/></div>
            <div id="ap2" class="pat"><img class="patro" src="img/logo stratégia.jpg"/></div>
            <h6 id="tl">Realização:</h6>
            <div id="pat1" class="pat"><img class="patro" src="img/logocefet.jpg"/></div>
            <div id="pat2" class="pat"><img class="patro" src="img/dedc.png"/></div>
            <div id="pat3" class="pat"><img class="patro" src="img/LOGO SRE.png"/></div>
            <div id="pat4" class="pat"><img class="patro" src="img/sinpro logo.png"/></div>
            <div id="pat5" class="pat"><img class="patro" src="img/logo prefeitura de divinópolis.jpg"/></div>
            <div id="pat6" class="pat"><img class="patro" src="img/logomarca-original-crpe.jpg"/></div>
            <div id="pat7" class="pat"><img class="patro" src="img/LOGO Biblioteca nova.gif"/></div>
        </div>

    </body>
</html>
