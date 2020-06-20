<?php

 $user = $_POST['user'];
 $pass = $_POST['pass'];

 //var_dump($user); server para testar

 if(empty($user)){
     echo "ErroUser";
     die();
 }
 if(empty($pass)){
    echo "ErroPass";
    exit();
}
echo "Sucesso";

?>