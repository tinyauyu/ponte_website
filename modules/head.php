<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="成立於二零一零年六月，Ponte Singers 乃非牟利青年合唱團，成員多為大學音樂系學生，並畢業於音樂氣氛濃厚的傳統中學，曾屢次在世界合唱節勇奪殊榮。本團成立的目的是希望通過每年舉辦主題式的音樂會，向本地青年聽眾推廣特定類別的音樂，加深他們對不同音樂特色的認識。本團曾獲藝術發展局的計畫贊助，依仗藝發局的資助推廣音樂，蒙政府官員、大學教授及音樂界前輩支持，如許曉暉副局長(民政事務局)、李歐梵教授(哈佛大學教授)、周凡夫先生(著名亞洲樂評家)、戴傑文先生(教育局藝術教育組)、官美如教授(中文大學音樂系教授)、葉長盛先(前教育學院教授講師)、羅乃新女士(著名鋼琴家)等。" />
<meta name="robots" content="index,follow">

<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<link href="/css/global.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel="icon" type="image/png" href="/images/logo2.png" sizes="196x196">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Organization",
  "name": "Ponte Singers",
  "description": "Ponte 成立於 2010 年 6 月，乃非牟利的青年合唱團和管弦樂團，多年來獲政府及各地邀請演出，包括德國柏林節、德國統一國慶日酒會、匈牙利合唱大師 Zoltán Pad 的指揮課示範合唱團、澳門青年音樂節、世界青年合唱節、香港天主教會等。同時，本團每年均舉辦主題式音樂會，嘉賓不乏本地政要及樂壇前輩，成為了本地樂迷每年引頸以待的盛事之一。",
  "url" : "http://www.pontesingers.org",
  "logo": "http://www.pontesingers.org/images/logo2.png",
  "sameAs" : [
    "https://www.facebook.com/pontesingers",
    "https://www.youtube.com/user/pontesingers"
  ]
}
</script>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
.pager {
	color: #6699FF;
}

.dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 0px 0px 0px;-moz-border-radius:0 0px 0px 0px;border-radius:0 0px 0px 0px;}
.dropdown-submenu:hover>.dropdown-menu{display:block;}
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:0px 0 0px 0px;-moz-border-radius:0px 0 0px 0px;border-radius:0px 0 0px 0px;}

.carousel .item {
  max-height: 350px;
}
.carousel-inner > .item > img {
	margin: 0 auto;
}
.item > img {
  position: relative;
  max-height: 350px;
}

/* relevant code */
.blog-table{ display:table; width:100%; }
.blog-row{ display:table-row;}
.blog-column{ display:table-cell; width:50%;}
.blog-notification{ display:table-cell; width:28%; }
.fb-comments, .fb-comments iframe[style] {
	width: 100% !important;
}
.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] {
	width: 100% !important;	
}

@media(min-width: 992px){
	#right-col{padding-left:0px}
}
</style>

<script>
	$(document).ready( function(){
		// page width
		var windowWidth = $( window ).width();
		if(windowWidth > 1054){
			windowWidth = 1054;
			$("#page-range").css("width",windowWidth-30);
		} else {
			$("#page-range").css("margin","5px");
			$("#page-range").css("width",windowWidth-10);
		}
		
		
		// facebook plugin
		$(".fb-page").css("width",$('.right-col').width()+"px");
		$(".fb-page").data("width",$('.right-col').width());
		
	
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=123779107687769";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	
		
	});


	function loadPage(page){
		$("#page-content").load(page+" #page-content");
	}
	function scrollTo(pos){
		var divPosition = $(pos).offset();
		$('html, body').animate({scrollTop: divPosition.top}, "slow");
	}
	function showInfo(obj){
		$this = obj;
		$this.find('.detail-info').removeClass('hide');
	}
</script>