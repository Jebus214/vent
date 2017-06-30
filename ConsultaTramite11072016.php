
<?php
	include("php/tramites.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<title>Consulta de trámites</title>
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
										<input type="hidden" class="btn btn-danger btn-sm sombra-sm" value ="Buscar">
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
											<div class="padding-less col-md-12">
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
											<div class="padding-less col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<a href="index.php"><img class="img-responsive center-block contenedor-vu" src="images/ventanilla650.png" alt="ventanilla única"></a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="contenedor-ag">
										<div class="padding-less col-sm-12 col-xs-12 col-md-12 col-lg-12">
											<div class="busqueda-padding">
												<a href="index.php?activerubro=noactive&activeaz=noactive&activeag=active#settings"><img class="img-responsive center-block" src="images/areas.png" alt="busqueda-areas-gobierno"></a>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="contenedor-az">

								<div class="padding-less col-xs-12 col-sm-12 col-md-12">
									<div class="busqueda-padding">	
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
									<div class="padding-less padding-xs col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<a href="?tipo=req&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/req300.png" alt="requisitos"></a>
									</div>
									<div class="padding-less padding-xs col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<a href="?tipo=do&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/doc300.png" alt="documentos"></a>
									</div>
									<div class="padding-less padding-xs col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<a href="?tipo=of&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/ofi300.png" alt="oficinas"></a>
									</div>
								</div>
							</div>
							<div class="row fila-xs-sm">
								<div class="col-xs-12 col-sm-12 contenedor-rubros-xs-sm">
									<div class="padding-less padding-xs col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<a href="?tipo=fl&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/fund300.png" alt="legal"></a>
									</div>
									<div class="padding-less padding-xs col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<a href="?tipo=tmp&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/tiem300.png" alt="tiempo"></a>
									</div>
									<div class="padding-less padding-xs col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<a href="?tipo=pf&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/preg300.png" alt="preguntas"></a>
									</div>
								</div>								
							</div>			
						</div>
						<div id="principal-dos" class="hidden-xs hidden-sm col-md-1 col-lg-1">
							  <div class="slide-rubro">
							   <div class="siete-columnas-r">
							   				<div class="contenedor-carrusel-rub ">
											<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
												  <div class="carousel-inner" role="listbox">
												    <div class="item active">
												     <a href="MaquetaTramite.php?tipo=x&cat=bienestar&id_tramite=x"> <img class="center-block" src="images/bienestar16.png" alt="..."></a>
												    </div>
												    <div class="item">
												      <a href="MaquetaTramite.php?tipo=x&cat=educacion&id_tramite=x"><img class="center-block"  src="images/educacion16.png" alt="..."></a>
												      </div>
												    <div class="item">
												      <a href="MaquetaTramite.php?tipo=x&cat=economia&id_tramite=x"><img class="center-block"  src="images/economia16.png" alt="..."></a>
												    </div>
												    <div class="item">
												      <a href="MaquetaTramite.php?tipo=x&cat=quejas&id_tramite=x"><img class="center-block"  src="images/quejas16.png" alt="..."></a>
												    </div>
												    <div class="item">
												      <a href="MaquetaTramite.php?tipo=x&cat=servicios&id_tramite=x"><img class="center-block"  src="images/servicios16.png" alt="..."></a>
												    </div>
												    <div class="item">
												      <a href="MaquetaTramite.php?tipo=x&cat=vivienda&id_tramite=x"><img class="center-block"  src="images/vivienda16.png" alt="..."></a>
												    </div>	
												    <div class="item">
												      <a href="MaquetaTramite.php?tipo=x&cat=ambiente&id_tramite=x"><img class="center-block"  src="images/ambiente16.png" alt="..."></a>
												    </div>	
												    <div class="item">
												      <a href="MaquetaTramite.php?tipo=x&cat=seguridad&id_tramite=x"><img class="center-block"  src="images/transito16.png" alt="..."></a>
												    </div>												    																							    
												  </div>

												  <!-- Controls -->
												  <a class="left carousel-control" style="color:#eeeeee;" href="#carousel-example-generic" role="button" data-slide="prev">
												    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
												    <span class="sr-only">Previous</span>
												  </a>
												  <a class="right carousel-control" style="color:#eeeeee;" href="#carousel-example-generic" role="button" data-slide="next">
												    <span class="glyphicon glyphicon-chevron-right" aria-hidden="false"></span>
												    <span class="sr-only">Next</span>
												  </a>
												</div>
										</div>
							   </div>
							   <div class="siete-columnas-r"><a href="?tipo=req&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/req300.png" alt="requisitos"></a></div>
							    <div class="siete-columnas-r"><a href="?tipo=do&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/doc300.png" alt="documentos"></a></div>
							    <div class="siete-columnas-r"><a href="?tipo=of&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/ofi300.png" alt="oficinas"></a></div>
							    <div class="siete-columnas-r"><a href="?tipo=fl&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/fund300.png" alt="legal"></a></div>
							       <div class="siete-columnas-r"><a href="?tipo=tmp&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/tiem300.png" alt="tiempo"></a></div>
							    <div class="siete-columnas-r"><a href="?tipo=pf&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>&#tramites-info"><img class="img-responsive blur center-block" src="images/preg300.png" alt="preguntas"></a></div>
							  </div>

						</div>
						<div id="principal-tres tramites-info-cs" class="padding-less col-xs-12 col-sm-12 col-md-8 col-lg-8">
								<div class="contenedor-tramite-info">
									<div class="banner-encabezado">
										<!--<img src="images/plecas/pleca_negocios.png" alt="Encabezado" class="img-responsive">-->
										<?php
											getBannerRubroTramite($cat);
										?>										
										<div class="tit-tramite-cs-box">
											<p class="tit-tramite-cs"><strong>
												<!--Registro a Emprendedores-->
												<?php
													getVal($id_tramite, 'TR_TIT');
												?>
											</strong></p>
										</div>
										<!--<?php
											getBannerRubroTramite($cat, $id_tramite);
										?>-->
									</div>

										<div id="tramites-info" class="row">
											<div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
												<table class="table <?php getcolor($cat);?>">
													<tr >
														<td id="principal" class="principal" colspan="2">
															<div class="contenedor-desc">

															<?php
																getVal($id_tramite, 'TR_DESC');
															?>
															</div>
														</td>
													</tr>
													<tr>		
														<td id="detalle" class="detalle">
															<div class="contenedor-detalle">
															
														
																Tipo: 															<?php
																	getVal($id_tramite, 'TR_TROSE');
																?>
															</div>
														</td>
														<td id="detalle" class="detalle">
															<div class="contenedor-detalle">
																Costo: 
																<?php getValDet($id_tramite, 'TR_CO'); ?>
															<div class="contenedor-detalle">
														</td>
													</tr>
													
												</table>											
											</div>
											<div class="hidden-xs hidden-sm col-md-12 col-lg-12">
												<table class="table <?php getcolor($cat);?>">
													<tr >
														<td id="principal" class="principal" colspan="2">
															<div class="contenedor-desc">

															<?php
																getVal($id_tramite, 'TR_DESC');
															?>
															</div>
															<!--Realizar el registro a la Red Mexiquense de Puntos para Mover a México y Red de Apoyo al emprendedor, con el fin de vincular 11
															a los emprendedores. micro, pequeña y mediana empresa. con los programas federales, estatales y privados.--></td>
														</td>
													</tr>
													<tr>

														<td id="detalle" class="costo"><div class="contenedor-detalle">Costo: <?php getValDet($id_tramite, 'TR_CO'); ?></div></td>
														<td id="detalle" class="detalle"><div class="contenedor-detalle">
															Tipo: 															<?php
																getVal($id_tramite, 'TR_TROSE');
															?></div>
													</tr>

												
												</table>											
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
																		<!--	<div class="info_tr">-->

												<div class="info_tr">
										<?php
											getTramiteInfo($tipo, $cat, $id_tramite);
											?>
												</div>
							<!--</div>-->

											</div>
											
										</div>
										
											<!--<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
												<div class="cat-viv-cs">
													<p class="ti-blanco">
														Realizar el registro a la Red Mexiquense de Puntos para Mover a México y Red de Apoyo al emprendedor, con el fin de vincular 11
														a los emprendedores. micro, pequeña y mediana empresa. con los programas federales, estatales y privados.
													</p>
												</div>

											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
												
													<div class="row">
														
														<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
															<div class="cat-viv-cs">
																<p class="ti-blanco">Tipo:</p>
															</div>
														</div>
														
														<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
															<div class="cat-viv-cs">
																<p class="ti-blanco">Costo:</p>
															</div>
														</div>
												
											</div>											
											
										</div>-->

								
						<!--	<div class="info_tr">-->
								<!--<?php
									getTramiteInfo($tipo, $cat, $id_tramite);
								?>-->
							<!--</div>-->
						</div>
					</div>
				</div>
		</div>
		<footer class="pie-portal" id="footer">
			<?php
				getFooter();
			?>

		</footer>
		</div>
	</div>
	<script src= "js/jquery.js"></script>
	<script src= "js/bootstrap.min.js"></script>
	
</body>
</html>