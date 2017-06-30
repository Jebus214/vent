
<?php
	include("php/tramites.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Consulta de trámites</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
</head>
<body>
	<!--<header>
	<div class="header container">
		<div class="row col-sm-12 col-md-12">
			<img src="images/logo_ap.png" alt="logo">
			<img class="img-rubro-header hidden-sm hidden-xs" src="images/pleca_vivienda.gif" alt="logo">
		</div>
	</div>
	</header>-->
	<div class="container-fluid">
		
		
			<div class="row">
				<header>
				<div class="row">
					<div class="redes-icon col-md-12 col-lg-12">
					<a href="">
							<img class="img-responsive iconos-redes" src="images/instagram_icon.png" alt="">
						</a>

						
						<a href="">
							<img class="img-responsive iconos-redes" src="images/twitter_icon.png" alt=""></a>

											<a href="">
							<img class="img-responsive iconos-redes" src="images/face_icon.png" alt=""></a>
					

					</div>
					<div class="banner-principal">
						<img class="img-responsive" src="images/cabecera_b.png" alt="">
					</div>
				</div>
			</header>

				<div class="row">
					<div class="col-sm-12 col-xs-12 col-md-5">
						<section class="row">
							<aside class="col-xs-5 col-sm-5 col-md-5">
								<a href="index.html">
									<div class="ventanilla-min">
										<img src="images/ventanillamin.gif" class="img-responsive" alt="logo">
									</div>
								</a>
							</aside>
							<article class="col-xs-7 col-sm-7 col-md-7">					
								<div class="contenedor-rubros-min">
									<div class="filauno row">
										<!--<img class="rubro" src="http://lorempixel.com/100/100" alt="imagen_ejemplo"> -->
										<a href="index.html"><img class="rubro-min blur" src="images/log1.png" alt="Salud y Bienestar"></a>
										<img class="rubro-min blur" src="images/log2.png" alt="Educacion">
										<img class="rubro-min blur" src="images/log3.png" alt="Seguridad">
										<img class="rubro-min blur" src="images/log4.png" alt="Medio Ambiente">	
									</div>
									<div class="filados row">
										<a href="ConsultaTramite.php?tipo=x&cat=economia&id_tramite=x"><img class="rubro-min blur" src="images/log5.png" alt="imagen_ejemplo"></a>
										<img class="rubro-min blur" src="images/log6.png" alt="imagen_ejemplo">
										<a href="ConsultaTramite.php?tipo=x&cat=vivienda&id_tramite=x">
											
											<img class="rubro-min blur" src="images/log7.jpg" alt="Viviendas">
										</a>
										<img class="rubro-min blur" src="images/log8.png" alt="imagen_ejemplo">	
									</div>
									
								</div>
							</article>
					</section>	
					</div>
					<div class="col-md-7">
						<div class="titulo-tramite hidden-sm hidden-xs">
							<?php
								getBannerRubro($cat, $id_tramite);
								?>
						<!--	<img class="banner-titulo" src="images/banner_vi.gif" alt="ventanilla_unica">
								<!--<P><h4 class="text-center">Cédula Informativa de Zonificación</h4></P>
								<small class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet molestias, voluptatum impedit cumque quisquam ipsum non obcaecati dolor saepe deleniti sunt at natus, nam voluptates.</small>
						-->
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-sm-3 col-md-3">
						<div class="row">	
							<div class="col-md-12 busqueda-clas">
								<div class="busqueda-padding">
									<img src="images/areasdegobierno.gif" alt="busqueda-areas-gobierno">
								</div>
							</div>
							<div class="col-md-12">
								<div class="busqueda-padding">	
									<img src="images/alaz.gif" alt="busqueda-a-z">
								</div>
							</div>	
							<div class="col-md-12">
								<div class="busqueda-padding">	
									<form action="./">
										<div class="form-group">
										<input type="submit" class="btn btn-danger btn-sm sombra-sm" value ="Buscar">
											<input type="text" class= "busqueda_tramite-sm sombra-sm" placeholder="Buscar..."
									>
		
										</div>							
									</form>
							</div>
							</div>					
							<div class="col-md-12">
								<div class="lista_tr">
														<?php
									getListaTramites($cat);
								?>
	
								</div>
								
							</div>

						</div>
					</div>
					<div class="col-sm-2 col-md-2">
						<div class="iconografia">
							<a href="ConsultaTramite.php?tipo=req&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>"><img class="img-cat blur" src="http://lorempixel.com/80/80" alt="categoria"></a>
							<a href="ConsultaTramite.php?tipo=req&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>"><img class="img-cat blur" src="images/requisitos.png" alt="categoria"></a>
							<a href="ConsultaTramite.php?tipo=of&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>"><img class="img-cat blur" src="images/oficinas.png" alt="categoria"></a>
							<a href="ConsultaTramite.php?tipo=do&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>"><img class="img-cat blur" src="images/documentos.png" alt="categoria"></a>
							<a href="ConsultaTramite.php?tipo=tmp&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>"><img class="img-cat blur" src="images/tiempo.png" alt="categoria"></a>
							<a href="ConsultaTramite.php?tipo=fl&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>"><img class="img-cat blur" src="images/fundamento.png" alt="categoria"></a>
							<a href="ConsultaTramite.php?tipo=pf&cat=<?php echo $cat?>&id_tramite=<?php echo $id_tramite?>"><img class="img-cat blur" src="images/preguntas.png" alt="categoria"></a>
						</div>
					</div>
					<div class="col-sm-7 col-md-7">
							
					<!--	<div class="info_tr">-->
							<?php
								getTramiteInfo($tipo, $cat, $id_tramite);
							?>
						<!--</div>-->
					</div>
				</div>
			</div>

					<footer>
				 		<div class="row">
				 			<div class="pie-portal">
				 				<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">
				 					<h3 class="ti-blanco text-center">
				 						LINKS DE INTERÉS
				 					</h3>
				 					<a href="#"><p class="texto-pie">
				 						<img class="img-responsives" src="http://lorempixel.com/20/20" alt="">
				 						<span>Portal del Gobierno del Estado de México</span>
				 					</p>
				 					</a>
									<a href="#"><p class="texto-pie">
										<img class="img-responsives" src="http://lorempixel.com/20/20" alt="">
										<span>Portal del Gobierno del Estado de México</span>
									</p>
									</a>
				 					<a href="#"><p class="texto-pie">
				 						<img class="img-responsives" src="http://lorempixel.com/20/20" alt="">
				 						<span>Portal del Gobierno del Estado de México</span>
				 					</p>
				 					</a>
				 					<a href="#"><p class="texto-pie">
				 						<img class="img-responsives" src="http://lorempixel.com/20/20" alt="">
				 						<span>Portal del Gobierno del Estado de México</span>
				 					</p>
				 					</a>
				 				</div>
				 				<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">
				 					<h3 class="ti-blanco text-center">
				 						ACERCA DEL SITIO
				 					</h3>		
				 					
				 						<a href="#"><li class="li-red">
				 							<ul class="texto-pie">
				 								Mapa de Sitio
				 							</ul>
				 						</li>
				 						</a>
				 					
				 					
				 						<a href="#"><li class="li-red">
				 							<ul class="texto-pie">
				 								Avisos Legales
				 							</ul>
				 						</li>
				 						</a>
				 					
				 					
				 						<a href="#"><li class="li-red">
				 							<ul class="texto-pie">
				 								Acerca del Sitio
				 							</ul>
				 						</li>
				 						</a>
				 							 					
				 				</div>
				 				<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">
				 					<h3 class="ti-blanco text-center">
				 						CONTACTO
				 					</h3>
				 					<img class="img-responsive center-block" src="http://clubdecampolafresneda.com/wp-content/uploads/2015/04/icono-google.png" alt="" width="20%">
				 					<p class="texto-pie">
				 						Av. Primero de Mayo #100 Col.
										Centro Urbano Cuautitlán Izcalli,
										Edo de México
				 					</p>
				 					<p class="texto-pie">
					 					<strong>
					 						Teléfono:58642500
					 					</strong>
				 					</p>

				 				</div>
				 				<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">
				 					<h3 class="ti-blanco text-center">
				 						ENLACES DE INTERÉS
				 					</h3>
				 					<a href="#"><li class="li-red">
			 							<ul class="texto-pie">
			 								Mapa de Sitio
			 							</ul>
			 						</li>
			 						</a>
			 					
			 					
			 						<a href="#"><li class="li-red">
			 							<ul class="texto-pie">
			 								Avisos Legales
			 							</ul>
			 						</li>
			 						</a>
			 					
			 					
			 						<a href="#"><li class="li-red">
			 							<ul class="texto-pie">
			 								Acerca del Sitio
			 							</ul>
			 						</li>		
			 						</a>		 					
				 				</div>
				 			</div>
				 			
				 		</div>
					</footer>
	</div>
	<script src= "js/jquery.js"></script>
	<script src= "js/bootstrap.min.js"></script>
	
</body>
</html>