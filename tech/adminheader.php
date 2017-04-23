<?php
	include("check.php");		
?>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/headerstyle.css" type="text/css" />
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/logo/favicon.png" >
	<link rel="stylesheet" href="css/bodystyle.css" type="text/css" />
</head>
<div id="headerhome">
	<div id="headertitle">
		<h1>Hello, <em><?php echo $login_user;?>!</em></h1>
	</div>
	<div id="headerlogo">
		<a href="logout.php" style="font-size:18px">Logout?</a>
	</div>
</div>
