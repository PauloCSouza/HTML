<?php

include '_php/conexao.php';

?>


<!doctype html>

<html lang="pt-br">

<head>

    <meta charset="utf-8"/>

    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="http://pcsystem.besaba.com/index.html">
    <meta property="og:title" content="PCSystem*">
    <meta property="og:site_name" content="PCSystem">
    <meta property="og:description" content="Venha conhecer a PCSystem.">

    <meta property="og:image" content="http://pcsystem.besaba.com/imagem.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="450">
    <meta property="og:image:height" content="450">
    <meta property="og:type" content="website">

    <title> PCSystem </title>

    <link rel="stylesheet" href="_css/cadastro.css"/>

    <script language="JavaScript" src="_javascript/funcoes.js"> </script>

</head>

<body>

<?php

?>

<fieldset>

    <legend>Novo Usuário</legend>

    <form name="frm_cadastro" method="POST" action="painel.php">

        <h3>Cadastre-se utilizando Facebook</h3>

        <img src="_images/facebook.png" alt="imagem windows 10"/>

        <h2>Dados Pessoais</h2>

        <label for="nome">Nome completo</label>
        <input type="text" name="txtNome" id="nome" placeholder="Nome Completo">

        <br/>

        <label for="sexo">Sexo</label>
        <input type="radio" name="tSexo" id="cMasc"/> <label for="cMasc">Masculino</label>
        <input type="radio" name="tSexo" id="cFem"/> <label for="cFem">Feminino</label>

        <br/>

        <label for="nasc">Data de nascimento</label>
        <input type="date" name="txtNasc" id="nasc" placeholder="dd/mm/aaaa">

        <br/>

        <h2>Endereço</h2>

        <label for="cep">Cep</label>
        <input type="text" name="txtCep" id="cep" placeholder="00000-000">

        <br/>

        <label for="cep">Cidade</label>
        <input type="text" name="txtCep" id="cep">

        <br/>

        <label for="cep">Estado</label>
        <input type="text" name="txtCep" id="cep">

        <br/>

        <label for="cep">Endereço</label>
        <input type="text" name="txtCep" id="cep">

        <br/>

        <label for="cep">Numero</label>
        <input type="text" name="txtCep" id="cep">

        <br/>

        <label for="cep">Complemento</label>
        <input type="text" name="txtCep" id="cep">

        <br/>

        <label for="cep">Bairro</label>
        <input type="text" name="txtCep" id="cep">

        <h2>Telefones</h2>

        <label for="tell">Residencial</label>
        <input type="text" name="txtTell" id="tell">

        <br/>

        <label for="cell">Celular</label>
        <input type="text" name="txtCell" id="cell">

        <h2>Dados de indentificação</h2>

        <label for="email">E-mail</label>
        <input type="email" name="txtEmail" id="email" placeholder="nome@dominio.com">

        <br/>

        <label for="senha">Senha</label>
        <input type="password" name="txtSenha" id="senha">

        <br/><br/>

        <input type="submit" value="Cadastrar"/>

    </form>

</fieldset>

</body>
</html>