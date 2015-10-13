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

    <!--<link rel="stylesheet" href="_css/cadastro.css"/>-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>

<body>

<?php

?>

    <fieldset>

        <!-- <form onsubmit="confirmInputCadastro()" class="form-horizontal" name="frm_cadastro" method="POST" action="painel.php"> -->
        <form class="form-horizontal" name="frm_cadastro">

            <div class="container-fluid">

                <p class="bg-success text-center">DADOS PESSOAIS <span class="glyphicon glyphicon-user" aria-hidden="true"></span></p>

            </div>

            <div class="form-group">

                <label for="nome" class="col-sm-5 control-label">NOME</label>

                <div class="col-sm-4">

                    <input type="text" class="form-control" name="txtNome" id="nome" placeholder="Nome Completo" required>

                </div>
            
            </div>

            <div class="form-group">

                <label for="sexo" class="col-sm-5 control-label">SEXO</label>

                <div class="col-sm-4">

                    <input type="radio" name="tSexo" id="cMasc" value="M" /> <label for="cMasc">Masculino</label>
                    <input type="radio" name="tSexo" id="cFem" value="F" /> <label for="cFem">Feminino</label>

                </div>

            </div>

            <div class="form-group">

                <label for="nasc" class="col-sm-5 control-label">DATA DE NASCIMENTO</label>
                
                <div class="col-sm-3">

                    <input type="date" class="form-control" name="txtNasc" id="nasc" placeholder="dd/mm/aaaa" required>
            
                </div>

            </div>

            <div class="container-fluid">

                <p class="bg-info text-center">ENDEREÇO <span class="glyphicon glyphicon-home" aria-hidden="true"></span></p>

            </div>

            <div class="form-group">
            
                <label for="cep" class="col-sm-5 control-label">CEP</label>
            
                <div class="col-sm-2">

                    <input type="text" class="form-control" name="txtCep" id="cep" placeholder="00000-000" required pattern="\d{5}-?\d{3}">

                </div>

            </div>

            <div class="form-group">

                <label for="cid" class="col-sm-5 control-label">CIDADE</label>

                <div class="col-sm-3">

                    <input type="text" class="form-control" name="txtCidade" id="cid" placeholder="São Paulo" required>

                </div>    

            </div>

            <div class="form-group">

                <label for="est" class="col-sm-5 control-label">ESTADO</label>
            
                    <div class="col-sm-3">

                        <input type="text" class="form-control" name="txtEstado" id="est" placeholder="São Paulo" required>

                    </div>    

            </div>

            <div class="form-group">

                <label for="end" class="col-sm-5 control-label">ENDEREÇO</label>
            
                <div class="col-sm-3">    

                    <input type="text" class="form-control" name="txtEnd" id="end" required>

                </div>    

            </div>

            <div class="form-group">

                <label for="num" class="col-sm-5 control-label">NÚMERO</label>
                
                <div class="col-sm-2">

                    <input type="number" class="form-control" name="txtNum" id="num" required>

                </div>    

            </div>

            <div class="form-group">

                <label for="bai" class="col-sm-5 control-label">BAIRRO</label>
    
                <div class="col-sm-3">

                    <input type="text" class="form-control" name="txtBairro" id="bai" required>

                </div>    

            </div>

            <div class="form-group">

                <label for="comp" class="col-sm-5 control-label">COMPLEMENTO</label>
                
                <div class="col-sm-3">

                    <input type="text" class="form-control" name="txtComp" id="comp">

                </div>

            </div>

            <div class="container-fluid">

                <p class="bg-warning text-center">CONTATO <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></p>

            </div>

            <div class="form-group">

                <label for="cas" class="col-sm-5 control-label">CASA</label>
                    
                <div class="col-sm-2">

                    <input type="number" class="form-control" name="txtCasa" id="cas" placeholder="11 2222-3333" required>

                </div>

            </div>

            <div class="form-group">

                <label for="cel" class="col-sm-5 control-label">CELULAR</label>
                
                <div class="col-sm-2">

                    <input type="number" class="form-control" name="txtCelular" id="cel" placeholder="11 9 2222-3333" required>

                </div>

            </div>

            <div class="container-fluid">

                <p class="bg-danger text-center">IDENTIFICAÇÃO <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></p>

            </div>

            <div class="form-group">

                <label for="email" class="col-sm-5 control-label">E-MAIL</label>
                    
                <div class="col-sm-3">

                    <input type="email" class="form-control" name="txtEmail" id="email" placeholder="email@dominio.com " required>

                </div>

            </div>

            <div class="form-group">

                <label for="senha" class="col-sm-5 control-label">SENHA</label>
                
                <div class="col-sm-3">

                    <input type="password" class="form-control" name="txtSenha" id="senha" required>

                </div>

            </div>

            <div class="container-fluid">

                <div class="col-sm-6 control-label">

                </div>

                <div class="col-sm-2 control-label">

                    <!-- <input type="submit" class="btn btn-primary btn-sm btn-block" id="btnCadastro" value="Cadastrar"/> -->
                    <input type="button" id='teste' value="Cadastrar">
                </div>

            </div>

        </form>

    </fieldset>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
</body>
</html>