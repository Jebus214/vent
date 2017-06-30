
	<?php

		
	if(isset($_POST['strbusqueda'])){

			$strbusqueda = utf8_encode($_POST['strbusqueda']);
		$strbusqueda = str_replace("'", "", $strbusqueda);$lc = 'rvc'; 


		if ($strbusqueda == $lc){
			echo "<script>location.href='../images/rs/plecas300/rvc.php'</script>";
		}else{
			echo "<script>location.href='../MaquetaTramite.php?letra=" .$strbusqueda. "&cat=bus&id_tramite=x.php'</script>";
		}
		//header("location: ../MaquetaTramite.php?letra=" .$strbusqueda. "&cat=bus&id_tramite=x.php");
	}
	  

?>  

