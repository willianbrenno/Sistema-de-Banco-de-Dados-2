<?php 
include("conexao.php");
$consulta = "SELECT * FROM produtos";
 $con=$mysqli->query($consulta) or die ($mysqli->errno);
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
</head>
<body>
    Bem vindo 
<p><a href="produtos.php">Produtos</a> </p>
<p><a href="fornecedores.php">Fornecedores</a> </p>
<p> <a href="logout.php">Sair</a> </p>
<table border="1">
    <tr>
      <td>Produto</td>
      <td>Fornecedor</td>          
    </tr>   
    <?php while($dado = $con->fetch_array()) { ?> 
     <tr> 
        <td><?php echo $dado["NomeProduto"];?></td>
      <td><?php echo $dado["Codigodebarra"];?></td>
     </tr>        
        <?php } ?>    
  </table>
  </br>
  <a href="cadastroproduto.php">Novo Produto</a></br></br>
  <a href="painel.php">Voltar</a></br>
</body>
</html>