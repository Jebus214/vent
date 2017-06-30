<?php  
function Conectarse()  
{  
   if (!($link=mysqli_connect("150.150.253.98:2222", "ventanilla","u2uname3", "zadmin_ventanilla")))  
   {  
      $acentos = $link->query("SET NAMES 'utf8'");
      echo "Error conectando a la base de datos.";  
      exit();  
   }  

   return $link;  
}  
?>