

	<?php  
	$tipo = $_GET['tipo'];
	$cat = $_GET['cat'];
	$id_tramite = $_GET['id_tramite'];





		//tomamos los datos del archivo conexion.php  
	//	include("conexion.php");  
	//	$link = Conectarse();  
		//Setea para que admita acentos y carácteres especiales
	//	$query = "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"; 
	//	$result = mysqli_query($link, $query);  
		//se envia la consulta  
	//	$result = mysqli_query($link,"SELECT * FROM tramite_enc WHERE  id_tramite = 1");  
		
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
			if($tipo == "req" && $id_tramite == 1){
					echo "<div class='cat_req_box font-rubro'>";
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
																echo "<td>Articulo 1.1 fracción IV, 1.2,1.4,1.5 fracciones I y X, 1-8,5.1,5.2,5.3 fracción XXXIV</td></tr></table>";*/	
								     echo" </div>
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

								        
								      echo "</div>
								    </div>
								  </div>
								</div>";
							echo "</div>";
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
			elseif($tipo == "of" && $id_tramite == 1){
				echo "<div class='cat_of_box font-rubro'";
					echo "<div class='cat_req_box font-rubro'>";
					echo "<h2 class=\"text-center\"> OFICINAS </h2>";
					echo "<table class=\"table table-rubro\">";
						echo "<tr class=\"table-title-cat-of\">";
								echo "<th>Dependencia u Organismo</th>";
								echo "<th>Unidad Administrativa Responsable</th>";
						echo "</tr>";
						echo "<tr>";
								echo "<td>Dirección de Desarrollo Urbano</td>";
								echo "<td>Departamento de Uso de Suelo</td>";
						echo "</tr>";						
						echo "<tr>";
								echo "<td class=\"table-title-cat-of\">Titular de Dependencia</td>";
								echo "<td>C. Juan Carlos Sanchez Velarde</td>";
						echo "</tr>";	
						echo "<tr>";
								echo "<td colspan=\"2\" class=\"text-center table-title-cat-of\">Domicilio</td>";								
						echo "</tr>";	
						echo "<tr>";
								echo "<td class=\"table-title-cat-of\">Calle</td>";
								echo "<td>AV. La Super, Lote 374-7B, Mz C44A</td>";
						echo "</tr>";	
						echo "<tr>";
								echo "<td class=\"table-title-cat-of\">No Int y Ext</td>";
								echo "<td>S/N</td>";
						echo "</tr>";	
						echo "<tr>";
								echo "<td class=\"table-title-cat-of\">Colonia</td>";
								echo "<td>Centro Urbano</td>";
						echo "</tr>";	
						echo "<tr>";
								echo "<td class=\"table-title-cat-of\">Municipio</td>";
								echo "<td>Cuautitlán Izcalli</td>";
						echo "</tr>";		
						echo "<tr>";
								echo "<td class=\"table-title-cat-of\">CP</td>";
								echo "<td>54700</td>";
						echo "</tr>";
						echo "<tr>";
								echo "<td class=\"table-title-cat-of\">Lada</td>";
								echo "<td>55</td>";
						echo "</tr>";
						echo "<tr>";
								echo "<td class=\"table-title-cat-of\">Teléfonos</td>";
								echo "<td>58642500</td>";
						echo "</tr>";		
						echo "<tr>";
								echo "<td class=\"table-title-cat-of\">Extensión</td>";
								echo "<td>No Aplica</td>";
						echo "</tr>";	
						echo "<tr>";
								echo "<td class=\"table-title-cat-of\">Fax</td>";
								echo "<td>No Aplica</td>";
						echo "</tr>";
						echo "<tr>";
								echo "<td class=\"table-title-cat-of\">Correo Electrónico</td>";
								echo "<td>victor.alejandro.vazquez@izcalligob.mx</td>";
						echo "</tr>";											
					echo "</table>";
				echo "</div>";
			}
			elseif($tipo == "pf" && $id_tramite == 1){
				echo "<div class='cat_pf_box font-rubro'";
					echo "<div class='cat_req_box font-rubro'>";
					echo "<h2 class=\"text-center\"> PREGUNTAS FRECUENTES </h2>";
					echo "<table class=\"table table-rubro\">";
					echo "<tr>";
						echo "<td class=\"table-title-cat-pf\">¿Otorgan apoyos económicos?</td>";
					echo "</tr>";
					echo "<tr>";
							echo "<td>Dentro de la red se encuentran instancias que otorgan apoyos económicos como: KUBO, NAFIN</td>";
					echo "</tr>";
					echo "<td class=\"table-title-cat-pf\">¿Se puede registrar estando en Buro de Crédito?</td>";
					echo "</tr>";
					echo "<tr>";
							echo "<td>Sí, el registro se puede realizar</td>";
					echo "</tr>";
					echo "<td class=\"table-title-cat-pf\">¿Es necesario tener correo electrónico?</td>";
					echo "</tr>";
					echo "<tr>";
							echo "<td>Sí, es indispensable para el registro a la Red.</td>";
					echo "</tr>";
					echo "</table>";
				echo "</div>";
			}
			elseif($tipo == "do" && $id_tramite == 1){
				echo "<div class='cat_do_box font-rubro'";
					echo "<div class='cat_req_box font-rubro'>";		
					echo "<h2 class=\"text-center\"> DOCUMENTOS OBTENIDOS </h2>";
					echo "<table class=\"table table-rubro\">";
							echo "<tr>";
								echo "<td class=\"table-title-cat-do\">Documento a Obtener</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>Hoja de registro</td>";
							echo "</tr>";					
					echo "</table>";
				echo "</div>";
			}
			elseif($tipo == "fl" && $id_tramite == 1){
				echo "<div class='cat_fl_box font-rubro'";
					echo "<div class='cat_req_box font-rubro'>";
					echo "<h2 class=\"text-center\"> FUNDAMENTO LEGAL </h2>";
					echo "<table class=\"table table-rubro\">";
					echo "<tr>";
						echo "<td class=\"table-title-cat-fl\">Fundamento Legal</td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td><li>Artículo 34, fracción VI del reglamento Interior de la Administración Pública Municipal de Cuautitlán Izcalli.</li></td>";
				echo "</tr>";					
					echo "</table>";
				echo "</div>";
			} 
			elseif($tipo == "tmp" && $id_tramite == 1){
				echo "<div class='cat_tmp_box font-rubro'";
					echo "<div class='cat_req_box font-rubro'>";
					echo "<h2 class=\"text-center\"> TIEMPO </h2>";
					echo "<table class=\"table table-rubro\">";
					echo "<tr>";
						echo "<td class=\"table-title-cat-tmp\">Vigencia</td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>Indefinido</td>";
				echo "</tr>";	
				echo "<tr>";
						echo "<td class=\"table-title-cat-tmp\">Costo</td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>Gratuito</td>";
				echo "</tr>";		
					echo "<tr>";
						echo "<td class=\"table-title-cat-tmp\">Forma de pago</td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>No Aplica</td>";
				echo "</tr>";		
				echo "<tr>";
						echo "<td class=\"table-title-cat-tmp\">Donde podrá pagarse</td>";
					echo "</tr>";
				echo "<tr>";
						echo "<td>No Aplica</td>";
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
					function getBannerRubroTramite($cat, $id_tramite){
				if($cat == "vivienda" && $id_tramite == "1"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					//<img src="images/plecas/pleca_vivienda.png" alt="Encabezado" class="img-responsive">
					echo "<img  src=\"images/plecas/pleca_vivienda.png\" alt=\"Encabezado\" class=\"img-responsive\">";
				}
				if($cat == "economia" && $id_tramite == "1"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_negocios.png\" alt=\"negocios\">";
				}
				if($cat == "bienestar" && $id_tramite == "1"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_bienestar.png\" alt=\"bienestar\">";
				}
				if($cat == "quejas" && $id_tramite == "1"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_quejas.png\" alt=\"quejas\">";
				}
				if($cat == "seguridad" && $id_tramite == "1"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_seguridad.png\" alt=\"seguridad\">";
				}
				if($cat == "servicios" && $id_tramite == "1"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_servicios.png\" alt=\"servicios\">";
				}
				if($cat == "educacion" && $id_tramite == "1"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_educacion.png\" alt=\"educacion\">";
				}
				if($cat == "ambiente" && $id_tramite == "1"){
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi.gif\" alt=\"ventanilla_unica\">";
					echo "<img class=\"img-responsive\" src=\"images/plecas/pleca_ambiente.png\" alt=\"ambiente\">";
				}

				else{
					//echo "<img class=\"banner-titulo\" src=\"images/banner_vi_x.gif\" alt=\"ventanilla_unica\">";
					//echo "<img class=\"banner-titulo\" src=\"images/plecamor2.png\" alt=\"ventanilla_unica\">";
					

				}	
			}
		function getListaTramite($cat){
			if($cat =="economia"){
				echo "<div class=\" rect-claro\" >
											<a href=\" ConsultaTramite.php?tipo=x&cat=economia&id_tramite=1\" >
												<p class=\" tramite-lista text-left\" >
													1- Registro a emprendedores
												</p>
											</a>
											</div>
											<div class=\" rect-oscuro\" >
											<a href=\" #\" >
												<p class=\" tramite-lista text-left\" >
													2- Facturación Electrónica
												</p>
											</a>
											</div>
											<div class=\" rect-claro\" >
											<a href=\" #\" >
												<p class=\" tramite-lista text-left\" >
													3- Capacitación a Emprendedores, Micro, Pequeña, Mediana, Empresa e Industriales.
												</p>
											</a>
											</div>
																						<div class=\" rect-oscuro\" >
											<a href=\" #\" >
												<p class=\" tramite-lista text-left\" >
													4- Bolsa de Trabajo.
												</p>
											</a>
											</div>
											";

			}
						if($cat =="vivienda"){
				echo "<div class=\" rect-claro\" >
											<a href=\"#\" >
												<p class=\" tramite-lista text-left\" >
													1- Cambio de propietario
												</p>
											</a>
											</div>
											<div class=\" rect-oscuro\" >
											<a href=\" #\" >
												<p class=\" tramite-lista text-left\" >
													2- Cambio de uso de suelo
												</p>
											</a>
											</div>

											";

			}
									if($cat =="seguridad"){
				echo "<div class=\" rect-claro\" >
											<a href=\"#\" >
												<p class=\" tramite-lista text-left\" >
													1- Taller de educación víal
												</p>
											</a>
											</div>
											<div class=\" rect-oscuro\" >
											<a href=\" #\" >
												<p class=\" tramite-lista text-left\" >
													2- Call Center 072
												</p>
											</a>
											</div>

											";

			}
												if($cat =="educacion"){
				echo "<div class=\" rect-claro\" >
											<a href=\"#\" >
												<p class=\" tramite-lista text-left\" >
													1- Inscripción al Taller


												</p>
											</a>
											</div>
											<div class=\" rect-oscuro\" >
											<a href=\" #\" >
												<p class=\" tramite-lista text-left\" >
													2- Servicio de Bibliotecas
												</p>
											</a>
											</div>

											";

			}

															if($cat =="quejas"){
				echo "<div class=\" rect-claro\" >
											<a href=\"#\" >
												<p class=\" tramite-lista text-left\" >
													1- Atención de Quejas y Denuncias


												</p>
											</a>
											</div>
											<div class=\" rect-oscuro\" >
											<a href=\" #\" >
												<p class=\" tramite-lista text-left\" >
													2- Atención de 	Sugerencias
												</p>
											</a>
											</div>

											";

			}
															if($cat =="bienestar"){
				echo "<div class=\" rect-claro\" >
											<a href=\"#\" >
												<p class=\" tramite-lista text-left\" >
													1- Audiometría


												</p>
											</a>
											</div>


											";

			}
															if($cat =="servicios"){
				echo "<div class=\" rect-claro\" >
											<a href=\"#\" >
												<p class=\" tramite-lista text-left\" >
													1- Autorización para la construcción y/o colocación de lápida o jardinera en fosa.


												</p>
											</a>
											</div>
											<div class=\" rect-oscuro\" >
											<a href=\" #\" >
												<p class=\" tramite-lista text-left\" >
													2- Bacheo a causa de reparación de fugas de agua potable
												</p>
											</a>
											</div>

											";

			}

		}


?>  

