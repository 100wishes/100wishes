<?php
include('views/admin_header.php');
if($_GET['action'] != 'login') {
	include('views/admin_nav.php');
}

echo '<div class="wrapper">'.$content.'</div>';

include('views/admin_footer.php');
?>