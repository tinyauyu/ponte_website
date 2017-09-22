<!DOCTYPE HTML>
<html>
	<head>
		<?php include 'modules/head.php'; ?>
		<title>Ponte Singers</title>
	</head>
	<body>
	<div id="page-range">
		<?php include 'modules/menu.php'; ?>
		<div id="page-content" style="overflow: auto;">

			<div id="slideshow" style="margin-bottom: 10px;"> <!-- class="hidden-xs hidden-sm" -->
                <?php $NUM_SLIDE_PHOTOS = 12?>
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="background-color: black;">
					<!-- Indicators -->
					<ol class="carousel-indicators">
                        <?php for($i=0; $i<$NUM_SLIDE_PHOTOS; $i++){?>
						<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>"<?php if($i==0){echo " class=\"active\"";} ?>></li>
                        <?php } ?>
					</ol>

				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
                        <?php for($i=1; $i<=$NUM_SLIDE_PHOTOS; $i++){?>
                        <div class="item slideshow-photo<?php if($i==1){echo " active";}?>">
                            <img src="images/slideshow/<?php echo $i;?>.jpg" alt="..." style="">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <?php } ?>

					</div>

				<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			
			<div id="left-col" class="col-md-8 col-sm-8 col-xs-12" style="">
				<h2 style="padding-left: 20px; font-weight: bold;">最新動向</h2>
                <div id="2017_1" class="concert thumbnail" style="overflow: auto; margin: 10px;">

                    <div class="col-md-12">
                        <div class="caption">
                            <h3 style="font-weight: bold;">德國國家統一慶祝日酒會</h3>
                            <p style="margin-left: 20px;">
                                2017 年 10 月 9 日<br>
                                香港港島香格里拉酒店
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="/images/activity_update_2017_1.jpg"><img src="/images/activity_update_2017_1.jpg" alt="德國國家統一慶祝日酒會" width="100%"></a>
                        <p style="font-style: italic;">*攝於2016年德國國家統一慶祝日酒會</p>
                    </div>
                </div>

                <div id="2017_2" class="concert thumbnail" style="overflow: auto; margin: 10px;">
                    <div class="col-md-12">
                        <div class="caption">
                            <h3 style="font-weight: bold;">聖誕獻唱</h3>
                            <p style="margin-left: 20px;">
                                2017 年 12 月 25 日<br>
                                香港洲際酒店
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="/images/activity_update_2017_2.jpg"><img src="/images/activity_update_2017_2.jpg" alt="德國國家統一慶祝日酒會" width="100%"></a>
                        <p style="font-style: italic;">*攝於2016年聖誕獻唱</p>
                    </div>
                </div>

            </div>

			<div id="right-col" class="col-md-4 col-sm-4 col-xs-12" style="">
				<div style="padding-top: 10px; padding-left: 10px; border-radius: 5px; border: 1px solid #DCDCDC; overflow:hidden; background-color: #E8E8E8;">
				<!--- Youtube ---->
					<script src="https://apis.google.com/js/platform.js"></script>
					<div class="g-ytsubscribe" data-channelid="UCTuGgtokCIxCpH-yZjt-C1Q" data-layout="full" data-count="hidden"></div>
				</div>

				<div style="border-radius: 5px; border: 1px solid #DCDCDC; overflow:hidden; margin-top: 10px; ">
					<!--- facebook ---->
					<div class="fb-page" style="position: relative;" data-width=600 data-height=700 data-href="https://www.facebook.com/pontesingers" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pontesingers"><a href="https://www.facebook.com/pontesingers">Ponte Singers &amp; Orchestra</a></blockquote></div></div>
				</div>


			</div>

		</div>
	</div>
	<?php include 'modules/bottom.php' ?>
	</body>
<html>