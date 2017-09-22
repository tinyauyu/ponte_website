<!DOCTYPE HTML>
<html>
	<head>
		<?php include '../modules/head.php'; ?>
		<title>首演及委約作品 | Ponte Singers</title>
		<script>
			function itemClicked(item){
				$('div.detail-info').addClass('hide');
				if(item.hasClass("expanded")){
					item.removeClass("expanded");
					item.find('iframe').contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
					$('div.detail-info').addClass('hide');
				} else {
					showInfo(item);
					item.addClass("expanded");
				}
			}
		</script>
	</head>
	<body>
	<div id="page-range">
		<?php include '../modules/menu.php'; ?>
		<div id="page-content">
		
			<div class="jumbotron" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)),url('/images/activity_works.jpg'); background-size: cover; background-position: center bottom; height:40%; padding: 20px;">
			  <h2 id="title" style="margin-top: 250px; color: white; font-weight: bold;">首演及委約作品</h2>
			 
			</div>
			
			<div id="text" style="padding: 20px;">
				<span>
					為了更豐富我們的演出，我們每一次的演出，都會邀請本地作曲及編曲的青年音樂家參與創作，所有的改編或創作曲目，皆是世界首演，為合唱團伴奏的樂器不再限於鋼琴，這些新作品，每每能夠給聽眾耳目一新的感覺。
				</span>
				<hr>
				<nav>
				  <ul id="menu" class="pager">
                      <li><a href="javascript:scrollTo('#2016');">2016 年</a></li>
                      <li><a href="javascript:scrollTo('#2014');">2014 年</a></li>
                      <li><a href="javascript:scrollTo('#2012');">2012 年</a></li>
                      <li><a href="javascript:scrollTo('#2011');">2011 年</a></li>
                      <li><a href="javascript:scrollTo('#2010');">2010 年</a></li>
				  </ul>
				</nav>

                <div id="2016" class="list-group">
                    <a href="javascript:$('div.detail-info').addClass('hide');" class="list-group-item disabled">
                        <h4 class="list-group-item-heading">2016 年</h4>
                    </a>
                    <a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
                        <h4 class="list-group-item-heading">Ostium Mysterium 奧秘之門 <span class="label label-warning">敲擊二重奏 及 銅管樂</span></h4>
                        <p class="list-group-item-text">趙學文小姐作曲</p>
                        <div class="detail-info center embed-responsive embed-responsive-16by9 hide">
                            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/ZZfY11Z_OpQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </a>
                </div>

				<div id="2014" class="list-group">
					<a href="javascript:$('div.detail-info').addClass('hide');" class="list-group-item disabled">
						<h4 class="list-group-item-heading">2014 年</h4>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">The Rose <span class="label label-primary">合唱版本</span></h4>
						<p class="list-group-item-text">何文曦改編</p>
						<div class="detail-info center embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/tMLrPB7VYrE?list=PL-UTK7p8LiLQLYKjTTQxSutCtefUleufo" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">心動 <span class="label label-primary">合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧及沈韻琦改編</p>
						<div class="detail-info center hide embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/R9J4m3spm68?list=PL-UTK7p8LiLQLYKjTTQxSutCtefUleufo" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">一隻蚊 <span class="label label-primary">合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧及沈韻琦改編</p>
						<div class="detail-info center hide embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/fqzdSn_pWOM?list=PL-UTK7p8LiLQLYKjTTQxSutCtefUleufo" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">約定 <span class="label label-primary">合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧改編</p>
						<div class="detail-info center hide embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/l0_4SjUL-4k?list=PL-UTK7p8LiLQLYKjTTQxSutCtefUleufo" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">抱擁這分鐘 <span class="label label-primary">合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧及沈韻琦改編</p>
						<div class="detail-info center hide embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/mW5qdI20bgk?list=PL-UTK7p8LiLQLYKjTTQxSutCtefUleufo" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">外面的世界 <span class="label label-warning">鋼琴、小提琴、大提琴</span></h4>
						<p class="list-group-item-text">沈韻琦改編</p>
						<div class="detail-info center hide embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/UU9merXaoNQ?list=PL-UTK7p8LiLQLYKjTTQxSutCtefUleufo" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					<div id="bottom" class="col-md-12">
						<a href="javascript:scrollTo('#menu');" style="float: right;"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true">回目錄</span></a>
					</div>
					<br><br>
				</div>

				<div id="2012" class="list-group">
					<a href="javascript:$('div.detail-info').addClass('hide');" class="list-group-item disabled">
						<h4 class="list-group-item-heading">2012 年</h4>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">Magos a Rufata <span class="label label-primary">合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧改編</p>
						
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">Five Hebrew Love Song <span class="label label-success">二胡獨奏及合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧改編</p>
						
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">Scarborough Fair <span class="label label-success">牧童笛、雙簧管與二胡獨奏、弦樂四重奏及合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧、劉彥昭及沈韻琦改編</p>
						
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">LOVE <span class="label label-info">女聲獨唱及合唱版本</span></h4>
						<p class="list-group-item-text">劉彥昭改編</p>
						
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">Ramkali <span class="label label-success">弦樂四重奏及合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧改編</p>
						
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">Vem kan segla förutan vind <span class="label label-primary">合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧改編</p>
						
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">化作千縷微風 <span class="label label-success">弦樂四重奏及合唱版本</span></h4>
						<p class="list-group-item-text">劉彥昭改編</p>
						
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">What a wonderful world <span class="label label-success">牧童笛、雙簧管與二胡獨奏、弦樂四重奏、Acapella及合唱版本</span></h4>
						<p class="list-group-item-text">彭祖容改編</p>
						
					</a>
					<div id="bottom" class="col-md-12">
						<a href="javascript:scrollTo('#menu');" style="float: right;"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true">回目錄</span></a>
					</div>
					<br><br>
				</div>


				<div id="2011" class="list-group">
					<a href="javascript:$('div.detail-info').addClass('hide');" class="list-group-item disabled">
						<h4 class="list-group-item-heading">2011 年</h4>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">東風不來 <span class="label label-primary">合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧作曲</p>
						<div class="detail-info center hide">
							<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/263804669&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">臨江仙 <span class="label label-success">古箏與大提琴獨奏、及合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧作曲</p>
						<div class="detail-info center hide embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/5o6z7eY8GHo?list=PL-UTK7p8LiLQ1Zbvtst2KTnnWrPPoy95M" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">偶然 <span class="label label-success">合唱及弦樂四重奏版本</span></h4>
						<p class="list-group-item-text">林屴汧及劉彥昭改編</p>
						<div class="detail-info center hide embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/2pTbaTwXAwI?list=PL-UTK7p8LiLQ1Zbvtst2KTnnWrPPoy95M" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">再別康橋 <span class="label label-success">合唱及弦樂四重奏版本</span></h4>
						<p class="list-group-item-text">林屴汧及劉彥昭改編</p>
						<div class="detail-info center hide embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/_Ru8kAriEag?list=PL-UTK7p8LiLQ1Zbvtst2KTnnWrPPoy95M" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">不了情 <span class="label label-success">英國管獨奏及合唱版本</span></h4>
						<p class="list-group-item-text">劉彥昭改編</p>
						<div class="detail-info center hide embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/_YiAHKZnmnw?list=PL-UTK7p8LiLQ1Zbvtst2KTnnWrPPoy95M" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">我期待 <span class="label label-success">英國管獨奏、弦樂四重奏及合唱版本</span></h4>
						<p class="list-group-item-text">劉彥昭改編</p>
						<div class="detail-info center hide embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/yqD73T9YkvQ?list=PL-UTK7p8LiLQ1Zbvtst2KTnnWrPPoy95M" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					
					<div id="bottom" class="col-md-12">
						<a href="javascript:scrollTo('#menu');" style="float: right;"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true">回目錄</span></a>
					</div>
					<br><br>
				</div>

			


				<div id="2010" class="list-group">
					<a href="javascript:$('div.detail-info').addClass('hide');" class="list-group-item disabled">
						<h4 class="list-group-item-heading">2010 年</h4>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">Search me, O Lord <span class="label label-success">雙簧管與大提琴獨奏、及合唱版本</span></h4>
						<p class="list-group-item-text">劉彥昭作曲</p>
						<div class="detail-info center hide">
							<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/263804299&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">Swinging Low Sweet Chariot <span class="label label-primary">合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧改編</p>
						<div class="detail-info center hide">
							<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/263804449&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">I will follow Him <span class="label label-primary">合唱版本</span></h4>
						<p class="list-group-item-text">林屴汧改編</p>
						<div class="detail-info center hide">
							<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/263804686&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
						</div>
					</a>
					<a href="javascript:;" class="list-group-item" onclick="itemClicked($(this))">
						<h4 class="list-group-item-heading">He <span class="label label-success">雙簧管獨奏及合唱版本</span></h4>
						<p class="list-group-item-text">劉彥昭改編</p>
						<div class="detail-info center embed-responsive embed-responsive-16by9 hide">
							<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/c06TGer1Csw?list=PL-UTK7p8LiLTW4Zy8_xk3qor5KdEtk9n1" frameborder="0" allowfullscreen></iframe>
						</div>
					</a>
					
					<div id="bottom" class="col-md-12">
						<a href="javascript:scrollTo('#menu');" style="float: right;"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true">回目錄</span></a>
					</div>
					<br><br>
				</div>

			
			</div>
			
			
			 
		</div>	
	</div>
	<?php include '../modules/bottom.php' ?>
	</body>
<html>