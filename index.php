<!DOCTYPE html>
<html>
<head>
<title>CMS</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/fontes.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/carousel.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="assets/plugins/owl-carousel/css/owl.carousel.min.css" />

	<style type="text/css">

	    /*position: absolute;
	    bottom: 2px;
	    left: -30px;
	    right: 0;
	    width: 6px;
	    height: 6px;
	    content: '';
	    background: #ce9c6b;
	    -webkit-transform: rotate(135deg);
	    -ms-transform: rotate(135deg);
	    transform: rotate(135deg);
	    #1b1b1b*/

	</style>
</head>
<body>
	<div class="container-fluid fadeIn">
		<div class="row">
			<nav class="navbar navbar-expand-md w-100  fixed-top">
				<a class="navbar-brand" href="#"><!-- <img src="assets/img/logo.png" style="height: auto; width: 150px"> --><h2 style="color: white">Logo</h2></a>
				<button style="display: none" class="btn btn-nav" type="button" onclick="openNav()">
					<i style="color: white" class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Quem Somos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Serviços</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Contato</a>
						</li>
					</ul>
				</div>
			</nav>
			<div id="mob-sidenav" class="sidenav">
			    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i style="font-size: 22px" class="fas fa-chevron-circle-right"></i></a>
			    <nav class="h-100" style="display: flex; align-items: center; justify-content: center;">
			        <ul class="navbar-nav w-100">
						<li class="nav-item w-75">
							<a class="nav-link text-center" style="color: #ce9c6b !important; font-weight: 600" href="">Home</a>
						</li>
						<li class="nav-item w-75">
							<a class="nav-link text-center" style="color: #ce9c6b !important; font-weight: 600" href="">Quem Somos</a>
						</li>
						<li class="nav-item w-75">
							<a class="nav-link text-center" style="color: #ce9c6b !important; font-weight: 600" href="">Serviços</a>
						</li>
						<li class="nav-item w-75">
							<a class="nav-link text-center" style="color: #ce9c6b !important; font-weight: 600" href="">Contato</a>
						</li>
					</ul>
			    </nav>
			</div>
			<div id="myCarousel" class="carousel slide carousel-fade w-100" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" style="background-image: url('assets/img/banner.jpg')"></div>
					<div class="carousel-item" style="background-image: url('assets/img/img1.jpg')"></div>
				</div>
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="row featurette" style="min-height: 450px">
			<div class="col-lg-10 mx-auto py-5">
				<div class="row">
					<div class="col-lg-7">
						<h2 class="featurette-heading">Texto Simples. <span class="text-muted">Texto mutado.</span></h2>
						<p class="lead px-1">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>
					<div class="col-lg-5" style="height: 450px; overflow: hidden; border-radius: 10px !important">
						<a href="assets/img/img4.jpg" data-fancybox data-caption="Imagem">
							<img src="assets/img/img4.jpg" class="img-fluid ">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row paralax">
			<div class="col-lg-10 mx-auto marketing py-5">
				<div class="row">
					<div class="col-lg-12 mb-5">
						<h1 class="text-center title">Serviços</h1>
						<div class="w-25 mx-auto" style=" background-color: white; height: 4px; border-radius: 10px"></div>
					</div>
					<div class="col-lg-4 cards pt-3">
						<img src="assets/img/170.png" class="rounded-circle img-fluid">
						<h3 class="heading my-3">Heading</h3>
						<p class="text-justify servicos">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
					</div>
					<div class="col-lg-4 cards pt-3">
						<img src="assets/img/170.png" class="rounded-circle img-fluid">
						<h3 class="heading my-3">Heading</h3>
						<p class="text-justify servicos">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
					</div>
					<div class="col-lg-4 cards pt-3">
						<img src="assets/img/170.png" class="rounded-circle img-fluid" >
						<h3 class="heading my-3">Heading</h3>
						<p class="text-justify servicos">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row featurette" style="min-height: 450px">
			<div class="col-lg-10 mx-auto py-5">
				<div class="row">
					<div class="col-lg-7 order-lg-2">
						<h2 class="featurette-heading">Texto Simples. <span class="text-muted">Texto mutado.</span></h2>
						<p class="lead px-1">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>
					<div class="col-lg-5 order-lg-1" style="height: 450px; overflow: hidden; border-radius: 10px !important">
						<img src="assets/img/img4.jpg" class="img-fluid">
					</div>
				</div>
			</div>	
		</div>
		<div class="row paralax">
			<div class="col-lg-10 mx-auto py-5 " style="min-height: 100vh">
				<div class="row">
					<div class="col-lg-12 mb-5">
						<h1 class="text-center title">Contato</h1>
						<div class="w-25 mx-auto" style=" background-color: white; height: 4px; border-radius: 10px"></div>
					</div>
					<form autocomplete="off" class="col-lg-12" action="" method="POST">
						<div class="row px-1">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" name="firstNameTextField" autocomplete="false" autocomplete="off" required="">
									<label>Seu Nome</label>
								</div>
								<div class="form-group">
									<input type="email" name="emailTextField" autocomplete="false" required="">
									<label>Email</label>
								</div>
								<div class="form-group">
									<input class="telefone" type="tel" name="lastNameTextField" autocomplete="false" required="">
									<label>Telefone</label>
								</div>
								<div class="form-group">
									<select>
										<option></option>
										<option>Dúvida</option>
										<option>Comentário</option>
										<option>Interesse Comercial</option>
									</select>
									<label>Assunto</label>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<textarea type="text" rows="2"></textarea>
									<label>Mensagem</label>
								</div>
								<div class="form-group">
									<input type="file" name="img[]" class="file">
									<div class="input-group">
										<input type="text" class="browse-input" placeholder="Escolha um arquivo.." disabled="">
									</div>
									<div class="btn-group">
										<button  class="browse btn btn-dark input-lg" type="button"><i class="glyphicon glyphicon-search"></i>Buscar <i class="fas fa-cloud-upload-alt"></i></button>
										<button style="display: none" class="browse-cancel btn btn-dark input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Cancelar <i class="fas fa-minus-circle"></i></button>
									</div>
								</div>
								<button style="margin-top: 48px;" type="submit" class="btn btn-dark btn-block">Enviar <i class="far fa-paper-plane"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row services" style="min-height: 450px;">
			<div class="col-lg-10 mx-auto py-5">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="text-center">Planos & Preços</h2>
						<p class="text-center title">Os melhores planos para você cuidar da sua beleza e se entreter.</p>
					</div>
					<div class="col-lg-6 plans">
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Men's Haircut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Children Haircut</h6>
							</div>
							<div class="col-3 price">$29.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Beard Cut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Men's Haircut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
					</div>
					<div class="col-lg-6 plans">
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Men's Haircut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Children Haircut</h6>
							</div>
							<div class="col-3 price">$29.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Beard Cut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Men's Haircut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
					</div>
					<div class="col-11 mt-1 mx-auto">
						<h6 class="text-right"><a href="https://api.whatsapp.com/send?phone=5588997283474" target="_blank" style="text-decoration: underline !important; color: #ce9c6b"><i style="font-size: 25px" class="fab fa-whatsapp"></i> Agende pelo Whatsapp</a></h6>
					</div>		
				</div>
			</div>	
		</div>
		<div class="row" style="min-height: 500px">
			<div class="col-lg-10 py-5 mx-auto">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="text-center">Nossos Clientes</h2>
						<p class="text-center">Os melhores planos para você cuidar da sua beleza e se entreter.</p>
					</div>
					<div class="col-12 mt-4">
						<div class="owl-carousel owl-theme">
						    <a href="assets/img/hair1.jpg" data-fancybox='galery' data-caption="Imagem">
							    <div class="item">
										<img src="assets/img/hair1.jpg" width="200" height="230" class="rounded-circle">
							    </div>
							</a>
						    <a href="assets/img/hair2.jpg" data-fancybox='galery' data-caption="Imagem">
							   <div class="item">
										<img src="assets/img/hair2.jpg" width="200" height="230" class="rounded-circle">
							    </div>
							</a>
						    <a href="assets/img/hair3.jpg" data-fancybox='galery' data-caption="Imagem">
						    	<div class="item">
									<img src="assets/img/hair3.jpg" width="200" height="230" class="rounded-circle">
						    	</div>
							</a>
						    <a href="assets/img/hair4.jpg" data-fancybox='galery' data-caption="Imagem">
						    	<div class="item">
									<img src="assets/img/hair4.jpg" width="200" height="230" class="rounded-circle">
						    	</div>
							</a>
						</div>	
					</div>
					<div class="col-12 mt-5">
						<h6 class="text-right" style="font-weight: 600">Tem uma foto ? <a href="#modal-upload" data-toggle="modal" style="text-decoration: underline !important; color: #ce9c6b">Clique aqui e nos envie !</a></h6>
					</div>		
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-lg-12" style="min-height: 350px; background-color: #222; box-shadow: 2px 0px 5px #e9ecef; color: white">
				<div class="row" style="min-height: 300px">
					<div class="col-lg-3  px-4">
						<div class="logo text-center">
							<img  src="assets/img/logo.png" width="150" height="90" class="img-fluid">
						</div>
						
						<p class="text-justify text-muted-footer mt-0" style="font-weight: 500">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-lg-2 py-5 px-4 ">
						<h4>Menu</h4>
						<div class="mt-4 pl-1 text-left">
							<p><a href="#"  class="text-muted-footer menus">Home</a></p>
							<p><a href="#"  class="text-muted-footer menus">Quem Somos</a></p>
							<p><a href="#"  class="text-muted-footer menus">Serviços</a></p>
							<p><a href="#"  class="text-muted-footer menus">Contato</a></p>
						</div>
					</div>
					<div class="col-lg-3 py-5 text-center">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5621.580815561395!2d-37.95654399617288!3d-4.929968940982865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x667d48fa538468ec!2sMetal%C3%BArgica+S%C3%A3o+Jos%C3%A9+De+Anchieta!5e0!3m2!1spt-BR!2sbr!4v1559328265308!5m2!1spt-BR!2sbr" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-lg-3 py-5 px-4 text-center">
						<h4>Contato</h4>
						<div class="mt-4 pl-1 text-left">
							<p class="text-muted-footer data"><i class="fas fa-map-marker-alt"></i> Av. Coronel Araújo Lima, 1348, Centro - Russas/CE</p>
							<p class="text-muted-footer data"><i class="fas fa-phone-volume"></i> (88) 93943-3438</p>
							<p class="text-muted-footer data"><i class="fas fa-inbox"></i> suaempresa@gmail.com</p>
							<div class="">
								<a href="https://www.instagram.com/luisotaviioc/" target="_blank" class="mr-3 instagram"><i style="font-size: 25px" class="fab fa-instagram"></i></a> 
								<a href="https://api.whatsapp.com/send?phone=5588997283474" target="_blank" class="mr-3 whatsapp"><i style="font-size: 25px" class="fab fa-whatsapp"></i></a> 
								<a href="#" target="_blank" class="linkedin"><i style="font-size: 25px"class="fab fa-linkedin"></i></a>
							</div>

						</div>
					</div>
				</div>	
				<div class="row" style="height: 50px;">
					<div class="col-lg-12" style="display: flex;background-color: #09090963;align-items: center; justify-content: center;">
						<p class="text-center mb-0" style="align-items: center;color: white">Copyright © Todos os direitos reservados.</p>
					</div>
				</div>
				
			</div>
		</div>
		<button id="myBtn" class="btn" onclick="topFunction()"><i style="color: white" class="fas fa-chevron-up"></i></button>

	</div>  
	<!-- Modal Upload	 -->
	<div class="modal fade" id="modal-upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Envio de Foto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="form-img" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group mb-0">
							<div class="input-group mb-0">
								<input type="file" name="img[]" class="file-img d-none">
								<input type="text" class="form-control browse-input-img" placeholder="Escolha uma foto.." required="">
								<div class="input-group-append">
									<button  class="browse-img btn btn-dark btn-sm" type="button"><i class="glyphicon glyphicon-search"></i>Buscar <i class="fas fa-cloud-upload-alt"></i></button>
								</div>
							</div>
						</div>
						<p class="mt-1" style="font-size: 14px"><b>Atenção</b> ! Apenas extensões <b>*jpg</b>, <b>*jpeg</b>.</p>
						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-sm" style="background-color: #ce9c6b ;color: white">Enviar Foto</button>
				</div>
			</div>
		</div>
	</div>
</div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/plugins/mask/jquery.mask.js"></script>
	<script src="assets/plugins/fancybox/jquery.fancybox.js"></script>
	<script src="assets/plugins/fontawesome/js/all.js"></script>
	<script src="assets/plugins/owl-carousel/js/owl.carousel.js"></script>
	<script type="text/javascript">
		

		$('.owl-carousel').owlCarousel({
			
		    
		    loop: true,
		    margin: 35,
		    // animateOut: 'slideOutDown',
    		// animateIn: 'flipInX',
    		smartSpeed:450,
    		stagePadding: 40,
		    
		    responsive:{
		        0:{
		            items:1,
		            autoplay:true,
			    	autoplayTimeout:3300,
			    	autoplayHoverPause:true,
		        },
		        600:{
		            items:3,
		            autoplay:true,
			    	autoplayTimeout:3000,
			    	autoplayHoverPause:true,
		        },
		        1000:{
		            items:4,
		            autoplay:true,
			    	autoplayTimeout:3000,
			    	autoplayHoverPause:true,
		        }
		    }
		})



		
	
  	</script>
</body>
</html>








