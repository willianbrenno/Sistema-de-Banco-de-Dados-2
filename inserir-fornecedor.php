
<?php
//if(isset($_POST['submit'])){
   // print_r($_POST['Fornecedor']);
   // print_r($_POST['Email']);
   // print_r($_POST['Contato']);
    //print_r($_POST['st']);
//}

include_once('conexao.php');

$fornecedor = $_POST['Fornecedor'];
$email=$_POST['Email'];
$contato=$_POST['Contato'];
$st=$_POST['st'];

$result = mysqli_query($mysqli,"INSERT INTO fornecedores (Fornecedor, Email, Contato, st)
VALUE ('$fornecedor','$email', '$contato','$st')");

if(mysqli_insert_id($mysqli)){
    // $_SESSION['msg'] = "Usuario Cadastrado com Sucaesso";
     header("location: fornecedores.php");
 }else{
     header("location: fornecedores.php");
 }

?>