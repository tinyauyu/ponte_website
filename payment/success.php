<!DOCTYPE HTML>
<html>
	<head>
		<?php include '../modules/head.php'; ?>
		<title>交易成功 | Ponte Singers</title>
		<script>
		function proceedToPayment(){
			var OR = $('#OR').val();
			var ORB = $('#ORB').val();
			var CR = $('#CR').val();
			var CRB = $('#CRB').val();
			window.location.href = "2016_transaction.php?OR="+OR+"&ORB="+ORB+"&CR="+CR+"&CRB="+CRB;
		}
		</script>
		<style>
			h1{
				font-size: 100px;
				color: #04B431;
			}
		</style>
	</head>
	<body>
	<div id="page-range">
		<?php include '../modules/menu.php'; ?>
		<div id="page-content">
			<div class="jumbotron" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)),url('/images/concert_mysterium_banner.jpg'); background-size: cover; height:40%; padding: 20px;">
			  <h2 id="page-title">交易成功 Transaction Success</h2>
			 
			</div>

				<div id="left-col" class="col-md-5">
					<a href="/images/concert_mysterium_poster.jpg"><img src="/images/concert_mysterium_poster.jpg" alt="Ponte Singers Concert 2016 - Mysterium misericardiæ" width="100%"></a>
				</div>
				<div class="col-md-7">
					<div class="col-md-12 center">
					<h1><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></h1>
					</div>
					<br>
					你的交易已經完成，交易單據亦至發送到你的電郵地址。我們將會向你郵寄邀請函，當天請憑邀請函領取場刊入場。如有疑問，可電郵至 pontesingers@gmail.com 查詢。<br><br>
					The transaction has been completed, and a receipt for your purchase has been emailed to you. We will send you the invitation card(s) by mail. Please bring the card to get a booklet on that day, in order to get in to the performance venue. If you have any questions please feel free to contact us at pontesingers@gmail.com.<br>

					<div style="margin-top:10px; float:right;">
					  	<a class="btn btn-info" href="/">回首頁 Back to Homepage <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></a>
					</div>
				</div>
			</div>
			 
		</div>	
	</div>
	<?php include '../modules/bottom.php' ?>
	</body>
<html>