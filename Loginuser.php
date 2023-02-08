<?php
include ('conexao.php');
if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0){
        echo "Prencha se email";
    }else if(strlen($_POST['senha']) == 0){
        echo "Digite sua senha";
    }else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code= " SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'"; 
        $sql_query = $mysqli->query($sql_code) or die ("falha na execução do codigo SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows; 
        if($quantidade == 1){
            $susario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            header("location: painel.php");

        }else{
            echo"falha ao logar ! E-mail ou senha incorretos";
        }
    }
    
}
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title> Login de Usuário </title>

</head>
<body >
    
<form method="POST" action="#" >
<fieldset>
<label>Login:</label>
<input type="text" name="email" id="email"><br>

<label>Senha:</label>
<input type="password" name="senha" id="senha"><br>

<input type="submit" value="entrar" id="entrar" name="entrar"><br>
<a href="cadastrologin.php">Cadastre-se</a>
</fieldset>
</form>

</body>
</html>