<html>
	
	<head>
		<title> Michelle Voelker's Portfolio </title>
		<link rel="shortcut icon" href="img/icon.ico">
		<link href="styles.css" rel = "stylesheet" type="text/css">

		<!-- Pinterest -->
		<script type="text/javascript" async defer data-pin-hover="true" src="http://assets.pinterest.com/js/pinit.js"></script>

		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        <meta name="description" content="Responsive Image Gallery with jQuery" />
        <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
		<meta name="author" content="Codrops" />
		<link rel="stylesheet" type="text/css" href="js/ResponsiveImageGallery/css/style.css" />
		<link rel="stylesheet" type="text/css" href="js/ResponsiveImageGallery/css/elastislide.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
		<script>

		window.onload = function() {

			// set current copyright year
			var year = document.getElementById('currentYear');
			year.innerHTML = (new Date()).getUTCFullYear();

		};

		</script>
	</head>

<body>
	
	<div id="main" class = container>	

		<div class = "content">
			<h1> Visual Arts </h1>
			<img src="./img/art/head.png" height = "250px">
			<h3> Why buy something when you can make it yourself? </h3>


		<div id = "wrapper">		
			<div id = "wrapper">
			<h4> I love making things. Painting, woodworking, machining, glass blowing, sewing, cross stitching, drawing, metallurgy, pottery-- No matter what the medium or craft, odds are I have tried it at least once, and if not, I want to. I love learning new things no matter what the challenge. Now, I'm adding html to my list of art forms! Below is a selection of my artwork.</h4>	

		<div class="container">
				<div class="clr"></div>
			<div class="content">
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
									<li><a href="#"><img src="img/art/thumbs/1.jpg" data-large="img/art/1.jpg" alt="image01" data-description="ELEPHANT (2014): Pointillism of elephant with permanent marker."/></a></li>
									<li><a href="#"><img src="img/art/thumbs/2.jpg" data-large="img/art/2.jpg" alt="image01" data-description="HUSKER (2014): Charcoal drawing of dog." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/3.jpg" data-large="img/art/3.jpg" alt="image01" data-description="PRYMEK WEDDNIG (2014): Table setting with wine bottles." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/4.jpg" data-large="img/art/4.jpg" alt="image01" data-description="BACKGAMMON (2015): Wood inlay backgammon board." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/5.jpg" data-large="img/art/5.jpg" alt="image01" data-description="HELIO (2013): Watercolor cat." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/6.jpg" data-large="img/art/6.jpg" alt="image01" data-description="BATTLE IN THE SEA (2015): Acrylic abstract painting." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/7.jpg" data-large="img/art/7.jpg" alt="image01" data-description="GEARS (2009): Conte gears in the brush." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/8.jpg" data-large="img/art/8.jpg" alt="image01" data-description="KRAUS (2013): Acrylic motorcycle on rock." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/9.jpg" data-large="img/art/9.jpg" alt="image01" data-description="CARRIE'S ARRANGEMENT (2014): Floral arrangement in pencil." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/10.jpg" data-large="img/art/10.jpg" alt="image01" data-description="SCRAPPY PURSE (2014): Sewn purse with accompanying wallet." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/11.jpg" data-large="img/art/11.jpg" alt="image01" data-description="GIRAFFE (2011): Young giraffe in pencil." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/12.jpg" data-large="img/art/12.jpg" alt="image01" data-description="TURTLE (2011): Turtle in pencil." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/13.jpg" data-large="img/art/13.jpg" alt="image01" data-description="LOON WITH BABY (2013): Loon with baby on back in charcoal." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/14.jpg" data-large="img/art/14.jpg" alt="image01" data-description="SUGARGLIDER (2011): Sugarglider pencil drawing." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/15.jpg" data-large="img/art/15.jpg" alt="image01" data-description="BUTTERFLIES (2009): Reverse painted butterflies in acrylic on glass." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/16.jpg" data-large="img/art/16.jpg" alt="image01" data-description="BLACK AND WHITE PANELS (2011): MDF panels painted with acrylic." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/17.jpg" data-large="img/art/17.jpg" alt="image01" data-description="CAMPANILLE (2014): Iowa State campanille watercolor painting." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/18.jpg" data-large="img/art/18.jpg" alt="image01" data-description="PRAIRIE PANELS (2011): MDF panels painted with acrylic." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/19.jpg" data-large="img/art/19.jpg" alt="image01" data-description="GIRAFFE AND BABY (2011): Giraffes drawn in pencil." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/20.jpg" data-large="img/art/20.jpg" alt="image01" data-description="CONEFLOWERS (2012): Coneflowers splatter painted with acrylic with definition of happiness in background." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/21.jpg" data-large="img/art/21.jpg" alt="image01" data-description="PENGUIN (2008): Intarsia wooden pieced penguin." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/22.jpg" data-large="img/art/22.jpg" alt="image01" data-description="TAZ (2012): Cat painted in watercolor." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/23.jpg" data-large="img/art/23.jpg" alt="image01" data-description="BALD EAGLE (2011): Bald eagle in pencil." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/24.jpg" data-large="img/art/24.jpg" alt="image01" data-description="ART SHELF (2009): Wooden art desktop easle with storage." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/25.jpg" data-large="img/art/25.jpg" alt="image01" data-description="DO YOU HEAR WHAT I HEAR (2008): Hatched pen drawing of trumpet with sheet music." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/26.jpg" data-large="img/art/26.jpg" alt="image01" data-description="GAFFER'S GUILD (2015): Club t-shirt design distributed to over 30 members." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/27.jpg" data-large="img/art/27.jpg" alt="image01" data-description="ENGINEERS' WEEK (2013): Publicity flyer, banner, and button designs distributed to hundreds of engineering students, faculty, staff, and community members." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/28.jpg" data-large="img/art/28.jpg" alt="image01" data-description="IOWA STATE CAPITOL (2010): Scratch board on copper of the Iowa State Capitol building." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/29.jpg" data-large="img/art/29.jpg" alt="image01" data-description="COUNTRY ROAD (2009): Impressionistic acrylic painting using red, blue, yellow, black and white." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/30.jpg" data-large="img/art/30.jpg" alt="image01" data-description="SURREAL LIFE (2008): Charcoal surrealism drawing." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/31.jpg" data-large="img/art/31.jpg" alt="image01" data-description="HALO X-BOX (2010): Acrylic painted X-box shell." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/32.jpg" data-large="img/art/32.jpg" alt="image01" data-description="BEST FRIENDS (2008): Impressionistic acrylic painting of girl and kitten." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/33.jpg" data-large="img/art/33.jpg" alt="image01" data-description="TIME WARP (2011): Acrylic painting on MDF." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/34.jpg" data-large="img/art/34.jpg" alt="image01" data-description="DAISY (" /></a></li>
									<li><a href="#"><img src="img/art/thumbs/35.jpg" data-large="img/art/35.jpg" alt="image01" data-description="ISU CLOCK (2011): Mod-podge clock." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/36.jpg" data-large="img/art/36.jpg" alt="image01" data-description="SELF PORTRAIT (2013): Self portrait in pencil." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/37.jpg" data-large="img/art/37.jpg" alt="image01" data-description="HALO (2010): Pencil drawing of video game collage." /></a></li>
									<li><a href="#"><img src="img/art/thumbs/38.jpg" data-large="img/art/38.jpg" alt="image01" data-description="FULL BLOOM (2010): Charcoal drawing of flower." /></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/ResponsiveImageGallery/js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="js/ResponsiveImageGallery/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/ResponsiveImageGallery/js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="js/ResponsiveImageGallery/js/gallery.js"></script>




			<div id = "footer" class = "nav"> 
				<h5>
					<a href = "index.php">Home</a>
				</h5>
				<p>
					<a href = "http://www.linkedin.com/in/michellevoelker">
						<img src = "img/icon/LinkedIn.png" width = "auto" height = "40px" onmouseover = "this.src='img/icon/LinkedIn2.png'" onmouseout = "this.src='img/icon/LinkedIn.png'"/></a> &nbsp 
					<a href = "http://www.pinterest.com/michellevoelker/">
						<img src = "img/icon/Pinterest.png" width = "auto" height = "40px" onmouseover = "this.src='img/icon/Pinterest2.png'" onmouseout = "this.src='img/icon/Pinterest.png'"/></a> &nbsp 
					<a href = "mailto:mvoelker1025@gmail.com?Subject=Website%20Inquiry" target="_top">
						<img src = "img/icon/Mail.png" width = "auto" height = "40px" onmouseover = "this.src='img/icon/Mail2.png'" onmouseout = "this.src='img/icon/Mail.png'"/></a> &nbsp 
					<a href = "info.php">
						<img src = "img/icon/Info.png" width = "auto" height = "40px" onmouseover = "this.src='img/icon/Info2.png'" onmouseout = "this.src='img/icon/Info.png'"/></a>
				</p>
				<h5>
					&#0169; <span id="currentYear"></span> Michelle Voelker
				</h5>
			</div>

		</div>
		</div>
	</div>

</body>
</html>