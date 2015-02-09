<html>
	
	<head>
		<title> Michelle's Portfolio </title>
		<link rel="shortcut icon" href="img/icon.ico">
		<link href="styles.css" rel = "stylesheet" type="text/css">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-59557302-1', 'auto');
		  ga('send', 'pageview');

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
			<h1> Welcome to Michelle's Portfolio! </h1>
			<h2> Please select a category below to begin. </h2>

		<div id = "wrapper">
				<h1>
					<a href = "tech.php">
						<img class="nav-icon" src = "img/icon/professional.png" width = "auto" height = "220px" onmouseover = "this.src='img/icon/professional2.png'" onmouseout = "this.src='img/icon/professional.png'"/></a>
					<a href = "art.php">
						<img class="nav-icon" src = "img/icon/creative.png" width = "auto" height = "220px"onmouseover = "this.src='img/icon/creative2.png'" onmouseout = "this.src='img/icon/creative.png'"/></a>
					<a href = "photo.php">
						<img class="nav-icon" src = "img/icon/images.png" width = "auto" height = "220px"onmouseover = "this.src='img/icon/images2.png'" onmouseout = "this.src='img/icon/images.png'"/>
					</a>
				</h1>

			<p><div id = "footer" class = "nav"> 
					<a href = "http://www.linkedin.com/in/michellevoelker">
						<img src = "img/icon/LinkedIn.png" width = "auto" height = "40px" onmouseover = "this.src='img/icon/LinkedIn2.png'" onmouseout = "this.src='img/icon/LinkedIn.png'"/></a> &nbsp 
					<a href = "http://www.pinterest.com/michellevoelker/">
						<img src = "img/icon/Pinterest.png" width = "auto" height = "40px" onmouseover = "this.src='img/icon/Pinterest2.png'" onmouseout = "this.src='img/icon/Pinterest.png'"/></a> &nbsp 
					<a href = "mailto:mvoelker1025@gmail.com?Subject=Website%20Inquiry" target="_top">
						<img src = "img/icon/Mail.png" width = "auto" height = "40px" onmouseover = "this.src='img/icon/Mail2.png'" onmouseout = "this.src='img/icon/Mail.png'"/></a> &nbsp 
					<a href = "info.php">
						<img src = "img/icon/Info.png" width = "auto" height = "40px" onmouseover = "this.src='img/icon/Info2.png'" onmouseout = "this.src='img/icon/Info.png'"/></a>
				<h5>
					&#0169; <span id="currentYear"></span> Michelle Voelker
				</h5>
				</p>
			</div>
			</div>
			</div>
			</div>
</body>
</html>