<?php



function ValidarCPF ($cpf)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM usuario WHERE CPF = ?");
    $sql->bind_param("s",$cpf);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

function ValidarEmail ($email)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM usuario WHERE email = ?");
    $sql->bind_param("s",$email);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}



function ValidarUsuario ($newUser)
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM usuario WHERE userName = ?");
    $sql->bind_param("s",$newUser);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();
    return $linha;
}

?>
