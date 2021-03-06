<html>	
	<head>
		<title> Michelle's Portfolio </title>
		<link rel="shortcut icon" href="img/icon.ico">
		<link href="styles.css" rel = "stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-59557302-1', 'auto');
		  ga('send', 'pageview');

		</script>
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
			 "a Musician",
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
			<a href = "index.php">
			<img src = "img/icon/home2.png" width = "auto" height = "20px" onmouseover = "this.src='img/icon/home.png'" onmouseout = "this.src='img/icon/home2.png'" align = "left"/></a>

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
			<h2> Hello, I'm Michelle. I wear size 'cheap' and won't buy anything I can make. I can play the banjo, grew up on a dairy farm, and yes, I built this. As you probably have noticed, I love making things and helping others. Check out my <a href = "img/Resume.pdf"> resume</a> or use the links at the bottom of the page to learn more or to reach out!</h2>

		</div>
	</div>


		<ul class="dropdown">
		<li>
		<div class="label">Organizations</div>
		<div class="hidden">
			<p><a href = "http://www.iienet2.org/Default.aspx">Institute of Industrial Engineers 2015</a></p>
			<p><a href = "http://gaffer.stuorg.iastate.edu/">Gaffer's Guild 2014-2015</a></p>
			<p><a href = "http://www.nscs.org/">National Society of Collegiate Scholars 2010-2015</a></p>
			<p><a href = "http://www.music.iastate.edu/org/marching/">Iowa State Marching Band 2010-2014</a></p>
			<p><a href = "http://www.engineering.iastate.edu/eweek/">ISU Engineers' Week 2012-2013</a></p>
		</div>
		</li>
		</ul>
			<p>&nbsp </p>
		<ul class="dropdown">
		<li>
		<div class="label">Volunteer Organizations</div>
		<div class="hidden">
			<a href = "http://www.redcross.org/"><img class="nav-info" src = "img/info/cross.png" width = "10%" height = "auto"/></a>
			<a href = "http://www.locksoflove.org/"><img class="nav-info" src = "img/info/lol.png" width = "10%" height = "auto"/></a>
			<a href = "http://www.bccancerservice.org/"><img class="nav-info" src = "img/info/cancer.png" width = "10%" height = "auto"/></a>			
			<a href = "http://pantene.com/en-us/experience-main-section2/beautiful-lengths"><img class="nav-info" src = "img/info/pantene.png" width = "10%" height = "auto"/></a>
			<a href = "http://www.legion.org/"><img class="nav-info" src = "img/info/legion.png" width = "10%" height = "auto"/></a>
			<a href = "http://www.4-h.org/"><img class="nav-info" src = "img/info/4h.png" width = "10%" height = "auto"/></a>
			<a href = "http://www.thecustodyproject.org/"><img class="nav-info" src = "img/info/tcp.png" width = "10%" height = "auto"/></a>
		</div>
		</li>
		</ul>
			<p>&nbsp </p>
	<ul class="dropdown">
		<li>
		<div class="label">Recognition</div>
		<div class="hidden">
			<p><a href = "http://news.engineering.iastate.edu/2015/03/23/iowa-state-undergraduates-showcase-their-research-at-annual-capitol-event-march-24/">Research at Capitol Showcase 2015</a></p>
			<p><a href = "http://www.engineering.iastate.edu/engrhonors/award-winning-honors-project-presentations/">College of Engineering Award-Winning Honors Presentation 2014</a></p>
			<p><a href = "http://issuu.com/michellevoelker/docs/voelker_variations_in_resume_design">Best in College of Engineering Honors Capstone 2014</a></p>
			<p><a href = "http://issuu.com/michellevoelker/docs/voelker_variations_in_resume_design">Honors Capstone 2014</a></p>
			<p><a href = "http://www.dso.iastate.edu/pa/isupa-scholarship/2013-scholarship-finalists">ISU Parent's Association Scholarship Recipient 2013</a></p>
			<p><a href = "http://www.iowafarmertoday.com/news/dairy/iowa-state-dairy-association-scholarship-winners-announced/article_73be7a16-c9fd-11e2-9314-001a4bcf887a.html">Iowa State Dairy Association Scholarship Recipient 2013</a></p>
			<p><a href = "http://www.music.iastate.edu/org/marching/futuremembers/staff.php">ISU Marching Band Leadership 2013</a></p>
			<p><a href = "http://www.midwestdairycheckoff.com/0p28a302/june-2011-highlights/">Mid-West Dairy Association Scholarship Recipient 2011</a></p>
			<p><a href = "http://www.extension.iastate.edu/news/2010/jul/433007.htm">4-H State Visual Arts Award 2010</a></p>
			<p><a href = "http://www.extension.iastate.edu/sites/www.extension.iastate.edu/files/polk/volunteer.pdf">4-H Special Exhibit Display 2009</a></p>
			<p><a href = "http://main.w-delaware.k12.ia.us/staff_pages/pages/hs/duane_philgreen/09-10Awards.html">All State Music Festival 2009</a></p>
			<p><a href = "http://www.public.coe.edu/~wcarson/summitresults2008.htm">Outstanding Jazz Soloist 2008</a></p>
		</div>
		</li>
		</ul>


			<div id = "footer" class = "nav"> 
				<h5>
					<a href = "index.php">
						<img src = "img/icon/home2.png" width = "auto" height = "50px" onmouseover = "this.src='img/icon/home.png'" onmouseout = "this.src='img/icon/home2.png'" /></a>
				</h5>
				<p>
					<a href = "http://www.linkedin.com/in/michellevoelker">
						<img src = "img/icon/LinkedIn.png" width = "auto" height = "50px" onmouseover = "this.src='img/icon/LinkedIn2.png'" onmouseout = "this.src='img/icon/LinkedIn.png'"/></a> &nbsp 
					<a href = "http://www.pinterest.com/michellevoelker/">
						<img src = "img/icon/Pinterest.png" width = "auto" height = "50px" onmouseover = "this.src='img/icon/Pinterest2.png'" onmouseout = "this.src='img/icon/Pinterest.png'"/></a> &nbsp 
					<a href = "mailto:mvoelker1025@gmail.com?Subject=Website%20Inquiry" target="_top">
						<img src = "img/icon/Mail.png" width = "auto" height = "50px" onmouseover = "this.src='img/icon/Mail2.png'" onmouseout = "this.src='img/icon/Mail.png'"/></a> &nbsp 
				</p>
				<h5>
					&#0169; <span id="currentYear"></span> Michelle Voelker
				</h5>
			</div>

	</div>

</body>
</html>