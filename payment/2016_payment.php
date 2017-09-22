<!DOCTYPE HTML>
<html>
	<head>
		<?php include '../modules/head.php'; ?>
		<title>預訂座位 | Ponte Singers</title>
		<script>
		function proceedToPayment(){
			var OR = $('#OR').val();
			var ORB = $('#ORB').val();
			var CR = $('#CR').val();
			var CRB = $('#CRB').val();

			if(OR<0 || ORB<0 || CR<0 || CRB<0){
				$('#error').html("<div id='error_zeroquantity' class='col-md-12'><div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>數量必需大於零。 Quantity must be greater than zero.</div></div>")
				window.location.hash = '#error';
				return;				
			}

			if(OR+ORB+CR+CRB<=0){
				$('#error').html("<div id='error_zeroquantity' class='col-md-12'><div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>你最少需要預訂一個座位。 You have to reserve at least one seat.</div></div>")
				window.location.hash = '#error';
				return;
			}

			window.location.href = "2016_transaction.php?OR="+OR+"&ORB="+ORB+"&CR="+CR+"&CRB="+CRB;
		}
		</script>
		<style>
			.bold{
				font-weight: bold;	
			}
		</style>
	</head>
	<body>
	<div id="page-range">
		<?php include '../modules/menu.php'; ?>
		<div id="page-content">
			<div class="jumbotron" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)),url('/images/concert_mysterium_banner.jpg'); background-size: cover; height:40%; padding: 20px;">
			  <h2 id="page-title">預訂座位 Seat Reservation</h2>
			 
			</div>
			
			<div style="margin:30px;">

				<div id="error">
                    <div id="error_concertend" class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            音樂會已完滿結束，感謝各位的支持。 Concert has been held successfully. Thank you for your support.
                        </div>
                    </div>
				<?php if(isset($_GET['error']) && $_GET['error']=="quantitylessthanzero"): ?>
				<div id="error_zeroquantity" class="col-md-12">
					<div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  數量必需大於零。 Quantity must be greater than zero.
					</div>
				</div>

				<?php elseif(isset($_GET['error']) && $_GET['error']=="zeroquantity"): ?>
				<div id="error_zeroquantity" class="col-md-12">
					<div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  你最少需要預訂一個座位。 You have to reserve at least one seat.
					</div>
				</div>

				<?php elseif(!(isset($_GET['agree']) && $_GET['agree']=="true")): ?>
				<div id="error_zeroquantity" class="col-md-12">
					<div class="alert alert-info alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  繼續預訂代表你同意<a href="2016_agree.php">預訂條款及細則</a>。 Proceeding to payment indicates that you agreed the <a href="2016_agree.php">Terms and Conditions</a>.
					</div>
				</div>
				<?php endif; ?>

				</div>

				<div id="left-col" class="col-md-5">
					<a href="/images/concert_mysterium_poster.jpg"><img src="/images/concert_mysterium_poster.jpg" alt="Ponte Singers Concert 2016 - Mysterium misericardiæ" width="100%"></a>
				</div>
				<div class="col-md-7">
					<div class="panel panel-default">
					  <!-- Default panel contents -->
					  <div class="panel-heading bold center">Mysterium misericordiæ 奧．蹟</div>
					  <div class="panel-body center">
					    24．7．2016 （星期日）<br>
						下午兩時半 2:30 p.m.<br>
		 				<br>
						聖母無原罪主教座堂（中環堅道）<br>
						Cathedral of the Immaculate Conception (Caine Road, Central)<br>
					  </div>

					  <!-- Table -->
					  <table class="table">
					    <thead class="center bold">
					    	<tr>
					    		<td>種類 Type</td>
					    		<td>價錢 Price</td>
					    		<td>數量 Quantity</td>
					    	</tr>
					    </thead>
					    <tbody>
					    	<tr>
					    		<td>普通<br>Ordinary</td>
					    		<td class="center">HK$280</td>
					    		<td class="center"><input type="number" id="OR" min="0" max="20" value=0 disabled></td>

					    	</tr>
					    	<tr>
					    		<td>普通 (視線受阻)<br>Ordinary (Sight Line Blocking)</td>
					    		<td class="center">HK$160</td>
					    		<td class="center"><input type="number" id="ORB" min="0" max="20" value=0 disabled></td>
					    	</tr>
					    	<tr>
					    		<td>優惠<br>Concessionary</td>
					    		<td class="center">HK$200</td>
					    		<td class="center"><input type="number" id="CR" min="0" max="20" value=0 disabled></td>
					    	</tr>
					    	<tr>
					    		<td>優惠 (視線受阻)<br>Concessionary (Sight Line Blocking)</td>
					    		<td class="center">HK$100</td>
					    		<td class="center"><input type="number" id="CRB" min="0" max="20" value=0 disabled></td>
					    	</tr>
					    </tbody>
					  </table>
					</div>

					<div style="margin-top:10px; float:right; text-align: right;">
					  	<button class="btn btn-success disabled" onclick="proceedToPayment()">繼續 Continue <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></button>
                        <br>
					  	<p class="text-muted" style="font-size: 10px;"><br>收費部份將會轉至PayPal 平台繼續。<br>Payment will be conducted on PayPal.</p>

					  	<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/hk/webapps/mpp/paypal-popup?locale.x=zh_HK" title="PayPal 如何運作" onclick="javascript:window.open('https://www.paypal.com/hk/webapps/mpp/paypal-popup?locale.x=zh_HK','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/PP_AcceptanceMarkTray-NoDiscover_243x40.png" alt="PayPal 立即買" /></a></td></tr></table><!-- PayPal Logo -->
					  	<br><br><br>

					</div>
				</div>
			</div>
			 
		</div>	
	</div>
	<?php include '../modules/bottom.php' ?>
	</body>
<html>