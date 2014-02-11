<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>David Saunders | Portfolio</title>
	<meta name="description" content="David Saunders is a web developer living in Austin, TX.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> 
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<!-- Styles --> 
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/flexbox.css" type="text/css" media="screen">


<!-- End styles -->

</head>
<body>
	<div class="head">
		<header>
			<h1 class="headtext">Hello, I'm David Saunders.</h1>
			<h1>I'm a ___</h1>
		</header>
		<section>
			<nav class="container">
				<ul class="nav">
					<a href="#about"><li>About</li></a>
					<a href="#work"><li>Work</li></a>
					<a href="#contact"><li>Contact</li></a>
					<a href="#"><li>Blog</li></a>
				</ul>
			</nav>
		</section>
	</div>
		<article>
				<div id="about">
					<h3>About</h3>
						<p class="firstp">My name is David Saunders.</p> 
						<p class="secondp">I'm a web developer currently living in Austin, Texas.</p>
						<div class="image">
							<img src="img/davidsaunders.png" alt="David Saunders" width="200" height="200" class="davidpic container">
						</div>
						<p> My portfolio is currently a work in progress.</p>
						<p> I'm originally from Los Angeles, California, but moved to Austin, Texas in October 2012 after a brief stint in Portland, Oregon. I graduated from UC Davis with a degree in physical anthropology, but opted to work in the web development field instead. I enjoy developing websites in HTML5, CSS3, JavaScript/jQuery, and PHP. In my spare time, I'm working on countless projects to better myself at these and other languages.</p>
						<p> I currently work full-time as a technology project manager at Six Red Marbles, an educational publishing company. In my spare time, I enjoy biking, hiking, frisbee, playing guitar, and other fun things.</p> 
						<!-- <p>David Saunders is a web developer living in Austin, Texas, specializing in HTML5, CSS3, JavaScript/jQuery, and PHP. He currently works full-time as a technology project manager for Six Red Marbles, an educational publishing company. In his spare time, he hikes, bikes, plays guitar, and does other fun things.</p> -->
<!-- 						<div class="skills">
							<ul>
								<li>&#60;HTML&#62;</li>
								<li>{CSS}</li>
								<li>.javascript<li>
								<li>&#60;? PHP ?&#62;</li>
							</ul>
					</div> -->
				</div>	
		</article>
		<article>
			<div id="work">
				<h3>Work</h3>
					<div class="samples">
						<li class="thumbnail"></li>
						<li class="thumbnail"></li>
						<li class="thumbnail"></li>
						<li class="thumbnail"></li>
						<li class="thumbnail"></li>
					</div>
			</div>
		</article>
		<article>
			<div id="contact">
				<h3>Contact</h3>
				<p>Get In Touch</p>
				<ul class="logos">
						<li><a href="https://github.com/djsaun" class="icon github" target="_blank" title="Github" width="54px" height="54px"></a></li>
						<li><a href="https://www.codepen.io/djsaun" class="icon codepen" target="_blank" title="Codepen" width="54px" height="54px"></a></li>
						<li><a href="https://www.facebook.com/dsaunders1000010101010101" class="icon facebook" target="_blank" title="Facebook" width="54px" height="54px"></a></li>
						<li><a href="http://www.linkedin.com/profile/view?id=95648542" class="icon linkedin" target="_blank" title="LinkedIn" width="54px" height="54px"></a></li>
<!-- 						<li><a href="https://plus.google.com/+DavidSaunders010100011" class="icon google" target="_blank" title="Google +" width="54px" height="54px"></a></li> -->
						<li><a  href="http://open.spotify.com/user/djsaun" class="icon spotify" target="_blank" title="Spotify" width="54px" height="54px"></a></li>
				</ul>
				<form action="#" method="POST" name="contact_form" id="contactform">
					<fieldset>
						<div class="name">
							<label for="Name">Name *</label>
							<input type="text" name="Name" id="Name" pattern="[a-zA-Z ]+" required></input>
						</div>
						<div class="email">
							<label for="Email">Email *</label>
							<input type="email" Name="Email" id="Email" required></input>
						</div>
						<div class="message">
							<label for="Message">Message</label>
							<textarea name="Message" id="Message" rows="4" cols="50"></textarea>
						</div>
						<div class="submitbtn">
							<input type="submit" value="Submit">
						</div>
					</fieldset>
				</form>
			</div>
		</article>
		<footer class="footer">
			<p>&copy;<?php echo date('Y'); ?> David Saunders. All Rights Reserved.</p>
		</footer>

		</article>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>		
<script src="js/contact.js"></script>
<script src="js/timeofday.js"></script>

</body>
</html>