
<?php
	include("php/tramites.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0">
	<title>Consulta de trámites</title>
	<link rel="shortcut icon" href="images/favicon.png" type="image/icon">
	<link rel="icon" href="images/favicon.png" type="image/icon">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/estilos_xs.css">
	<link rel="stylesheet" href="css/estilos_sm.css">
	<link rel="stylesheet" href="css/estilos_md.css">
	<link rel="stylesheet" href="css/estilos_lg.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
</head>
<body>
	<div class="container-fluid" style="padding:0px;">
		
		<div class="contenedor-principal">

				<div class="row-fluid">
				<header>
					<div class="row-fluid">
						<div class="redes-icon col-md-12 col-lg-12">
						<a href="https://www.youtube.com/channel/UCxwT3kKyGHXE6MAQTzej2qA/videos">
								<img class="img-responsive iconos-redes" src="images/rs/youtube.png" alt="">
							</a>

							
							<a href="https://twitter.com/CuautitlanMX">
								<img class="img-responsive iconos-redes" src="images/rs/twitter.png" alt=""></a>

												<a href="https://www.facebook.com/AyuntamientoCuautitlanIzcalli/">
								<img class="img-responsive iconos-redes" src="images/rs/facebook.png" alt=""></a>

								<a href="https://www.instagram.com/explore/locations/399946891/">
								<img class="img-responsive iconos-redes" src="images/rs/instagram.png" alt=""></a>
						

						</div>
						<div class="banner-principal">
							<a href="index.php"><img class="img-responsive" src="images/cabecera_1920.png" alt=""></a>
						</div>
					</div>
				</header>
				<div class="contenedor-secundario">
					<div class="row">
			
					 <div  id="principal-uno-xs-sm" class="padding-xs col-xs-12 col-sm-12 hidden-md hidden-lg">
						<div class="contenedor-busqueda-tramite-xs-sm">
							<div class="padding-xs img-bus-space col-xs-12 col-sm-12">
								<a href="index.php"><img class="img-responsive" src="images/ventanilla_resp.png" alt=""></a>
							</div>

							<div class="padding-xs img-bus-space col-xs-6 col-sm-6">
								<a href="http://rivca.com.mx/izcalli/index.php?activerubro=noactive&activeaz=noactive&activeag=active#settings"><img class="img-responsive" src="images/areas_resp.png" alt=""></a>
							</div>
							<div class="padding-xs img-bus-space col-xs-6 col-sm-6">
								<a href="http://rivca.com.mx/izcalli/MaquetaTramite.php?letra=A&cat=a-z&id_tramite=x"><img class="img-responsive" src="images/alaz_resp.png" alt=""></a>
							</div>
							<div class="padding-xs img-bus-space col-xs-12 col-sm-12">
								<form action="php/busqueda.php" method="post" class="carga">
									<div class="form-group center-block">
										<input type="hidden" class="btn btn-danger btn-sm  sombra-sm" value ="Buscar">
											<input type="text" name="strbusqueda" class= "busqueda_tramite-resp sombra-sm" placeholder="Buscar...">
					

									</div>							
								</form>
							</div>

				 	</div>
				 </div>
						<div  id="principal-uno" class="hidden-xs hidden-sm col-md-3 col-lg-3">
							<div class="contenedor-busqueda-tramite">
								<div class="contenedor-contenido-busqueda-tramite">
									<div class="row">
										<div class="contenedor-bs">
											<div class="col-md-12">
												<div class="busqueda-padding">	
													<form action="php/busqueda.php" method="post" class="carga">
														<div class="form-group center-block">
															<input type="submit" class="btn btn-danger sombra-sm" value ="Buscar">
																<input type="text" name="strbusqueda" class= "busqueda_tramite-sm sombra-sm" placeholder="Buscar...">
										
			
														</div>							
													</form>
								</div>
								</div>			
										</div>
									</div>
									<div class="row">
										<div class="contenedor-vu">
											<div class="padding-less  col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<a href="index.php"><img class="img-responsive center-block contenedor-vu" src="images/ventanilla650.png" alt="ventanilla única"></a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="contenedor-ag">
										<div class="padding-less  col-sm-12 col-xs-12 col-md-12 col-lg-12">
											<div class="busqueda-padding">
												<a href="index.php?activerubro=noactive&activeaz=noactive&activeag=active#settings"><img class="img-responsive center-block" src="images/areas.png" alt="busqueda-areas-gobierno"></a>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="contenedor-az">

								<div class="padding-less col-xs-12 col-sm-12 col-md-12">
									<div class="  busqueda-padding">	
										<a href="MaquetaTramite.php?letra=A&cat=a-z&id_tramite=x"><img class="img-responsive center-block" src="images/alaz.png" alt="busqueda-a-z"></a>
									</div>
								</div>	
										</div>
									</div>
								</div>
							</div>

						</div>
						<div id="principal-dos-xs-sm" class="col-xs-12 col-sm-12 hidden-md hidden-lg">
							<div class="row fila-xs-sm">
								<div class="col-xs-12 col-sm-12 contenedor-rubros-xs-sm">
									<div class="padding-less padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<a href="MaquetaTramite.php?tipo=x&cat=bienestar&id_tramite=x">
											<img src="images/bienestar16.png" class="img-responsive blur" alt="salud">
										</a>
									</div>
									<div class="padding-less padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<a href="MaquetaTramite.php?tipo=x&cat=educacion&id_tramite=x">
											<img src="images/educacion16.png" class="img-responsive blur" alt="educacion">
										</a>
									</div>
									<div class="padding-less padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<a href="MaquetaTramite.php?tipo=x&cat=seguridad&id_tramite=x">
											<img src="images/transito16.png" class="img-responsive blur" alt="seguridad">
										</a>
									</div>
									<div class="padding-less padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<a href="MaquetaTramite.php?tipo=x&cat=ambiente&id_tramite=x">
											<img src="images/ambiente16.png" class="img-responsive blur" alt="educacion">
										</a>
									</div>
								</div>
							</div>
							<div class="row fila-xs-sm">
								<div class="col-xs-12 col-sm-12 contenedor-rubros-xs-sm">
									<div class="padding-less padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<a href="MaquetaTramite.php?tipo=x&cat=economia&id_tramite=x">
											<img src="images/economia16.png" class="img-responsive blur" alt="salud">
										</a>
									</div>
									<div class="padding-less padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<a href="MaquetaTramite.php?tipo=x&cat=servicios&id_tramite=x">
											<img src="images/servicios16.png" class="img-responsive blur" alt="educacion">
										</a>
									</div>
									<div class="padding-less padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<a href="MaquetaTramite.php?tipo=x&cat=vivienda&id_tramite=x">
											<img src="images/vivienda16.png" class="img-responsive blur" alt="educacion">
										</a>
									</div>
									<div class="padding-less padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<a href="MaquetaTramite.php?tipo=x&cat=quejas&id_tramite=x">
											<img src="images/quejas16.png" class="img-responsive blur" alt="educacion">
										</a>
									</div>
								</div>								
							</div>
						</div>
						<div id="principal-dos" class="hidden-xs hidden-sm col-md-1 col-lg-1">
							  <div class="cat-img">
							    <div class="siete-columnas">
							    	<a href="?tipo=x&cat=bienestar&id_tramite=x">
							    		<img class="img-responsive blur center-block" src="images/bienestar16.png" alt="categoria">
							    	</a>
							    </div>
							 
							    <div class="siete-columnas"><a href="?tipo=x&cat=economia&id_tramite=x"><img class="img-responsive blur center-block" src="images/economia16.png" alt="categoria"></a></div>
							    <div class="siete-columnas"><a href="?tipo=x&cat=educacion&id_tramite=x"><img class="img-responsive blur center-block" src="images/educacion16.png" alt="categoria"></a></div>
							    <div class="siete-columnas"><a href="?tipo=x&cat=servicios&id_tramite=x"><img class="img-responsive blur center-block" src="images/servicios16.png" alt="categoria"></a></div>							 
							    <div class="siete-columnas"><a href="?tipo=x&cat=seguridad&id_tramite=x"><img class="img-responsive blur center-block" src="images/transito16.png" alt="categoria"></a></div>
							    <div class="siete-columnas"><a href="?tipo=x&cat=vivienda&id_tramite=x"><img class="img-responsive blur center-block" src="images/vivienda16.png" alt="categoria"></a></div>
							       <div class="siete-columnas"><a href="?tipo=x&cat=ambiente&id_tramite=x"><img class="img-responsive blur center-block" src="images/ambiente16.png" alt="categoria"></a></div>
							    <div class="siete-columnas"><a href="?tipo=x&cat=quejas&id_tramite=x"><img class="img-responsive blur center-block" src="images/quejas16.png" alt="categoria"></a></div>
							  </div>

						</div>
						<div id="principal-tres tramites-info" class="padding-less  col-xs-12 col-sm-12 col-md-8 col-lg-8">
								<div class="padding-less padding-xs col-xs-12 col-sm-12 contenedor-tramite-info">
									<div class="banner-encabezado">
										<?php
											getBannerRubro($cat, $id_tramite);
										?>
										<!--<img src="images/plecas/pleca_vivienda.png" alt="Encabezado" class="img-responsive">-->
									</div>

										<div class="lista_tr">
											<?php
												if(isset($letra)){
													getListaTramite($cat, $letra);

												}else{
													getListaTramite($cat, "x");	
												}
												

											?>

										</div>

								</div>
						<!--	<div class="info_tr">-->
								<!--<?php
									getTramiteInfo($tipo, $cat, $id_tramite);
								?>-->
							<!--</div>-->
						</div>
					</div>
				</div>
				<div style="padding:20px">
					
				</div>
						<footer class="pie-portal" id="footer">
							<?php
								getFooter();
							?>

					</footer>
		</div>
		</div>
	</div>
	<script src= "js/jquery.js"></script>
	<script src= "js/bootstrap.min.js"></script>
	
	<!--<script type="text/javascript"> (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)){ return;} js = d.createElement(s);  js.id = id; js.async = true; js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&version=v2.3&appId=163316950407128";  fjs.parentNode.insertBefore(js, fjs); }(document, "script", "facebook-jssdk")); </script> <script type="text/javascript">jQuery(document).ready(function($){$("body").bind("copy paste",function(event){var navType = $("body").attr("data-browsername");if (navType=="MSIE"){window.clipboardData.setData("Text","Este material cuenta con derechos de propiedad intelectual. De no existir previa autorización por el H.Ayuntamiento de Cuautitán Izcalli queda expresamente prohibida la publicación, retransmisión, distribución, edición y cualquier otro uso de los contenidos (Incluyendo, pero no limitado a, contenido, texto, fotografías, audios, videos y logotipos).. Muchas gracias.");}else{event.originalEvent.clipboardData.setData("Text","Este material cuenta con derechos de propiedad intelectual. De no existir previa autorización por el H.Ayuntamiento de Cuautitán Izcalli queda expresamente prohibida la publicación, retransmisión, distribución, edición y cualquier otro uso de los contenidos (Incluyendo, pero no limitado a, contenido, texto, fotografías, audios, videos y logotipos).. Muchas gracias."); }event.preventDefault();return false;});});</script>
-->
</body>
</html>