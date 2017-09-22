<!DOCTYPE HTML>
<html>
	<head>
		<?php include '../modules/head.php'; ?>
		<title>合作樂手一覽 | Ponte Singers</title>
	</head>
	<body>
	<div id="page-range">
		<?php include '../modules/menu.php'; ?>
		<div id="page-content">
		
			<div class="jumbotron" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)),url('/images/activity_colaboration.jpg'); background-size: cover; background-position: center bottom; height:40%; padding: 20px;">
			  <h2 id="title" style="margin-top: 250px; color: white; font-weight: bold;">合作樂手一覽</h2>
			 
			</div>
			
			<div id="text" style="padding: 20px;">
				<span>
					Ponte Singers 的成立，為香港很多新進的青年音樂家帶來發展的機會。每一年，我們的音樂會均邀請不同樂手參與伴奏或獨奏，籍此介紹本地出色的樂手予不同聽眾。
				</span>
				<hr>
				<nav>
				  <ul id="menu" class="pager">
					<li style="margin-right: 10px;"><a href="javascript:;" onclick="$('.performer').removeClass('hide');">所有</a></li>
                      <li><a href="javascript:;" onclick="$('.performer').addClass('hide'); $('.2017').removeClass('hide');">2017 年</a></li>
                      <li><a href="javascript:;" onclick="$('.performer').addClass('hide'); $('.2016').removeClass('hide');">2016 年</a></li>
					  <li><a href="javascript:;" onclick="$('.performer').addClass('hide'); $('.2015').removeClass('hide');">2015 年</a></li>
					  <li><a href="javascript:;" onclick="$('.performer').addClass('hide'); $('.2014').removeClass('hide');">2014 年</a></li>
					  <li><a href="javascript:;" onclick="$('.performer').addClass('hide'); $('.2013').removeClass('hide');">2013 年</a></li>
					  <li><a href="javascript:;" onclick="$('.performer').addClass('hide'); $('.2012').removeClass('hide');">2012 年</a></li>
					  <li><a href="javascript:;" onclick="$('.performer').addClass('hide'); $('.2011').removeClass('hide');">2011 年</a></li>
					  <li><a href="javascript:;" onclick="$('.performer').addClass('hide'); $('.2010').removeClass('hide');">2010 年</a></li>
				  </ul>
				</nav>

                <div class="performer 2017 2011 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
                    <a href="javascript:;">
                        <div class="small-info">
                            <div class="jumbotron" style="background: url('/images/performers/alvin_chan.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
                            <span style="font-size: 20px; font-weight: bold;">陳銘澤</span><p>小提琴</p>
                        </div>

                        <div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
                        <div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">

                            <div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
                                <a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                                <div class="col-md-4 col-xs-12" style="text-align: center;">
                                    <img class="media-object" style="width: 100%" src="/images/performers/alvin_chan.jpg" alt="..." style="filter: opacity(60%);">
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <span style="font-size: 20px; font-weight: bold;">陳銘澤</span><p>小提琴獨奏<br>2017 「拉．柴」音樂會<br>2011 「聲．華」音樂會</p>
                                    <p style="text-align: justify;">
                                        本地香港青年小提琴家陳銘澤，現於皇家音樂學院主修小提琴，並獲取獎學金資助，師隨教授 Itzhak Rashkovsky 和 Michal Cwizewicz。 陳氏自五歲跟隨父親學習小提琴。2014 考獲聖三一院士文憑和英國皇家音樂學院小提琴演奏院士文憑。11歲時曾和香港醫學會樂團演出流浪者之歌-莎拉莎泰。在2007年, 陳氏在校際音樂節協奏曲12歲以下組別贏取第一名。 兩年後再獲得協奏曲 18 歲以下組別第三名。在2011年，和聖保羅男子中學在聖保羅大教堂表演巴哈奏嗚曲。 有見及此，陳氏在聖保羅中學獲得全額獎學金。跟而轉讀去了 Purcell school of music跟隨 Berent Korfker。陳氏十分積極參與大師班，他曾與Benedict Cruft、寧鋒、 Sarah Chang等等上大師班。<br><br>
                                        陳氏被邀請參加多次慈善音樂會，多次和亞洲室樂團合作。在 2013 年，表演Mendelssohn小提琴協奏曲，之後還跟他們演奏 Bach 雙小提琴協奏曲和 Vitali Chaccone。<br><br>
                                        陳氏也經常活躍地參與音樂營。他在意大利參加了 Natasha Boyarsky 大師音樂營獲益良多。在去年參加了在意大利的New Virtuoso音樂營跟隨 Itzhak Rashkovsky。<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="performer 2016 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
                    <a href="javascript:;">

                        <div class="small-info">
                            <div class="jumbotron" style="background: url('/images/performers/louise_kwong.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
                            <span style="font-size: 20px; font-weight: bold;">鄺勵齡</span><p>女高音</p>
                        </div>

                        <div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
                        <div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">

                            <div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
                                <a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                                <div class="col-md-4 col-xs-12" style="text-align: center;">
                                    <img class="media-object" style="width: 100%" src="/images/performers/louise_kwong.jpg" alt="...">
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <span style="font-size: 20px; font-weight: bold;">鄺勵齡</span><p>女高音<br>2016 「奧．蹟」音樂會 (7月24日香港演出)</p>
                                    <p style="text-align: justify;">
                                        鄺氏獲獎包括奧地利第十八屆泰利亞雲尼國際聲樂比賽第二名、觀眾獎及最佳女高音獎 (2012)；比利時第七屆美藝國際聲樂比賽第二名 (2014)；義大利以賽奧國際聲樂比賽第一名 (2015)；以及義大利柳金國際聲樂比賽第一名 (2015)。<br><br>
                                        鄺氏為荷蘭皇家歌劇學院歌劇碩士及荷蘭阿姆斯特丹音樂學院音樂碩士，並於英國皇家音樂學院取得研究生文憑。鄺氏曾在本港及國際舞台擔任不同歌劇主角，包括普切尼《杜蘭朵》中的柳兒、普切尼《蝴蝶夫人》中的蝴蝶夫人、比才《卡門》中的米凱拉、馬斯卡尼《鄉村騎士》中的聖圖沙、莫扎特《女人心》中的費奧迪麗姬、莫扎特《費加羅的婚禮》中的伯爵夫人，以及唐尼采蒂《安娜布連娜》中的安娜等。<br><br>
                                        鄺氏除獲得香港藝術發展局頒授的 2014 年度藝術新秀獎（音樂）外，亦入選 2015 年度民政事務局局長獎勵計劃。鄺氏曾獲邀參與不同國際音樂節，於香港藝術節中飾演歌劇《蕭紅》中的蕭紅和歌劇《大同》中的康同壁，更於荷蘭格克頓音樂節中飾演莫扎特歌劇《女人心》中的費奧迪麗姬。<br><br>
                                        鄺氏將於 2017 年與劍橋國王學院合唱團演出布拉姆斯的《德意志安魂曲》；與維也納少年合唱團演出馬勒的第八交響曲；與香港歌劇院演出普切尼的《蝴蝶夫人》；與香港芭蕾舞團演出大仲馬的《茶花女》；以及與非凡美樂演出比才的《卡門》。<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="performer 2016 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
                    <a href="javascript:;">

                        <div class="small-info">
                            <div class="jumbotron" style="background: url('/images/performers/melody_tang.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
                            <span style="font-size: 20px; font-weight: bold;">鄧曦茵</span><p>女中音</p>
                        </div>

                        <div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
                        <div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">

                            <div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
                                <a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                                <div class="col-md-4 col-xs-12" style="text-align: center;">
                                    <img class="media-object" style="width: 100%" src="/images/performers/melody_tang.jpg" alt="...">
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <span style="font-size: 20px; font-weight: bold;">鄧曦茵</span><p>女中音<br>2016 「奧．蹟」音樂會 (7月24日香港演出)</p>
                                    <p style="text-align: justify;">
                                        鄧曦茵為德望學校合唱團的聲樂指導兼指揮。<br><br>
                                        德望合唱團成立於 1959 年，為香港歷史最悠久的傑出合唱團之一，一直追求至臻完美的聲樂技巧，同時啟發團員的音樂潛能、培育其自信，為他們將來踏足社會做好準備。<br><br>
                                        近 30 多年來，德望合唱團於本港各大小音樂節中表現出色，奪冠無數，曾獲頒「最傑出合唱團」獎項，更多次獲邀到海外表演，遠赴加拿大、維也納、挪威、北京、匈牙利及澳洲等地參加音樂節及交流計劃。德望合唱團是香港首個獲邀到北京國家大劇院演出的合唱團，又曾以第 5 及第 6 屆世界合唱比賽金獎得主的身分巡迴世界演出。德望合唱團曾於禮賓府開放日、第 17 屆國際崇德社第 17 區地區會議、法律年度開啟典禮、加拿大日音樂會、魁北克週年彌撒等場合演出，大獲好評。今年，德望合唱團聯同聖保羅書院贏得第 68 屆香港校際音樂節混聲合唱組冠軍，成績斐然，向各界展現音樂才華。<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="performer 2016 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
                    <a href="javascript:;">

                        <div class="small-info">
                            <div class="jumbotron" style="background: url('/images/performers/nadia_wong.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
                            <span style="font-size: 20px; font-weight: bold;">黃靖</span><p>女高音</p>
                        </div>

                        <div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
                        <div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">

                            <div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
                                <a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                                <div class="col-md-4 col-xs-12" style="text-align: center;">
                                    <img class="media-object" style="width: 100%" src="/images/performers/nadia_wong.jpg" alt="...">
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <span style="font-size: 20px; font-weight: bold;">黃靖</span><p>女高音<br>2016 「奧．蹟」音樂會 (7月23日澳門演出)</p>
                                    <p style="text-align: justify;">
                                        黃靖現就讀於香港演藝學院，主修歌劇表演，師從本地著名女高音嚴翊樺女士。在校期間，黃氏曾擔演《卡門》的法斯該達與《魔笛》的帕蜜娜。<br><br>
                                        黃氏活躍於本地藝壇，曾參演多齣著名歌劇製作，包括香港歌劇院主辦的《霍夫曼的故事》、《漂泊的荷蘭人》、《浮士德》、《托斯卡》、《羅密歐與茱麗葉》、《蝴蝶夫人》、《奧賽羅》，非凡美樂主辦的《弄臣》、《杜蘭朵》，以及香港演藝學院主辦的《狡猾的小狐狸》、《費加羅的婚禮》、《蝙蝠》和《賽墨勒》等。<br><br>
                                        黃氏是 Ponte Singers 的成員，亦曾與多個本地合唱團合作，演出作品包括威爾第的《安魂曲》、莫札特的《安魂曲》、韓德爾的《彌賽亞》、奧爾夫的《布蘭詩歌》、巴哈的《聖誕神劇》、貝多芬的《快樂頌》、雷夫．佛漢．威廉士的《海之交響曲》等。<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="performer 2016 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
                    <a href="javascript:;">

                        <div class="small-info">
                            <div class="jumbotron" style="background: url('/images/performers/karis_ho.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
                            <span style="font-size: 20px; font-weight: bold;">何復加</span><p>女中音</p>
                        </div>

                        <div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
                        <div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">

                            <div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
                                <a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                                <div class="col-md-4 col-xs-12" style="text-align: center;">
                                    <img class="media-object" style="width: 100%" src="/images/performers/karis_ho.jpg" alt="...">
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <span style="font-size: 20px; font-weight: bold;">何復加</span><p>女中音<br>2016 「奧．蹟」音樂會 (7月23日澳門演出)</p>
                                    <p style="text-align: justify;">
                                        何復加為香港大學音樂系畢業生。何氏自幼習琴，師承徐立莉女士，於 2012 年考獲英國皇家音樂學院鋼琴文憑 (DipABRSM)，並在著名女中音史韶韻博士的指導下考獲英國聖三一音樂學院六級音樂演唱文憑 (LTCL)。<br><br>
                                        2016 年 4 月，何氏與聲蜚合唱學院合作，首次擔任女低音獨唱，並於同年與本地專業無伴奏合唱劇團「一舖清唱」合作，於無伴奏音樂劇場《香．夭》中演出。何氏將於今年九月到英國伯明翰大學繼續深造。<br><br>
                                        何氏現為是 Ponte Singers、聲蜚合唱學院及青協香港旋律成員。<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="performer 2016 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
                    <a href="javascript:;">

                        <div class="small-info">
                            <div class="jumbotron" style="background: url('/images/performers/elena_chiu.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
                            <span style="font-size: 20px; font-weight: bold;">趙學文</span><p>作曲家</p>
                        </div>

                        <div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
                        <div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">

                            <div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
                                <a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                                <div class="col-md-4 col-xs-12" style="text-align: center;">
                                    <img class="media-object" style="width: 100%" src="/images/performers/elena_chiu.jpg" alt="...">
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <span style="font-size: 20px; font-weight: bold;">趙學文</span><p>作曲家<br>2016 「奧．蹟」音樂會</p>
                                    <p style="text-align: justify;">
                                        趙學文，新一代鋼琴家兼作曲家。趙氏憑其全面的技巧和過人創意於國際比賽中屢獲殊榮：2009 年獲倫敦大學協奏曲比賽冠軍；2012 年獲意大利當代音樂國際作曲比賽冠軍；2013 年憑《鋼琴組曲》贏得克莉斯蒂安．卡本達獨奏會獎；2016 年更以新作品《鋼琴四重奏 : 謎》贏得紀大衛作曲獎。英國著名作曲家暨鋼琴家杜格拉斯．菲泉稱許其為「真正的音樂家」，盛讚其獨奏會「引人入勝」。<br><br>
                                        趙氏現為美國迪克西州立大學 2016 年大提琴節的駐校作曲家。近年，趙氏先後於倫敦各大演奏廳演出，更獲邀於 BBC 倫敦夏季逍遙音樂會和奧爾德堡音樂節中演出。趙氏以優異成績於英國皇家音樂學院畢業，現為中文大學音樂博士候選人，師從陳偉光教授。在學期間，趙氏獲頒多項獎學金，包括香港作曲家及作詞家聯會獎學金、倫敦國王學院香港基金獎學金、皇家音樂學院第二學位獎學金，以及皇家音樂學院基金會獎。她的聖樂合唱曲由香港 Alpha & Omega 公司出版。<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="performer 2016 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
                    <a href="javascript:;">

                        <div class="small-info">
                            <div class="jumbotron" style="background: url('/images/performers/rachel_lee.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
                            <span style="font-size: 20px; font-weight: bold;">李諾君</span><p>敲擊獨奏</p>
                        </div>

                        <div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
                        <div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">

                            <div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
                                <a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                                <div class="col-md-4 col-xs-12" style="text-align: center;">
                                    <img class="media-object" style="width: 100%" src="/images/performers/rachel_lee.jpg" alt="...">
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <span style="font-size: 20px; font-weight: bold;">李諾君</span><p>敲擊獨奏<br>2016 「奧．蹟」音樂會</p>
                                    <p style="text-align: justify;">
                                        李諾君現於英國皇家音樂學院修讀學士學位課程，主修敲擊樂，副修鋼琴，並獲頒該校入學獎學金。李氏現為鋼琴及敲擊樂二重奏 Insolito 之一員，並獲授予 Jacob Barnes Prize 獎學金，更獲邀於 2015 及 2016 年度的皇家音樂學院國際鋼琴音樂節演出。李氏剛於意大利菲拉德爾菲亞的 2016 年度敲擊樂及低音木琴比賽中榮獲高級組以及中級組第三名。李氏現師承 Sam Walton 及 William Lockhart，並曾接受著名敲擊樂大師 Colin Currie、Eric Sammut 和 Marinus Komst 等指導。<br><br>
                                        李氏自四歲開始學習鋼琴，六歲學習敲擊樂，九歲加入香港愛樂青年管樂團，並曾與譚子輝先生、Jerry Junkin 和官美如女士等著名指揮合作。李氏亦於 2010 年獲該樂團邀請表演低音木琴協奏曲。2015 年 11 月，李氏獲著名敲擊樂獨奏家王貝貝邀請，於倫敦市市長遊行中表演，並在皇家音樂學院的「Mainly New」表演系列參與 Piers Hellawell’s Sound Carvings from Rano Raraku 的演出。<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="performer 2016 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
                    <a href="javascript:;">

                        <div class="small-info">
                            <div class="jumbotron" style="background: url('/images/performers/vonald_chow.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
                            <span style="font-size: 20px; font-weight: bold;">周彥廷</span><p>敲擊獨奏</p>
                        </div>

                        <div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
                        <div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">

                            <div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
                                <a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                                <div class="col-md-4 col-xs-12" style="text-align: center;">
                                    <img class="media-object" style="width: 100%" src="/images/performers/vonald_chow.jpg" alt="...">
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <span style="font-size: 20px; font-weight: bold;">周彥廷</span><p>敲擊獨奏<br>2016 「奧．蹟」音樂會</p>
                                    <p style="text-align: justify;">
                                        周氏畢業於英國倫敦市政廳音樂及戲劇學院，獲頒音樂演奏碩士，更於香港浸會大學音學系以全班第一成績獲頒音樂文學學士（甲級榮譽），並考獲英國倫敦聖三一音樂學院敲擊演奏文憑 (LTCL)。
                                        周氏師從 David Corkhill（倫敦愛樂管弦樂團敲擊首席）和 Tony Bedewi（倫敦交響樂團定音鼓聯合首席）學習定音鼓，並師從 Sam Walton（倫敦交響樂團敲擊聯合首席）和龍向榮博士學習敲擊學。他曾於 2015 年參與英國 Britten–PearsOrchestra 之演出，並在德國漢諾威的 International Katarzyna Myćka Marimba Academy 作獨奏演出。周氏於 2015 年 7 月在 Simon Rattle 的指揮下與倫敦交響樂團一同在巴比肯演奏廳演出。<br><br>
                                        周氏有豐富合奏經驗，曾與敲擊樂團 Nexus 成員 Russel Hartenberger 及倫敦當代舞蹈學院聯手演出《The Invisible Proverb》。此外，周氏亦為 Quarter 四重奏及浸大敲擊樂團之創團成員。周氏於 2013 年獲頒謝志偉博士音樂獎學金。<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

				<div class="performer 2015 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
					
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/alison_lau.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">劉卓昕</span><p>女高音</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/alison_lau.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">劉卓昕</span><p>女高音<br>2015 「聽．海」音樂會</p>
									<p style="text-align: justify;">
									女高音劉卓昕畢業於香港演藝學院的歌劇及聲樂系，師隨江樺老師。劉氏獲香港歌劇院嘉華國際聲樂獎學金、FAMA聲樂獎學金、Andy Anselmo聲樂獎學金以及新英格蘭音樂學院優異獎學金的資助，現正於新英格蘭音樂學院攻讀碩士學位，師隨Lisa Saffer。<br><br>
									在2014年，劉氏與一班熱愛巴洛克時期音樂的年輕音樂家好友成立了Camerata Antiqua。同年她獲選參加Tafelmusik Baroque Summer Institute，並於紐約MIMF聲樂比賽中獲得第三名。<br><br>
									就讀於香港演藝學院期間，劉氏獲得香港兒童合唱團聲樂獎學金以及聶明康紀念聲樂獎學金的資助。在2013年劉氏獲邀與香港管弦樂團演出，被香港電台選為「2012樂壇新秀」，並在協奏曲比賽中勝出。她曾在歌劇《費加羅的婚禮》、《波希米亞人的生涯》、《仲夏夜之夢》、《風流寡婦》、《波佩阿的加冕》和《狄多與阿尼亞斯》中擔任主要角色。除此之外，劉氏亦活躍於音樂會和藝術歌曲的演出。<br><br>
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>

				<div class="performer 2015 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
					
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/alex_chan.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">陳俊堯</span><p>男中音</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/alex_chan.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">陳俊堯</span><p>男中音<br>2015 「聽．海」音樂會</p>
									<p style="text-align: justify;">
									男中音陳俊堯生於香港, 曾與香港歌劇院, 香港歌劇社, 香港教師愛樂合唱團, 都會歌劇院, 香港演藝學院, 纽约曼克頓音樂學院, 纽约抒情歌劇社及Pop Up Productions演出。 演出角色包括波希米亞人的Schunard, 費加洛的婚禮的Figaro及Bartolo, 蝙蝠的Dr. Falke, 卡門的Moralès, 天堂與地獄的John Styx, 賈尼·斯基基的Maestro Spinelloccio及巴黎人生的Gontran。 陳氏亦熱衷於獨唱演出, 並對組曲有濃厚興趣。 他曾在纽约演唱舒曼的詩人之戀, 佛漢．威廉斯的旅行之歌及拉威爾的唐吉訶德的杜西妮亞。 陳俊堯在香港演藝學院及纽约曼克頓音樂學院畢業, 並獲亞洲藝術音樂推廣基金, 香港威爾遜男聲歌詠團, 曼克頓音樂學院, 瑞意銀行, 及何鴻毅家族基金頒發獎學金, 師隨女高音阮妙芬, 徐慧及男中音Maitland Peters 。
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				
				<div class="performer 2014 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
					
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/karen_sung.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">宋可樟</span><p>鋼琴獨奏</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/karen_sung.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">宋可樟</span><p>鋼琴獨奏<br>2014 「錯．愛」音樂會</p>
									<p style="text-align: justify;">
									宋可樟六歲開始學習鋼琴，早年於香港演藝學院接受音樂訓練，師承黃明憲女士。其後入讀香港中文大學音樂系，在學期間師承黃懿倫教授。宋氏於香港中文 大學畢業後，獲頒香港賽馬會音樂及舞蹈信託基金獎學金，赴美國新英格蘭音樂學院深造鋼琴演奏，師承該校鋼琴教授Gabriel Chodos，並獲頒音樂碩士學位。宋氏曾參與多個著名的國際音樂節，包括獲全額獎學金參加日本霧島國際音樂節，跟隨著名鋼琴家鄧泰山學習。此外宋氏曾獲 亞洲文化協會頒發友邦慈善基金音樂獎學金參加於美國舉行的阿斯本音樂節。宋氏曾於多個鋼琴大師班中演奏，包括Peter Frankl, Andrzej Jasinski, Vladimir Krainev, Jerome Rose及Jeffrey Swann。除了亞洲及美國，宋氏曾於奧地利薩爾茨堡的莫札特國際音樂節及德國的薩爾堡音樂節中作鋼琴獨奏及室樂演出。另外，宋氏亦曾於香港藝術館的《藝 韻樂音》及香港中文大學音樂會系列中演奏。宋氏於2005年獲英國倫敦聖三一音樂學院頒發鋼琴演奏院士文憑。 (2014年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2014 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					
					<a href="javascript:;">
					
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/manhei_ho.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">何文曦</span><p>編曲及獨唱</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/manhei_ho.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">何文曦</span><p>編曲及獨唱<br>2014 「錯．愛」音樂會</p>
									<p style="text-align: justify;">
									畢業於香港大學，自中學時期開始接觸合唱音樂，曾參與「新視野藝術節2008」無伴奏合唱劇場《石堅》的首演。其後，何氏加入多個無伴奏合唱組合如 ZENSE、Set Tone Men 負責男中音演唱及編曲，並為專業無伴奏合唱劇團「一舖清唱」之特約演出者之一，演出並推廣不同風格的無伴奏音樂, 2011年，何氏隨 Zense 飛往新加坡參加「無伴奏合唱比賽2011」，表現優異，2012年加入全男班人聲樂團 Set Tone Men，更於同年10月舉行的「台灣國際重唱藝術節」－「世界盃現代阿卡貝拉大賽決賽」中獲得銀牌，並在由香港青年協會舉辦的「香港無伴奏合唱比賽2012」中獲得冠軍。近期參與之演出包括 :《依然小肥2014香港演唱會》、一舖清唱《夜夜欠笙哥》、國際綜藝合家歡節目《你，唱得喜？》、《孤城劫》、共融音樂《流芳濟世》、無伴奏合唱劇場《石堅》、香港回歸十五周年大型文藝晚會》、動畫電影《綠野先生》粵語版歌曲配唱、2012澳門藝術節《鄭家花月夜未央》、《joey & joey 新城容祖兒音樂會》。 
									除了幕前演出外，何氏亦有參與不同類型的音樂製作，如參與方大同「15」 演唱會，王菀之「水百合」演唱會的和音編寫及管弦樂樂譜製作，及為舞台劇編寫配樂, 現為零感音樂製作（台灣）旗下特約音樂製作人，為廣告，網站，微電影和各類影片創作配樂,何氏現正修讀由美國伯克利音樂學院 (Berklee College of Music) 主辦之遙距課程，主修電影配樂及管弦樂編曲。(2014年)<br><br>
									</p>
								</div>
							</div>							
						</div>
					
					</a>
					
				</div>
				
				<div class="performer 2014 2012 2010 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					
					<a href="javascript:;">
					
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/vicky.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">沈韻琦</span><p>編曲、鋼琴伴奏及雙簧管獨奏</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/vicky.jpg" alt="..." style="filter: opacity(60%);">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">沈韻琦</span><p>編曲及鋼琴伴奏<br>2014 「錯．愛」音樂會<br>編曲及雙簧管獨奏<br>2012 「凡．聲」音樂會<br>雙簧管獨奏<br>2010 「聖．靈」音樂會</p>
									<p style="text-align: justify;">
									沈韻琦畢業於香港中文大學音樂系，之後亦取得音樂文學碩士學位。沈氏曾隨張惠堂先生、梅朗達小姐及陳篤信先生修習雙簧管，並已考獲LTCL演奏文憑，亦曾隨 岑小蕙小姐修習鋼琴，考獲DipABRSM演奏文憑。 沈氏曾為香港青年實驗劇團所演出的多媒體青春劇《向左向右遇見愛》擔任音樂總監及編曲，又經常為音樂會及各類劇目擔任配器及編曲， 包括香港電台《十一狂潮音樂會》，《黎惠蘭慈善演唱會》，《新世紀青年管弦樂團十周年音樂會》及《拉闊電影音樂會一、二》，由香港兒童音樂劇團演出的《阿 拉丁－兒童劇場版》、《小王子》、《月亮公主》、《天使盼盼》。 此外，沈氏亦曾為《月滿軒尼詩》及《全城戒備》的電影配樂擔任弦樂配器。(2014年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2014 2012 2011 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/marcus_ho.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">何兆為</span><p>電子低音大提琴</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/marcus_ho.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">何兆為</span><p>電子低音大提琴<br>2014 「錯．愛」音樂會<br>2012 「凡．聲」音樂會<br>2011 「聲．華」音樂會</p>
									<p style="text-align: justify;">
									Marcus began his musical career in high school where he first played the guitar, later on he has developed his interest and soon became a passion in the bass. Marcus was undertaking a Bachelor of Music degree (Performance and Audio Technology) at Wesley Institute in Sydney. During his stay in Sydney, Marcus has studied with Sydney based jazz greats such as Craig Scott, Dave Pudney, Ron Philpot. Marcus then established his career as a session bass player actively playing at various clubs and restaurants, weddings and functions, etc. <br><br> 
									After moving back to Hong Kong, Marcus has been working as a session bass player, arranger, sound engineer and producer.  On top from his passion in Jazz, his wide interest in various musical styles and his skills in music production made him into a versatile player active in the local music scene. Artists who Marcus has worked with include Peter and Andrew Cheung (張崇基、張崇德) Albert Au (區瑞強) Lee Lung Kee (李龍基) Jade Kwan (關心妍), Stephen Ma (馬浚偉), Lung Siu Kwan (龍小菌), Becky Lee (李璧琦), Patrick Tang (鄧健泓), Anthony Chan (陳友), Phil Lam (林奕匡) etc. Marcus is also a member of an active local jazz band "m.a.R.K." which has recently released their original EP, and has been invited to participate in Beishan World Music Festival 2013, Beishan Jazz Festival 2013, Hong Kong International Jazz Festival in September 2013, International Jazz Day 2014 (Beishan). (Updated till 2013)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2014 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/jason_liu.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">廖梓丞</span><p>大提琴獨奏</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/jason_liu.jpg" alt="..." style="filter: opacity(60%);">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">廖梓丞</span><p>大提琴獨奏<br>2014 「錯．愛」音樂會</p>
									<p style="text-align: justify;">
									梓丞生於香港，自幼隨陳麗詩老師習鋼琴，2009年考獲聖三一音樂學院FTCL鋼琴演奏文憑， 2011年考獲LTCL大提琴演奏文憑。現隨徐樂明老師習大提琴。<br><br>
									梓丞曾為香港兒童合唱團成員，曾以獨唱男童高音身份與香港管弦樂團及香港新青年合唱團等合作演出，並於2011年擔任香兒歐洲演出之伴奏。<br><br>
									梓丞隨伍巧怡老師學習作曲，於2010年美國第十五屆 Pikes Peak Young Composers Competition 中兩個組別分別取得冠軍。鋼琴作品 Anxiety I (SDBB) 於2013 Golden Key Piano Composition Competition 奪得高級國際組冠軍，並於維也納作演出。(2014年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2014 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/louis_tsao.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">曹柏翔</span><p>敲擊樂手</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/louis_tsao.jpg" alt="..." style="filter: opacity(60%);">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">曹柏翔</span><p>敲擊樂手<br>2014 「錯．愛」音樂會</p>
									<p style="text-align: justify;">
									"Drummer is not an occupation, but a lifestyle to choose." (2014年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2014 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)),url('/images/activity_pastevent_2014.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">萬蔓</span><p>獨唱</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/activity_pastevent_2014.jpg" alt="..." style="filter: opacity(60%);">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">萬蔓</span><p>獨唱<br>2014 「錯．愛」音樂會</p>
									<p style="text-align: justify;">
									本名王安琪，九十後的師奶，喜愛以感悟道、以理抒情，寄之於創作，發乎於歌聲。<br><br>
									視音樂為最貼近靈魂，最牽動情感的媒介——作品記載的，編曲描繪的，音韻共振的——自三歲起的第一首小作，已陪伴至今二十載。<br><br>
									是次演出，有幸演繹曾扣萬千心弦的經典流行曲。音樂是與生俱來的美好，創作是與生俱來的靈性，兩者訴說著人類與生俱來的嚮往。<br><br>
									愛啊！其偉大在於生生不息，就算「錯愛」，也方死方生。是再卑微的人也好，愛總戰勝黑暗，樂總征服兇惡。<br><br>
									愛不可見，則天地息矣。(2014年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2013 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/candice_chung.png'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">鍾嘉欣</span><p>女高音獨唱</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/candice_chung.png" alt="..." style="filter: opacity(60%);">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">鍾嘉欣</span><p>女高音獨唱<br>2013 「生．息」音樂會</p>
									<p style="text-align: justify;">
									Candice began her proper vocal training at the age of 17 with renowned Soprano, Margaret Yim. In pursuit of her passion in music, she was an enthusiastic member of the Diocesan Girls' School Choir and an active participant of the Hong Kong Schools Music Festival and Yip's Hong Kong Youth Singing Festival. The prizes she received include the Ella Kiang Trophy which was awarded to her in 2007 following her success in the Musical Theatre category. At the Manhattan School of Music, New York, she studied with Mark Oswald, a Metropolitan Opera Baritone and a leading voice teacher at the Metropolitan Opera. For her last year at MSM, she studied with renowned American Soprano, Ashley Putnam. Her musical skills were further diversified as she performed in Opera Scenes productions, playing roles such as Susanna from "Marriage of Figaro" and Norina from "Don Pasquale". In her senior year, she was part of the cast of the U.S. premiere of Paisiello's "Nina, o sia La pazza per amore". Candice graduated with a Bachelor of Music degree from Manhattan School of Music, majoring in Classical Voice. She will be returning to the States this year for her Master of Music degree at Eastman School of Music. (Updated till 2013)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2013 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/caleb_woo.png'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">胡永正</span><p>男中音獨唱</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/caleb_woo.png" alt="..." style="filter: opacity(60%);">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">胡永正</span><p>男中音獨唱<br>2013 「生．息」音樂會</p>
									<p style="text-align: justify;">
									Caleb is now serving as a Music Director in Tuen Mun Alliance Church, and serve as a Conductor and Voice teacher in MusiCall Ministries, Chinese YMCA and Qin Music Company. Hegraduated with a Master of Music in Voice Performance and Literature from the Eastman School of Music, University of Rochester, New York. He also obtained the MA degree in Christian Studies from CUHK, BA (Hons.) in Music (Singing Performance and Pedagogy) and BSsc in China Studies from HKBU. Caleb was a finalist in the Kneisel Lieder Competition in 2011 and 2012, a finalist in the Eastman Friends of Opera Competition 2012, and a district winner (New York) in the NATS Competition. Woo obtained his ATCL diploma and LRSM diploma in 2005 and 2009 respectively. His voice teachers have included Professor Robert McIver, Jimmy Chan Foon-sheung and Sanson Lau Wing-sang. (Updated till 2013)<br><br> 
									For more, please visit : <a href="http://www.calebwoo.com/" target="_blank">http://www.calebwoo.com/</a>
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2013 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/stephen_ng.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">吳智誠</span><p>男高音獨唱</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/stephen_ng.jpg" alt="..." style="filter: opacity(60%);">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">吳智誠</span><p>男高音獨唱<br>2013 「生．息」音樂會</p>
									<p style="text-align: justify;">
									Heralded for his "powerfully expressive voice" (Washington Post, May 2009), and "glorious in this feat of vocal gymnastics and interpretation" (The Gazette, Cedar Rapids, 2012), Stephen Ng is known as an opera, oratorio, recital, and new music performer. On the operatic stage, he was featured as tenor soloist with Amsterdam's De Nederlandse Opera, in the staged version of Stravinsky's Threni, directed by renowned Peter Sellars.<br><br>
									As a soloist, Stephen has performed all the major works of J.S. Bach, Handel's Messiah, as well as major oratorios.  His portrayal of Evangelist in Bach's Passions has received much acclaim, and he has performed with Philharmonia Baroque Orchestra, Washington Bach Consort, The Bach Choir of Bethlehem, Seattle Baroque Orchestra, Carmel Bach Festival, Amherst Early Music Festival, and the Atlanta Baroque Orchestra. Stephen's other engagements also include performing with Festival Internacional Cervantino (Guanajuato, Mexico), Theatre of Voices, Schönberg Ensemble (Amsterdam), Tanglewood and Aspen Music Festivals, Orchestra Iowa, Orlando Philharmonic Orchestra, and the City Chamber Orchestra of Hong Kong, working with conductors such as James Levine, Nicolas McGegan, Paul Hillier, Reinbert de Leeuw, J. Reilly Lewis, Simon Carrington, and Gennady Rozhdestvensky. With great interest in contemporary music, he has performed twice at the Lucerne Festival Academy, under the direction of Pierre Boulez, including a return appearance in 2009 where he performed Sinfonia by Luciano Berio. (Updated till 2013)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2012 2011 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/kwanyee_chan.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">陳筠怡</span><p>小提琴</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/kwanyee_chan.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">陳筠怡</span><p>小提琴<br>2012 「凡．聲」音樂會<br>2011 「聲．華」音樂會</p>
									<p style="text-align: justify;">
									陳筠怡自九歲開始學習小提琴，曾先後跟隨張景嵐女士，龍向輝先生及盧嘉兒女士學習小提琴。現於香港演藝學院音樂學院主修小提琴演奏，曾於2008年獲得陳修治醫生藝術獎學基金。<br><br>
									陳氏熱衷於音樂演奏，常參與各大樂團的演出，當中包括香港浸會大學交響樂團、香港交響樂團、香港新世紀青年管弦樂團、香港醫學會管弦樂團等。(2012年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2012 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/ashley_to.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">杜凱雯</span><p>小提琴</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/ashley_to.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">杜凱雯</span><p>小提琴<br>2012 「凡．聲」音樂會</p>
									<p style="text-align: justify;">
									杜凱雯自5歲習小提琴，於2011 年考獲LTCL (Recital)。她曾擔任庇利羅士女子中學管弦樂團及弦樂團團長，於香港校際音樂節及香港青年音樂匯演中屢獲殊榮。此外，杜氏亦積極參與校外不同的音樂團體，多次代表香港四出表演，包括隨香港青年管弦樂團參加近年的上海世界博覽會，並錯經與不同的世界級音樂大師演出，當中包括 Paul Silverthorne (倫敦交響樂團團長) 及Lorenzo Iosco (倫敦交響樂團低音單簧管首席)。(2012年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2012 2011 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info"> 
							<div class="jumbotron" style="background: url('/images/performers/byran_li.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">李鎧華</span><p>中提琴</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/byran_li.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">李鎧華</span><p>中提琴<br>2012 「凡．聲」音樂會<br>2011 「聲．華」音樂會</p>
									<p style="text-align: justify;">
									李鎧華自七歲起隨簡宏道先生學習小提琴，後隨石家澧博士學習小提琴和中提琴。於2010年，李氏考獲英國聖三一學院LTCL文憑，並於同年獲得聖保羅書院音樂獎學金。<br><br>
									李氏曾任香港童軍管弦樂團團長和聖保羅書院管弦樂團中提琴首席。現為香港市域青少年樂團，聖約翰座堂詩班及 Die Konzertisten 的成員。<br><br>
									2013年二月，李氏入讀澳洲新南威爾斯大學，主修城市規劃。(2012年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				
				<div class="performer 2012 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/oiching_chan.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">陳藹晴</span><p>大提琴</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/oiching_chan.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">陳藹晴</span><p>大提琴<br>2012 「凡．聲」音樂會</p>
									<p style="text-align: justify;">
									陳藹晴畢業於香港浸會大學音樂系，師承陳怡君女士，在學期間獲頒授許鄧成仁女士獎學金。陳藹晴熱衷於參與樂團演出，並曾為多個樂團擔任大提琴首席，如香港浸會大學交響樂團、香港巴洛克室樂團及香港青年交響樂團等；曾隨多個樂團到不同國家演出，如日本、新加坡及泰國等。除樂團演出外，她亦積極參與各類型的室樂合奏演出。(2012年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2012 2011 2010 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/yinchiu_lau.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">劉彥昭</span><p>編曲及鋼琴</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/yinchiu_lau.jpg" alt="..." style="filter: opacity(60%);">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">劉彥昭</span><p>編曲及鋼琴<br>2012 「凡．聲」音樂會<br>2011 「聲．華」音樂會<br>2010 「聖．靈」音樂會</p>
									<p style="text-align: justify;">
									劉氏現為全職音樂人，中學時期已開始擔任演唱會樂手。此後，他積極參與各種幕前及幕後音樂製作，如音樂劇配樂、實驗性多媒體劇場伴奏、短片及錄像配樂等。在這些岡位中，劉氏曾擔任作曲、編曲、琴手、低音結他手、樂隊領班等多個角色。<br><br>
									入行十數載，劉氏曾與無數本地藝人合作，包括著名填詞人鄭國江、歌手杜麗莎、譚詠倫、陳潔靈、賈思樂、張德蘭、區瑞強、梁詠琪、謝安琪、關心妍等等；曾合作之團體則有香港舞蹈團、香港醫學會管弦樂蜀、Hong Kong Chamber、香港浸會大學、Amercian Community Theatre、Hong Kong Singers、Singchronizers、突破機構等等。近年，劉氏主要的工作為管弦樂團編曲，同時他亦兼任多間教會及機構的樂器導師及樂隊訓練工作。(2012年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2012 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/jojo_pang.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">彭祖容</span><p>編曲及獨唱</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/jojo_pang.jpg">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">彭祖容</span><p>編曲及獨唱<br>2012 「凡．聲」音樂會</p>
									<p style="text-align: justify;">
									彭氏畢業於香港浸會大學音樂系，主修作曲。被譽為全能音樂家，除作曲、編曲和唱歌外，擅長演奏各樣樂器, 包括鋼琴, 小提琴, 小號, 敲擊樂器。曾任浸大交響樂團和室樂團的副團長和小號首席及參與多個海外音樂文化交流(合唱及管弦)演出, 包括悉尼, 北京, 上海, 貴州等。 曾受委約為香港小交響樂團的小號首席創作小號與鋼琴合奏之作品《A Burst of Passion》，香港清風五重奏(Fresh Air Brass Quintet)亦曾公開演奏其室樂作品《Smoky Mountain Train》，深獲專業演奏家及觀眾好評。彭氏於2009年創立無伴奏合唱組合ORANGE，為推動及提昇香港的無伴奏合唱藝術發展，積極投入作曲及編曲之工作，並為團隊擔任合唱指導，於2010年5月接受《新報》訪問有關發展無伴奏合唱音樂的工作。(2012年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2012 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info"> 
							<div class="jumbotron" style="background: url('/images/performers/hoiyin_choi.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">蔡愷彥</span><p>二胡獨奏</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/hoiyin_choi.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">蔡愷彥</span><p>二胡獨奏<br>2012 「凡．聲」音樂會</p>
									<p style="text-align: justify;">
									蔡愷彥就讀庇理羅士女子中學，是校內中樂團成員；4歲學習鋼琴，已考取皇家音樂學院鋼琴八級優秀證書，並在多個公開比賽獲得獎項；7歲起學習二胡，師承李佩君老師。小學時加入滬江小學中樂團並成為二胡首席及樂團團長。11歲考入音樂事務處港島青年中樂團，成為當時最年幼的成員。於2011年以優秀評級成績考獲中央音樂學院二胡九級證書，愷彥近年參加多個二胡獨奏及中樂團公開比賽，都獲取三甲佳績，在校際音樂節二胡獨奏深造組比賽獲得季軍。(2012年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2012 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/orange.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">Orange</span><p>無伴奏組合</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/orange.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">Orange</span><p>無伴奏組合<br>2012 「凡．聲」音樂會</p>
									<p style="text-align: justify;">
									Orange 成立於2009 年8月，是香港的無伴奏合唱人聲樂團，通過演繹不同風格以及唱作原創的歌曲，Orange希望能夠全面的推廣無伴奏音樂至普羅大眾和提昇其藝術水平，以音樂豐富人生，故此團名Orange除了指「全領域（All Range）」外，亦希望藉Orange 的顏色表達團員的活力，以及對音樂的熱情和堅持。Orange 的成員皆擁有豐富合唱演出經驗和專業的音樂知識，活躍於香港不同的表演團體。<br><br> 
									Orange 成立至今，已獲不同的團體邀請擔任表演嘉賓。2010年2月，Orange 遠赴日本札幌參加無伴奏合唱的交流演出，大獲好評，隨後於香港2010及2011國際無伴奏合唱節演唱。2010年10月，應香港貿易發展局之邀請前往山東濟南參與展覽活動演出。同年10月至12月期間，分別代表香港受邀前往新加坡2010國際無伴奏合唱節、澳門城市藝穗2010及深圳灣國際藝穗節之演出。2011年6月赴台灣參與中華暢聲亞洲音樂協會舉辦的「人聲音樂列車」巡迴系列之專場無伴奏合唱音樂會，深得台灣樂迷愛戴。2012 年4月至6月分別受邀到澳門威尼斯人劇場及上海音樂廳與國際著名小提琴家姚珏合作音樂會及中國北京草莓音樂節演出。 另外，Orange 曾多次接受無綫電視(TVB) 邀請拍攝「激優一族」及「文化廣場」演唱和訪問。<br><br> 
									更多有關Orange的資料，可瀏覽：<a href="http://orangesing.blogspot.hk/" target="_blank">http://orangesing.blogspot.hk/</a> (2012年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2011 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info"> 
							<div class="jumbotron" style="background: url('/images/performers/ling_chong.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">莊凌</span><p>大提琴獨奏</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/ling_chong.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">莊凌</span><p>大提琴獨奏<br>2011 「聲．華」音樂會</p>
									<p style="text-align: justify;">
									莊凌畢業於香港中文大學音樂系，師從張明輝先生。在學期間曾擔任崇基學院管弦樂團大提琴首席。於2008至2010年的春季音樂會期間，他多次擔任獨奏，包括Saint-Saëns 動物嘉年華中「天鵝」，以及Bruch 的Kol Nidei 。莊氏現為香港室樂團成員，於過往數場演出擔任大提琴首席。(2011年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2011 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/tinchi_chan.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">陳天姿</span><p>古箏獨奏</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/tinchi_chan.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">陳天姿</span><p>古箏獨奏<br>2011 「聲．華」音樂會</p>
									<p style="text-align: justify;">
									現就讀於筲箕灣官立中學。自十歲起開始學習古箏，現師承吳曉紅老師，並已考獲中央音樂學院及上海音樂學院古箏演奏文憑級的優秀及滿分佳績，於兩間院校舷優秀者匯演中擔任表演嘉賓。陳氏於2009年參加第四屆中國青少年藝術節古箏比賽，獲全國金獎：於同年亦獲得第四屆國際音樂藝術大賽總決賽的金獎，更獲邀於兩次比賽的頒獎典禮中表演。陳氏亦曾參加五次校際音樂節古箏比賽。除了古箏外，陳氏亦會彈鋼琴，現已考獲聖三一音樂學院鋼琴演奏初級文憑，時常獲邀出席校內和校外的各類型音樂表演。(2011年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2011 2010 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/sheungfung_kwan.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">關尚峰</span><p>英國號及雙簧管獨奏</p>
						</div>
						
						<div id="overlay" class="detail-info hide fullscreen" style="filter: alpha(opacity=20); opacity:0.7; background-color:#000;"></div>
						<div class="detail-info hide fullscreen" style="padding: 20px; text-align: center; overflow: auto;">
							
							<div class="thumbnail col-md-8 col-xs-12" style="position:absolute; background-color: #E8E8E8; padding: 10px; left:0; right:0; margin: auto; margin-top: 5%">
								<a href="javascript:$('div.fullscreen').addClass('hide');" class="btn btn-present" role="button" style="position: absolute; right: 0px; color: grey; font-size: 20px; z-index:1000;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
								<div class="col-md-4 col-xs-12" style="text-align: center;">
										<img class="media-object" style="width: 100%" src="/images/performers/sheungfung_kwan.jpg" alt="...">
								</div>
								<div class="col-md-8 col-xs-12">
									<span style="font-size: 20px; font-weight: bold;">關尚峰</span><p>英國號及雙簧管獨奏<br>2011 「聲．華」音樂會<br>英國號獨奏<br>2010 「聖．靈」音樂會</p>
									<p style="text-align: justify;">
									關尚峰於2009年以優異成績畢業於香港演藝學院，主修雙簧管並副修英國管，獲得專業文憑及音樂學士學位，師從姚桑琳先生。在學期間關氏獲頒發春天舞台獎學金及成龍獎學金，並從演藝畢業時考獲萬瑞庭海外獎學金，資助前往德國深造。於2011年關氏在德國卡斯魯爾國立高等音樂學院畢業，獲頒音樂碩士（雙簧管）並師從Mr. Thomas Indermühle 教授，於德留學期間活躍於室樂及樂團演奏，並同時副修英國管及巴洛克雙簧管。<br><br> 
									關氏為香港管弦樂團、香港小交響樂團、香港城市室樂團、香港創樂團及澳門樂團之特約樂手，並曾於2008-2009年於香港城市室樂團出任雙簧管及英國管合約樂手。關氏曾與亞洲青年管弦樂團及波羅的海青年交響樂團於亞洲及歐洲多地歷時多月巡迴演出，及參與歐洲多個音樂節如瑞典 Aurora Music Festival、意大利 Estate Musicale Frentana、MiTo SettembreMusica、德國Usedomer Musikfestival ，演出室樂及管弦樂。(2011年)
									</p>
								</div>
							</div>							
						</div>
					</a>
				</div>
				
				<div class="performer 2010 col-md-3 thumbnail" style="text-align:center; background-color:#EEEEEE;" onclick="showInfo($(this));">
					<a href="javascript:;">
						<div class="small-info">
							<div class="jumbotron" style="background: url('/images/performers/rebecca_li.jpg'); background-size: cover; background-position: center center; width=100%;  padding: 20px; height: 300px;"></div>
							<span style="font-size: 20px; font-weight: bold;">李幗珊</span><p>大提琴獨奏</p>
						</div>
						
						
					</a>
				</div>
				
				
				
		
			</div>
		
			
			
			 
		</div>	
	</div>
	<?php include '../modules/bottom.php' ?>
	</body>
<html>