<!DOCTYPE HTML>
<html>
	<head>
		<?php include '../modules/head.php'; ?>
		<?php $end_yr=2015; $begin_yr=2010;?>
		<?php $year = intval($_GET['year']);?>

		<title>捐款表格 | Ponte Singers</title>
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
		
			<div class="jumbotron" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)),url('https://ponte-emailservice.herokuapp.com/support_donation.jpg'); background-size: cover; background-position: center center; height:40%; padding: 20px;">
				<h2 id="page-title">捐款表格</h2>
			</div>

			<div style="padding: 30px; padding-top: 10px;">
			
			請提交以下表格；或將已填寫的捐款表格回郵至 pontesingers@gmail.com。<br>
			Please submit the following form; or return the donation form to the email: pontesingers@gmail.com.<br><br>

			<a class="btn btn-info" href="donation_form_template.docx" download><span class="glyphicon glyphicon-download" aria-hidden="true"></span> 下載捐款表格 Download Donation Form</a><br><br>
			
			<form action="https://ponte-emailservice.herokuapp.com/email/donation" method="post">
			<div class="panel panel-default">

					  <!-- Default panel contents -->
					  <div class="panel-heading bold center">捐款表格 Donation Form</div>
					  <div class="panel-body">
					    
						再次感謝貴公司的贊助，使 Ponte Singers 能夠實踐理念，將更好的合唱音樂帶給香港，以音樂建立心靈上的溝通。<br>
						Once again, we would like to thank you for your donation. Your support makes our mission possible to bring better choral music to Hong Kong, and to bridge between hearts with music.<br><br>

						您亦可以考慮透過以下的捐款計畫支持我們。<br>
						You may also consider to support us under the following sponsoring scheme.<br><br>

						<h4 style="font-weight: bold;">音樂會冠名贊助人Tailor-made Concert Benefactors (more than $50000)</h4>
						<ul style="list-style-type:disc">
							<li>以貴公司商號冠名所有音樂會有關之宣傳<br>With concert titled with your company in every advertisement</li>
						</ul><br>
						<h4 style="font-weight: bold;">金贊助人Gold Benefactors (more than $7000) </h4>
						<ul style="list-style-type:disc">
							<li>獲贈6張年度音樂會門票<br>With invitation to our annual concert with 6 tickets</li>
							<li>刊登貴公司之全版廣告2年<br>With a full-size advertisement of your company in our programme book for 2 years</li>
						</ul><br>
						<h4 style="font-weight: bold;">銀贊助人Silver Benefactors (more than $3500) </h4>
						<ul style="list-style-type:disc">
							<li>獲贈4張年度音樂會門票<br>With invitation to our annual concert with 4 tickets</li>
							<li>刊登貴公司之全版廣告1年<br>With a full-size advertisement of your company in our programme book for 1 years</li>
						</ul><br>
						<h4 style="font-weight: bold;">銅贊助人Bronze Benefactors (more than $2000)</h4>
						<ul style="list-style-type:disc">
							<li>獲贈2張年度音樂會門票<br>With invitation to our annual concert with 2 tickets</li>
							<li>刊登貴公司之半版廣告1年<br>With a half-size advertisement of your company in our programme book for 1 years</li>
						</ul><br>

						煩請閣下填妥以下表格，<br>
						Please kindly fill in the form below,<br><br>

					  </div>

					  <!-- Table -->
					  
					  <table class="table">
					    <tbody>
					    	<tr>
					    		<td>我希望支持 Ponte Singers，現捐助 $ 港幣<br>I would like to support Ponte Singers, in the donation of $ HK</td>
					    		<td class="center"><input type="number" name="donation_amount" value=500></td>

					    	</tr>
					    	<tr>
					    		<td>
					    			<h5 style="font-weight:bold;">捐款人資料 Benefactor's information</h5>
					    		</td>
					    		<td></td>
					    	</tr>
					    	<tr>
					    		<td>姓名<br>Name</td>
					    		<td class="center"><input type="text" name="name"></td>
					    	</tr>
					    	<tr>
					    		<td>機構名稱<br>Organization Name</td>
					    		<td class="center"><input type="text" name="organization_name"></td>
					    	</tr>
					    	<tr>
					    		<td>電話<br>Tel</td>
					    		<td class="center"><input type="text" name="tel"></td>
					    	</tr>
					    	<tr>
					    		<td>電郵<br>E-mail</td>
					    		<td class="center"><input type="text" name="email"></td>
					    	</tr>
					    	<tr>
					    		<td>刊登於場刊之鳴謝姓名<br>Name to be acknowledged in house programme (more than HK$500)</td>
					    		<td>
					    		<input type="radio" name="displayName_type" value="Chinese"> (中文) <input type="text" name="displayName_chi"><br>
					    		<input type="radio" name="displayName_type" value="English"> (English) <input type="text" name="displayName_eng"><br>
					    		<input type="radio" name="displayName_type" value="Anonymous"> 無名氏 Anonymous</td>
					    	</tr>
					    </tbody>
					  </table>
					  
					</div>

					<input class="btn btn-success" type="submit" value="提交 Submit">
					</form>
					<br>
					收到你的資料後，我們會親身與閣下聯絡。<br>
					After receving your information, we will contact you in person.<br>

			</div>
		</div>	
	</div>
	<?php include '../modules/bottom.php' ?>
	</body>
<html>