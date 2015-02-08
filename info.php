<html>
	
	<head>
		<title> Michelle's Portfolio </title>
		<link rel="shortcut icon" href="img/icon.ico">
		<link href="styles.css" rel = "stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<script>
			$(document).ready(function() {

				// content text dropdowns
				var labels = $('.label');
				labels.on('click', function() {
					var speed = 800;
					$(this).next('.hidden').slideToggle(speed);
				});

				// copyright year
				var year = document.getElementById('currentYear');
				year.innerHTML = (new Date()).getUTCFullYear();
			});
		</script>


			<title>Random Text</title>
			<script type="text/javascript">
			var textarray = [
			 "an Engineer",
			 "an Artist",
			 "a Woodworker",
			 "a Painter",
			 "a Volunteer",
			 "a Gaffer",
			 "a Machinist",
			 "a Baker" 
			];

			function RndText() {
			  var rannum= Math.floor(Math.random()*textarray.length);
			  document.getElementById('RandomQuote').innerHTML=textarray[rannum];
			}
			onload = function() { RndText(); }

			var inter = setInterval(function(){RndText();},2000)

			</script>

	</head>

<body>
	
	<div id="main" class = container>	

		<div class = "content">
			<h1> About Michelle </h1>
			<p> 
				<img src = "img/me.png" width = "auto" height = "300px">
			</p>
			<h3> 
				I am <span class = "color"><a id = "RandomQuote"></a></span>.
			</h3>
		</div>

		<div id = "wrapper">
			<h2> I'm Michelle. I like puppies and making stuff. I wear size cheap and won't buy anything I can make. I can play the banjo, grew up on a dairy farm, and yes, I built this. Check out my <a href = "img/Resume.pdf"> resume</a> or use the links at the bottom of the page for more information or to reach out.</h2>

		</div>
	</div>

	<ul class="dropdown">
		<li>
		<div class="label">Recognition</div>
		<div class="hidden">
			<p><a href = "http://www.engineering.iastate.edu/engrhonors/award-winning-honors-project-presentations/">College of Engineering Poster Presentation Award 2014</a></p>
			<p><a href = "http://issuu.com/michellevoelker/docs/voelker_variations_in_resume_design">Honors Capstone 2014</a></p>
			<p><a href = "http://www.dso.iastate.edu/pa/isupa-scholarship/2013-scholarship-finalists">ISU Parent's Association Scholarship Recipient 2013</a></p>
			<p><a href = "http://www.iowafarmertoday.com/news/dairy/iowa-state-dairy-association-scholarship-winners-announced/article_73be7a16-c9fd-11e2-9314-001a4bcf887a.php">Iowa State Dairy Association Scholarship Recipient 2013</a></p>
			<p><a href = "http://www.music.iastate.edu/org/marching/futuremembers/staff.php">ISU Marching Band Leadership 2013</a></p>
			<p><a href = "http://www.midwestdairycheckoff.com/0p28a302/june-2011-highlights/">MidWest Dairy Association Scholarship Recipient 2011</a></p>
			<p><a href = "http://www.extension.iastate.edu/news/2010/jul/433007.htm">4-H State Visual Arts Award 2010</a></p>
			<p><a href = "http://www.extension.iastate.edu/sites/www.extension.iastate.edu/files/polk/volunteer.pdf">4-H Special Exhibit Display 2009</a></p>
			<p><a href = "http://main.w-delaware.k12.ia.us/staff_pages/pages/hs/duane_philgreen/09-10Awards.php">All State Music Festival 2009</a></p>
			<p><a href = "http://www.public.coe.edu/~wcarson/summitresults2008.htm">Outstanding Jazz Soloist 2008</a></p>
		</div>
		</li>
		</ul>


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
				</p>
				<h5>
					&#0169; <span id="currentYear"></span> Michelle Voelker
				</h5>
			</div>

	</div>

</body>
</html>