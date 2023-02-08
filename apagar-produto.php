<?php
include("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_usuario = "DELETE FROM produtos WHERE id='$id'";
$resultado_usuario = mysqli_query($mysqli,$result_usuario);

if(mysqli_insert_id($conn)){
        // $_SESSION['msg'] = "Usuario Cadastrado com Sucaesso";
         header("location: produtos.php");
     }else{
         header("location: produtos.php");
     }
        

