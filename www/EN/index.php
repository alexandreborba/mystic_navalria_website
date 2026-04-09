<?php include_once '../tools/functions.php'; ?>
<?php include_once '../tools/config.php'; ?>
<!DOCTYPE html>
 
<html><head>
		<title>Navalria</title>
		<meta charset=utf-8 >
		
		<meta name="robots" content="., follow" > 
		<meta name="keywords" content="shipbuilding, rhip repair, douro azul, navio hotel, aveiro, portugal, ferry" > 
		<meta name="description" content="Navalria is a Shipyard located in Aveiro, Portugal. It specializes in shipbuilding and repair of several types of boats." > 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- link rel="shortcut icon" href="PT/favicon.ico" -->
		<link rel="icon" href="/favicon_multi.ico" sizes="16x16 32x32 48x48 64x64 128x128">

<!-- CSS begin -->
		
		<link rel="stylesheet" type="text/css" href="css/style.css<?=f_cacheForceRenew()?>" >
		<link rel="stylesheet" type="text/css" href="css/skeleton.css<?=f_cacheForceRenew()?>" >

		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css<?=f_cacheForceRenew()?>"  >
		
		<link rel="stylesheet" type="text/css" href="css/styler.css<?=f_cacheForceRenew()?>" >
		
	
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css<?=f_cacheForceRenew()?>" ><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" type="text/css" media="screen" href="css/style-ie.css<?=f_cacheForceRenew()?>" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ei8fix.css<?=f_cacheForceRenew()?>" ><![endif]-->
		
		<!-- Sequence slider CSS -->
		<link rel="stylesheet" type="text/css" href="css/sequencejs-theme.modern-slide-in.css<?=f_cacheForceRenew()?>" >
		<!--[if lt IE 9]><link rel="stylesheet" type="text/css" media="screen" href="css/sequencejs-theme.modern-slide-in.ie.css<?=f_cacheForceRenew()?>" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/sequencejs-theme.modern-slide-in.ie8.css<?=f_cacheForceRenew()?>" ><![endif]-->
        
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
							<img class="bg-slide" src="images/Destaque01.jpg" alt="Localização" />
							<div class="main-text"><span class="size-14">STRATEGIC </span><br><span class="size-28">LOCATION </span><br><span class="size-14">IN AVEIRO,<br/> </span> <span  class="size-41 color"> PORTUGAL</span></div>
							<!--<img class="model" src="images/model1.png" alt="Model 1" />-->
							
						</li>
					<!-- SLIDE -->	
						<li>
							<img class="bg-slide" src="images/Destaque02.jpg" alt="Estaleiro" />
							<div class="main-text"><span class="size-14">SHIPYARD </span><br><span class="size-28">RENOVATED </span><br><span  class="size-41 color">IN 2008</span></div>
						<!--	<img class="model" src="images/model2.png" alt="Model 2" />-->
							
						</li>
					<!-- SLIDE -->	
						<li>
							<img class="bg-slide" src="images/Destaque03.jpg" alt="Ambiente" />
							<div class="main-text"><span class="size-14">RESPECT FOR </span><br><span class="size-28">THE SEA </span><br><span class="size-14">AND FOR THE PRESERVATION OF THE</span><br><span  class="size-41 color"> ENVIRONMENT</span></div>
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
					<a class="block3-a" href="WhoWeAre">
						<div class="box-main-container">
							<div class="box-number">
								ABOUT <br>
						    US </div>
							<div class="img-holder seo"></div>
								
						</div>
					</a>
					<div class="under-box-bg"></div>
					<div class="box-text-container">
						<h5>Navalria is a shipyard that develops activity in ship building and repair, and construction of offshore equipment. Located in Aveiro, centre of Portugal, it has already 45 years of experience in the naval sector</h5>
						<a class="r-m-plus-small" href="WhoWeAre"></a>
					</div>
						
				</div>		
			</div>
		<!-- BLOCK -->
			<div class="one-third m-bot-35 column">
				<div class="block3-container">
					<a class="block3-a" href="shipyard">
						<div class="box-main-container">
							<div class="box-number">
								THE<br>
					      SHIPYARD </div>
							<div class="img-holder comp"></div>
							
						</div>
					</a>
					<div class="under-box-bg"></div>
					<div class="box-text-container">
						<h5>Renovated in 2008, it has a dry dock, floating dock, shiplift and workshops, among other equipment that allow it to build and repair several ships at the same time </h5>
						<a class="r-m-plus-small" href="shipyard"></a>
					</div>
						
				</div>		
			</div>
		<!-- BLOCK -->
			<!-- <div class="one-third m-bot-35 column">
				<div class="block3-container">
					<a class="block3-a" href="http://www.martifer.com/" target="_blank">
						<div class="box-main-container">
							<div class="box-number">
								MARTIFER <br>
					      GROUP </div>
							<div class="img-holder gears"></div>
							
						</div>
					</a>
					<div class="under-box-bg"></div>
					<div class="box-text-container">
						<h5>Martifer SGPS, which holds 100 % of Navalria's share capital, is a multinational industrial group with around 1 350 workers and activity centred in the metallic construction, naval industry&nbsp; and renewable &amp; energy,&nbsp; &nbsp;&nbsp;</h5>
						<a class="r-m-plus-small" href="http://www.martifer.com/" target="_blank"></a>
					</div>
						
				</div>		
			</div> -->
	</div>


	<!-- LATEST WORK -->
	<div class="container clearfix">
		<div class="sixteen columns m-bot-20">
			<div class="latest-work-caption-container">
				<div class="caption-main-container clearfix">
					<div class="caption-text-container">
						<span class="bold">MAIN</span> PROJECTS
					</div>
					<div class="carousel-navi jcarousel-scroll">
						<div class="jcarousel-prev"></div>
						<div class="jcarousel-next"></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- end LATEST WORK -->

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
							<p>Construction of hotel ship</p>
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
							<p>Construction of hotel ship</p>
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
							<p>Construction of hotel ship</p>
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
							<p>Tugboat repairing</p>
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
							<p>Cargo ship repairing</p>
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
							<p>Construction of Catamaran ferry</p>
						</div>
				</li>
				<!-- OUR PROJECTS ITEM -->
				<li class="four columns">
						<div class="content-container-white">
							<div class="view view-first">
								<img src="images/portfolio/gerais/SantaCristina_460x272px.jpg" alt="Santa Cristina" >
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
							<p>Cod fishing ship repairing</p>
						</div>
				</li>

			</ul>
		</div>
		<! -- end jCAROUSEL -->
		
	</div>		
	<!-- FOOTER -->
	<?php include '_footer.inc.php'; ?>
	<!-- END FOOTER -->
	</body>
</html>		