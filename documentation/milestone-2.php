<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Optional Bootstrap theme -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet"/>

		<!-- LINK TO YOUR CUSTOM CSS FILES HERE -->
		<link type="text/css" href="../css/milestone.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.1/additional-methods.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<title>Milestone 2</title>
	</head>
	<body class="sfooter">

		<!--this wrapper div is for the sticky footer-->
		<div class="sfooter-content">

			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="#"><img alt="Brand" src="../images/sponge-brand.png" height="20"></a>
							<p class="navbar-text">Personal <strong>Portfolio</strong></p>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav pull-right">
								<li role="presentation"><a href="./index.php">Documentation</a></li>
								<li role="presentation"><a href="./milestone-1.php">Milestone-1</a></li>
								<li role="presentation" class="active"><a href="#">Milestone-2</a></li>
								<li role="presentation"><a href="#">Milestone-3</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>

			<main class="container">
				<h2>Persona</h2>
				<p><strong>Name: </strong>Albert Wilkinson<br><strong>Age: </strong>58</p>
				<p><strong>Profession: </strong>Dentist who owns a small practice in northern New Mexico. He and his wife have provided dental care to the surrounding area for 28 years. So far Albert has taken to using written methods of documentation. He realizes that before he retires and sells his practice, he will need to digitize all of his dental records. In addition to digital records he would also like a modern web interface. He is looking for some outside help to accomplish this.</p>
				<p><strong>Technology: </strong>Uses an old timey flip phone for emergencies, because cell service in the area is spotty. At home he's recently been given a new Dell PC that runs Windows 8 and has internet access. Currently at the office he runs a Gateway desktop with Windows 95 that can connect to the internet via dial-up. Needless to say he is also looking for advice on a system upgrade for the office.</p>
				<p><strong>Frustrations and Needs: </strong>Albert needs to hire someone with good skills who is willing to travel to his location. Albert is also looking for someone who is easygoing and up for the challenges to do the task. Albert can't offer a very high salary, but he can add unlimited dental work as part of the compensation.</p>
				<p><strong>Goals: </strong>Albert needs a user friendly site when looking for someone to hire, where qualifications and contact info are easily accessible. He can't deal with/understand complicated navigation schemes.</p>
				<h2>Use Case</h2>
				<p>Albert started his search by googling new mexico, web design, and technical support. My website is high on the search results due to my implementation of SEO standards. He checks out my web site.</p>
				<ol>
					<li>Lands on Home page. Reads a short bio about me.</li>
					<li>Views some of my projects in Portfolio section. Finds work satisfactory. Navigates to the "Contact Me" section via a side navigation bar on the page.</li>
					<li>Types up a short message about his needs and shoots me an email.</li>
				</ol>
				<img class="img-responsive" src="../images/personal-site-plan.png" alt="use case flow chart">
				<h2>Proposed Site Map</h2>
				<p>Site will consist of 1 page total. No sub-pages or sub-navigation. This will be the Minimum Viable Product. The site will consist of 4 subsections with a sidebar navigation menu.</p>
				<ul>
					<li>A Picture of Me, Short Bio, Contact Info/Link to Contact Form</li>
					<li>Current Projects</li>
					<li>Past Projects</li>
					<li>Contact Form</li>
				</ul>
				<p><strong>Current Projects: </strong>Detailed description and interactive display of my current project(s). What I plan to accomplish and future goals.</p>
				<p><strong>Past Projects: </strong>Examples of my past work, including my roles and contributions to each project. Each item will link to the project for demonstration.</p>
				<p><strong>Contact: </strong>This section will contain a simple contact form, my professional email address, phone number, and additional links to my professional profiles: LinkedIn, and GitHub.</p>
				<h2>Proposed Features and Functionality</h2>
				<ul>
					<li>Top static bar for my contact info.</li>
					<li>Side static navigation bar for jumping to sections.</li>
					<li>Contact Form.</li>
					<li>Iconography using Bootstrap included glyphs.</li>
				</ul>
			</main>
		</div>
	</body>
</html>