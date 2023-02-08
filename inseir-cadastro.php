<?php
//session_start();

include_once("conexao.php");
$email=filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$senha=filter_input(INPUT_POST,'senha', FILTER_SANITIZE_NUMBER_INT);

//echo "E-mail: $email <br>";
//echo "Senha: $senha <br>";

$result_usuario = "INSERT INTO usuario (email, senha) VALUE ('$email', '$senha')";
$resultado_usuario = mysqli_query($mysqli , $result_usuario);

if(mysqli_insert_id($conn)){
   // $_SESSION['msg'] = "Usuario Cadastrado com Sucaesso";
    header("location: Loginuser.php");
}else{
    header("location: Loginuser.php");
}
   
