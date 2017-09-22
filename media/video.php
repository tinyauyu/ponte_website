<!DOCTYPE HTML>
<html>
	<head>
		<?php include '../modules/head.php'; ?>
		<title>音樂會影片 | Ponte Singers</title>
		<style>
			.quote{
				font-size: 12px;
				color: grey;
			}
		</style>
	</head>
	<body>
	<div id="page-range">
		<?php include '../modules/menu.php'; ?>
		<div id="page-content">
		
			<div class="jumbotron" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)),url('/images/media_video.jpg'); background-size: cover; background-position: center bottom; height:40%; padding: 20px;">
				<h2 id="page-title">音樂會影片</h2>
			</div>

			<nav>
			  <ul id="menu" class="pager">
				  <li style="margin-right: 10px;"><a href="javascript:;" onclick="$('.concert').removeClass('hide');">所有</a></li>
                  <li><a href="javascript:;" onclick="$('.concert').addClass('hide'); $('.2016').removeClass('hide');">2016 年</a></li>
				  <li><a href="javascript:;" onclick="$('.concert').addClass('hide'); $('.2015').removeClass('hide');">2015 年</a></li>
				  <li><a href="javascript:;" onclick="$('.concert').addClass('hide'); $('.2014').removeClass('hide');">2014 年</a></li>
				  <li><a href="javascript:;" onclick="$('.concert').addClass('hide'); $('.2013').removeClass('hide');">2013 年</a></li>
				  <li><a href="javascript:;" onclick="$('.concert').addClass('hide'); $('.2011').removeClass('hide');">2011 年</a></li>
				  <li><a href="javascript:;" onclick="$('.concert').addClass('hide'); $('.2010').removeClass('hide');">2010 年</a></li>
			  </ul>
			</nav>

            <div class="col-sm-12 col-md-4 concert 2016">
                <div class="thumbnail">
                    <img src="/images/activity_pastevent_2016.jpg" alt="Ponte Singers Concert 2016">
                    <div class="caption">
                        <h3>2016 「奧．蹟」音樂會</h3>
                        <p>24.7.2016<br>香港天主教聖母無原罪主教座堂</p>
                        <blockquote>
                            <span class="quote">慈悲是人性之本，如果要歸根結底，慈悲是一種沒有緣由的感性，看到一些不幸的事、不幸的人，心底裏第一時間想幫助他們，同情他們......</span>
                        </blockquote>
                        <p>
                            <a target="_blank" href="https://www.youtube.com/playlist?list=PL-UTK7p8LiLRyndxvP3CiIvCry7iluAjp" class="btn btn-primary" role="button">觀看影片 <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            <a href="/activity/pastevent.php#2016" class="btn btn-default" role="button">了解更多 <i class="fa fa-info-circle" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
            </div>

			<div class="col-sm-12 col-md-4 concert 2015">
				<div class="thumbnail">
					<img src="/images/activity_pastevent_2015.jpg" alt="Ponte Singers Concert 2015">
					<div class="caption">
						<h3>2015 「聽．海」音樂會</h3>
						<p>6.9.2013<br>香港大會堂 音樂廳</p>
						<blockquote>
							<span class="quote">但有一種感動，只有在音樂廳才會發生。很多人以為音樂，是聲音的藝術，其實音樂最吸引的地方，在乎重新定義時間，短短一個多小時的音樂會......</span>
						</blockquote>
						<p>							
							<a target="_blank" href="https://www.youtube.com/playlist?list=PL-UTK7p8LiLTo-yd3kdUMah5eRL0csHtk" class="btn btn-primary" role="button">觀看影片 <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							<a href="/activity/pastevent.php#2015" class="btn btn-default" role="button">了解更多 <i class="fa fa-info-circle" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-4 concert 2014">
				<div class="thumbnail">
					<img src="/images/activity_pastevent_2014_choir.jpg" alt="Ponte Singers Concert 2014 Choir">
					<div class="caption">
						<h3>2014 「錯．愛」音樂會 (合唱及錄像音樂會)</h3>
						<p>10.8.2014<br>香港理工大學 賽馬會綜藝館</p>
						<blockquote>
							<span class="quote">愛情路上誰沒有經歷過種種的感覺？要生要死的、甜甜蜜蜜的、痛不欲生的、愛恨纏綿的......</span>
						</blockquote>
						<p>							
							<a target="_blank" href="https://www.youtube.com/playlist?list=PL-UTK7p8LiLQLYKjTTQxSutCtefUleufo" class="btn btn-primary" role="button">觀看影片 <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							<a href="/activity/pastevent.php#2014" class="btn btn-default" role="button">了解更多 <i class="fa fa-info-circle" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-12 col-md-4 concert 2014">
				<div class="thumbnail">
					<img src="/images/activity_pastevent_2014_orch.jpg" alt="Ponte Singers Concert 2014 Orchestra">
					<div class="caption">
						<h3>2014 「錯．愛」音樂會 (管弦樂音樂會)</h3>
						<p>18.8.2014<br>國際基督教優質音樂中學暨小學 以勒音樂廳</p>
						<blockquote>
							<span class="quote">三位作曲家：羅拔．舒曼、他太太克拉拉及門徒布拉姆斯之間錯綜複雜的愛情故事，相信二百年來皆人所共知......</span>
						</blockquote>
						<p>							
							<a target="_blank" href="https://www.youtube.com/playlist?list=PL-UTK7p8LiLTohy95yNJbc9UyQQphaXjN&spfreload=10" class="btn btn-primary" role="button">觀看影片 <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							<a href="/activity/pastevent.php#2014" class="btn btn-default" role="button">了解更多 <i class="fa fa-info-circle" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-4 concert 2013">
				<div class="thumbnail">
					<img src="/images/activity_pastevent_2013.jpg" alt="Ponte Singers Concert 2013">
					<div class="caption">
						<h3>2013 「生．息」音樂會</h3>
						<p>3.8.2013<br>香港大會堂 音樂廳</p>
						<blockquote>
							<span class="quote">今年 Ponte 選擇以德國音樂為主題，獻唱大型合唱及管弦樂作品，包括孟德爾遜的「芬加爾洞窟序曲」及奧爾夫的「布蘭詩歌」......</span>
						</blockquote>
						<p>							
							<a target="_blank" href="https://www.youtube.com/playlist?list=PL-UTK7p8LiLRZVMpmdlsoPNeWxttm1y8I" class="btn btn-primary" role="button">觀看影片 <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							<a href="/activity/pastevent.php#2013" class="btn btn-default" role="button">了解更多 <i class="fa fa-info-circle" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-4 concert 2011">
				<div class="thumbnail">
					<img src="/images/activity_pastevent_2011.jpg" alt="Ponte Singers Concert 2011">
					<div class="caption">
						<h3>2011 「聲．華」音樂會</h3>
						<p>20.8.2011<br>香港演藝學院 香港賽馬會演藝劇場</p>
						<blockquote>
							<span class="quote">中國的詩詞源遠流長，不論是楚詞唐詩，還是宋詞元曲，一字一句，原本是應當根據詞牌唱出來的......</span>
						</blockquote>
						<p>							
							<a target="_blank" href="https://www.youtube.com/playlist?list=PL-UTK7p8LiLQ1Zbvtst2KTnnWrPPoy95M" class="btn btn-primary" role="button">觀看影片 <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							<a href="/activity/pastevent.php#2011" class="btn btn-default" role="button">了解更多 <i class="fa fa-info-circle" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-12 col-md-4 concert 2010">
				<div class="thumbnail">
					<img src="/images/activity_pastevent_2010.jpg" alt="Ponte Singers Concert 2010">
					<div class="caption">
						<h3>2010 「聖．靈」音樂會</h3>
						<p>5.8.2010 - 6.8.2010<br>聖約翰座堂 李堂</p>
						<blockquote>
							<span class="quote">想到用「聖．靈」作為今次的主題，目的並不單單是從宗教角度出發，我總覺得現今很多人對古典音樂、對聖樂都有一種誤解......</span>
						</blockquote>
						<p>							
							<a target="_blank" href="https://www.youtube.com/playlist?list=PL-UTK7p8LiLTW4Zy8_xk3qor5KdEtk9n1" class="btn btn-primary" role="button">觀看影片 <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							<a href="/activity/pastevent.php#2010" class="btn btn-default" role="button">了解更多 <i class="fa fa-info-circle" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
			</div>
			
			
			 
		</div>	
	</div>
	<?php include '../modules/bottom.php' ?>
	</body>
<html>