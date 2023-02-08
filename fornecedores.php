
<?php
include("conexao.php");

$consulta = "SELECT * FROM fornecedores";
 $con =$mysqli->query($consulta) or die ($mysqli->errno);
 ?> 
 <!DOCTYPE html>
 <html lang="en"> 
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fornecedores</title>
 </head>
 <body>
  <table border="1">
    <tr>
      <td>Fornecedor</td>
      <td>Email</td> 
      <td>Contato</td>     
      <td>Site</td>      
      <td>Config</td>
        
    </tr>
   
    <?php while($dado = $con->fetch_array()) { ?> 
     <tr> 
        <td><?php echo $dado["Fornecedor"];?></td>
      <td><?php echo $dado["Email"];?></td>      
      <td><?php echo $dado["Contato"];?></td>
      <td><?php echo $dado["st"];?></td>
     
      <td>
        <?php echo "<a href='apagar-fornecedor.php?id="  . $dado['id']. "'>Excluir</a> ";?>
        <?php echo "<a href='up_editar_fornecedor?id="  . $dado['id']. "'>Editar</a> ";?>    
    </td>
      
                     
      
    </tr> 
        
        
        <?php } ?> 
   
  </table>
 
  <a href="Cad_Fornecedores.php">Cadastrar Fornecedor</a></br>
  <a href="painel.php">Voltar</a>

  
  
  


  
 </body>
 </html>