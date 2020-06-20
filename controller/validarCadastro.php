<?php

 $name = $_POST['nome'];
 $cpf = $_POST['cpf'];
 $email = $_POST['email'];
 $newuser = $_POST['newUsuario'];
 $newpass = $_POST['newSenha'];
 $confirmpass = $_POST['confirmaSenha'];
 $tipo = "cliente";

 include "../model/ValidarCamposModel.php";
 //var_dump($user); server para testar, var_dump + variavel.

 if(empty($name)){
     echo "ErroNome";
     die();
 }



 
 if(empty($cpf)){
    echo "ErroCpf";
    exit();
}
$linhaCPF = ValidarCPF($cpf);

if(!empty($linhaCPF['cpf'])){
    echo "ErroCpfExiste";
    exit();
}




if(empty($email)){
    echo "ErroEmail";
    die();
}
$linhaEmail = ValidarEmail($email);

if(!empty($linhaEmail['email'])){
    echo "ErroEmailExiste";
    exit();
}



if(empty($newuser)){
    echo "ErroUsuário";
    die();
}
$linhaUsuario = ValidarUsuario($usuario);

if(!empty($linhaUsuario['userName'])){
    echo "ErroUsuarioExiste";
    exit();
}



if(empty($newpass)){
    echo "ErroSenha";
    die();
}
if(empty($confirmpass)){
    echo "ErroConfirmarSenha";
    die();
}
if($confirmpass != $newpass){
    exit("ErroSenhaNaoConfere");
}
include "../model/CadastrarUsuario.php";

?>