<?php
//session_start();

include_once("conexao.php");
$NomeProduto=filter_input(INPUT_POST,'NomeProduto', FILTER_SANITIZE_STRING);
$Codigodebarra=filter_input(INPUT_POST,'Codigodebarra', FILTER_SANITIZE_STRING);
$Descricao=filter_input(INPUT_POST,'Descricao', FILTER_SANITIZE_STRING);

//echo "E-mail: $email <br>";
//echo "Senha: $senha <br>";


$result_usuario = "INSERT INTO produtos (NomeProduto,Codigodebarra,Descricao) 
VALUE ('$NomeProduto', '$Codigodebarra','$Descricao')";
$resultado_usuario = mysqli_query($mysqli , $result_usuario);

if(mysqli_insert_id($conn)){

    header("location: produtos.php");
}else{
    header("location: produtos.php");
}
   