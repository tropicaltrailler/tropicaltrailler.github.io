<?php include("conexao.php");?>
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
	<?php
        include("connection.php");
        $conex = new Con();
        $conex->conectar(); 
	?>
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
						Quem Somos
					</h1>
					<p class="text-white link-nav"><a href="index.html">Início </a> <span
							class="lnr lnr-arrow-right"></span> <a href="about.html"> Quem Somos</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area section-gap aboutus-about" id="about">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-8 col-md-12 home-about-left">
					<h6>Faça-nos uma visita ou entre contato.</h6>
					<h1>
						Estamos aqui para atender a sua demanda<br>
						
					</h1>
					<p class="sub">Conte-nos o que precisa.</p>
					<p class="pb-20">
						O seu projeto é simples? Então prepare-se para se surpreender com o resultado.
						Entregamos exatamente o que você solicita, com qualidade e a beleza que estão sempre presentes no nosso trabalho.
						Precisa de algo mais complicado? Ótimo, estamos aqui para aceitar desafios e transformar
						seu sonho em um produto incrível.
						Portões, janelas, food-truck, telhados, carretinhas, trailer, estruturas metálicas. 
						Se nenhum desses itens é o que você precisa, então conte-nos o que é. 
						Estamos curiosos para saber e temos certeza que podemos ajudar.
						
					</p>
					
                    </div>
				<div class="col-lg-4 col-md-12 home-about-right relative">
					<form class="form-wrap" action="" method="POST">
						<h4 class="text-white pb-20">Solicite um orçamento</h4>
						<div class="form-select" id="service-select"">
									
						</div>
						<input type="text" name= "nome"value="" class="form-control" placeholder="nome">
                        <input pattern=".{11,11}" type="phone" name = "telefone" value="" class="form-control" placeholder="Telefone celular: (DDD)">
                        <input  type="phone" name = "fixo" value="" class="form-control" placeholder="Telefone fixo: (DDD)        ">
						<input type="email" name = "email"value="" class="form-control" placeholder="Email ">
						<textarea name="message" value="" id="" cols="30" rows="5" placeholder="Mensagem"
							class="form-control"></textarea>
						<button class="primary-btn">Faça um orçamento grátis</button>
					</form>
					<?php
							if($_POST){
								$sql="INSERT INTO orcamento VALUES ( '".$_POST['id']."', '".$_POST['nome']."','".$_POST['email']."','".$_POST['message']."','".$_POST['telefone']."','".$_POST['fixo']."');";
								
								$conex->consultar($sql);
								$conex->fechar();
								if($conex->resultado==1)
									echo "";
								else
									echo "Falha na gravação!";
								$conex->conectar();
                    ?>
							<?php $conex->fechar(); ?>
							<?php }?>
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->

	<!-- Start cat Area -->
	<section class="cat-area section-gap aboutus-cat" id="feature">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-cat d-flex flex-column">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span
								class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
						<h4 class="mb-20" style="margin-top: 23px;">Manutenção</h4>
						<p>
						Oferecemos um amplo serviço de serralheria, entre em contato conosco e conte-nos o que precisa.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span
								class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
						<h4 class="mt-40 mb-20">Serviços residenciais</h4>
						<p>
						Terraços, telhados, escadas, janelas e portões. Fazemos todos os tipos de produtos para sua residência.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span
								class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
						<h4 class="mt-40 mb-20">Serviços comerciais</h4>
						<p>
						Trailers, food-truck, carretinhas e muito mais. Entre em contato conosco e faça um orçamento, aqui você encontrará todos os serviços de serralheria que precisar.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End cat Area -->

	<!-- Start service Area -->
	<section class="service-area section-gap" id="service">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 pb-30 header-text text-center">
					<h1 class="mb-10">Nossa área de atuação</h1>
					<p>
					
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/trailer.jpg" alt="">
						</div>
						<h4>Serviços comerciais</h4>
						<p>
						Carretinhas, food-truck, trailers, aqui você encontra uma grande variedade de serviços que ajudará no seu comércio.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/janela.jpg" alt="">
						</div>
						<h4>Serviços residenciais</h4>
						<p>
						Está planejando aquele telhado ou terraço e gostaria que ele fosse bonito, seguro e rápido? Nós podemos te ajudar. 
									Entre em contato, faça um orçamento e veja que temos esses e vários outros serviços.
									Conosco você poderá encomendar janelas, portões, escadas e várias soluções para sua casa.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/foto2.jpg" alt="">
						</div>
						<h4>Serralheria</h4>
						<p>
						Também somos uma serralheria, oferecemos todos os serviços de serralheria que você precisar.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End service Area -->


	

	

	<!-- start footer Area -->		
	<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Endereço</h6>
								<p>
                                Via expressa, 11.100, Tropical
                                Contagem, MG.
                                </p>
                                
                                <p></h5>
							<p></p>
								</p>								
							</div>
						</div>
                            <div class="col-lg-5  col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <h6>Telefone</h6>                    					
                                    <p>Afonso: (31) 99390-9075</p>
                                    <p>Adilson: (31) 99349-4624</p>
                                    <p>Ítalo: (31) 99390-9076</p>                               
                                    <div class="" id="mc_embed_signup">
                                        
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
							<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>	
								<p class="footer-text">
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
	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
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
