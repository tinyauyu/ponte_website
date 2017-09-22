<!DOCTYPE HTML>
<html>
	<head>
		<?php include 'modules/head.php'; ?>
	</head>
	<body>
	<div id="page-range">
		<?php include 'modules/menu.php'; ?>
		<div id="page-content">
		
			<h1>ERROR</h1>
			<h3>Status Code: <?php echo intval($_GET['code']);?></h3>
			 
		</div>	
	</div>
	<?php include 'modules/bottom.php' ?>
	</body>
<html>