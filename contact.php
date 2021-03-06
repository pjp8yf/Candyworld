<!DOCTYPE HTML>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!-- Favicon -->
	<link rel="icon" href="images/logo.png">
</head>
<script type="text/javascript">
function formValidation(){
	var email = document.register.email;
	if(!emailVal(email)){
		return false;
	}
	return true;
}

function emailVal(email){
	var emailcheck = /^([A-Za-z0-9._-])+@([a-z])+\.([a-z.])+$/;
	if(!email.value.match(emailcheck)){
		alert("Email is invalid");
		email.focus();
		return false;
	}
	return true;
}
</script>
<body class="right-sidebar">
	<div id="page-wrapper">

		<!-- Header -->
			<header id="header">
				<!-- <h2 ><a href="index.html">Candy World</a></h2> -->
				<h1 id="logo"> <a href="index.html"><font size="5px" color="#00A9E0">CANDY</font><font size="5px"><span> WORLD</span> </font></a></h1>
				<nav id="nav">
					<ul>
						<li class="submenu">
							<a href="#"><font size="4px">Catalog</font></a>
							<ul>
								<li><a href="catalog.html"><font size="4px">Chocolate</font></a></li>
								<li><a href="catalog.html"><font size="4px">Gummies</font></a></li>
							</ul>
						</li>
						<li><a href="story.html"><font size="4px">Our Story</font></a></li>
						<li><a href="store.html"><font size="4px">Locations</font></a></li>
						<!-- <li class="current"><a href="contact.html"><font size="4px">Contact Us</font></a></li> -->
						<!-- <li><a href="#" class="button special">Sign Up</a></li> -->
					</ul>
				</nav>
			</header>


			<!-- Main -->
				<article id="main">

					<header class="special container">
						<img src="images/logo.png" alt="" style="width:95px;height:95px"/>
						<h2><strong>Get In Touch</strong></h2>
						<p>Send us a message and we will get back to you shortly</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container 75%">

							<!-- Content -->
								<div class="content">
									<form method = "POST" name="register" action = "emailContact.php" onsubmit="return formValidation();">
										<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" id="email" name = "email" placeholder="Email" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<input type="text" id="subject" name="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea id="message" name="message" placeholder="Message" rows="7"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<ul class="buttons">
													<li><input type="submit" class="special" value="Send Message" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>

						</section>

				</article>

				<!-- footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="https://www.facebook.com/CandyWorldUSA" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/candyyworldd/" class="icon circle fa-instagram"><span class="label">Instragram</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Candy World</li><li>All Rights Reserved</li><li><a href="contact.html">Contact Us</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
