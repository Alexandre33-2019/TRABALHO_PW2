<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRAÇÃO</title>
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
            margin-right: 3px;
        }

        .cor {
            background: green
        }
    </style>
    <link rel="stylesheet" href="../css/estilocss.css">
</head>
<div>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="#">MUSCULE STRONG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FUNCIONÁRIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ESTOQUE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FORMULÁRIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CLIENTES</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="PESQUISA" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">OK</button>
            </form>
        </div>
    </nav>



</div>


<body class="fundo">
    <div class="container  row col-12 ">
        <div class="container  row col-12 ">
            <div class="img row col-md-12 my-50 mx-auto">
                <div class=" col-lg-2 ">
                    <img src="../imagens/fitness.jpg" class="img-fluid" alt="Responsive image">
                </div>

                <div class="abertura col-lg-10 my-auto mx-50 text-center ">
                    <h1>SEJA BEM-VINDO </h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="text-center">
            <img src="../imagens/malhacao.png" class="img-fluid" alt="Responsive image">
        </div>
    </div>

</body>



<script src=".node_modules/jquery/dist/jquery.js"></script>
<script src=".node_modules/popper.js/dist/umd/popper.js"></script>
<script src=".node_modules/bootstrap/dist/js/bootstrap.js"></script>

</html>