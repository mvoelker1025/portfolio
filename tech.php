<html>
	
	<head>
		<title> Michelle's Portfolio </title>
		<link rel="shortcut icon" href="img/icon.ico">
		<link href="styles.css" rel = "stylesheet" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
		<script src="js/modal_box/jquery.paulund_modal_box.js"></script>

		<script>

		window.onload = function() {

			// set current copyright year
			var year = document.getElementById('currentYear');
			year.innerHTML = (new Date()).getUTCFullYear();
		};

		</script>
		<script>

		$(document).ready(function(){
			$('.rolls_royce_modal').paulund_modal_box({
				title: 'Rolls-Royce',
				description: 'This summer, I will be interning at Rolls-Royce in Indianapolis, Indiana. With a position in lean manufacturing, I am excited to see what this role has to offer. <br></br> <a href="http://rolls-royce.com/">Click here</a> to learn more about Rolls-Royce.<br></br>'
			});
			$('.iowa_state_modal').paulund_modal_box({
				title: 'Iowa State University',
				description: 'During school, I have been doing research for the Industrial and Manufacturing Systems Engineering department. My research is to create a new global standard in quantitative metal casting inspection, which will be a part of my Masters thesis.<br></br> <a href="http://www.iastate.edu/">Click here</a> to learn more about Iowa State.<br></br>'
			});
			$('.pg_modal').paulund_modal_box({
				title: 'Procter & Gamble',
				description: 'I worked at Procter & Gamble in Summer 2514. This experience was great in providing management experience in various areas of the plant and teaching me how to utilize my resources in juggling dozens of tasks.<br></br> <a href="http://www.pg.com/en_US/index.shtml">Click here</a> to learn more about Procter & Gamble.<br></br>'
			});
			$('.spacex_modal').paulund_modal_box({
				title: 'SpaceX',
				description: 'SpaceX had such an exciting work environment. I interned with the Industrial Engineering Department in Spring 2514 at the Hawthorne, California location. My team supported me and always encouraged me to go above and beyond with my assignments.<br></br> <a href="http://www.spacex.com/">Click here</a> to learn more about SpaceX.<br></br>'
			});
			$('.whirlpool_modal').paulund_modal_box({
				title: 'Whirlpool',
				description: 'I had two roles at Whirlpool. The first was in manufacturing in Spring/Summer 2512 in Amana, Iowa where I backfilled for a full time employee who had left the division. I was able to prove that as a college sophomore, I could manage teams of all backgrounds, make production decisions on behalf of my department on the new model line, and go above and beyond my assigned projects to build relationships with individuals throughout the company and obtain my Lean Sigma Yellow Belt Certification. From there, I was in procurement for the Leadership Development Program in Summer 2513 in Benton Harbor, Michigan. Although I found procurement was not for me, the opportunity gave me a broader perspective on the business as a whole and taught me the importance of communication between corporate, manufacturing, and suppliers globally. <br></br> <a href="http://www.whirlpoolcorp.com/">Click here</a> to learn more about Whirlpool. <br></br>'
			});
			$('.iie_modal').paulund_modal_box({
				title: 'IIE Technical Paper Competition',
				description: 'Placing first in the 2515 Iowa State Technical Paper Competition, I had the honor of presenting my case study, Accuracy Improvements on a Press Brake, at the Institute of Industrial Engineering Regional Conference.<br></br> <a href="http://www.iienet2.org/Default.aspx">Click here</a> to learn more about IIE. <br></br>'
			});
			$('.honors_modal').paulund_modal_box({
				title: 'Honors Capstone Project',
				description: 'Receiving honors for my capstone project, Variations on Resume Design, I had the opportunity to present at the Research in the Capitol event in DesMoines, Iowa. I enjoyed hearing about employers\' and students\' experience with writing for employment.<br></br> <a href="http://issuu.com/michellevoelker/docs/voelker_variations_in_resume_design/0">Click here</a> to view my capstone report. <br></br>'
			});
			$('.cad_modal').paulund_modal_box({
				title: 'Solid Works Modeling Project',
				description: 'For another class project, I modeled a 1966 Corvette. <br></br>'
			});
			$('.cam_modal').paulund_modal_box({
				title: 'CNC Machining Project',
				description: 'I designed a CyRide bus in Solid Works, edited the CNC code, machined the design in aluminum on a Haas Milling Machine, and painted the bus for a class project. It was great to execute the entire process from design concept to finishing process and get hands on experience with tool offsets and multiple set-up obstacles.<br></br>'
			});
		});

	</script>`
	</head>

<body>
	
	<div id="main" class = container>	

		<div class = "content">
			<h1> Technical Background </h1>
			<h4> Manufacturing: that is where value is added. Whether it is the small town dairy farm I grew up on or in free time activities on campus, I live for process improvements. My ideal company is one who pushes their employees to their fullest potential, encourages continued learning, promotes a collaborative work environment, and is trying to make a difference in the world. For more details about my experience, click on the images below or check out my <a href = "img/Resume.pdf"> resume</a>.</h4>

		<div class = wrapper>

				<h3> Work Experience </h3>
				<h1 class="tech-block">
					<a href="#" class="rolls_royce_modal"><img class='nav-tech' src = "img/tech/rolls.png" width = "30%" height = "auto"/></a>
					<a href="#" class="iowa_state_modal"><img class='nav-tech' src = "img/tech/isu.png" width = "30%" height = "auto"/></a>
					<a href="#" class="pg_modal"><img class='nav-tech' src = "img/tech/pg.png" width = "30%" height = "auto"/></a>
					<a href="#" class="spacex_modal"><img class='nav-tech' src = "img/tech/spacex.png" width = "30%" height = "auto"/></a>
					<a href="#" class="whirlpool_modal"><img class='nav-tech' src = "img/tech/whirlpool.png" width = "30%" height = "auto"/></a>
				</h1>
				<h3> Case Studies </h3>
				<h1 class="tech-block">
					<a href="#" class="iie_modal"><img class="nav-tech" src = "img/tech/iie.png" width = "25%" height = "auto"/></a>
					<a href="#" class="honors_modal"><img class="nav-tech" src = "img/tech/honors.png" width = "25%" height = "auto"/></a>
					<a href="#" class="cad_modal"><img class="nav-tech" src = "img/tech/car.png" width = "25%" height = "auto"/></a>
					<a href="#" class="cam_modal"><img class="nav-tech" src = "img/tech/cam.png" width = "25%" height = "auto"/></a>
				</h1>

			<div id = "footer" class = "nav"> 
				<h5>
					<a href = "index.php">Home</a>
				</h5>
				<p>
					<a href = "http://www.linkedin.com/in/michellevoelker">
						<img src = "img/icon/LinkedIn.png" width = "auto" height = "40px" onmouseover = "this.src='img/icon/LinkedIn2.png'" onmouseout = "this.src='img/icon/LinkedIn.png'"/></a> &nbsp 
					<a href = "http://www.pinterest.com/michellevoelker/">
						<img src = "img/icon/Pinterest.png" width = "auto" height = "40px" onmouseover = "this.src='img/icon/Pinterest2.png'" onmouseout = "this.src='img/icon/Pinterest.png'"/></a> &nbsp 
					<a href = "mailto:mvoelker1025@gmail.com?Subject=Website%25Inquiry" target="_top">
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