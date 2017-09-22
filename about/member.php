<!DOCTYPE HTML>
<html>
	<head>
		<?php include '../modules/head.php'; ?>
		<?php $end_yr=2017; $begin_yr=2010;?>
		<?php $year = intval($_GET['year']);?>
		<?php $namelist_file = '../modules/namelist/'.$year.'.php'?>
		<?php if(!isset($_GET['year']) || !file_exists($namelist_file)){ $year = $end_yr; } ?>
		<title>樂團成員 | Ponte Singers</title>
	</head>
	<body>
	<div id="page-range">
		<?php include '../modules/menu.php'; ?>
		<div id="page-content">
		
			<div class="jumbotron" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)),url('/images/ponte_member_<?php echo $year;?>.jpg'); background-size: cover; background-position: bottom center; height:40%; padding: 20px;">
			  <h2 id="page-title">樂團成員</h2>
			 
			</div>
			<div id="text">
				<span>
					Ponte Singers 人才濟濟，每年皆吸納本地富合唱經驗、熱衷音樂的青年，自幼開始接受聲樂及合唱訓練；而 Ponte Orchestra 的成員大多都是來自本地及海外大學的音樂系畢業生，並從事音樂教育或樂團職業樂手。自2010成立至今，參加過Ponte的樂手已經超逾500人。<br><br>
					我們每一位，都抱有一份對音樂的執著和熱情，期望能夠把更多不同種類的音樂帶給您們。
				</span>
			
				<ul class="nav nav-tabs" style="margin-top: 15px;">
					
					<?php for($yr=$end_yr; $yr>=$begin_yr; $yr--){ ?>
						<?php if($year==$yr){ ?>
						<li role="presentation" class="active">
						<?php } else { ?>
						<li role="presentation">
						<?php } ?>
							<a href="member.php?year=<?php echo $yr; ?>"><?php echo $yr; ?></a>
						</li>
					<?php } ?>

				</ul>

				<?php 
				if (file_exists($namelist_file)){
					include $namelist_file;
				} else {
					include '../modules/namelist/'.$end_yr.'.php';
				} ?>
			</div>
		</div>	
	</div>
	<?php include '../modules/bottom.php'; ?>
	</body>
<html>