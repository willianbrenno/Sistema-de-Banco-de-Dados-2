<?php
include("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$fornecedor = $_POST['Fornecedor'];
$email=$_POST['Email'];
$contato=$_POST['Contato'];
$st=$_POST['st'];

$result = mysqli_query($mysqli,"UPDATE fornecedores SET Fornecedor='$fornecedor', Email='$email',Contato='$contato',st='$st'
WHERE id='$id'");


$resultado_usuario = mysqli_query($mysqli, $result_usuario);


if(mysqli_insert_id($mysqli)){
	
	 header("location: fornecedores.php");
 }else{
	 header("location: fornecedores.php");
 }
	