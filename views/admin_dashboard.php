<div id="welcome">
	<h1>Admin Dashboard</h1>

	<div id="manage">
		<div>
			<a href="index.php?controller=admin&action=users"><img src="images/iconProfile.png"/><br/>Users</a>
		</div>

		<div>
			<a href="index.php?controller=admin&action=wishes"><img src="images/iconStar.png"/><br/>Wishes</a>
		</div>

		<?php
			if($_SESSION["bAdmin"] == 1) {
		?>
		
		<div>
			<a href="index.php?controller=admin&action=hospitals"><img src="images/hospital.png"/><br/>Hospitals</a>
		</div>

		<div>
			<a href="index.php?controller=admin&action=clients"><img src="images/clients.png"/><br/>Clients</a>
		</div>

		<?php
		}
		?>

		<?php
			if($_SESSION["bAdmin"] != 1) {
		?>

		<div>
			<a href="index.php?controller=admin&action=hospital"><img src="images/settings.png"/><br/>Settings</a>
		</div>

		<div>
			<a href="index.php?controller=admin&action=cmsLogout"><img src="images/exit.png"/><br/>Log Out</a>
		</div>
		
		<?php
		}
		?>

	</div><!--manage-->
</div><!--welcome-->