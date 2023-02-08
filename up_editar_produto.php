<?php
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM produtos WHERE id = '$id'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatrar Produto</title>
    
</head>
<body>
<form method="POST" action="upeditar.php">
<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">

<label>Nome Produto</label>
<input type="text" name="NomeProduto" id="NomeProduto"
 value="<?php echo $row_usuario['NomeProduto']; ?>"><br>

<label>Codigo de barra</label>
<input type="text" name="Codigodebarra" id="Codigodebarra"
 value="<?php echo $row_usuario['Codigodebarra']; ?>"><br>

<label>Descricao</label>
<input type="text" name="Descricao" id="Descricao"
 value="<?php echo $row_usuario['Descricao']; ?>"><br>


<input type="submit" value="Salvar" id="entrar" name="entrar"><br>

    
</body>
</html>