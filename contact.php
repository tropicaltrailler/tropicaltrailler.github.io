
<?php include("phpmailer.php");?>
<!DOCTYPE html>

<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Tropical Estruturas Metálicas</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/hexagons.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	
	<header id="header" id="home">
		
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img src="img/logo6.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.php">Início</a></li>
						<li><a href="about.php">Quem Somos</a></li>
						<li><a href="services.php">Serviços</a></li>
						
						
							
						</li>
						<li><a href="contact.php">Contato</a></li>
						
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
					Entre em contato conosco e tire suas dúvidas
					</h1>
					<p class="text-white link-nav"><a href="index.html">Home </a> <span
							class="lnr lnr-arrow-right"></span> <a href="contact.php"> Contato</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<div class="map-wrap" style="width:100%; height: 445px;" >	

					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5>Contagem, MG</h5>
							<p>Via expressa, 11.100, Tropical</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<h5>Afonso: (31) 99390-9075</h5>
							
							<h5>Adilson: (31) 99349-4624</h5>
							
							<h5>Ítalo: (31) 99390-9076</h5>
							
							
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details">
							<h5>adilson.tropical@gmail.com</h5>
							<p>Solicite um serviço em qualquer hora</p>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="form-area " id="myForm" action="mail.php" method="post"
						class="contact-form text-right">
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="name" placeholder="nome" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Digite seu nome'"
									class="common-input mb-20 form-control" required="" type="text">

								<input name="lname" placeholder="Sobrenome" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Digite seu sobrenome'"
									class="common-input mb-20 form-control" required="" type="text">
								

								<input name="email" placeholder="email"
									pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu endereço de email'"	
									class="common-input mb-20 form-control" required="" type="email">

								<input name="subject" placeholder="Assunto" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Digite o assunto'"
									class="common-input mb-20 form-control" required="" type="text">
								
								<input name = "phone" placeholder="Telefone"
									pattern=".{11,11}" type="phone" 
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu telefone'" 
									class="common-input mb-20 form-control"  >
								<div class="mt-20 alert-msg" style="text-align: left;"></div>
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="message" placeholder="Mensagem"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite aqui sua mensagem'"
									required=""></textarea>
								<button type="submit" name="submit" value="Submit" class="genric-btn primary circle mt-30" style="float: right;">Enviar</button>
							</div>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Sobre Tropical Estruturas</h6>
						<p>
							Somos uma empresa que oferece um completo serviço de serralheria e estruturas metálicas.
							Aqui você encontra profissionais experientes capazes de entregar os melhores serviços de acordo com sua demanda.
							Garantimos a qualidade dos nossos serviços, seja ele estruturas metálicas, telhados, food-trucks, portões, janelas, etc.
							Solicite um orcamento.
						</p>
						
					</div>
				</div>
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Fique atualizado com as publicações</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" novalidate="true"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="form-inline">
								<input class="form-control" name="EMAIL" placeholder="Endereço de e-mail"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									required="" type="email">
								<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
										aria-hidden="true"></i></button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
										type="text">
								</div>

								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
					<div class="single-footer-widget">
						<h6>Siga-nos nas redes</h6>
						
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script async defer 
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCafdkERWYbkgKJZ0H0NXORRvFDqfha-14"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/hexagons.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
	
		
</body>




</html>