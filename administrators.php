<?php include('functions.php'); ?>

<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Administrators</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>TigerOPS</strong> Administrators</a>
						<nav> </nav>
					</header>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Administrators</h1>
							</header>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3>President</h3>
										<h4>Damien Burks</h4>
										<?php
											$email = $to_server->query("SELECT email FROM admin WHERE FName = 'Damien'")->fetch_object()->email;
											echo "$email";
										?>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Vice President</h3>
										<h4>Diamond Rivers</h4>
										<?php
											$email = $to_server->query("SELECT email FROM admin WHERE FName = 'Diamond'")->fetch_object()->email;
											echo "$email";
										?>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Secretary</h3>
										<h4>Olivia Bravo</h4>
										<?php
											$email = $to_server->query("SELECT email FROM admin WHERE FName = 'Olivia'")->fetch_object()->email;
											echo "$email";
										?>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Treasurer</h3>
										<h4>Ahmeen Muhammad</h4>
										<?php
											$email = $to_server->query("SELECT email FROM admin WHERE FName = 'Ahmeen'")->fetch_object()->email;
											echo "$email";
										?>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Director of Communications</h3>
										<h4>Tynesha Dorsey</h4>
										<?php
											$email = $to_server->query("SELECT email FROM admin WHERE FName = 'Tynesha'")->fetch_object()->email;
											echo "$email";
										?>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Advisor</h3>
										<h4>Dr. Khan</h4>
										<p>email</p>
									</header>
								</article>
							</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
