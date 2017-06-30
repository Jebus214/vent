
	<?php 
	if(isset($_GET['tipo'])){ 
		$tipo = $_GET['tipo'];
	}
	if(isset($_GET['cat'])){
		$cat = $_GET['cat'];
	}
	if(isset($_GET['id_tramite'])){
		$id_tramite = $_GET['id_tramite'];
	}
	if(isset($_GET['letra'])){
		$letra = $_GET['letra'];
	}
	if(isset($_GET['activerubro'])){
		$activerubro = $_GET['activerubro'];
	}
	if(isset($_GET['activeaz'])){
		$activeaz = $_GET['activeaz'];
	}
	if(isset($_GET['activeag'])){
		$activeag = $_GET['activeag'];
	}
	if(!isset($_GET['activerubro'])){
		$activerubro = "active";
	}
	 





		//tomamos los datos del archivo conexion.php  
		include("conexion.php");  

		//se envia la consulta  
		
		
		//se despliega el resultado  
		/*echo "<table>";  
		echo "<tr>";  
		echo "<th>ID Tramite</th>";  
		echo "<th>Titulo</th>";  
		echo "<th>Descripción Corta</th>";  
		echo "</tr>";  
		while ($row = mysqli_fetch_row($result)){   
		    echo "<tr>";  
		    echo "<td>$row[0]</td>";  
		    echo "<td>$row[1]</td>";  
		    echo "<td>$row[2]</td>";  
		    echo "</tr>";  
		}  
		echo "</table>";  

			*/
		/*function getTramite($id_tramite)  
		{  
			$result = mysqli_query($link,"SELECT * FROM tramite_enc WHERE  id_tramite = " . $id_tramite);
			$name_tr = "";
			if($row = mysqli_fetch_row($result)){   
		    
		    $name_tr = $row[1];		    
		}  

		   return $name_tr;  
		}  

		function getTramiteInfo($type, $id_tramite){
			if($type == "req"){

				echo "<tr>";
				echo "<td>PERSONAS FISICAS</td>";
				echo "</tr>";
			}

		}*/

		function getTramiteInfo($tipo, $cat, $id_tramite){
			//Conexión 
			if($tipo == "req"){
				$link = Conectarse();  
				//Setea para que admita acentos y carácteres especiales
				$query = "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"; 
				$result = mysqli_query($link, $query);  

				echo "<div class='cat_gen_box font-rubro'>";
				/*echo "<h2 class=\"text-center title-rubro\"> REQUISITOS </h2>";*/
				echo "<table class=\"table table-rubro text-justify\">";
					echo "<tr>";
						echo "<td class=\"table-title-cat-req\"><strong>Requisitos</strong></td>";
					echo "</tr>";
				echo "</table>"; 
				echo "<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">";

				//PARA PERSONAS FÌSICAS
				$query = "SELECT * FROM iz_tr_requisitos WHERE  TR_ID =" . $id_tramite . " AND TR_FM = 'Personas Físicas'";
				$result = mysqli_query($link, $query );
				$nr = mysqli_num_rows($result);
				if($nr > 0){
					echo "<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
									  <div class=\"panel panel-default\">
									    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
									      <h4 class=\"panel-title-sm\">
									        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
									          PERSONAS FÍSICAS
									        </a>
									      </h4>
									    </div>
									    <div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
									      <div id=\"table-req\" class=\"panel-body " . getcolorrubrov($cat, $tipo) . "\">";
					
						if(!$result){
							echo "<table class=\"table table-striped table-rubro text-justify\">";
							
							echo "<p>NO APLICA </p>";
						}else{
							echo "<table class=\"table table-striped table-rubro text-justify\">";
							echo "<tr>";
								echo "<th class=\"text-center\">Requisitos</th>";
								echo "<th class=\"text-center\">Original</th>";
								echo "<th class=\"text-center\">Copias</th>";
								echo "<th class=\"text-center\">Fundamento Legal</th>";
							echo "</tr>";
						}
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							echo "<tr class=\"text-justify\">";
							echo "<td class=\"td-nr\">" . $row['TR_NR'] . "</td>";
							echo "<td class=\"td-ori text-center\">" . $row['TR_OR'] . "</td>";
							echo "<td class=\"td-co text-center\">" . $row['TR_CO'] . "</td>";
							//echo "<td>" . $row['TR_FL'] . "</td>";
							echo "<td class=\"td-fl\">";
							$flstr = $row['TR_FL'];
							$flparr = split('\*', $flstr);
							for($i=1; $i < count($flparr); $i++){
								echo "<li>";
								echo $flparr[$i];
								echo "</li>";
								echo "</br>";
							}
							echo "</td>";
							echo "</tr>";
						}
						echo "</table>";
						echo "</div>
								</div>
									</div>";
					}
					//PARA PERSONAS MORALES
					$result = mysqli_query($link,"SELECT * FROM iz_tr_requisitos WHERE  TR_ID =" . $id_tramite . " AND TR_FM = 'Personas Morales'");
					$nr = mysqli_num_rows($result);
					if($nr > 0){
						echo "<div class=\"panel panel-default\">
									    <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
									      <h4 class=\"panel-title-sm\">
									        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
									          PERSONAS MORALES
									        </a>
									      </h4>
									    </div>
									    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
								      <div id=\"table-req\" class=\"panel-body " . getcolorrubrov($cat, $tipo) . "\">";
						
						if(!$result){
							echo "<table class=\"table table-striped table-rubro text-justify\">";

							echo "<p>NO APLICA </p>";
						}else{
							echo "<table class=\"table table-striped table-rubro text-justify\">";
							echo "<tr>";
								echo "<th class=\"td-nr text-center\">Requisitos</th>";
								echo "<th class=\"td-ori text-center\">Original</th>";
								echo "<th class=\"td-co text-center\">Copias</th>";
								echo "<th class=\"td-fl text-center\">Fundamento Legal</th>";
							echo "</tr>";
						}
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							echo "<tr class=\"text-justify\">";
							echo "<td class=\"td-nr\">" . $row['TR_NR'] . "</td>";
							echo "<td class=\"td-ori text-center\">" . $row['TR_OR'] . "</td>";
							echo "<td class=\"td-co text-center\">" . $row['TR_CO'] . "</td>";
							//echo "<td>" . $row['TR_FL'] . "</td>";
							echo "<td class=\"td-fl\">";
								$flstr = $row['TR_FL'];
								$flparr = split('\*', $flstr);
								for($i=1; $i < count($flparr); $i++){
									echo "<li>";
									echo $flparr[$i];
									echo "</li>";
									echo "</br>";
								}
							echo "</td>";
							echo "</tr>";
						}
						echo "</table>";
						echo "</div>
								</div>
									</div>";
					}
					//PARA INSTITUCIONES
					$result = mysqli_query($link,"SELECT * FROM iz_tr_requisitos WHERE  TR_ID =" . $id_tramite . " AND TR_FM = 'Instituciones Públicas'");
					$nr = mysqli_num_rows($result);
					if($nr > 0){
						echo "<div class=\"panel panel-default\">
									    <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
									      <h4 class=\"panel-title-sm\">
									        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
									          INSTITUCIONES PÚBLICAS
									        </a>
									      </h4>
									    </div>
									    <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
									      <div id=\"table-req\" class=\"panel-body ". getcolorrubrov($cat, $tipo) . "\">";
						
						if(!$result){
							echo "<table class=\"table table-striped table-rubro text-justify\">";

							echo "<p>NO APLICA </p>";
						}else{
							echo "<table class=\"table table-striped table-rubro text-justify\">";
							echo "<tr>";
								echo "<th class=\"td-nr text-center\">Requisitos</th>";
								echo "<th class=\"td-ori text-center\">Original</th>";
								echo "<th class=\"td-co text-center\">Copias</th>";
								echo "<th class=\"td-fl text-center\">Fundamento Legal</th>";
							echo "</tr>";
						}
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							echo "<tr class=\"text-justify\">";
							echo "<td class=\"td-nr\">" . $row['TR_NR'] . "</td>";
							echo "<td class=\"td-ori text-center\">" . $row['TR_OR'] . "</td>";
							echo "<td class=\"td-co text-center\">" . $row['TR_CO'] . "</td>";
							//echo "<td>" . $row['TR_FL'] . "</td>";
							echo "<td class=\"td-fl\">";
							$flstr = $row['TR_FL'];
							$flparr = split('\*', $flstr);
							for($i=1; $i < count($flparr); $i++){
								echo "<li>";
								echo $flparr[$i];
								echo "</li>";
								echo "</br>";
							}
							echo "</td>";
							echo "</tr>";
						}
						echo "</table>";
						echo "</div>
								</div>
									</div>";
						}
						//PARA OTROS
						$result = mysqli_query($link,"SELECT * FROM iz_tr_requisitos WHERE  TR_ID =" . $id_tramite . " AND TR_FM = 'Otros'");
						$nr = mysqli_num_rows($result);
						if($nr > 0){
						echo "<div class=\"panel panel-default\">
									    <div class=\"panel-heading\" role=\"tab\" id=\"headingFour\">
									      <h4 class=\"panel-title-sm\">
									        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
									          OTROS
									        </a>
									      </h4>
									    </div>
									    <div id=\"collapseFour\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingFour\">
									      <div id=\"table-req\" class=\"panel-body ". getcolorrubrov($cat, $tipo) . "\">";
						
						if(!$result){
							echo "<table class=\"table table-striped table-rubro text-justify\">";

							echo "<p>NO APLICA </p>";
						}else{
							echo "<table class=\"table table-striped table-rubro text-justify\">";
							echo "<tr>";
								echo "<th class=\"td-nr text-center\">Requisitos</th>";
								echo "<th class=\"td-ori text-center\">Original</th>";
								echo "<th class=\"td-co text-center\">Copias</th>";
								echo "<th class=\"td-fl text-center\">Fundamento Legal</th>";
							echo "</tr>";
						}
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							echo "<tr class=\"text-justify\">";
							echo "<td class=\"td-nr\">" . $row['TR_NR'] . "</td>";
							echo "<td class=\"td-ori text-center\">" . $row['TR_OR'] . "</td>";
							echo "<td class=\"td-co text-center\">" . $row['TR_CO'] . "</td>";
							//echo "<td>" . $row['TR_FL'] . "</td>";
							echo "<td class=\"td-fl\">";
							$flstr = $row['TR_FL'];
							$flparr = split('\*', $flstr);
							for($i=1; $i < count($flparr); $i++){
								echo "<li>";
								echo $flparr[$i];
								echo "</li>";
								echo "</br>";
							}
							echo "</td>";
							echo "</tr>";
						}
						echo "</table>";
						echo "</div>
								</div>
									</div>";
					}				
					//PARA CRITERIOS DE RESOLUCIÓN
					$result = mysqli_query($link,"SELECT * FROM iz_tramite_det WHERE TR_ID =" . $id_tramite . " AND TR_CR <> 'No aplica'");
					$nr = mysqli_num_rows($result);
					if($nr > 0){
						echo "<div class=\"panel panel-default\">
									    <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
									      <h4 class=\"panel-title-sm\">
									        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
									          CRITERIOS DE RESOLUCIÓN
									        </a>
									      </h4>
									    </div>
									    <div id=\"collapseFive\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingFive\">
									      <div id=\"table-req\" class=\"panel-body ". getcolorrubrov($cat, $tipo) . "\">";						

							echo "<table class=\"table table-striped table-rubro text-justify\">";

						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							echo "<tr class=\"text-justify\">";
							 echo  $row['TR_CR'];
							echo "</tr>";
						}
						echo "</table>";
						echo "</div>
								</div>
									</div>";
						}				
					//DIV DE ACORDION FINAL
					echo "</div></div></div>";


			}
			elseif($tipo == "of"){
				$link = Conectarse();  
				$primero = true;
				//Setea para que admita acentos y carácteres especiales
				$query = "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"; 
				$result = mysqli_query($link, $query);  
				$result = mysqli_query($link,"SELECT * FROM iz_oficina_tr WHERE  TR_ID =" . $id_tramite); 
				$resultenc = mysqli_query($link,"SELECT * FROM tramite_enc WHERE  id_tramite =" . $id_tramite); 

						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					echo "<div class='cat_gen_box font-rubro'";
						echo "<div class='cat_gen_box font-rubro'>";
							if($primero){
								$rowenc = mysqli_fetch_array($resultenc, MYSQLI_ASSOC);
								echo "<table class=\"table table-rubro text-justify\">";
									echo "<tr>";
									echo "<th class=\"table-title-cat-of\"><strong>Dependencia u Organismo</strong></td>";
									echo "<td class=\"table-title-cat-of\">" . $rowenc['TR_DO'] . "</td>";
									echo "</tr>";
								echo "</table>"; 
								$primero = false;
							//echo "<tr>";
							//	echo "<td>" . $row['TR_DO'] . "</td>";
							//	echo "<td>" . $row['TR_UA'] . "</td>";
							//echo "</tr>";
							}							
							echo "<table class=\"table table-rubro text-justify\">";
				
								echo "<tr>";
									echo "<td class=\"table-title-cat-of\"><strong>Oficinas</strong></td>";
								echo "</tr>";
							echo "</table>"; 
								echo "<table class=\"table table-rubro text-justify\">";
					
									echo "<tr>";
										echo "<td class=\"table-stitle-cat-of\"><strong>Titular de Oficina</strong></td>";
										echo "<td>" . $row['TR_TD'] . "</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td class=\"table-stitle-cat-of\"><strong>Nombre de Oficina</strong></td>";
										echo "<td>" . $row['TR_NO'] . "</td>";
									echo "</tr>";	
									echo "<tr>";
										echo "<td colspan=\"2\" class=\"text-center table-stitle-cat-of\"><strong>Domicilio</strong></td>";								
									echo "</tr>";	
									echo "<tr>";
										echo "<td class=\"table-stitle-cat-of\"><strong>Calle</strong></td>";
										echo "<td>" . $row['TR_CA'] . "</td>";
									echo "</tr>";	
									echo "<tr>";
										echo "<td class=\"table-stitle-cat-of\"><strong>No Int y Ext</strong></td>";
										echo "<td>" . $row['TR_NI'] . "</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td class=\"table-stitle-cat-of\"><strong>Colonia</strong></td>";
										echo "<td>" . $row['TR_CO'] . "</td>";
									echo "</tr>";	
									echo "<tr>";
										echo "<td class=\"table-stitle-cat-of\"><strong>Municipio</strong></td>";
										echo "<td>" . $row['TR_MU'] . "</td>";
									echo "</tr>";		
									echo "<tr>";
										echo "<td class=\"table-stitle-cat-of\"><strong>CP</strong></td>";
										echo "<td>" . $row['TR_CP'] . "</td>";
									echo "</tr>";
									echo "<tr>";
											echo "<td class=\"table-stitle-cat-of\"><strong>Lada</strong></td>";
											echo "<td>" . $row['TR_LA'] . "</td>";
									echo "</tr>";
									echo "<tr>";
											echo "<td class=\"table-stitle-cat-of\"><strong>Teléfonos</strong></td>";
											echo "<td>" . $row['TR_TE'] . "</td>";
									echo "</tr>";		
									echo "<tr>";
											echo "<td class=\"table-stitle-cat-of\"><strong>Extensión</strong></td>";
											echo "<td>" . $row['TR_EX'] . "</td>";
									echo "</tr>";	
									echo "<tr>";
											echo "<td class=\"table-stitle-cat-of\"><strong>Fax</strong></td>";
											echo "<td>" . $row['TR_FD'] . "</td>";
									echo "</tr>";
									echo "<tr>";
											echo "<td class=\"table-stitle-cat-of\"><strong>Correo Electrónico</strong></td>";
											echo "<td>" . $row['TR_CE'] . "</td>";
									echo "</tr>";
									echo "<tr>";
											echo "<td class=\"table-stitle-cat-of\"><strong>Horario de Atención</strong></td>";
											echo "<td>" . $row['TR_HR'] . "</td>";
									echo "</tr>";
								echo "</table>";
							echo "</div>";																					

					}
					echo "</table>";
					echo "</div>";
				echo "</div>";
					echo "</table>";
				echo "</div>";
			}
			elseif($tipo == "pf" ){
				$link = Conectarse();  
				//Setea para que admita acentos y carácteres especiales
				$query = "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"; 
				$result = mysqli_query($link, $query);  
				$result = mysqli_query($link,"SELECT * FROM iz_pregunta_tr WHERE  TR_ID =" . $id_tramite); 
				echo "<div class='cat_gen_box font-rubro'";
					echo "<div class='cat_gen_box font-rubro'>";
					echo "<h2 class=\"text-center title-rubro\"></h2>";
					
					echo "<table class=\"table table-rubro text-justify\">";
						echo "<tr>";
							echo "<td class=\"table-title-cat-pf\"><strong>Preguntas Frecuentes</strong></td>";
						echo "</tr>";
					echo "</table>"; 
					echo "<table class=\"table table-rubro text-justify\">"; 
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						echo "<tr>";
						echo "<td class=\"table-stitle-cat-pf\"><strong>". $row['TR_PR'] . "</strong></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>" . $row['TR_RE'] . "</td>";
						echo "</tr>";

					}
					echo "</table>";
					echo "</div>";
				//echo "</div>";
				
				//echo "</div>";
			}
			elseif($tipo == "do"){
				echo "<div class='cat_gen_box font-rubro'";
					echo "<div class='cat_gen_box font-rubro'>";		
					echo "<h2 class=\"text-center title-rubro\"></h2>";
					echo "<table class=\"table table-rubro text-justify\">";
							echo "<tr>";
								echo "<td class=\"table-title-cat-do\"><strong>Documento a Obtener</strong></td>";
							echo "</tr>";
							echo "<tr>";
								// "<td>Hoja de registro</td>";
							echo "<td>";
								echo getValDet($id_tramite, "TR_DO");
							echo "</td>";
							echo "</tr>";					
					echo "</table>";
				echo "</div>";
			}
			elseif($tipo == "fl"){
				
				echo "<div class='cat_gen_box font-rubro'";
					echo "<div class='cat_gen_box font-rubro'>";
					echo "<h2 class=\"text-center title-rubro\"></h2>";
					echo "<table class=\"table table-rubro text-justify\">";
					echo "<tr>";
						echo "<td class=\"table-title-cat-fl\"><strong>Fundamento Legal</strong></td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>";
						$flstr = getValFL($id_tramite, "TR_FL");
						$flparr = split('\*', $flstr);
						for($i=1; $i < count($flparr); $i++){
							echo "<li>";
							echo $flparr[$i];
							echo "</li>";
							echo "</br>";
						}
						
						echo "</td>";
				echo "</tr>";					
					echo "</table>";
				echo "</div>";
			} 
			elseif($tipo == "tmp"){
				echo "<div class='cat_gen_box font-rubro'";
					echo "<div class='cat_gen_box font-rubro'>";
					echo "<h2 class=\"text-center title-rubro\"></h2>";
					echo "<table class=\"table table-rubro text-justify\">";
						echo "<tr>";
							echo "<td class=\"table-title-cat-tmp\"><strong>Tiempo y Costo</strong></td>";
						echo "</tr>";
					echo "</table>"; 
					echo "<table class=\"table table-rubro text-justify\">";
					echo "<tr>";
						echo "<td class=\"table-stitle-cat-tmp\"><strong>Vigencia</strong></td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>";
							echo getValDet($id_tramite, "TR_VI");
						echo "</td>";
				echo "</tr>";	
				echo "<tr>";
						echo "<td class=\"table-stitle-cat-tmp\"><strong>Costo</strong></td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>";
						echo getValDet($id_tramite, "TR_CO");
						echo "</td>";
				echo "</tr>";		
					echo "<tr>";
						echo "<td class=\"table-stitle-cat-tmp\"><strong>Forma de pago</strong></td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>";
							$fpstr = getValDetNI($id_tramite, "TR_FP");
							$fparr = split('/', $fpstr);
							for($i=0; $i < count($fparr); $i++){
								echo "<li>";
								echo $fparr[$i];
								echo "</li>";
								echo "</br>";
							}
						//echo getValDet($id_tramite, "TR_FP");
						echo "</td>";
				echo "</tr>";		
				echo "<tr>";
						echo "<td class=\"table-stitle-cat-tmp\"><strong>Donde podrá pagarse</strong></td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>";
						echo getValDet($id_tramite, "TR_DP");
						echo "</td>";
				echo "</tr>";			
					echo "</table>";
				echo "</div>";
			}
			elseif($tipo == "inf" && $id_tramite == 1){

			}
			else{
				echo "<div class='info_tr font-rubro'";
					echo "<div class='cat_gen_box font-rubro'>";
					echo "<h2 class=\"text-center\">  </h2>";
				echo "</div>";
			}

		}

				function getListaTramites($cat){
			if($cat == "economia"){
				$tipo = "req";
				echo "<p class=\"tramite\">Facturación electrónica</p><p class=\"tramite\">Copia certificada de documentos en materia de ingresos</p>
				<p class=\"tramite\">Certificado de predial y aportación de mejoras</p>
				<p class=\"tramite\"Convenio de pago a plazos</p>
				<a href=\"ConsultaTramite.php?tipo=$tipo&cat=$cat&id_tramite=1\"><p class=\"tramite\">Cédula Informativa de Zonificación</p></a>
				<p class=\"tramite\">Asesoría en materia catastral</p>
				<p class=\"tramite\">Certificación de clave catastral</p>
				<p class=\"tramite\">Constancia de identificación catastral</p>
				<p class=\"tramite\">Verificación de linderos</p>
				<p class=\"tramite\">Altas, bajas y modificaciones de construcciones</p>
				";
			}


		}

		function getBannerRubro($cat, $id_tramite){
				if($cat == "vivienda" && $id_tramite == "x"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					//<img src="images/plecas/pleca_vivienda.png" alt="Encabezado" class="img-responsive">
					echo "<img  src=\"images/plecas/pleca_vivienda.png\" alt=\"Encabezado\" class=\"img-responsive\">";
				}
				if($cat == "economia" && $id_tramite == "x"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_negocios.png\" alt=\"negocios\">";
				}
				if($cat == "bienestar" && $id_tramite == "x"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_bienestar.png\" alt=\"bienestar\">";
				}
				if($cat == "quejas" && $id_tramite == "x"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_quejas.png\" alt=\"quejas\">";
				}
				if($cat == "seguridad" && $id_tramite == "x"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_seguridad.png\" alt=\"seguridad\">";
				}
				if($cat == "servicios" && $id_tramite == "x"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_servicios.png\" alt=\"servicios\">";
				}
				if($cat == "educacion" && $id_tramite == "x"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_educacion.png\" alt=\"educacion\">";
				}
				if($cat == "ambiente" && $id_tramite == "x"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_ambiente.png\" alt=\"ambiente\">";
				}

				if($cat == "a-z"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/a-z.png\" alt=\"a-z\">";
				}	
				if($cat == "bus"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/plecabusqueda.png\" alt=\"busqueda\">";
				}
				if($cat == "dep"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/areas_gob.png\" alt=\"àreas gobierno\">";
				}	
				
			}
			function getBannerRubroTramite($cat){
				if($cat == "vivienda"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					//<img src="images/plecas/pleca_vivienda.png" alt="Encabezado" class="img-responsive">
					echo "<img  src=\"images/pngp/vivienda300.png\" alt=\"Encabezado\" class=\"img-responsive\">";
				}
				if($cat == "economia"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/pngp/eco300.png\" alt=\"negocios\">";
				}
				if($cat == "bienestar"){
			
					echo "<img class=\"img-responsive\" src=\"images/pngp/salud300.png\" alt=\"bienestar\">";
				}
				if($cat == "quejas"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/pngp/quejas300.png\" alt=\"quejas\">";
				}
				if($cat == "seguridad"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/pngp/trans300.png\" alt=\"seguridad\">";
				}
				if($cat == "servicios"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/pngp/servicios300.png\" alt=\"servicios\">";
				}
				if($cat == "educacion"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/pngp/edu300.png\" alt=\"educacion\">";
				}
				if($cat == "ambiente"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/pngp/ambiente300.png\" alt=\"ambiente\">";
				}

				else{
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi_x.gif\" alt=\"ventanilla_unica\">";
					//echo "<img class=\"banner-titulo\" src=\"images/plecamor2.png\" alt=\"ventanilla_unica\">";
					

				}	
			}
			function getcolorrubro($cat, $tipo){
				if($cat == "vivienda" && $tipo!= "req"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					//<img src="images/plecas/pleca_vivienda.png" alt="Encabezado" class="img-responsive">
					echo "rub-color-viv";
				}
				if($cat == "economia" && $tipo!= "req"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "rub-color-eco";
				}
				if($cat == "bienestar" && $tipo!= "req"){
			
					echo "rub-color-bie";
				}
				if($cat == "quejas" && $tipo!= "req"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "rub-color-que";
				}
				if($cat == "seguridad" && $tipo!= "req"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "rub-color-seg";
				}
				if($cat == "servicios" && $tipo!= "req"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "rub-color-ser";
				}
				if($cat == "educacion" && $tipo!= "req"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "rub-color-edu";
				}
				if($cat == "ambiente" && $tipo!= "req"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "rub-color-amb";
				}
				if($tipo =="req"){
					echo "rub-color-req";
				}	
			}
		function getcolorrubrov($cat, $tipo){

				if($cat == "vivienda"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					//<img src="images/plecas/pleca_vivienda.png" alt="Encabezado" class="img-responsive">
					$rv = "rub-color-viv";
				}
				if($cat == "economia"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					$rv = "rub-color-eco";
				}
				if($cat == "bienestar"){
			
					$rv= "rub-color-bie";
				}
				if($cat == "quejas"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					$rv= "rub-color-que";
				}
				if($cat == "seguridad"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					$rv= "rub-color-seg";
				}
				if($cat == "servicios"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					$rv= "rub-color-ser";
				}
				if($cat == "educacion"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					$rv= "rub-color-edu";
				}
				if($cat == "ambiente"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					$rv= "rub-color-amb";
				}
				return $rv;

			}
			function getcolor($cat){
				if($cat == "vivienda"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					//<img src="images/plecas/pleca_vivienda.png" alt="Encabezado" class="img-responsive">
					echo "table-info-vi";
				}
				if($cat == "economia"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "table-info-en";
				}
				if($cat == "bienestar"){
			
					echo "table-info-bi";
				}
				if($cat == "quejas"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "table-info-qu";
				}
				if($cat == "seguridad"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "table-info-tr";
				}
				if($cat == "servicios"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "table-info-se";
				}
				if($cat == "educacion"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "table-info-ed";
				}
				if($cat == "ambiente"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "table-info-am";
				}

				else{
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi_x.gif\" alt=\"ventanilla_unica\">";
					//echo "<img class=\"banner-titulo\" src=\"images/plecamor2.png\" alt=\"ventanilla_unica\">";
					

				}	
			}
		function getListaTramite($cat, $letra){

			//Obtenemos la consulta por rubro
			$link = Conectarse();  
			//Setea para que admita acentos y carácteres especiales
			$query = "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"; 
			$result = mysqli_query($link, $query);

			if($letra != "x"){
				if($cat == "bus"){
					$result = mysqli_query($link,"SELECT * FROM tramite_enc WHERE  TR_TIT LIKE '%" . utf8_decode($letra) . "%' order by TR_TIT");  
				}
				elseif($cat == "dep"){
					$resultnd = mysqli_query($link,"SELECT * FROM iz_cat_dep WHERE  ID_DEP = " . utf8_decode($letra));
					if($rownd = mysqli_fetch_array($resultnd, MYSQLI_ASSOC)){
							$ndep = $rownd['TR_ND'];

					}
					if(isset($ndep)){
						$result = mysqli_query($link,"SELECT * FROM tramite_enc WHERE  TR_DO = '" . $ndep. "'");
					}
				
				}
				else{
					$result = mysqli_query($link,"SELECT * FROM tramite_enc WHERE  TR_TIT LIKE'" . $letra. "%'"); 
				}
			} 

			else{
				$result = mysqli_query($link,"SELECT * FROM tramite_enc WHERE  TR_CAT ='" . getCategoria($cat). "' order by TR_TIT");  
			} 
			
			$cl_os = 1;
			if($cat == "a-z"){
				
					echo " <div class=\"btn-group\">
								<a href=\"MaquetaTramite.php?letra=A&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">A</button></a>
								<a href=\"MaquetaTramite.php?letra=B&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">B</button></a>
								<a href=\"MaquetaTramite.php?letra=C&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">C</button></a>
								<a href=\"MaquetaTramite.php?letra=D&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">D</button></a>
								<a href=\"MaquetaTramite.php?letra=E&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">E</button></a>
								<a href=\"MaquetaTramite.php?letra=F&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">F</button></a>
								<a href=\"MaquetaTramite.php?letra=G&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">G</button></a>
								<a href=\"MaquetaTramite.php?letra=H&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">H</button></a>
								<a href=\"MaquetaTramite.php?letra=I&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">I</button></a>
								<a href=\"MaquetaTramite.php?letra=J&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">J</button></a>
								<a href=\"MaquetaTramite.php?letra=K&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">K</button></a>
								<a href=\"MaquetaTramite.php?letra=L&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">L</button></a>
								<a href=\"MaquetaTramite.php?letra=M&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">M</button></a>
								<a href=\"MaquetaTramite.php?letra=N&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">N</button></a>
								<a href=\"MaquetaTramite.php?letra=O&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">O</button></a>
								<a href=\"MaquetaTramite.php?letra=P&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">P</button></a>
								<a href=\"MaquetaTramite.php?letra=Q&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">Q</button></a>
								<a href=\"MaquetaTramite.php?letra=R&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">R</button></a>
								<a href=\"MaquetaTramite.php?letra=S&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">S</button></a>
								<a href=\"MaquetaTramite.php?letra=T&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">T</button></a>
								<a href=\"MaquetaTramite.php?letra=U&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">U</button></a>
								<a href=\"MaquetaTramite.php?letra=V&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">V</button></a>
								<a href=\"MaquetaTramite.php?letra=W&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">W</button></a>
								<a href=\"MaquetaTramite.php?letra=X&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">X</button></a>
								<a href=\"MaquetaTramite.php?letra=Y&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">Y</button></a>
								<a href=\"MaquetaTramite.php?letra=Z&cat=a-z&id_tramite=x\"><button class=\"btn btn-default btn-xs\">Z</button></a>
							 </div></br></br>";

				}
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				if($cat == "a-z"){
					$cat = getCategoriaSim($row['TR_CAT']);

				}
				if($cat == "bus" or $cat == "dep"){
					$cat = getCategoriaSim($row['TR_CAT']);

				}
				if($cl_os % 2){
					//ConsultaTramite.php?tipo=x&cat=economia&id_tramite=1
					echo "<div class=\" rect-claro\" >
							<a href=\"ConsultaTramite.php?tipo=req&cat=" . $cat . "&id_tramite=" . $row['id_tramite'] .
								"\"><p class=\" tramite-lista text-left\" >" . $row['TR_TIT'] .
						"</p>
							</a>
						</div>";

				}else{

					echo "<div class=\" rect-oscuro\" >
						<a href=\"ConsultaTramite.php?tipo=req&cat=" . $cat . "&id_tramite=" . $row['id_tramite'] .
								"\"><p class=\" tramite-lista text-left\" >" . $row['TR_TIT'] .
					"</p>
						</a>
					</div>";							

				}
				$cl_os ++;

			}	
		}
		function getVal($idtram, $idfield){
			$link = Conectarse();  
			//Setea para que admita acentos y carácteres especiales
			$query = "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"; 
			$result = mysqli_query($link, $query);  
			$result = mysqli_query($link,"SELECT * FROM tramite_enc WHERE  id_tramite =" . $idtram);  
			if($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				echo $row[$idfield];

			}
		

		}

		function getValFL($idtram, $idfield){
			$link = Conectarse();  
			//Setea para que admita acentos y carácteres especiales
			$query = "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"; 
			$result = mysqli_query($link, $query);  
			$result = mysqli_query($link,"SELECT * FROM tramite_enc WHERE  id_tramite =" . $idtram);  
			if($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				 $strrow = $row[$idfield];

			}
			return $strrow;

		}
		function getValDet($idtram, $idfield){
			$link = Conectarse();  
			//Setea para que admita acentos y carácteres especiales
			$query = "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"; 
			$result = mysqli_query($link, $query);  
			$result = mysqli_query($link,"SELECT * FROM iz_tramite_det WHERE  TR_ID =" . $idtram);  
			if($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				echo $row[$idfield];

			}
		}
		function getValDetNI($idtram, $idfield){
			$link = Conectarse();  
			//Setea para que admita acentos y carácteres especiales
			$query = "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"; 
			$result = mysqli_query($link, $query);  
			$result = mysqli_query($link,"SELECT * FROM iz_tramite_det WHERE  TR_ID =" . $idtram);  
			if($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				$strrow =$row[$idfield];

			}
			return $strrow ;
		}

		function getCategoria($catSim){
			$catFin = '';
			switch ($catSim) {
			
		    case 'bienestar':
		        $catFin = 'Salud y Bienestar Familiar';
		        break;
		    case 'educacion':
		        $catFin = 'Educación, Cultura y Deporte';
		        break;
		    case 'seguridad':
		        $catFin = 'Seguridad y Tránsito';
		        break;
		    case 'ambiente':
		        $catFin = 'Medio Ambiente';
		        break;
		    case 'economia':
		        $catFin = 'Economía y Negocios';
		        break;
		    case 'servicios':
		        $catFin = 'Servicios Públicos';
		        break;
		    case 'vivienda':
		        $catFin = 'Vivienda e Infraestructura';
		        break;
		    case 'quejas':
		        $catFin = 'Quejas y Sugerencias';
		        break;		        		        		        		        
			}
			return $catFin;
		}

		function getCategoriaSim($catFull){
			$catFin = '';
			switch ($catFull) {
			
		    case 'Salud y Bienestar Familiar':
		        $catFin = 'bienestar';
		        break;
		    case 'Educación, Cultura y Deporte':
		        $catFin = 'educacion';
		        break;
		    case 'Seguridad y Tránsito':
		        $catFin = 'seguridad';
		        break;
		    case 'Medio Ambiente':
		        $catFin = 'ambiente';
		        break;
		    case 'Economía y Negocios':
		        $catFin = 'economia';
		        break;
		    case 'Servicios Públicos':
		        $catFin = 'servicios';
		        break;
		    case 'Vivienda e Infraestructura':
		        $catFin = 'vivienda';
		        break;
		    case 'Quejas y Sugerencias':
		        $catFin = 'quejas';
		        break;		        		        		        		        
			}
			return $catFin;
		}
function getFooter(){
	echo "						
					 		<div class=\"row\">
					 			
					 				<div class=\"col-sm-3 col-xs-12 col-md-3 col-lg-3\">

					 					<!--<h3 class=\"ti-blanco text-center\">
					 						LINKS DE INTERÉS
					 					</h3>-->
					 					<div class=\"row\">
					 						<div class=\"col-sm-12 col-xs-12 col-md-12 col-lg-12 padding-less-right\">
					 							<div class=\"cin-tit-foot\">
					 								<h3 class=\"ti-blanco text-center\">
					 									LINKS DE INTERÉS
					 								</h3>
					 							</div>
					 						</div>
					 					</div>
										<div class=\"contenedor-pie row\">
											<ul id=\"bannersfooter\">
												<a href=\"http://edomex.gob.mx\" target=\"_blank\"><p class=\"texto-pie text-center-xs\"><img class=\"img-responsivenot\" src=\"images/festadomex.png\" alt=\"\">&nbsp;Portal del Gob. del Estado de México</p></a>
												<a href=\"http://www.secogem.gob.mx/SAM/sit_atn_mex.asp\" target=\"_blank\"><p class=\"texto-pie text-center-xs\"><img class=\"img-responsivenot\" src=\"images/fquejas.png\" alt=\"\">&nbsp;Quejas y Denuncias</p></a>
												<a href=\"http://cuautitlanizcalli.gob.mx/transparencia/ipomex-2/\" target=\"_blank\"><p class=\"texto-pie text-center-xs\"><img class=\"img-responsivenot\" src=\"images/finfo.png\" alt=\"\">&nbsp;Información Pública</p></a>
												<a href=\"http://cuautitlanizcalli.gob.mx/transparencia/ipomex-2/\" target=\"_blank\"><p class=\"texto-pie text-center-xs\"><img class=\"img-responsivenot\" src=\"images/finfo.png\" alt=\"\">&nbsp;Solicitud de Información</p></a>
												
											</ul>

					 					</div>
					 				</div>
					 				<div class=\"col-sm-3 col-xs-12 col-md-3 col-lg-3 col-xs-12\">
					 					<div class=\"row\">
					 						<div class=\"col-sm-12 col-xs-12 col-md-12 col-lg-12 padding-less-center\">
					 							<div class=\"cin-tit-foot\">
					 								<h3 class=\"ti-blanco text-center\">
					 									ACERCA DEL SITIO
					 								</h3>
					 							</div>
					 						</div>
					 					</div>					 							
					 					<div class=\"contenedor-pie\">
					 						<a href=\"mapadesitio.php\"><li class=\"li-red\">
					 							<ul class=\"texto-pie text-center-en-xs\">
					 								Mapa de Sitio
					 							</ul>
					 						</li>
					 						</a>
					 					
					 					
					 						<a href=\"aviso_legal.php\"><li class=\"li-red\">
					 							<ul class=\"texto-pie text-center-en-xs\">
					 								Avisos Legales
					 							</ul>
					 						</li>
					 						</a>
					 					
					 					
					 						<a href=\"acerca_sitio.php\"><li class=\"li-red\">
					 							<ul class=\"texto-pie text-center-en-xs\">
					 								Acerca del Sitio
					 							</ul>
					 						</li>
					 						</a>
					 				</div>			 					
					 				</div>
					 				<div class=\"col-sm-3 col-xs-12 col-md-3 col-lg-3\">
					 					<div class=\"row\">
					 						<div class=\"col-sm-12 col-xs-12 col-md-12 col-lg-12 padding-less-center\">
					 							<div class=\"cin-tit-foot\">
					 								<h3 class=\"ti-blanco text-center\">
					 									CONTACTO
					 								</h3>
					 							</div>
					 						</div>
					 					</div>
					 					<div class=\"contenedor-pie\">
					 					<div class=\"hidden-xs\">
						 					<a href =\"https://www.google.com.mx/maps/dir//Av.+Primero+de+Mayo+100,+Centro+Urbano,+54750+Cuautitl%C3%A1n+Izcalli,+M%C3%A9x./@19.6570392,-99.2116116,17z/data=!4m16!1m7!3m6!1s0x85d21e3657ae0fb3:0x7ce3b3d0d084e167!2sAv.+Primero+de+Mayo+100,+Centro+Urbano,+54750+Cuautitl%C3%A1n+Izcalli,+M%C3%A9x.!3b1!8m2!3d19.6570392!4d-99.2094229!4m7!1m0!1m5!1m1!1s0x85d21e3657ae0fb3:0x7ce3b3d0d084e167!2m2!1d-99.2094229!2d19.6570392\" target=\"_blank\" onclick=\"window.open(this.href, this.target, 'width=600,height=600'); return false;\"><img class=\"img-responsive center-block\" src=\"http://clubdecampolafresneda.com/wp-content/uploads/2015/04/icono-google.png\" alt=\"\" width=\"20%\"></a>
						 					</br>
					 					</div>
					 					<p class=\"text-center texto-pie\">
					 						Av. Primero de Mayo #100 Col.
					 					</p>
					 					<p class=\"text-center texto-pie\">
											Centro Urbano Cuautitlán Izcalli
										</p>
										<p class=\"text-center texto-pie\">
											Edo de México
					 					</p>
					 					<p class=\"text-center texto-pie\">
						 						Teléfono:58642500
				
					 					</p>
									</div>
					 				</div>
					 				<div class=\"col-sm-3 col-xs-12 col-md-3 col-lg-3\">
					 					<div class=\"row\">
					 						<div class=\"col-sm-12 col-xs-12 col-md-12 col-lg-12 padding-less-left	\">
					 							<div class=\"cin-tit-foot\">
					 								<h3 class=\"ti-blanco text-center\">
					 									ENLACES DE INTERÉS
					 								</h3>
					 							</div>
					 						</div>
					 					</div>
										<div class=\"contenedor-pie\">
					 					<a href=\" https://sfpya.edomexico.gob.mx/recaudacion/\" target=\"_blank\"><li class=\"li-red\">
				 							<ul class=\"texto-pie text-center-en-xs\">
				 								Portal de servicios al contribuyente
				 							</ul>
				 						</li>
				 						</a>
				 					
				 					
				 						<a href=\"https://www.ventanillaunica.gob.mx/vucem/index.htm\" target=\"_blank\"><li class=\"li-red\">
				 							<ul class=\"texto-pie text-center-en-xs\">
				 								Ventanilla única federal
				 							</ul>
				 						</li>
				 						</a>
				 					
				 					
				 						<a href=\"http://ventanillaelectronica.edomex.gob.mx/\" target=\"_blank\"><li class=\"li-red\">
				 							<ul class=\"texto-pie text-center-en-xs\">
				 								Ventanilla única Estatal
				 							</ul>
				 						</li>		
				 						</a>
				 						<a href=\"http://dgsei.edomex.gob.mx/\" target=\"_blank\"><li class=\"li-red\">
				 							<ul class=\"texto-pie text-center-en-xs\">
				 								Sistema Estatal de Informática
				 							</ul>
				 						</li>		
				 						</a>		 					
					 				</div>
					 			</div>
					 			
					 			
					 		</div>
				 		<div class=\"row\">
					 		<div class=\"col-lg-12 col-md-12 hidden-xs hidden-sm\">
					 			<div class=\"aviso-pie\">
						 			<p class=\"texto-pie-ap text-center\">
						 				H. Ayuntamiento de Cuautitlán Izcalli.	
						 			</p>
						 			<p class=\"texto-pie-ap text-center\">
						 				Esta página esta diseñada para verse mejor en resolución 1670 X 1024, Firefox & Chrome v30, Safari V5.0, IE 10.
						 			</p>
						 		</div>

					 		</div>
					 		<div class=\"hidden-lg hidden-md col-xs-12 col-sm-12\">
					 			<div class=\"aviso-pie\">
						 			<p class=\"texto-pie text-center\">
						 				H. Ayuntamiento de Cuautitlán Izcalli	
						 		</div>

					 		</div>					 		
				 		</div>
					";
}

?>  

