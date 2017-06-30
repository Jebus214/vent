<?php
	include("php/tramites.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<title>Portal Ventanilla Única</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
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
						<img class="img-responsive" src="images/cabecera_1920.png" alt="">
					</div>
				</div>
			</header>
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="contenedor-carrusel ">
						<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="3"></li>	
							    <li data-target="#carousel-example-generic" data-slide-to="4"></li>					    
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <img class="center-block" src="images/BANNER_OPERAGUA.png" alt="...">
							      <div class="carousel-caption">
							        
							      </div>
							    </div>
							    <div class="item">
							      <img class="center-block"  src="images/BANNER_PREDIAL.png" alt="...">
							      </div>
							    <div class="item">
							      <img class="center-block"  src="images/banner_civil_1920.png" alt="...">

							      <div class="carousel-caption">
							       
							      </div>
							    </div>
							    <div class="item">
							      <img class="center-block"  src="images/banner_obras_1920.png" alt="...">

							      <div class="carousel-caption">
							       
							      </div>
							    </div>
							    <div class="item">
							      <img class="center-block"  src="images/banner_agua_1920.png" alt="...">

							      <div class="carousel-caption">
							       
							      </div>
							    </div>
							  </div>
							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="false"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
					</div>
				</div>
			</div>

				<section class="row ventanilla-logo">
							
					<div class="col-xs-1 col-sm-5 col-md-5 col-lg-5 hidden-xs">
						<img src="images/ventanilla_650.png" class="img-responsive" alt="logo"></div>
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
						<div class="row busqueda-inicial">
							<article class="col-md-12">					
								<form action="php/busqueda.php" method="post" class="carga">
									<div class="form-group">
										<input name="strbusqueda" type="text" class= "busqueda sombra" placeholder="Buscar..."
									>

									<input type="submit" class="btn btn-danger sombra" value ="Buscar">		
									</div>							
								</form>
				
								
							</article>
						</div>

							<div>

								  <!-- Nav tabs -->
								  <ul class="nav nav-tabs" role="tablist">
								    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Tema</a></li>
								   <li role="presentation"><a href="MaquetaTramite.php?letra=A&cat=a-z&id_tramite=x">A a la Z</a></li>
								    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Áreas de Gobierno</a></li>
								  </ul>

									<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane <?php echo $activerubro?>" id="home">
										<!--Pestaña  de rubros-->
										<div id="fila-uno" class="row contenedor-rubros">
										<div class="padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<a href="MaquetaTramite.php?tipo=x&cat=bienestar&id_tramite=x">
												<img src="images/bienestar16.png" class="img-responsive blur" alt="salud">
											</a>
										</div>
										<div class="padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<a href="MaquetaTramite.php?tipo=x&cat=educacion&id_tramite=x">
												<img src="images/educacion16.png" class="img-responsive blur" alt="educacion">
											</a>
										</div>
										<div class="padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<a href="MaquetaTramite.php?tipo=x&cat=seguridad&id_tramite=x">
												<img src="images/transito16.png" class="img-responsive blur" alt="seguridad">
											</a>
										</div>
										<div class="padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<a href="MaquetaTramite.php?tipo=x&cat=ambiente&id_tramite=x">
												<img src="images/ambiente16.png" class="img-responsive blur" alt="educacion">
											</a>
										</div>
									</div>
									<div id="fila-dos" class="row contenedor-rubros">

										<div class="padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<a href="MaquetaTramite.php?tipo=x&cat=economia&id_tramite=x">
												<img src="images/economia16.png" class="img-responsive blur" alt="salud">
											</a>
										</div>
										<div class="padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<a href="MaquetaTramite.php?tipo=x&cat=servicios&id_tramite=x">
												<img src="images/servicios16.png" class="img-responsive blur" alt="educacion">
											</a>
										</div>
										<div class="padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<a href="MaquetaTramite.php?tipo=x&cat=vivienda&id_tramite=x">
												<img src="images/vivienda16.png" class="img-responsive blur" alt="educacion">
											</a>
										</div>
										<div class="padding-xs col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<a href="MaquetaTramite.php?tipo=x&cat=quejas&id_tramite=x">
												<img src="images/quejas16.png" class="img-responsive blur" alt="educacion">
											</a>
										</div>
									</div>
								    	
									</div>
								    <div role="tabpanel" class="tab-pane <?php echo $activeaz?>" id="messages">
										
										  <div id="panel-a-z" class="btn-toolbar">
										    <div class="btn-group">
										      <a href="MaquetaTramite.php?letra=A&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">A</button></a>
										      <a href="MaquetaTramite.php?letra=B&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">B</button></a>
										      <a href="MaquetaTramite.php?letra=C&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">C</button></a>
										      <a href="MaquetaTramite.php?letra=D&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">D</button></a>
										      <a href="MaquetaTramite.php?letra=E&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">E</button></a>
										      <a href="MaquetaTramite.php?letra=F&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">F</button></a>
										      <a href="MaquetaTramite.php?letra=G&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">G</button></a>
										      <a href="MaquetaTramite.php?letra=H&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">H</button></a>
										      <a href="MaquetaTramite.php?letra=I&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">I</button></a>
										      <a href="MaquetaTramite.php?letra=J&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">J</button></a>
										      <a href="MaquetaTramite.php?letra=K&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">K</button></a>
										      <a href="MaquetaTramite.php?letra=L&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">L</button></a>
										      <a href="MaquetaTramite.php?letra=M&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">M</button></a>
										      <a href="MaquetaTramite.php?letra=N&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">N</button></a>
										      <a href="MaquetaTramite.php?letra=O&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">O</button></a>
										      <a href="MaquetaTramite.php?letra=P&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">P</button></a>
										      <a href="MaquetaTramite.php?letra=Q&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">Q</button></a>
										      <a href="MaquetaTramite.php?letra=R&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">R</button></a>
										      <a href="MaquetaTramite.php?letra=S&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">S</button></a>
										      <a href="MaquetaTramite.php?letra=T&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">T</button></a>
										      <a href="MaquetaTramite.php?letra=U&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">U</button></a>
										      <a href="MaquetaTramite.php?letra=V&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">V</button></a>
										      <a href="MaquetaTramite.php?letra=W&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">W</button></a>
										      <a href="MaquetaTramite.php?letra=X&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">X</button></a>
										      <a href="MaquetaTramite.php?letra=Y&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">Y</button></a>
										      <a href="MaquetaTramite.php?letra=Z&cat=a-z&id_tramite=x"><button class="btn btn-default btn-xs">Z</button></a>
										    </div>
										  </div>
															
								    </div>
									 <div role="tabpanel" class="tab-pane <?php echo $activeag?>" id="settings">
									    <div class=" rect-claro" >
											<a href="MaquetaTramite.php?letra=1&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">1.       Dirección General de Desarrollo Humano</p>
											</a>
										</div>
									    <div class="rect-oscuro" >
											<a href="MaquetaTramite.php?letra=2&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">2.       Dirección General de Desarrollo Metropolitano</p>
											</a>
										</div>
									    <div class=" rect-claro" >
											<a href="MaquetaTramite.php?letra=3&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">3.       Dirección General de Desarrollo Económico</p>
											</a>
										</div>
									    <div class="rect-oscuro" >
											<a href="MaquetaTramite.php?letra=4&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">4.       Instituto Municipal del Deporte de Cuautitlán Izcalli</p>
											</a>
										</div>																				
									    <div class=" rect-claro" >
											<a href="MaquetaTramite.php?letra=5&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">5.       OPERAGUA</p>
											</a>
										</div>
									    <!--<div class="rect-oscuro" >
											<a href="MaquetaTramite.php?letra=6&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">6.       Oficina de Presidencia</p>
											</a>
										</div>
									    <div class=" rect-oscuro" >
											<a href="MaquetaTramite.php?letra=7&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">4.       Secretaria del Ayuntamiento</p>
											</a>
										</div>-->
									    <div class="rect-oscuro">
											<a href="MaquetaTramite.php?letra=8&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">5.       Tesorería Municipal</p>
											</a>
										</div>
									    <div class=" rect-claro">
											<a href="MaquetaTramite.php?letra=9&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">6.       Contraloría Municipal</p>
											</a>
										</div>
									    <div class="rect-oscuro" >
											<a href="MaquetaTramite.php?letra=10&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">7.   Comisaría General de Seguridad Pública y Tránsito</p>
											</a>
										</div>																				
									    <div class=" rect-claro" >
											<a href="MaquetaTramite.php?letra=11&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">8.   Dirección General de Servicios Públicos
</p>
											</a>
										</div>
									    <!--<div class="rect-oscuro" >
											<a href="MaquetaTramite.php?letra=12&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">12.   Dirección General de Administración</p>
											</a>
										</div>-->																					<div class=" rect-oscuro" >
											<a href="MaquetaTramite.php?letra=13&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">9.   Unidad Municipal de Protección Civil</p>
											</a>
										</div>
									    <div class="rect-claro" >
											<a href="MaquetaTramite.php?letra=14&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">10.   Instituto Municipal para la equidad y el desarrollo de las mujeres</p>
											</a>
										</div>																				
									    <div class=" rect-oscuro" >
											<a href="MaquetaTramite.php?letra=15&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">
											11.   Instituto Municipal de la Juventud
											</p>
											</a>
										</div>
									    <div class="rect-claro" >
											<a href="MaquetaTramite.php?letra=16&cat=dep&id_tramite=x"><p class=\" tramite-lista text-left\">12.   Instituto Municipal de Planeación
</p>
											</a>
										</div>				    
									</div>
								</div>

							</div>


										
							</div>
						
								<!--<div class="col-xs-7 col-xs-offset-1 col-sm-7 col-sm-offset-1 col-md-7 col-md-offset-1">					
								
										
											<!--<img class="rubro" src="http://lorempixel.com/100/100" alt="imagen_ejemplo"> 
											
												
										
												<img class="img-responsive blur" src="images/educacioncultura1.png" alt="Educacion">
										
										
											<img class="img-responsive blur" src="images/seguridadtrans1.png" alt="Seguridad">
										
										
											<img class="img-responsive blur" src="images/medioambiente1.png" alt="Medio Ambiente">
										
										
											
												<a href="ConsultaTramite.php?tipo=x&cat=economia&id_tramite=x"><img class="img-responsive" src="images/economia1.png" alt="imagen_ejemplo"></a>
									
										
											<img class="img-responsive" src="images/serviciospublicos1.png" alt="imagen_ejemplo">
						
											<a href="ConsultaTramite.php?tipo=x&cat=vivienda&id_tramite=x">
												
												<img class="img-responsive" src="images/vivienda.jpg" alt="Viviendas">
											</a>
									
											<img class="img-responsive" src="images/quejas1.png" alt="imagen_ejemplo">	-->

										
										
									
						</section>
						<footer class="pie-portal" id="footer">
							<?php
								getFooter();
							?>
						<a href="http://www.beyondsecurity.com/vulnerability-scanner-verification/ventanilla.izcalli.gob.mx"><img src="https://seal.beyondsecurity.com/verification-images/ventanilla.izcalli.gob.mx/vulnerability-scanner-2.gif" alt="Website Security Test" border="0" /></a>
					</footer>

		</div>
				
	</div>
		<script src= "js/jquery.js"></script>
		<script src= "js/bootstrap.min.js"></script>
			<script type="text/javascript"> (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)){ return;} js = d.createElement(s);  js.id = id; js.async = true; js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&version=v2.3&appId=163316950407128";  fjs.parentNode.insertBefore(js, fjs); }(document, "script", "facebook-jssdk")); </script> <script type="text/javascript">jQuery(document).ready(function($){$("body").bind("copy paste",function(event){var navType = $("body").attr("data-browsername");if (navType=="MSIE"){window.clipboardData.setData("Text","Este material cuenta con derechos de propiedad intelectual. De no existir previa autorización por el H.Ayuntamiento de Cuautitán Izcalli queda expresamente prohibida la publicación, retransmisión, distribución, edición y cualquier otro uso de los contenidos (Incluyendo, pero no limitado a, contenido, texto, fotografías, audios, videos y logotipos).. Muchas gracias.");}else{event.originalEvent.clipboardData.setData("Text","Este material cuenta con derechos de propiedad intelectual. De no existir previa autorización por el H.Ayuntamiento de Cuautitán Izcalli queda expresamente prohibida la publicación, retransmisión, distribución, edición y cualquier otro uso de los contenidos (Incluyendo, pero no limitado a, contenido, texto, fotografías, audios, videos y logotipos).. Muchas gracias."); }event.preventDefault();return false;});});</script>

</body>
</html>