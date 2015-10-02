<!doctype html>

<html lang="pt-br">

<head>

    <meta charset="utf-8"/>

    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="http://pcsystem.besaba.com/system/">
    <meta property="og:title" content="PCSystem*">
    <meta property="og:site_name" content="PCSystem">
    <meta property="og:description" content="Venha conhecer a PCSystem.">

    <meta property="og:image" content="http://pcsystem.besaba.com/system/imagem.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="450">
    <meta property="og:image:height" content="450">
    <meta property="og:type" content="website">

    <title> PCSystem </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="_css/estilo.css"/>
    <link rel="stylesheet" href="_css/form.css"/>

    <script language="JavaScript" src="_javascript/funcoes.js"> </script>

</head>

<body>

<div id="interface">

    <header id="cabecalho">

        <hgroup>
            <h1>PCSystem*</h1>
        </hgroup>

        <nav id="menu">

            <h1>Menu Principal</h1>

            <ul>

                <li><a href="index.html">Home</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="recom.html">Recomendações</a></li>
                <li><a href="painel.php" target="_blank">Painel</a></li>
                <li><a href="contato.php">Contato</a></li>

            </ul>

        </nav>

    </header>

    <div class="bs-example">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="_images/banner1.jpg" alt="First Slide">
                </div>
                <div class="item">
                    <img src="_images/banner2.jpg" alt="Second Slide">
                </div>
                <div class="item">
                    <img src="_images/banner3.jpg" alt="Third Slide">
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>

    <article id="noticia-principal">

        <header id="cabecalho-artigo">

            <hgroup>

                <h2>Contato</h2>
                <h3 class="direita">PCSystem</h3>

            </hgroup>

        </header>

        <form method="get" id="fcontato" action="mailto:paulo.csouza@outlook.com">

            <fieldset id="usuario">

                <legend>Identificação do Usuário</legend>

                <p><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="25" maxlength="25" placeholder="Nome Completo"/></p>
                <p><label for="cSenha">Senha:</label> <input type="password" name="tSenha" id="cSenha" size="10" maxlength="10" placeholder="10 Caracteres"/></p>
                <p><label for="cMail">E-mail:</label> <input type="email" name="tMail" id="cMail" size="25" maxlength="25" placeholder="Email@domain.com"/></p>

                <fieldset id="sexo">

                    <legend>
                        Sexo:
                    </legend>

                    <input type="radio" name="tSexo" id="cMasc"/> <label for="cMasc">Masculino</label><br/>
                    <input type="radio" name="tSexo" id="cFem"/> <label for="cFem">Feminino</label>

                </fieldset>

                <p><label for="cDate">Data de Nascimento:</label> <input type="date" name="tDate" id="cDate" placeholder="dd/mm/aaaa"> </p>

            </fieldset>
            <br/>
            <fieldset id="mensagem">

                <legend>Mensagem do Usuário</legend>

                <p><label for="cUrg">Grau de Urgência:</label>
                    Mín.<input type="range" name="tUrg" id="cUrg" min="1" max="10" step="5"/>Máx</p>
                <label for="cMsg">Mensagem:</label><br/>
                <textarea name="tMsg" id="cMsg" cols="60" rows="5" placeholder="Escreva sua mensagem..."></textarea>

            </fieldset>

            <br/>
            <input type="submit" value="Enviar">
            <br/>
        </form>
        <p></p>
    </article>

    <footer id="rodape">

        <h4>PCSystem*</h4>

        <h5>&copy; Copyright Paulo Souza 2015</h5>

        <h5><a href="http://fb.com/souzasong" target="_blank"><img src="_images/facebook.png" /></a> <a href="https://br.linkedin.com/in/paulocsouza" target="_blank"><img src="_images/linkedin.png" /></a></h5>

    </footer>

</div>

</body>

</html>