<?php
 if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id'])){
    die("você não pode acessar está pagina porque não está logado.
    <p><a href=\"Loginuser.php\">Entrar</a></p>");
    
}
?>