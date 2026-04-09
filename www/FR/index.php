<?php include_once '../tools/functions.php'; ?>
<?php include_once '../tools/config.php'; ?>
<!DOCTYPE html>

<html><head>
		<title>Navalria</title>
		<meta charset=utf-8 >
		
		<meta name="robots" content="., follow" > 
		<meta name="keywords" content="construção naval, reparação naval, douro azul, navio hotel, aveiro, portugal, ferry" > 
		<meta name="description" content="A Navalria é um estaleiro naval localizado em Aveiro, Portugal. É especializado em construção e reparação de diversos tipos de embarcações." > 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- link rel="shortcut icon" href="PT/favicon.ico" -->
		<link rel="icon" href="/favicon_multi.ico" sizes="16x16 32x32 48x48 64x64 128x128">

<!-- CSS begin -->
		
		<link rel="stylesheet" type="text/css" href="css/style.css?20260331_1500" >
		<link rel="stylesheet" type="text/css" href="css/skeleton.css?20260331_1500" >

		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css"  >
		
		<link rel="stylesheet" type="text/css" href="css/styler.css">
		
	
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css?20260331_1500" ><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" type="text/css" media="screen" href="css/style-ie.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ei8fix.css?20260331_1500" ><![endif]-->
		
		<!-- Sequence slider CSS -->
		<link rel="stylesheet" type="text/css" href="css/sequencejs-theme.modern-slide-in.css?20260331_1500" >
		<!--[if lt IE 9]><link rel="stylesheet" type="text/css" media="screen" href="css/sequencejs-theme.modern-slide-in.ie.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/sequencejs-theme.modern-slide-in.ie8.css?20260331_1500" ><![endif]-->
        
		<link rel="stylesheet" href="css/colors/light-orange.css" id="template-color">
 
<!-- CSS end -->
<!-- JS begin -->

		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<!-- sequence js -->
		<script type="text/javascript" src="js/sequence.jquery-min.js"></script>
		<script type="text/javascript" src="js/sequence-slider.js"></script>
		<!-- end sequence js -->
		<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
		<script type="text/javascript" src="js/jQuery.BlackAndWhite.min.js"></script>
		<script type="text/javascript" src="js/jquery.tweet.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
		<script type="text/javascript" src="js/jquery.quicksand.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		
		<script type="text/javascript" src="js/styler.js"></script>

		<!--[if lt IE 9]>
			<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
<!-- JS end -->
	</head>
	<body>
	<?php include_once '../_googleanalytics.inc.php'; ?>

<!-- TEMPLATE STYLES -->

<!-- HEADER -->
<header id="header">
			<div class="container clearfix">
				<div class="sixteen columns ">
						<div id="logo-container">	
							<a href="." class="logo" rel="home" title="Home"></a>
						</div>
						<?php include_once '_language_switcher.inc.php'; ?>
				</div>
			</div>
			<div class="container clearfix">
				<div class="sixteen columns nav-border">
					<!-- TOP MENU -->
					<?php include_once '_topmenu.inc.php'; ?>
					<div class="search-container clearfix">
						<p>&nbsp;</p>
					</div>
				</div>
			</div>
		</header>
<!-- SLIDER -->
	<div id="slider-container" class="container clearfix">
		<div class="sixteen columns ">
			<div id="sequence-theme">

				<div id="sequence">
					<div class="arrows-nav ">
						<img class="prev" src="images/bt-prev.png" alt="Previous Frame" ><img class="next" src="images/bt-next.png" alt="Next Frame" >
					</div>
					<ul>
					<!-- SLIDE -->
						<li class="animate-in">
							<img class="bg-slide" src="images/Destaque01.jpg" alt="Localisation" />
							<div class="main-text"><span class="size-14">LOCALISATION </span><br><span class="size-28">PRIVILÉGIÉ </span><br><span class="size-14">A AVEIRO, </span> <BR/><span  class="size-41 color"> PORTUGAL</span></div>
							<!--<img class="model" src="images/model1.png" alt="Model 1" />-->
							
						</li>
					<!-- SLIDE -->	
						<li>
							<img class="bg-slide" src="images/Destaque02.jpg" alt="Chantier" />
							<div class="main-text"><span class="size-14">CHANTIER </span><br><span class="size-28">RÉNOVÉ </span><br><span  class="size-41 color">EN 2008</span></div>
						<!--	<img class="model" src="images/model2.png" alt="Model 2" />-->
							
						</li>
					<!-- SLIDE -->	
						<li>
							<img class="bg-slide" src="images/Destaque03.jpg" alt="Environnement" />
							<div class="main-text"><span class="size-14">RESPECT DE LA </span><br><span class="size-28">MER </span><br><span class="size-14">ET DE LA PRÉSERVATION DE</span><br><span  class="size-41 color"> L'ENVIRONNEMENT</span></div>
							<!--<img class="model" src="images/model3.png" alt="Model 3" />-->
						</li>
					</ul>

				</div>
				<ul class="nav">
					<li><img src="images/tn-model1.jpg" alt="Model 1" /></li>
					<li><img src="images/tn-model2.jpg" alt="Model 2" /></li>
					<li><img src="images/tn-model3.jpg" alt="Model 3" /></li>
				</ul>
					<ul class="controls">
						<li class="status"></li>
					</ul>
			</div>
		</div>		
	</div>
	
<!-- 3 BLOCKS -->
	<div class="container box3-cont clearfix" style="display: flex; justify-content: center; align-items: flex-start; gap: 40px;">
		<!-- BLOCK -->
			<div class="one-third m-bot-35 column">
				<div class="block3-container">
					<a class="block3-a" href="QuiSommesNous">
						<div class="box-main-container">
							<div class="box-number">
								À PROPOS <br>
						    DE NOUS  </div>
							<div class="img-holder seo"></div>
								
						</div>
					</a>
					<div class="under-box-bg"></div>
					<div class="box-text-container">
						<h5>Navalria est un chantier qui développe des activités de construction et réparation navales ainsi que la construction d'équipements « offshore », installé à Aveiro, au centre du Portugal, l'entreprise compte déjà 45 ans d'expérience dans le secteur navale </h5>
						<a class="r-m-plus-small" href="QuiSommesNous"></a>
					</div>
						
				</div>		
			</div>
		<!-- BLOCK -->
			<div class="one-third m-bot-35 column">
				<div class="block3-container">
					<a class="block3-a" href="LeChantier">
						<div class="box-main-container">
							<div class="box-number">
								LE  <br>
					      CHANTIER</div>
							<div class="img-holder comp"></div>
							
						</div>
					</a>
					<div class="under-box-bg"></div>
					<div class="box-text-container">
						<h5>Refait en 2008, il dispose d'une cale sèche, d'une cale flottante, d'une ligne, d'un élévateur de navires et des ateliers, entre autres équipements qui lui permet de construire et réparer plusieurs navires simultanément</h5>
						<a class="r-m-plus-small" href="LeChantier"></a>
					</div>
						
				</div>		
			</div>
		<!-- BLOCK -->
			
	</div>

<!-- LATEST WORK -->
	<div class="container clearfix">
		<div class="sixteen columns m-bot-20">
			<div class="latest-work-caption-container">
				<div class="caption-main-container clearfix">
					<div class="caption-text-container">
						<span class="bold">PRINCIPAUX </span> PROJETS
					</div>
					<div class="carousel-navi jcarousel-scroll">
						<div class="jcarousel-prev"></div>
						<div class="jcarousel-next"></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
		
		<!-- jCAROUSEL -->
		<div class="jcarousel container latest-work-jc m-bot-25" >
			<ul>
				<!-- LATEST WORK ITEM -->
				<li class="four columns">
						<div class="content-container-white">
							<div class="view view-first">
								<img src="images/portfolio/gerais/AmaVida460x272.jpg" alt="AmaVida" >
								<div class="mask">
									<h2><span class="w-b-bottom"><span class="bold">Ama</span>Vida</span></h2>
									<a href="images/portfolio/gerais/AmaVida800x491.jpg" class="lightbox zoom info"></a><a href="ptf_Amavida" class="link info"></a>
								</div>
							</div>
							<div class="lw-item-caption-container">
								<a class="a-invert" href="ptf_Amavida" ><span class="bold">Ama</span>Vida</a>
							</div>
						</div>
						<div class="under-box-bg"></div>		
						<div class="content-container-white lw-item-text-container">
							<p>Construction d'un Navire hôtel<BR/>&nbsp;</p>
						</div>
						
				</li>

				<!-- LATEST WORK ITEM -->
				<li class="four columns">
						<div class="content-container-white">
							<div class="view view-first">
								<img src="images/portfolio/gerais/QueenIsabel460x272.jpg" alt="Queen Isabel" >
								<div class="mask">
									<h2><span class="w-b-bottom"><span class="bold">Queen</span> Isabel</span></h2>
									<a href="images/portfolio/gerais/QueenIsabel800x491.jpg" class="lightbox zoom info"></a><a href="ptf_QueenIsabel" class="link info"></a>
								</div>
							</div>
							<div class="lw-item-caption-container">
								<a class="a-invert" href="ptf_QueenIsabel" ><span class="bold">Queen </span> Isabel</a>
							</div>
						</div>
						<div class="under-box-bg"></div>		
						<div class="content-container-white lw-item-text-container">
							<p>Construction d'un Navire hôtel<BR/>&nbsp;</p>
						</div>
						
				</li>

				<!-- LATEST WORK ITEM -->
				<li class="four columns">
						<div class="content-container-white">
							<div class="view view-first">
								<img src="images/portfolio/gerais/DouroSpirit460x272.jpg" alt="Douro Spirit" >
								<div class="mask">
									<h2><span class="w-b-bottom"><span class="bold">Douro</span> Spirit</span></h2>
									<a href="images/portfolio/gerais/DouroSpirit800x491.jpg" class="lightbox zoom info"></a><a href="ptf_DouroSpirit" class="link info"></a>
								</div>
							</div>
							<div class="lw-item-caption-container">
								<a class="a-invert" href="ptf_DouroSpirit" ><span class="bold">Douro</span> Spirit</a>
							</div>
						</div>
						<div class="under-box-bg"></div>		
						<div class="content-container-white lw-item-text-container">
							<p>Construction d'un Navire hôtel<BR/>&nbsp;</p>
						</div>
						
				</li>

				<!-- OUR PROJECTS ITEM -->
				<li class="four columns">
						<div class="content-container-white">
							<div class="view view-first">
								<img src="images/portfolio/gerais/Prometeu460x272.jpg" alt="Prometeu" >
								<div class="mask">
									<h2><span class="w-b-bottom"><span class="bold">Prometeu</span></span></h2>
									<a href="images/portfolio/gerais/Prometeu460x272.jpg" class="lightbox zoom info"></a><a href="ptf_Prometeu" class="link info"></a>
								</div>
							</div>
							<div class="lw-item-caption-container">
								<a class="a-invert" href="ptf_Prometeu" ><span class="bold">Prometeu</span></a>
							</div>
						</div>
						<div class="under-box-bg"></div>		
						<div class="content-container-white lw-item-text-container">
							<p>Réparation d'un navire remorqueur</p>
						</div>
				</li>

				<!-- OUR PROJECTS ITEM -->
				<li class="four columns">
						<div class="content-container-white">
							<div class="view view-first">
								<img src="images/portfolio/gerais/Annerdiep_460x272px.jpg" alt="Noruega" >
								<div class="mask">
									<h2><span class="w-b-bottom"><span class="bold">Anner</span>diep</span></h2>
									<a href="images/portfolio/gerais/Annerdiep_800x491px.jpg" class="lightbox zoom info"></a><a href="ptf_Annerdiep" class="link info"></a>
								</div>
							</div>
							<div class="lw-item-caption-container">
								<a class="a-invert" href="ptf_Annerdiep" ><span class="bold">Anner</span>diep </a>
							</div>
						</div>
						<div class="under-box-bg"></div>		
						<div class="content-container-white lw-item-text-container">
							<p>Réparation d'un cargo<BR/>&nbsp;</p>
						</div>
				</li>

				<!-- OUR PROJECTS ITEM -->
				<li class="four columns">
						<div class="content-container-white">
							<div class="view view-first">
								<img src="images/portfolio/gerais/Ferrie01_460x272.jpg" alt="Lisbonense" >
								<div class="mask">
									<h2><span class="w-b-bottom"><span class="bold">Lisbonense</span></span></h2>
									<a href="images/portfolio/gerais/Ferrie01_800x491.jpg" class="lightbox zoom info"></a><a href="ptf_Lisbonense" class="link info"></a>
								</div>
							</div>
							<div class="lw-item-caption-container">
								<a class="a-invert" href="ptf_Lisbonense" ><span class="bold">Lisbonense</span></a>
							</div>
						</div>
						<div class="under-box-bg"></div>		
						<div class="content-container-white lw-item-text-container">
							<p>Construction d'un <i>ferry catamaran</i></p>
						</div>
				</li>
				<!-- OUR PROJECTS ITEM -->
				<li class="four columns">
						<div class="content-container-white">
							<div class="view view-first">
								<img src="images/portfolio/gerais/SantaCristina_460x272px.jpg" alt="Almadense" >
								<div class="mask">
									<h2><span class="w-b-bottom"><span class="bold">Santa </span>Cristina</span></h2>
									<a href="images/portfolio/gerais/SantaCristina_800x491px.jpg" class="lightbox zoom info"></a><a href="ptf_SantaCristina" class="link info"></a>
								</div>
							</div>
							<div class="lw-item-caption-container">
								<a class="a-invert" href="ptf_SantaCristina" ><span class="bold">Santa </span>Cristina </a>
							</div>
						</div>
						<div class="under-box-bg"></div>		
						<div class="content-container-white lw-item-text-container">
							<p>Réparation d'un navire de pêche au cabillaud</p>
						</div>
				</li>

				<!-- OUR PROJECTS ITEM -->

			</ul>
		</div>
		<!-- jCAROUSEL End -->
	
<!-- OUR PROJECTS End -->

		
	</div>	
	</div>		

<!-- FOOTER -->
	<?php include '_footer.inc.php'; ?>
	</body>
</html>		