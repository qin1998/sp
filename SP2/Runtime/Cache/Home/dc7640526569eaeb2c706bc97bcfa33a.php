<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
<title>满太服饰</title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="author" content="<?php echo C('WEB_SITE_TITLE');?>">
<meta name="keywords" content="<?php echo ($meta_keywords); ?>">
<meta name="description" content="<?php echo ($meta_description); ?>">
<meta name="generator" content="ThinkPHP">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php echo C('WEB_SITE_TITLE');?>">
<meta name="format-detection" content="telephone=no,email=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="/matai/Application/Home/View/default/Static/matai/static/css/resetd7f1.css?v=v2" type="text/css" media="screen" charset="utf-8">
<script src="/matai/Application/Home/View/default/Static/matai/static/js/jQueryd7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>
<script src="/matai/Application/Home/View/default/Static/matai/static/js/jquery.easing.1.3d7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>
<script src="/matai/Application/Home/View/default/Static/matai/static/js/jquery.transitd7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>
<script src="/matai/Application/Home/View/default/Static/matai/static/js/prefixfree.mind7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>
<script src="/matai/Application/Home/View/default/Static/matai/static/js/bocfed7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="/matai/Application/Home/View/default/Static/matai/static/web/css/styled7f1.css?v=v2" type="text/css" media="screen" charset="utf-8">


 <!-- 载入文件，文件地址为从default文件夹开始，路径为Public/head.html -->
</head>
<body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
	<div class="header f-cb por z2">
		<a href="<?php echo U('Index/index');?>" class="logo fl por z2"><img src="/matai/Application/Home/View/default/Static/matai/static/web/img/logod7f1.png?v=v2" width="209" height="104" alt="满太"></a>
		<div class="nav-btn fr por z2">
			<p class="fl">Menu</p>
			<div class="line fr por ovh">
				<span class="top"></span>
				<span></span>
				<span class="bot"></span>
			</div>
		</div>
		
		<div class="nav poa dn">
			<div class="list f-cb">
				<ul>
					<li>
						<a href="<?php echo U('Index/index');?>">
							<p>首页</p>
							<p class="en">Home</p>
						</a>
						<div class="line poa ovh"><div class="in poa"></div></div>
					</li>
					<li>
						<a href="<?php echo U('Index/Blockbuster_season');?>">
							<p>当季大片</p>
							<p class="en">Blockbuster season</p>
						</a>
						<div class="line poa ovh"><div class="in poa"></div></div>
					</li>
					<li>
						<a href="<?php echo U('Index/product_list');?>">
							<p>精品系列</p>
							<p class="en">Gifts series</p>
						</a>
						<div class="line poa ovh"><div class="in poa"></div></div>
					</li>
					<li>
						<a href="<?php echo U('Index/Dunnu_brand');?>">
							<p>满太品牌</p>
							<p class="en">Matastyle brand</p>
						</a>
						<div class="line poa ovh"><div class="in poa"></div></div>
					</li>
					<li>
						<a href="<?php echo U('Index/news_list');?>">
							<p>时尚资讯</p>
							<p class="en">Fashion News</p>
						</a>
						<div class="line poa ovh"><div class="in poa"></div></div>
					</li>
					<li>
						<a href="<?php echo U('Index/contact_us');?>">
							<p>联系我们</p>
							<p class="en">Contact us</p>
						</a>
						<div class="line poa ovh"><div class="in poa"></div></div>
					</li>
				</ul>
				
			</div>
			<div class="btn f-cb">
				<div class="language fl">
					<p>_语言<span class="h">简体中文</span><img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign01d7f1.png?v=v2" alt=""></p>
				</div>
				<p class="fr">_搜索<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign02d7f1.png?v=v2" alt=""></p>
			</div>
			<div class="language-list dn">
				<a href="#" class="en fl">English</a>
				<a href="#" class="fl">简体中文</a>
			</div>
			<div class="search dn">
				<form action="http://www.dunnu.com/index.php/searchnews" method="GET" class="f-cb">
					<input type="text" placeholder="Type here to search" id="keyword" name="keyword" onfocus="$(this).addClass('cur')" onblur="$(this).removeClass('cur')" class="fl">
					<input type="submit" value="" class="submit fl">
				</form>
				<p>在此输入文本进行搜索</p>
			</div>
		</div>
	</div>	

    
<div class="series-nav poa z2">
		<ul>
			<li >
				<a href="<?php echo U('product_list');?>" class="tit">2016</a>
                <div class="sub poa dn">
                    <a href="<?php echo U('product_list');?>#0 ">冬</a>
                    <a href="<?php echo U('product_list');?>#1 ">秋</a>
                    <a href="<?php echo U('product_list');?>#2 ">夏</a>
                    <a href="<?php echo U('product_list');?>#3 ">春</a>
                </div>
			</li>
			<li class='mark'>
				<a href="<?php echo U('product_2015');?>" class="tit">2015</a>
				<div class="sub poa dn">
					<a href="<?php echo U('product_2015');?>#0 ">冬</a>
					<a href="<?php echo U('product_2015');?>#1 ">秋</a>
					<a href="<?php echo U('product_2015');?>#2 ">夏</a>
				</div>
			</li>
		</ul>
	</div>
	<div class="inside-wrap por h-t">
		<div class="series-nav-blank"></div>


										<!--模版3-->
		<div class="series-box por f-cb">
			<div class="tips fl">
				<div class="tips-in por ovh">
					<a href="<?php echo U('product_list_2');?>" class="imgshow">
						<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/12/05/144928731839invwg.jpg" width="100%" alt="" class="scale">
						<span class="bg poa-f dn"></span>
						<span class="sign poa">
							<span class="line t poa"></span>
							<span>Read more</span>
							<span class="line b poa"></span>
						</span>
					</a>
				</div>
				<div class="tips-in por ovh">
					<a href="<?php echo U('product_list_2');?>" class="imgshow">
						<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/12/05/1449285669649kw94.jpg" width="100%" alt="" class="scale">
						<span class="bg poa-f dn"></span>
						<span class="sign poa">
							<span class="line t poa"></span>
							<span>Read more</span>
							<span class="line b poa"></span>
						</span>
					</a>
				</div>
			</div>
			<div class="box por ovh fl">
				<a href="<?php echo U('product_list_2');?>" class="imgshow">
					<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/12/05/144928731875invwg.jpg" width="100%" alt="" class="scale">
					<span class="bg poa-f dn"></span>
					<span class="sign poa">
						<span class="line t poa"></span>
						<span>Read more</span>
						<span class="line b poa"></span>
					</span>
				</a>
			</div>
			<div class="tips l50 poa">
				<div class="tips-in tips-detail">
					<div class="in por">
						<p class="year">2015</p>
						<a href="<?php echo U('product_list_2');?>" class="t">冬</a>
						<div class="line poa"></div>
						<a href="<?php echo U('product_list_2');?>" class="more-btn por ovh">
							<span>Read more</span>
							<span class="blank poa-f"></span>
							<span class="af poa">Read more</span>
							<span class="border w t poa"></span>
							<span class="border he r poa"></span>
							<span class="border w b poa"></span>
							<span class="border he l poa"></span>
							<span class="border w t poa hover"></span>
							<span class="border he r poa hover"></span>
							<span class="border w b poa hover"></span>
							<span class="border he l poa hover"></span>
						</a>
					</div>
				</div>
				<div class="tips-in por ovh">
					<a href="<?php echo U('product_list_2');?>" class="imgshow">
						<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/12/05/144928731855invwg.jpg" width="100%" alt="" class="scale">
						<span class="bg poa-f dn"></span>
						<span class="sign poa">
							<span class="line t poa"></span>
							<span>Read more</span>
							<span class="line b poa"></span>
						</span>
					</a>
				</div>
			</div>
			<div class="tips ml fl">
				<div class="tips-in por ovh">
					<a href="<?php echo U('product_list_2');?>" class="imgshow">
						<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/12/05/144928731853invwg.jpg" width="100%" alt="" class="scale">
						<span class="bg poa-f dn"></span>
						<span class="sign poa">
							<span class="line t poa"></span>
							<span>Read more</span>
							<span class="line b poa"></span>
						</span>
					</a>
				</div>
				<div class="tips-in por ovh">
					<a href="<?php echo U('product_list_2');?>" class="imgshow">
						<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/12/05/144928567064h1wus.jpg" width="100%" alt="" class="scale">
						<span class="bg poa-f dn"></span>
						<span class="sign poa">
							<span class="line t poa"></span>
							<span>Read more</span>
							<span class="line b poa"></span>
						</span>
					</a>
				</div>
			</div>
		</div>
		<!--模版3-->
		
										<!--模版1-->
		<div class="series-box por f-cb">
			<div class="tips poa">
				<div class="tips-in tips-detail">
					<div class="in por">
						<p class="year">2015</p>
						<a href="<?php echo U('product_list_2');?>" class="t">秋</a>
						<div class="line poa"></div>
						<a href="<?php echo U('product_list_2');?>" class="more-btn por ovh">
							<span>Read more</span>
							<span class="blank poa-f"></span>
							<span class="af poa">Read more</span>
							<span class="border w t poa"></span>
							<span class="border he r poa"></span>
							<span class="border w b poa"></span>
							<span class="border he l poa"></span>
							<span class="border w t poa hover"></span>
							<span class="border he r poa hover"></span>
							<span class="border w b poa hover"></span>
							<span class="border he l poa hover"></span>
						</a>
					</div>
				</div>
				<div class="tips-in por ovh">
					<a href="<?php echo U('product_list_2');?>" class="imgshow">
						<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/07/27/14380114106281jzqjn.jpg" width="100%" alt="" class="scale">
						<span class="bg poa-f dn"></span>
						<span class="sign poa">
							<span class="line t poa"></span>
							<span>Read more</span>
							<span class="line b poa"></span>
						</span>
					</a>
				</div>
			</div>

			<div class="box por fl ml ovh">
				<a href="<?php echo U('product_list_2');?>" class="imgshow">
					<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/07/27/14380114168627ianny.jpg" width="100%" alt="" class="scale">
					<span class="bg poa-f dn"></span>
					<span class="sign poa">
						<span class="line t poa"></span>
						<span>Read more</span>
						<span class="line b poa"></span>
					</span>
				</a>
			</div>

			<div class="box por ovh fl">
				<a href="<?php echo U('product_list_2');?>" class="imgshow">
					<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/07/27/143801142076776ifec.jpg" width="100%" alt="" class="scale">
					<span class="bg poa-f dn"></span>
					<span class="sign poa">
						<span class="line t poa"></span>
						<span>Read more</span>
						<span class="line b poa"></span>
					</span>
				</a>
			</div>

			<div class="box por ovh fl">
				<a href="<?php echo U('product_list_2');?>" class="imgshow">
					<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/07/27/14380114270327kmoxe.jpg" width="100%" alt="" class="scale">
					<span class="bg poa-f dn"></span>
					<span class="sign poa">
						<span class="line t poa"></span>
						<span>Read more</span>
						<span class="line b poa"></span>
					</span>
				</a>
			</div>

		</div>
		<!--模版1-->
		
										<!--模版2-->
		<div class="series-box por ovh f-cb">
			<div class="box por ovh fl">
				<a href="<?php echo U('product_list_2');?>" class="imgshow">
					<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/21/144014340292byv3j.jpg" width="100%" alt="" class="scale">
					<span class="bg poa-f dn"></span>
					<span class="sign poa">
						<span class="line t poa"></span>
						<span>Read more</span>
						<span class="line b poa"></span>
					</span>
				</a>
			</div>
			<div class="tips l25 poa">
				<div class="tips-in tips-detail">
					<div class="in por">
						<p class="year">2015</p>
						<a href="<?php echo U('product_list_2');?>" class="t">夏</a>
						<div class="line poa"></div>
						<a href="<?php echo U('product_list_2');?>" class="more-btn por ovh">
							<span>Read more</span>
							<span class="blank poa-f"></span>
							<span class="af poa">Read more</span>
							<span class="border w t poa"></span>
							<span class="border he r poa"></span>
							<span class="border w b poa"></span>
							<span class="border he l poa"></span>
							<span class="border w t poa hover"></span>
							<span class="border he r poa hover"></span>
							<span class="border w b poa hover"></span>
							<span class="border he l poa hover"></span>
						</a>
					</div>
				</div>
				<div class="tips-in por ovh">
					<a href="<?php echo U('product_list_2');?>" class="imgshow">
						<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/21/14401430922cx55h.jpg" width="100%" alt="" class="scale">
						<span class="bg poa-f dn"></span>
						<span class="sign poa">
							<span class="line t poa"></span>
							<span>Read more</span>
							<span class="line b poa"></span>
						</span>
					</a>
				</div>
			</div>
			<div class="tips ml fl">
				<div class="tips-in por ovh">
					<a href="<?php echo U('product_list_2');?>" class="imgshow">
						<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/21/144014358865o5i2e.jpg" width="100%" alt="" class="scale">
						<span class="bg poa-f dn"></span>
						<span class="sign poa">
							<span class="line t poa"></span>
							<span>Read more</span>
							<span class="line b poa"></span>
						</span>
					</a>
				</div>
				<div class="tips-in por ovh">
					<a href="<?php echo U('product_list_2');?>" class="imgshow">
						<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/21/144014239248wx83e.jpg" width="100%" alt="" class="scale">
						<span class="bg poa-f dn"></span>
						<span class="sign poa">
							<span class="line t poa"></span>
							<span>Read more</span>
							<span class="line b poa"></span>
						</span>
					</a>
				</div>
			</div>
			<div class="tips fl">
				<div class="tips-in por ovh">
					<a href="<?php echo U('product_list_2');?>" class="imgshow">
						<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/21/144014277716cifd0.jpg" width="100%" alt="" class="scale">
						<span class="bg poa-f dn"></span>
						<span class="sign poa">
							<span class="line t poa"></span>
							<span>Read more</span>
							<span class="line b poa"></span>
						</span>
					</a>
				</div>
				<div class="tips-in por ovh">
					<a href="<?php echo U('product_list_2');?>" class="imgshow">
						<img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/21/144014286089hwt71.jpg" width="100%" alt="" class="scale">
						<span class="bg poa-f dn"></span>
						<span class="sign poa">
							<span class="line t poa"></span>
							<span>Read more</span>
							<span class="line b poa"></span>
						</span>
					</a>
				</div>
			</div>
		</div>
		<!--模版2-->
		
		

	</div>
	&#65279;	

    
	<div class="footer por f-cb">
		<div class="list fl">
			<ul style="text-align:right">
				<li>
					<a href="<?php echo U('Index/index');?>" class="t por">
						<p>首页</p>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Index/Blockbuster_season');?>" class="t por">
						<p>当季大片</p>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Index/product_list');?>" class="t por">
						<p>精品系列</p>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Index/Dunnu_brand');?>" class="t por">
						<p>满太品牌</p>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Index/news_list');?>" class="t por">
						<p>时尚资讯</p>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Index/contact_us');?>" class="t por">
						<p>联系我们</p>
					</a>
				</li>
			</ul>
		</div>
		<div class="mark fr">
			<div class="box fr">
				<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/img09d7f1.png?v=v2" width="100%" alt="">
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<p class="tar">Copyright © 2015 Matastyle All Rights Reserved .   <a target="_blank" title="网站建设" href="http://www.bocweb.cn/">  Powered by ：BOC</a> <a>浙ICP备13008345号-2</a>
		<br/>
		<meta name="baidu-site-verification" content="lZQ531Mtb4" />
		</p>
	</div>
	<div class="back-up h t-bg fixed dn"></div>
	<div style="float:center; font-size:12px; margin-top:8px; margin-bottom:8px; text-align:center; margin-right:13px; display:none"></div>


<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='/matai/Application/Home/View/default/Static/matai/static/api/js/share6e53.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

<script>
	$(function(){
		$(window).scroll(function(){
			if($(window).scrollTop() > 1200){
				$(".back-up").stop(true, true).fadeIn(400)
			}else{
				$(".back-up").stop(true, true).fadeOut(400)
			}
		})
		$(".back-up").click(function(){
			$("html, body").stop().animate({scrollTop: 0}, 1000, "linear")
		})
	})
</script>	<script src="/matai/Application/Home/View/default/Static/matai/static/web/js/maind7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>	<script>
		$(function(){
			$(".series-nav ul").css("margin-left", - $(".series-nav ul").width() / 2)
			$(".series-nav li").hover(function(){
				var _this = $(this)
				_this.find("a.tit").addClass("cur")
				var w    = 0,
				$sub = _this.find(".sub")
				$sub.show();
				for (var i = 0; i < $sub.children().length; i++) {
					w = w + $sub.children().eq(i).width() + 30
				};
				$sub.css({
					width : w,
					marginLeft  : - w / 2
				}).stop().animate({opacity: 1}, 600)
			}, function(){
				var _this = $(this),
				$sub  = _this.find(".sub")
				_this.find("a.tit").removeClass("cur")
				$sub.hide().css("opacity", 0)
			})

			$("a.imgshow").hover(function(){
				var _this = $(this);
				_this.find(".bg").stop(true, true).fadeIn(600).siblings(".sign").stop(true, true).fadeIn(400).find(".t").stop(true, true).animate({
					width: 6,
					left : 50,
					opacity : 1
				}, 400)
				setTimeout(function(){
					_this.find(".b").stop(true, true).animate({
						width: 6,
						left : 50,
						opacity : 1
					}, 400)
				}, 200)
				$(this).find("img").addClass("hover")
			}, function(){
				var _this = $(this);
				_this.find(".t").stop(true, true).animate({
					width: 106,
					left : 0,
					opacity : 0
				}, 400)
				setTimeout(function(){
					_this.find(".b").stop(true, true).animate({
						width: 106,
						left : 0,
						opacity : 0
					}, 400)
					_this.find(".bg").stop(true, true).fadeOut(800).siblings(".sign").stop(true, true).fadeOut(400)
				}, 200)
				$(this).find("img").removeClass("hover")
			})

			$(".tips-detail a.more-btn").hover(function(){
				$(this).siblings(".line").stop().animate({
					width : 10 + '%',
					marginLeft : - 5 + '%'
				}, 400)
			}, function(){
				$(this).siblings(".line").stop().animate({
					width : 5 + '%',
					marginLeft : - 2.5 + '%'
				}, 400)
			})

			// LINK
			var winHref  = document.location.href ,
				Href     = winHref.split("#")[1];
			Initialize(Href)
			$(".series-nav li.mark").find("a").click(function(e){
				setTimeout(function(){
					var winHref  = document.location.href ,
						Href     = winHref.split("#")[1];
					Initialize(Href)
				}, 100)
			})



			boxH();
			$(window).resize(function(){
				boxH();
			})
			function boxH(){
				$('.series-box').each(function(){
					var $this = $(this),
						h = $this.find('.box').height();
					if (h) {
						$this.height(h-1)
					};
				})
			}
		})

function Initialize(e){
	switch(e){
		case ('0') : $("html,body").stop().animate({scrollTop : [$(".series-box").eq(0).offset().top, 'easeInExpo']}, 1000)
		break;
		case ('1') : $("html,body").stop().animate({scrollTop : [$(".series-box").eq(1).offset().top, 'easeInExpo']}, 1000)
		break;
		case ('2') : $("html,body").stop().animate({scrollTop : [$(".series-box").eq(2).offset().top, 'easeInExpo']}, 1000)
		break;
		case ('3') : $("html,body").stop().animate({scrollTop : [$(".series-box").eq(3).offset().top, 'easeInExpo']}, 1000)
		break;
		case ('4') : $("html,body").stop().animate({scrollTop : [$(".series-box").eq(4).offset().top, 'easeInExpo']}, 1000)
		break;
		case ('5') : $("html,body").stop().animate({scrollTop : [$(".series-box").eq(5).offset().top, 'easeInExpo']}, 1000)
		break;
		case ('6') : $("html,body").stop().animate({scrollTop : [$(".series-box").eq(6).offset().top, 'easeInExpo']}, 1000)
		break;
		case ('7') : $("html,body").stop().animate({scrollTop : [$(".series-box").eq(7).offset().top, 'easeInExpo']}, 1000)
		break;
		case ('8') : $("html,body").stop().animate({scrollTop : [$(".series-box").eq(8).offset().top, 'easeInExpo']}, 1000)
		break;
		case ('9') : $("html,body").stop().animate({scrollTop : [$(".series-box").eq(9).offset().top, 'easeInExpo']}, 1000)
		break;
		case ('10') : $("html,body").stop().animate({scrollTop : [$(".series-box").eq(10).offset().top, 'easeInExpo']}, 1000)
		break;
	};
};
</script>

</body>
</html>