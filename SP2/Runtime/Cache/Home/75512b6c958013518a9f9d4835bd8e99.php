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
		<a href="<?php echo U('Index/index');?>" class="logo fl por z2"><img src="/matai/Application/Home/View/default/Static/matai/static/web/img/logod7f1.png?v=v2" width="209" height="104" alt="敦奴"></a>
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
					
					<!-- <li>
						<a href="index.php/stores.html">
							<p>门店查询</p>
							<p class="en">Store inquiry</p>
						</a>
						<div class="line poa ovh"><div class="in poa"></div></div>
					</li> -->
				</ul>
				<ul>
					<li>
						<a href="<?php echo U('Index/Dunnu_brand');?>">
							<p>敦奴品牌</p>
							<p class="en">Dunnu brand</p>
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
					<!-- <li>
						<a href="index.php/group.html">
							<p>时尚集团</p>
							<p class="en">Fashion Group</p>
						</a>
						<div class="line poa ovh"><div class="in poa"></div></div>
					</li>
					<li>
						<a href="index.php/login.html" target="_black">
							<p>会员中心</p>
							<p class="en">Member</p>
						</a>
						<div class="line poa ovh"><div class="in poa"></div></div>
					</li> -->
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

    
<body class="ovh">
	<div class="season-loading poa-f ovh z2">
		<img src="/matai/Application/Home/View/default/Static/matai/upload/2017/03/22/149017401545yyjia.jpg" alt="当季大片" class="poa">
		<div class="bg poa-f"></div>
		<div class="intro poa">
			<a href="../../../index-3.html"><img src="/matai/Application/Home/View/default/Static/matai/static/web/img/logo_sd7f1.png?v=v2" width="100%" alt=""></a>
			<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/loading-book02d7f1.png?v=v2" alt="" width="100%" class="loading">
			<p>Toast to Life。与所有女人共勉，以欢享、欢庆、欢畅的积极态度，创造美好生活。</p>
			<div class="box">
				<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/img29d7f1.png?v=v2" width="100%" alt="">
				<p>使用键盘或者滑动来翻页</p>
			</div>
		</div>
	</div>
	<div class="season-wrap por dn">
				
		<div class="series-nav poa z2">
			<ul>
			</ul>
		</div>
		<div class="flippage-wrap h-t por">
			<div class="flippage por bb-bookblock noselect" id="bb-bookblock">
				<div class="flip-box poa-f f-cb bb-item">
					<div class="box h-full fl por ovh">
						<a href="javascript:;">
							<img src="/matai/Application/Home/View/default/Static/matai/upload/2017/03/22/149017432806bx9lqd7f1.jpg?v=v2" data-img="http://www.dunnu.com/upload/2017/03/22/149017432806bx9lq.jpg" alt="" class="poa">
							<span class="tips poa">
								<p class="en"></p>
								<p></p>
							</span>
						</a>
					</div>
					<div class="box h-full fr por ovh">
						<a href="javascript:;">
							<img src="/matai/Application/Home/View/default/Static/matai/upload/2017/03/22/149017433296cb8e6d7f1.jpg?v=v2" data-img="http://www.dunnu.com/upload/2017/03/22/149017433296cb8e6.jpg" alt="" class="poa">
							<span class="tips poa">
								<p class="en"></p>
								<p></p>
							</span>
						</a>
					</div>
				</div>
				<div class="flip-box poa-f f-cb bb-item">
					<div class="box h-full fl por ovh">
						<a href="javascript:;">
							<img src="/matai/Application/Home/View/default/Static/matai/upload/2016/12/24/1482544190575r7hid7f1.jpg?v=v2" data-img="http://www.dunnu.com/upload/2016/12/24/1482544190575r7hi.jpg" alt="" class="poa">
							<span class="tips poa">
								<p class="en"></p>
								<p></p>
							</span>
						</a>
					</div>
					<div class="box h-full fr por ovh">
						<a href="javascript:;">
							<img src="/matai/Application/Home/View/default/Static/matai/upload/2016/12/24/148254419398r766kd7f1.jpg?v=v2" data-img="http://www.dunnu.com/upload/2016/12/24/148254419398r766k.jpg" alt="" class="poa">
							<span class="tips poa">
								<p class="en"></p>
								<p></p>
							</span>
						</a>
					</div>
				</div>			
			</div>
			<div class="flip-btn prev poa" id="bb-nav-prev"></div>
			<div class="flip-btn next poa" id="bb-nav-next"></div>
		</div>
	</div>
</body>

    
	<div class="footer por f-cb">
		<div class="list fl">
			<ul>
				<li>
					<a href="index.php/brand.html" class="t por">
						<p>敦奴品牌</p>
						<span class="line poa ovh"><span class="in poa"></span></span>
					</a><br>
					<a href="index.php/brand.html#About ">敦奴介绍</a><br>
					<a href="index.php/brand.html#History ">品牌发展</a><br>
					<a href="index.php/season.html">视频欣赏</a><br>
					<a href="index.php/season/list/6.html">时尚大片</a>
				</li>
				<li>
					<a href="index.php/stores.html" class="t por">
						<p>门店查询</p>
						<span class="line poa ovh"><span class="in poa"></span></span>
					</a><br>
					<a href="index.php/stores.html">终端形象</a><br>
					<a href="index.php/stores/info.html">经销商网络</a>
				</li>
				<li>
					<a href="index.php/news.html" class="t por">
						<p>时尚资讯</p>
						<span class="line poa ovh"><span class="in poa"></span></span>
					</a><br>
					<a href="index.php/news/4.html">搭配推荐</a><br>
					<a href="index.php/news/5.html">时尚营销</a><br>
					<a href="index.php/news/6.html">品牌活动</a><br>
				</li>
				<li>
					<a href="javascript:;" class="t por">
						<p>会员中心</p>
						<span class="line poa ovh"><span class="in poa"></span></span>
					</a><br>
					<a href="index.php/login.html">会员活动</a><br>
					<a href="index.php/login.html">会员章程</a><br>
					<a href="index.php/login.html">VIP中心</a>
				</li>
			</ul>
		</div>
		<div class="mark fr">
			<div class="box fr">
				<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/img09d7f1.png?v=v2" width="100%" alt="">
				<p>[ Weibo ]</p>
			</div>
			<div class="box fr">
				<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/img10d7f1.jpg?v=v2" width="100%" alt="">
				<p>[ WeChat ]</p>
			</div>
			<div class="clear"></div>
			<div class="share bdsharebuttonbox">
				<a title="分享到微信" href="#" class="bds_tsina" data-cmd="weixin"></a>
				<a title="分享到QQ好友" href="#" class="bds_tqq" data-cmd="sqq"></a>
				<a title="分享到腾讯微博" href="#" class="bds_sqq" data-cmd="tqq"></a>
				<a title="分享到新浪微博" href="#" class="bds_weixin" data-cmd="tsina"></a>
			</div>
		</div>
		<div class="clear"></div>
		<p class="tar">Copyright © 2015 dunnu All Rights Reserved .   <a target="_blank" title="网站建设" href="http://www.bocweb.cn/">  Powered by ：BOC</a> <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1255948243'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1255948243%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
		<br/>
		<a>浙ICP备13008345号-2</a>
		<meta name="baidu-site-verification" content="lZQ531Mtb4" />
		</p>
	</div>
	<div class="back-up h t-bg fixed dn"></div>
	<div style="float:center; font-size:12px; margin-top:8px; margin-bottom:8px; text-align:center; margin-right:13px; display:none"></div>


	<script src="/matai/Application/Home/View/default/Static/matai/static/web/js/maind7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>
	<script src="/matai/Application/Home/View/default/Static/matai/static/js/plug.preloadd7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>
	<script src="/matai/Application/Home/View/default/Static/matai/static/web/js/modernizrd7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="/matai/Application/Home/View/default/Static/matai/static/web/css/bookblockd7f1.css?v=v2" type="text/css" media="screen" charset="utf-8">
	<script src="/matai/Application/Home/View/default/Static/matai/static/web/js/jquery.bookblockd7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>
	<script src="/matai/Application/Home/View/default/Static/matai/static/web/js/touchd7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>
	<script>
	$(function(){
		$(".season-loading .intro").css("margin-top", - $(".season-loading .intro").height() / 2)
		$(".logo").after("<a href='javascript:history.go(-1);' class='goback fl'>返回上一页</a>")

		_PreLoadImg([
			$(".season-loading").find("img.poa").attr("src")
		], function(){
			FullBg($(window), $(".season-loading > img"))
			$(".season-loading").height($(window).height()).find("img.poa").stop().transition({scale: 1.1}, 5000)
			setTimeout(function(){
				var imgList = new Array();
				for (var i = 0; i < 4; i++) {
					imgList[i] = $(".flippage .box").eq(i).find("img").attr("src")
				};
				_PreLoadImg([
					imgList
				],function(){
					$(".season-wrap").show(0, function(){
						$(".series-nav ul").css("margin-left", - $(".series-nav ul").width() / 2)
						$(".series-nav li").hover(function(){
							var _this = $(this)
							_this.find("a.tit").addClass("hover")
							var w    = 0,
							$sub = _this.find(".sub")
							$sub.show();
							for (var i = 0; i < $sub.children().length; i++) {
								w = w + $sub.children().eq(i).width() + 30
							};
							$sub.css({
								width : w,
								left  : - $sub.find("a").eq(0).width() - 45
							}).stop().animate({opacity: 1}, 600)
						}, function(){
							var _this = $(this),
							$sub  = _this.find(".sub")
							_this.find("a.tit").removeClass("hover")
							$sub.hide().css("opacity", 0)
						})
						// FlipPage
						$(".season-wrap").height($(window).height())
						$(".flippage").height($(window).height() - 104 - $(window).width() * 0.017)

						$(".flippage-wrap").hover(function(){
							$(this).find(".flip-btn").stop().animate({opacity: 1}, 800)
						}, function(){
							$(this).find(".flip-btn").stop().animate({opacity: 0}, 800)
						})

						FullBg($(".flippage .box"), $(".flippage .box img"))
						$(".flippage .box").each(function(){
							var _this = $(this)
							setTimeout(function(){
								_this.parent().hide()
								$(".flippage .flip-box").eq(0).show()
							}, 100)
						})

						window.onresize = function(){
							$(".season-loading").height($(window).height())
							$(".season-loading .intro").css("margin-top", - $(".season-loading .intro").height() / 2)

							$(".season-wrap").height($(window).height())
							$(".flippage").height($(window).height() - 104 - $(window).width() * 0.017)
						};

						var Page = (function() {
							var bl = true,
								n  = 4;
							var config = {
								$bookBlock : $( '#bb-bookblock' ),
								$navNext   : $( '#bb-nav-next' ),
								$navPrev   : $( '#bb-nav-prev' ),
								bb         : $( '#bb-bookblock' ).bookblock( {
									speed       : 800,
									shadowSides	: 0.8,
									shadowFlip	: 0.7
								}),
							},
							init = function() {
								initEvents();
							},
							initEvents = function() {
								config.$navPrev.hide()
								// add navigation events
								config.$navNext.on( 'click', function() {
									config.$navPrev.show()
									if(n == $(".flippage .box").length){
										config.$navNext.hide()
									}
									if(n > $(".flippage .box").length){
										n == $(".flippage .box").length
									}
									config.bb.next();
									var srcBE = $(".flippage .box").eq(n).find("img").attr("src"),
										srcAF = $(".flippage .box").eq(n + 1).find("img").attr("src")
									_PreLoadImg([
										srcBE, srcAF
									], function(){
										n = n + 2
									})
									return false;
								});
								config.$navPrev.on( 'click', function() {
									config.$navNext.show()
									if(n == 6){
										config.$navPrev.hide()
									}
									config.bb.prev();
									n = n - 2
									return false;
								});
								// 键盘控制
								$(document).keyup(function(e){
									var key = e.which;
									if(key == 39 ){
										config.$navPrev.show()
										if(n == $(".flippage .box").length){
											config.$navNext.hide()
										}
										if(n > $(".flippage .box").length){
											n == $(".flippage .box").length
										}
										config.bb.next();
										var srcBE = $(".flippage .box").eq(n).find("img").attr("src"),
											srcAF = $(".flippage .box").eq(n + 1).find("img").attr("src")
										_PreLoadImg([
											srcBE, srcAF
										], function(){
											n = n + 2
										})
										return false;
									}
									if(key == 37){
										config.$navNext.show()
										if(n == 6){
											config.$navPrev.hide()
										}
										config.bb.prev();
										n = n - 2
										return false;
									}
								});
							};
							return { init : init };
						})();
						Page.init();
					})

					$(".season-wrap").css("opacity", 0)
					$(".season-loading").stop().animate({
						top: 100 + '%',
						opacity : 0
					}, 1000)
					setTimeout(function(){
						$(".season-wrap").stop().animate({
							opacity : 1
						}, 1000)
					}, 700)
				})
			}, 1000)
		})
	})
	</script>	

</body>
</html>