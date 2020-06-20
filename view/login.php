<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
                <h1>SEJA BEM-VINDO!!!</h1>
            </div>
        </div>

        <div class="fundo_form form col-lg-6 my-100 mx-auto">

            <h1 class="text-center">Faça seu login</h1>

            <form action="../controller/validarLogin.php" method="POST" id="login">

                <div class=" form-group-row">
                    <div class="col-lg-12 my-auto mx-auto">
                        <label for="email" class="col-lg-12">Digite seu login</label>
                        <div class="col-lg-12">
                            <input class="form-control form-control-md" type="text" name="user" id="email" placeholder="Email ou Usuário">
                        </div>
                    </div>
                </div>

                <div class=" form-group-row">
                    <div class="col-lg-12 my-10 mx-auto">
                        <label for="senha" class="col-lg-3">Digite sua senha</label>
                        <div class="col-lg-12">
                            <input class=" form-control form-control-md" type="password" name="pass" id="senha" placeholder="Digite sua senha">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 form-row">
                    <div class="col-lg-12 my-3 mx-auto text-center">
                        <input class="col-lg-5 btn-lg btn btn-success" type="submit" value="Entrar">
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