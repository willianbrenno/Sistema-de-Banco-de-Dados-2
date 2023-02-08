<?php
include("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$NomeProduto = $_POST['NomeProduto'];
$Codigodebarra=$_POST['Codigodebarra'];
$Descricao=$_POST['Descricao'];

$result = mysqli_query($mysqli,"UPDATE produtos SET NomeProduto='$NomeProduto ', Codigodebarra='$Codigodebarra',
Descricao='$Descricao'
WHERE id='$id'");


$resultado_usuario = mysqli_query($mysqli, $result_usuario);


if(mysqli_insert_id($mysqli)){
	
	 header("location: produtos.php");
 }else{
	 header("location: produtos.php");
 }
	