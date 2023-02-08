<?php
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM fornecedores WHERE id = '$id'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatrar Novo Fornecedor</title>
    
</head>
<body>
<form method="POST" action="upeditarfornecedor.php">
<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">

<label>Novo Fornecedor</label>
<input type="text" name="Fornecedor" id="Fornecedor"
 value="<?php echo $row_usuario['Fornecedor']; ?>"><br>

<label>Email</label>
<input type="email" name="Email" id="Email"
 value="<?php echo $row_usuario['Email']; ?>"><br>

<label>Contato</label>
<input type="text" name="Contato" id="Contato"
 value="<?php echo $row_usuario['Contato']; ?>"><br>

 <label>Site</label>
<input type="text" name="st" id="st"
 value="<?php echo $row_usuario['st']; ?>"><br>

 


<input type="submit" value="Salvar" id="submit" name="submit"><br>

    
</body>
</html>