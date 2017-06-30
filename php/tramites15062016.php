

	<?php  
	$tipo = $_GET['tipo'];
	$cat = $_GET['cat'];
	$id_tramite = $_GET['id_tramite'];





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
				//echo "<div class='cat_req_box font-rubro'>";
				echo "<h2 class=\"text-center\"> REQUISITOS </h2>";
				echo "<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">";

				//PARA PERSONAS FÌSICAS
				$query = "SELECT * FROM iz_tr_requisitos WHERE  TR_ID =" . $id_tramite . " AND TR_FM = 'Persona Física'";
				$result = mysqli_query($link, $query );
				echo "<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
								  <div class=\"panel panel-default\">
								    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
								      <h4 class=\"panel-title\">
								        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
								          PERSONAS FÍSICAS
								        </a>
								      </h4>
								    </div>
								    <div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
								      <div class=\"panel-body\">";
				echo "<table class=\"table table-rubro\">";
					if(!$result){
						
						echo "<p>NO APLICA </p>";
					}else{
						echo "<table class=\"table table-rubro\">";
						echo "<tr>";
							echo "<th>Requisitos</th>";
							echo "<th>Original</th>";
							echo "<th>Copias</th>";
							echo "<th>Fundamento Legal</th>";
						echo "</tr>";
					}
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						echo "<tr class=\"text-justify\">";
						echo "<td>" . $row['TR_NR'] . "</td>";
						echo "<td>" . $row['TR_OR'] . "</td>";
						echo "<td>" . $row['TR_CO'] . "</td>";
						echo "<td>" . $row['TR_FL'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
					echo "</div>
							</div>
								</div>";

					//PARA PERSONAS MORALES
					$result = mysqli_query($link,"SELECT * FROM iz_tr_requisitos WHERE  TR_ID =" . $id_tramite . " AND TR_FM = 'Persona Moral'");
					echo "<div class=\"panel panel-default\">
								    <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
								      <h4 class=\"panel-title\">
								        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
								          PERSONAS MORALES
								        </a>
								      </h4>
								    </div>
								    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
							      <div class=\"panel-body\">";
					echo "<table class=\"table table-rubro\">";
					if(!$result){

						echo "<p>NO APLICA </p>";
					}else{
						echo "<table class=\"table table-rubro\">";
						echo "<tr>";
							echo "<th>Requisitos</th>";
							echo "<th>Original</th>";
							echo "<th>Copias</th>";
							echo "<th>Fundamento Legal</th>";
						echo "</tr>";
					}
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						echo "<tr class=\"text-justify\">";
						echo "<td>" . $row['TR_NR'] . "</td>";
						echo "<td>" . $row['TR_OR'] . "</td>";
						echo "<td>" . $row['TR_CO'] . "</td>";
						echo "<td>" . $row['TR_FL'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
					echo "</div>
							</div>
								</div>";
					//PARA INSTITUCIONES
					$result = mysqli_query($link,"SELECT * FROM iz_tr_requisitos WHERE  TR_ID =" . $id_tramite . " AND TR_FM = 'Instituciones Públicas'");
					echo "<div class=\"panel panel-default\">
								    <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
								      <h4 class=\"panel-title\">
								        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
								          INSTITUCIONES PÚBLICAS
								        </a>
								      </h4>
								    </div>
								    <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
								      <div class=\"panel-body\">";
					echo "<table class=\"table table-rubro\">";
					if(!$result){

						echo "<p>NO APLICA </p>";
					}else{
						echo "<table class=\"table table-rubro\">";
						echo "<tr>";
							echo "<th>Requisitos</th>";
							echo "<th>Original</th>";
							echo "<th>Copias</th>";
							echo "<th>Fundamento Legal</th>";
						echo "</tr>";
					}
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						echo "<tr class=\"text-justify\">";
						echo "<td>" . $row['TR_NR'] . "</td>";
						echo "<td>" . $row['TR_OR'] . "</td>";
						echo "<td>" . $row['TR_CO'] . "</td>";
						echo "<td>" . $row['TR_FL'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
					echo "</div>
							</div>
								</div>";								
					//DIV DE ACORDION FINAL
					echo "</div></div>";
					/*echo "<div class='cat_req_box font-rubro'>";
						echo "<h2 class=\"text-center\"> REQUISITOS </h2>";

						echo "<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
								  <div class=\"panel panel-default\">
								    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
								      <h4 class=\"panel-title\">
								        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
								          PERSONAS FÍSICAS
								        </a>
								      </h4>
								    </div>
								    <div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
								      <div class=\"panel-body\"><p>NO APLICA</p>";
								      
									/*	echo "<table class=\"table table-rubro\">";

											echo "<tr>";
																echo "<th>Requisitos</th>";
																echo "<th>Original</th>";
																echo "<th>Copias</th>";
																echo "<th>Fundamento Legal</th>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Formato de solicitud debidamente requisitado y firmado por el solicitante en su calidad de propietario o poseedor</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";	
															echo "<tr class=\"text-justify\">";
																echo "<td>Boleta Predial Vigente</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Acta Constitutiva de la persona jurídica pcolectiva debidamente inscrita en el Registro Público de la Propiedad y el Comercio</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Poder Notarial o carta poder, en caso de designar representante legal.</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Identificación oficial del propietario o poseedor y del representante legal en su caso</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td></tr></table>";	
																*/							      
								/*										        
									echo "</div>
								    </div>
								  </div>
								  <div class=\"panel panel-default\">
								    <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
								      <h4 class=\"panel-title\">
								        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
								          PERSONAS MORALES
								        </a>
								      </h4>
								    </div>
								    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
								      <div class=\"panel-body\"><p>NO APLICA</p>";
									/*echo "<table class=\"table table-rubro\">";

											echo "<tr>";
																echo "<th>Requisitos</th>";
																echo "<th>Original</th>";
																echo "<th>Copias</th>";
																echo "<th>Fundamento Legal</th>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Formato de solicitud debidamente requisitado y firmado por el solicitante en su calidad de propietario o poseedor</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";	
															echo "<tr class=\"text-justify\">";
																echo "<td>Boleta Predial Vigente</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Acta Constitutiva de la persona jurídica pcolectiva debidamente inscrita en el Registro Público de la Propiedad y el Comercio</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Poder Notarial o carta poder, en caso de designar representante legal.</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Identificación oficial del propietario o poseedor y del representante legal en su caso</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td></tr></table>";*//*	ya estaba*/
								   /*  echo" </div>
								    </div>
								  </div>
								  <div class=\"panel panel-default\">
								    <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
								      <h4 class=\"panel-title\">
								        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
								          INSTITUCIONES PÚBLICAS
								        </a>
								      </h4>
								    </div>
								    <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
								      <div class=\"panel-body\"><p>NO APLICA</p>";
								      										/*echo "<table class=\"table table-rubro\">";

											echo "<tr>";
																echo "<th>Requisitos</th>";
																echo "<th>Original</th>";
																echo "<th>Copias</th>";
																echo "<th>Fundamento Legal</th>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Formato de solicitud debidamente requisitado y firmado por el solicitante en su calidad de propietario o poseedor</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";	
															echo "<tr class=\"text-justify\">";
																echo "<td>Boleta Predial Vigente</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Acta Constitutiva de la persona jurídica pcolectiva debidamente inscrita en el Registro Público de la Propiedad y el Comercio</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Poder Notarial o carta poder, en caso de designar representante legal.</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
															echo "</tr>";
															echo "<tr class=\"text-justify\">";
																echo "<td>Identificación oficial del propietario o poseedor y del representante legal en su caso</td>";
																echo "<td>1</td>";
																echo "<td>1</td>";
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td></tr></table>";*/	

								     /*   
								      echo "</div>
								    </div>
								  </div>
								</div>";
							echo "</div>"; */
							/*AQUI TERMINA TODO*/
/*
				echo "<div class='cat_req_box font-rubro'>";
				echo "<h2 class=\"text-center\"> REQUISITOS </h2>";
				echo "<table class=\"table table-rubro\">";
					echo "<tr>";
						echo "<td class=\"table-title-cat-req text-center\" colspan='4'><h3>PERSONAS FISICAS</h3></td>";
					echo "</tr>";
					echo "<tr>";
						echo "<th>Requisitos</th>";
						echo "<th>Original</th>";
						echo "<th>Copias</th>";
						echo "<th>Fundamento Legal</th>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Formato de solicitud debidamente requisitado y firmado por el solicitante en su calidad de propietario o poseedor</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";	
					echo "<tr class=\"text-justify\">";
						echo "<td>Boleta Predial Vigente</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Acta Constitutiva de la persona jurídica pcolectiva debidamente inscrita en el Registro Público de la Propiedad y el Comercio</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Poder Notarial o carta poder, en caso de designar representante legal.</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Identificación oficial del propietario o poseedor y del representante legal en su caso</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
						echo "<tr>";
						echo "<td colspan='4' class=\"table-title-cat-req text-center\"><h3>PERSONAS MORALES</h3></td>";
					echo "</tr>";
					echo "<tr>";
						echo "<th>Requisitos</th>";
						echo "<th>Original</th>";
						echo "<th>Copias</th>";
						echo "<th>Fundamento Legal</th>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Formato de solicitud debidamente requisitado y firmado por el solicitante en su calidad de propietario o poseedor</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";	
					echo "<tr class=\"text-justify\">";
						echo "<td>Boleta Predial Vigente</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Acta Constitutiva de la persona jurídica pcolectiva debidamente inscrita en el Registro Público de la Propiedad y el Comercio</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Poder Notarial o carta poder, en caso de designar representante legal.</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Identificación oficial del propietario o poseedor y del representante legal en su caso</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
						echo "<tr>";
						echo "<td colspan='4' class=\"table-title-cat-req text-center\"><h3>INSTITUCIONES PÚBLICAS</h3></td>";
					echo "</tr>";
					echo "<tr>";
						echo "<th>Requisitos</th>";
						echo "<th>Original</th>";
						echo "<th>Copias</th>";
						echo "<th>Fundamento Legal</th>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Formato de solicitud debidamente requisitado y firmado por el solicitante en su calidad de propietario o poseedor</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";	
					echo "<tr class=\"text-justify\">";
						echo "<td>Boleta Predial Vigente</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Acta Constitutiva de la persona jurídica pcolectiva debidamente inscrita en el Registro Público de la Propiedad y el Comercio</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Poder Notarial o carta poder, en caso de designar representante legal.</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";
					echo "<tr class=\"text-justify\">";
						echo "<td>Identificación oficial del propietario o poseedor y del representante legal en su caso</td>";
						echo "<td>1</td>";
						echo "<td>1</td>";
						echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td>";
					echo "</tr>";			
				echo "</table>";
				echo "</div>";*/

			}
			elseif($tipo == "of"){
				$link = Conectarse();  
				//Setea para que admita acentos y carácteres especiales
				$query = "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"; 
				$result = mysqli_query($link, $query);  
				$result = mysqli_query($link,"SELECT * FROM iz_oficina_tr WHERE  TR_ID =" . $id_tramite); 

					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						echo "<div class='cat_of_box font-rubro'";
							echo "<div class='cat_req_box font-rubro'>";
								echo "<h2 class=\"text-center\"> OFICINAS </h2>";
								echo "<table class=\"table table-rubro\">";
									echo "<tr class=\"table-title-cat-of\">";
									echo "<th>Dependencia u Organismo</th>";
									echo "<th>Unidad Administrativa Responsable</th>";
									echo "</tr>";
									echo "<tr>";
										echo "<td>" . $row['TR_DO'] . "</td>";
										echo "<td>" . $row['TR_UA'] . "</td>";
									echo "</tr>";						
									echo "<tr>";
										echo "<td class=\"table-title-cat-of\">Titular de Dependencia</td>";
										echo "<td>" . $row['TR_TD'] . "</td>";
									echo "</tr>";	
									echo "<tr>";
										echo "<td colspan=\"2\" class=\"text-center table-title-cat-of\">Domicilio</td>";								
									echo "</tr>";	
									echo "<tr>";
										echo "<td class=\"table-title-cat-of\">Calle</td>";
										echo "<td>" . $row['TR_CA'] . "</td>";
									echo "</tr>";	
									echo "<tr>";
										echo "<td class=\"table-title-cat-of\">No Int y Ext</td>";
										echo "<td>" . $row['TR_NI'] . "</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td class=\"table-title-cat-of\">Colonia</td>";
										echo "<td>" . $row['TR_CO'] . "</td>";
									echo "</tr>";	
									echo "<tr>";
										echo "<td class=\"table-title-cat-of\">Municipio</td>";
										echo "<td>" . $row['TR_MU'] . "</td>";
									echo "</tr>";		
									echo "<tr>";
										echo "<td class=\"table-title-cat-of\">CP</td>";
										echo "<td>" . $row['TR_CP'] . "</td>";
									echo "</tr>";
									echo "<tr>";
											echo "<td class=\"table-title-cat-of\">Lada</td>";
											echo "<td>" . $row['TR_LA'] . "</td>";
									echo "</tr>";
									echo "<tr>";
											echo "<td class=\"table-title-cat-of\">Teléfonos</td>";
											echo "<td>" . $row['TR_TE'] . "</td>";
									echo "</tr>";		
									echo "<tr>";
											echo "<td class=\"table-title-cat-of\">Extensión</td>";
											echo "<td>" . $row['TR_EX'] . "</td>";
									echo "</tr>";	
									echo "<tr>";
											echo "<td class=\"table-title-cat-of\">Fax</td>";
											echo "<td>" . $row['TR_FD'] . "</td>";
									echo "</tr>";
									echo "<tr>";
											echo "<td class=\"table-title-cat-of\">Correo Electrónico</td>";
											echo "<td>" . $row['TR_CE'] . "</td>";
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
				echo "<div class='cat_pf_box font-rubro'";
					echo "<div class='cat_req_box font-rubro'>";
					echo "<h2 class=\"text-center\"> PREGUNTAS FRECUENTES </h2>";
					echo "<table class=\"table table-rubro\">";
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						echo "<tr>";
						echo "<td class=\"table-title-cat-pf\">". $row['TR_PR'] . "</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>" . $row['TR_RE'] . "</td>";
						echo "</tr>";

					}
					echo "</table>";
					echo "</div>";
				echo "</div>";
					echo "</table>";
				echo "</div>";
			}
			elseif($tipo == "do"){
				echo "<div class='cat_do_box font-rubro'";
					echo "<div class='cat_req_box font-rubro'>";		
					echo "<h2 class=\"text-center\"> DOCUMENTOS OBTENIDOS </h2>";
					echo "<table class=\"table table-rubro\">";
							echo "<tr>";
								echo "<td class=\"table-title-cat-do\">Documento a Obtener</td>";
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
				echo "<div class='cat_fl_box font-rubro'";
					echo "<div class='cat_req_box font-rubro'>";
					echo "<h2 class=\"text-center\"> FUNDAMENTO LEGAL </h2>";
					echo "<table class=\"table table-rubro\">";
					echo "<tr>";
						echo "<td class=\"table-title-cat-fl\">Fundamento Legal</td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td><li>";
						echo getValDet($id_tramite, "TR_FL");
						echo "</li></td>";
				echo "</tr>";					
					echo "</table>";
				echo "</div>";
			} 
			elseif($tipo == "tmp"){
				echo "<div class='cat_tmp_box font-rubro'";
					echo "<div class='cat_req_box font-rubro'>";
					echo "<h2 class=\"text-center\"> TIEMPO </h2>";
					echo "<table class=\"table table-rubro\">";
					echo "<tr>";
						echo "<td class=\"table-title-cat-tmp\">Vigencia</td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>";
							echo getValDet($id_tramite, "TR_VI");
						echo "</td>";
				echo "</tr>";	
				echo "<tr>";
						echo "<td class=\"table-title-cat-tmp\">Costo</td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>";
						echo getValDet($id_tramite, "TR_CO");
						echo "</td>";
				echo "</tr>";		
					echo "<tr>";
						echo "<td class=\"table-title-cat-tmp\">Forma de pago</td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>";
						echo getValDet($id_tramite, "TR_FP");
						echo "</td>";
				echo "</tr>";		
				echo "<tr>";
						echo "<td class=\"table-title-cat-tmp\">Donde podrá pagarse</td>";
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
					echo "<div class='cat_req_box font-rubro'>";
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

				else{
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi_x.gif\" alt=\"ventanilla_unica\">";
					//echo "<img class=\"banner-titulo\" src=\"images/plecamor2.png\" alt=\"ventanilla_unica\">";
					

				}	
			}
					function getBannerRubroTramite($cat){
				if($cat == "vivienda"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					//<img src="images/plecas/pleca_vivienda.png" alt="Encabezado" class="img-responsive">
					echo "<img  src=\"images/titles/vivi.png\" alt=\"Encabezado\" class=\"img-responsive\">";
				}
				if($cat == "economia"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/titles/nego.png\" alt=\"negocios\">";
				}
				if($cat == "bienestar"){
			
					echo "<img class=\"img-responsive\" src=\"images/titles/bien.png\" alt=\"bienestar\">";
				}
				if($cat == "quejas"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/titles/queja.png\" alt=\"quejas\">";
				}
				if($cat == "seguridad"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/titles/segu.png\" alt=\"seguridad\">";
				}
				if($cat == "servicios"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/titles/serv.png\" alt=\"servicios\">";
				}
				if($cat == "educacion"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/titles/edu.png\" alt=\"educacion\">";
				}
				if($cat == "ambiente"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/titles/amb.png\" alt=\"ambiente\">";
				}

				else{
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi_x.gif\" alt=\"ventanilla_unica\">";
					//echo "<img class=\"banner-titulo\" src=\"images/plecamor2.png\" alt=\"ventanilla_unica\">";
					

				}	
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
		function getListaTramite($cat){
			//Obtenemos la consulta por rubro
			$link = Conectarse();  
			//Setea para que admita acentos y carácteres especiales
			$query = "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"; 
			$result = mysqli_query($link, $query);  
			$result = mysqli_query($link,"SELECT * FROM tramite_enc WHERE  TR_CAT ='" . getCategoria($cat). "'");  
			$cl_os = 1;
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
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
		        $catFin = 'Economia y Negocios';
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

?>  

