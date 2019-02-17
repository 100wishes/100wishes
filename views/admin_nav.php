<nav>
	<img src="images/logo.svg"/>
	<ul>
		<li><a href="index.php?controller=admin&action=dashboard">Dashboard</a></li>
		<li><a href="index.php?controller=admin&action=users">Users</a></li>
		<li><a href="index.php?controller=admin&action=wishes">Wishes</a></li>

		<!-- insert php code if bAdmin === 1 -->
	
		<li><a href="index.php?controller=admin&action=hospitals">Hospitals</a></li>
		<li><a href="index.php?controller=admin&action=clients">Clients</a></li>

		<!-- insert php code if bAdmin !=1 -->

		<li><a href="index.php?controller=admin&action=hospital">Settings</a></li>
		<li><a href="index.php?controller=admin&action=cmsLogout">Logout</a></li>

	</ul>
</nav>