<?php include '../modules/album/simple_html_dom.php'; ?>

<!DOCTYPE HTML>
<html>
	<head>
		<?php include '../modules/head.php'; ?>
		<?php $end_yr=2017; $begin_yr=2010;?>
		<?php $year = intval($_GET['year']);?>
        <?php if ($year==NULL){$year = $end_yr;}?>

		<title>相片集 | Ponte Singers</title>
		<script>
			$(function(){
				$('#album').css('max-height',$(window).height());
			})
		</script>
	</head>
	<body>
	<div id="page-range">
		<?php include '../modules/menu.php'; ?>
		<div id="page-content">
		
			<div class="jumbotron" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)),url('/images/media_photo.jpg'); background-size: cover; background-position: center bottom; height:40%; padding: 20px;">
				<h2 id="page-title">相片集</h2>
			</div>

			<ul class="nav nav-tabs">
				<?php for($yr=$end_yr; $yr>=$begin_yr; $yr--){ ?>
						<?php if($year==$yr){ ?>
						<li role="presentation" class="active">
						<?php } else { ?>
						<li role="presentation">
						<?php } ?>
							<a href="/media/photo.php?year=<?php echo $yr; ?>"><?php echo $yr; ?></a>
						</li>
				<?php } ?>
			</ul>

			<iframe id="album" width="100%" height="500px" frameborder="0" src="http://www.pontesingers.rf.gd/modules/album/load_album.php?year=<?php echo $year; ?>" scrolling="yes" seamless="seamless"></iframe>
			 
		</div>	
	</div>
	<?php include '../modules/bottom.php' ?>
	</body>
<html>