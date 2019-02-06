<!DOCTYPE html>
<html>
<head>
	<title><?=$arrData['page']['strNav']?> | <?=$arrData['page']['strMainTitle']?></title>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	<header>
		<div class="logo">
			<a href="index.php">
				<img src="images/logo.svg">
			</a>
		</div>
	<?php
		include('views/nav.php');
	?>
		<div class="headerIcons">
			<span class="iconMissions"><a href="index.php?controller=pages&action=missions">
				<img src="images/iconMissions.png" alt="iconMissions">
				<p>Missions</p></a>
			</span>

			<span><a href="index.php?controller=pages&action=profile">
				<img src="images/iconProfile.png" alt="iconProfile">
				<p>Profile</p></a>
			</span>
		</div>
	</header>