<?php  
function Conectarse()  
{  
   if (!($link=mysqli_connect("localhost", "ventanilla","u2uname3", "zadmin_ventanilla")))  
   {  
      $acentos = $link->query("SET NAMES 'utf8'");
      echo "Error conectando a la base de datos.";  
      exit();  
   }  

   return $link;  
}  
?>