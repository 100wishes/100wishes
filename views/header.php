<!DOCTYPE html>
<html>
<head>
	<title><?=$arrData['page']['strNav']?> | <?=$arrData['page']['strMainTitle']?></title>
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	<header>
		<div class="logo">
			<a href="index.php">
				<img src="images/logo.svg">
			</a>
		</div><!--logo-->

	<?php
		include('views/nav.php');
	?>
		<div class="headerIcons">
			<span class="iconMissions"><a href="index.php?controller=pages&amp;action=mission">
				<img src="images/iconMissions.png" alt="iconMissions" class="iconMissionsImg">
				Missions</a>
			</span><!--iconMissions-->

			<span><a href="index.php?controller=pages&amp;action=profile">
			<span class="iconProfile"><a href="index.php?controller=pages&amp;action=profile">
				<img src="images/iconProfile.png" alt="iconProfile" class="iconProfileImg">
				Profile</a>
			</span><!--iconProfile-->
		</div><!--headerIcons-->

		<div id="iconNav">
		<a href="#"><img src="images/iconNav.png" alt="iconNav"></a>
		</div><!--iconNav-->
	</header>

	<nav id="mobileNav">
	<img src="images/iconStar.png" alt="iconStar" class="iconStar">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php?controller=pages&amp;action=hospitals">Hospitals</a></li>
		<li><a href="index.php?controller=pages&amp;action=about">About</a></li>
		<li><a href="index.php?controller=pages&amp;action=contact">Contact</a></li>
		<li><a href="index.php?controller=pages&amp;action=policies">Policies</a></li>
		<li><a href="index.php?controller=pages&amp;action=mission">Missions</a></li>
		<li><a href="index.php?controller=pages&amp;action=profile">Profile</a></li>
	</ul>
		
	<div id="iconClose">
		<a href="#">
		<img src="images/iconClose.png" alt="iconClose">
		</a>
	</div><!--iconClose-->
</nav><!--mobileNav-->