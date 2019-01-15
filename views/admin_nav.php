<nav>
	<ul>
		<li><a href="index.php?controller=admin&action=dashboard">Dashboard</a></li>
		<li><a href="index.php?controller=admin&action=users">Users</a></li>
		<li><a href="index.php?controller=admin&action=wishes">Wishs</a></li>
	<?php
		if($_SESSION["bAdmin"] === "1") {
	?>
		<li><a href="index.php?controller=admin&action=hospitals">Hospitals</a></li>
		<li><a href="index.php?controller=admin&action=clients">Clients</a></li>
	<?php
		}
	?>
	<?php
		if($_SESSION["bAdmin"] != "1") {
	?>
		<li><a href="index.php?controller=admin&action=hospital">Settings</a></li>
	<?php
		}
	?>
		<li><a href="index.php?controller=admin&action=cmsLogout">Logout</a></li>
	</ul>
</nav>