<?php

 include "conexao.php";

 // $sql é apenas uma variavel
 $sql = $conn->prepare("INSERT INTO Usuario (nome, CPF, email, userName, senha, tipo ) VALUES (?,?,?,?,?,?)");
 $sql -> bind_param("ssssss", $name, $cpf, $email, $newuser, $newpass, $tipo);
 $sql -> execute() or die("ErroBanco");

 echo "Sucesso";

 $sql -> close();
 $conn -> close();

 die();
 
?>


