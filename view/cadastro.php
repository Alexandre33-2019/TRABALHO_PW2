<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        .fundo {
            background-color: blanchedalmond;
        }

        .abertura {
            background-color: gray;
        }

        .img {
            width: 100%;
            margin-left: 50px;
            margin-right: 50px;
            background: url("../imagens/academia.jpg")
        }

        .margem {
            margin-top: 50px;
            margin-bottom: 50px;
            margin-left: 50px;
            margin-right: 30px;
        }

        .cor {
            background: green
        }

        .form {
            margin-top: 50px;
        }

        .fundo_form {
            background: grey
        }
    </style>
    <link rel="stylesheet" href="../css/estilocss.css">
</head>

<body class="margem fundo">
    <div class="container  row col-12 ">
        <div class="img row col-md-12 my-50 mx-auto">
            <div class=" col-lg-2 ">
                <img src="../imagens/fitness.jpg" class="img-fluid" alt="Responsive image">
            </div>

            <div class="abertura col-lg-10 my-auto mx-50 text-center ">
                <h1>OLÁ, VAMOS COMEÇAR O CADASTRO!!!</h1>
            </div>
        </div>

        <div class="fundo_form form col-lg-9 mx-auto">
            <h1 class="text-center">Faça seu cadastro</h1>
            <form action="../controller/validarCadastro.php" method="POST" id="cadastro">

                <div class="form-row">
                    <div class="col-lg-6 my-3 mx-auto">
                        <label for="nome">Digite seu nome</label>
                        <input class="form-control form-control-sm" type="text" name="nome" id="nome" placeholder="Digite seu nome completo">
                    </div>
                    <div class="col-lg-4 my-3 mx-auto">
                        <label for="cpf">Digite seu CPF</label>
                        <input class="form-control form-control-sm" type="number" name="cpf" id="cpf" placeholder="Digite seu CPF">
                    </div>

                    <div class="col-lg-6 my-3 mx-auto">
                        <label for="email">Digite um email</label>
                        <input class="form-control form-control-sm" type="email" name="email" id="email" placeholder="Digite um email válido">
                    </div>
                    <div class="col-lg-4 my-3 mx-auto">
                        <label for="usuario">Crie um nome de Usuário</label>
                        <input class="form-control form-control-sm" type="text" name="newUsuario" id="usuario" placeholder="Digite seu Usuário">
                    </div>
                    <div class="col-lg-5 my-3 mx-auto">
                        <label for="senha">Digite sua senha</label>
                        <input class="form-control form-control-sm" type="password" name="newSenha" id="senha" placeholder="Digite sua senha">
                    </div>
                    <div class="col-lg-5 my-3 mx-auto">
                        <label for="confirmaSenha">Confirme sua senha</label>
                        <input class="form-control form-control-sm" type="password" name="confirmaSenha" id="senha" placeholder="Confirme sua senha">
                    </div>
                    <div class="col-lg-12 form-row text-center">
                        <div class="col-lg-6 my-3 mx-auto">
                            <input class=" btn-lg btn btn-success" type="submit" value="Confirma">
                        </div>
                        <div class="col-lg-6 my-3 mx-auto">
                            <input class=" btn-lg btn btn-success" type="submit" value="Voltar">
                        </div>
                    </div>
            </form>
        </div>

    </div>



    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="../javascript/validacoes.js"></script>
</body>

</html>