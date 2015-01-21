<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Mitanash</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/zoom.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="icon" href="images/others/favicon-verde.png">

    </head><!--/head-->


    <body>
        <header id="header"><!--header-->
            <!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.php"><img src="images/others/logo-blanco.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8" style="margin-top: 10px;">
                            <div class="mainmenu pull-right">
                                <ul class="nav navbar-nav collapse navbar-collapse" style="margin-top: 6px;">
                                    <li><a href="index.php" class="active">Inicio</a></li>
                                    <li class="dropdown"><a href="product_list.php">Productos<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="product_list.php">Gafas</a></li>
                                            <li><a href="product_list.php">Relojes</a></li> 
                                            <li><a href="product_list.php">Bolsos</a></li> 
                                            <li><a href="product_list.php">Tulas</a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="About.php">Quiénes Somos</a></li>
                                    <li><a href="contact.php">Contáctenos</a></li>
                                    <li>
                                        <div class="social-icons pull-right">
                                            <ul class="nav navbar-nav">
                                                <li><a href="https://www.facebook.com/Mitanash"><i id="fb" class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://instagram.com/mitanash"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="https://plus.google.com/u/0/105935518828308372806/posts"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->
            <div class="topbar"></div>     
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header><!--/header-->

        <section style="margin-top: 140px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="col-sm-4">
                                <div class="view-product">
                                    <span class='zoom' id='ex1'>
                                        <img style="width:355px;height:380px;" id="principalImage" src="images/products/large/p<?php echo $_GET["product_id"] ?>.1.png" alt="imagen principal del producto" />
                                    </span>
                                    <h3>Acercar</h3>
                                </div>
                                <div id="similar-product" class="carousel slide" data-ride="carousel">

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" id="formulario">
                                        <div class="item active">
                                            <a href="javascript:updateImagePrincipal('p<?php echo $_GET["product_id"] ?>.1.png')"><img src="images/products/similar/s<?php echo $_GET["product_id"] ?>.1.png" alt=""></a>
                                            <a href="javascript:updateImagePrincipal('p<?php echo $_GET["product_id"] ?>.2.png')"><img src="images/products/similar/s<?php echo $_GET["product_id"] ?>.2.png" alt=""></a>
                                        </div>
                                        <div class="item">
                                            <a href=""><img src="images/products/similar/s<?php echo $_GET["product_id"] ?>.1.png" alt=""></a>
                                            <a href=""><img src="images/products/similar/s<?php echo $_GET["product_id"] ?>.2.png" alt=""></a>
                                        </div>
                                        <div class="item">
                                            <a href=""><img src="images/products/similar/s<?php echo $_GET["product_id"] ?>.1.png" alt=""></a>
                                            <a href=""><img src="images/products/similar/s<?php echo $_GET["product_id"] ?>.2.png" alt=""></a>
                                        </div>
                                    </div>

                                    <!-- Controls -->
                                    <a class="left item-control" href="#similar-product" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="right item-control" href="#similar-product" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>

                            </div>


                            <div class="col-sm-8">
                                <div class="product-information"><!--/product-information-->
                                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                    <p id=""><?php echo $_GET["name"] ?></p>
                                    <p id="">ID:<?php echo $_GET["product_id"] ?></p>
                                    <p><img src="images/product-details/rating.png" alt="" /></p>
                                    <p><span>
                                            <span>$<?php echo $_GET["price"] ?></span>
                                        </span></p>
                                    <p><a href="#formulario" class="btn btn-fefault cart">
                                            <i class="fa fa-money"></i>
                                            Comprar ahora
                                        </a>
                                    </p>
                                    <p><a href="#"><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a></p>
                                </div><!--/product-information-->
                            </div>
                        </div><!--/product-details-->


                                

                                <div class="tab-pane fade active in" id="reviews" >
                                    <div class="col-sm-12">
                                        <ul>
                                            <li><a href=""><i class="fa fa-clock-o"></i><?php echo date("h:i:sa");?></a></li>
                                            <li><a href=""><i class="fa fa-calendar-o"></i><?php echo date("Y/m/d");?></a></li>
                                        </ul>
                                        <p>Con Mitanash solo debes dejar tus datos y nosotros nos comunicaremos contigo de inmediato, solo llena todos los campos requeridos del formulario y tu pedido sera enviado satisfactoriamente.</p>
                                        <p><b>LLena tu pedido</b></p>

                                        <form id="Formulario" action="javascript:pedido();">
                                            <span>
                                                <input id="productName" type="text"  value="<?php echo $_GET["name"] ?>" style="display: none;"/>
                                                <input id="productId" type="text"  value="<?php echo $_GET["product_id"] ?>" style="display: none;" />
                                                <input id="pedidoNombre" type="text" placeholder="Tu Nombre" required=""/>
                                                <input id="pedidoEmail" type="email" placeholder="Tu Correo Electrónico" required=""/>
                                            </span>
                                            <br />
                                            <span>
                                                <input id="pedidoTel" type="tel" placeholder="Tu Celular" required=""/>
                                                <input id="pedidoDir" type="text" placeholder="Tu Dirección"/>
                                            </span>
                                            <textarea id="pedidoDudas" name="txt_Descripcion" placeholder="Pregunta acerca del producto o simplemente, solicitalo llenando en formulario."></textarea>
                                           
                                            <label id="textoResultante3"></label>
                                          <button id="btnEnviarPedido" class="btn btn-fefault cart pull-right">Enviar</button>
                                            
                                          <img id="cargandoPedido" src="images/others/loadPedido.gif" style="display: none;"/>
                                           
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div><!--/category-tab-->

<!--                        <div class="recommended_items">recommended_items
                            <h2 class="title text-center">recommended items</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">	
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend1.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend2.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend3.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">	
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend1.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend2.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="images/home/recommend3.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>			
                            </div>
                        </div>/recommended_items-->

                    </div>
                </div>
            </div>
        </section>

<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
                                                    <img src="images/others/logo-blanco.png" alt="logo mitanash"/>
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>-->
						</div>
					</div>
					</div>
<!--					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
						</div>
					</div>-->
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Servicio</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Ayuda</a></li>
								<li><a href="#">Contáctanos</a></li>
                                                                <li><a href="#">Compra al por mayor</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Comprar Rapido</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Gafas</a></li>
								<li><a href="#">Relojes</a></li>
								<li><a href="#">Bolsos</a></li>
								<li><a href="#">Tulas</a></li>
							</ul>
						</div>
					</div>
					
				
					
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Suscribete</h2>
							<form action="javascript:suscripcion();" class="searchform">
                                                            <input id="emailContactoSuscriptor" type="email" placeholder="Email" required=""/>
                                                                <button id="btnSuscribir" type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                                                <fieldset>
                                                                <p id="textoResultante">Obtener los ultimos descuentos<br /></p>
                                                                <img style="margin-left: 7px;display: none;" id="cargandoSuscriptor" src="images/others/cargando.gif" />
                                                            </fieldset>
                                                                
							</form>
						</div>
					</div>
                                    <div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Contáctanos</h2>
							<form action="javascript:contacto();" class="searchform">
                                                            <input id="nombreContacto" type="text" placeholder="Nombre" required="" style="margin-bottom:10px;"/>	
                                                            <input id="emailContacto" type="email" placeholder="Email" required=""/>
                                                            <textarea id="dudas" placeholder="Preguntanos aqui" style="margin-top:10px;margin-bottom:20px;width:212px;background: #fff"></textarea>
                                                            <fieldset>
                                                                <button id="btnEnviarContacto" class="btn btn-default" style="background:#4FBAB4;color: white">Enviar</button>
                                                                <img style="margin-left: 7px;display: none;" id="cargandoContacto" src="images/others/cargando.gif" />
                                                            </fieldset>
                                                            <fieldset>
                                                                <p id="textoResultante2"></p>
                                                            </fieldset>
							</form>
						</div>
		</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2014 Mitanash. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.qualitysolutions.co">QualitySolutions</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->



        <script src="js/jquery.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
            <script src='js/jquery.zoom.js'></script>
        <script src="js/scriptsPersonal.js"></script>
        <script src="js/scriptContact.js"></script>
    </body>
</html>