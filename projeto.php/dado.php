<?php 

   if(isset($_POST['email']) && !empty($_POST['email']))
   {
   	if(isset($_POST['senha']) && empty($_POST['senha']) == false)
    {
    
   $_email = $_POST['email'];
   $_senha = $_POST['senha'];
  

   echo "meu email é ê:".$_email." minha senha é:".$_senha;

     }
   }
    
 ?>