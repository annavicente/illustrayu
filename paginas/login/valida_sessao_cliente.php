
<?php 
  session_start();
  /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/

  
  if($_SESSION['cliente'][0] == false)
  {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:home.1.php');
  }
  
  
?>