






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
  <title>Produtos</title>
 </head>
 <body>
  <table border="1">
    <tr>
      <td>Nome do produto</td>
      <td>Codigo de barra</td>
      <td>Descrição</td>
      <td>Config</td>
        
    </tr>
   
    <?php while($dado = $con->fetch_array()) { ?> 
     <tr> 
        <td><?php echo $dado["NomeProduto"];?></td>
      <td><?php echo $dado["Codigodebarra"];?></td>
      <td><?php echo $dado["Descricao"];?></td>
      <td>
        <?php echo "<a href='apagar-produto.php?id="  . $dado['id']. "'>Excluir</a> ";?>
        <?php echo "<a href='up_editar_produto.php?id="  . $dado['id']. "'>Editar</a> ";?>    
    </td>
                     
      
    </tr> 
        
        
        <?php } ?> 
   
  </table>
  <a href="cadastroproduto.php">Novo Produto</a></br>
  <a href="painel.php">Voltar</a>

  
  
  


  
 </body>
 </html>