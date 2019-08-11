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

    
<div class="news-nav poa z2">
		<ul>
			<li><a href="<?php echo U('Index/news_list');?>" class="cur">全部</a></li>
		    <li><a href="<?php echo U('Index/news_2');?>" >搭配推荐</a></li>
		    <li><a href="<?php echo U('Index/news_1');?>" >时尚营销</a></li>
		    <li><a href="<?php echo U('Index/news_3');?>" >品牌活动</a></li>
		</ul>
	</div>    
	<div class="news-info">
    	<div class="main">
    		<p class="time">2016-08-22</p>
    		<p class="tit">罗希:改变生活还不如改变自己</p>
    		<div class="detail">
    			<p><span style="font-size: 18px;">今年除了奥运的另一件大事便是——G20峰会在杭州的举行，歌曲《最美杭州》依托举世瞩目的G20峰会召开为锲机，作为一项有意义的公益活动，在世人面前充分展示人间天堂的秀美山水和人文风貌，浙江卫视主持人罗希就曾参演《最美杭州》的录制。</span></p><p><br/></p><p style="text-align: center;"><img src="/matai/Application/Home/View/default/Static/matai/upload/at/image/20160822/1471849814382982pE89.gif" title="1471849814382982pE89.gif" alt="tu_02.gif"/></p><p style="text-align: center;"><span style="font-size: 18px;">浙江卫视女主持人</span></p><p style="text-align: center;"><span style="font-size: 18px;">成长在人杰地灵的江南水乡余姚</span></p><p style="text-align: center;"><span style="font-size: 18px;">毕业于中国传媒大学播音主持艺术学院</span></p><p style="text-align: center;"><span style="font-size: 18px;">并加盟浙江卫视中国蓝</span></p><p style="text-align: center;"><span style="font-size: 18px;">目前正在主持的是</span></p><p style="text-align: center;"><span style="font-size: 18px;">浙江卫视的娱乐资讯节目</span></p><p style="text-align: center;"><span style="font-size: 18px;">《娱乐梦工厂》《爽食行天下》</span></p><p style="text-align: center;"><span style="font-size: 18px;">《中国蓝速递》《跑男来了》</span></p><p><br/></p><p><br/></p><p style="text-align: center;"><img src="/matai/Application/Home/View/default/Static/matai/upload/at/image/20160822/14718498331389665382.gif" title="14718498331389665382.gif" alt="tu_04.gif"/></p><p><br/></p><p><span style="font-size: 18px;">罗希身材很棒，时尚触感非常敏锐，对服装搭配也有着独到的想法，虽有着众人羡慕不来的九头身，但在生活中，她却更倾向于舒适随意的穿着，懒人不作，也正是她个性上的特写。</span></p><p><br/></p><p><br/></p><p style="text-align: center;"><img src="/matai/Application/Home/View/default/Static/matai/upload/at/image/20160822/1471849855739974AAF0.gif" title="1471849855739974AAF0.gif" alt="a1.gif"/></p><p><br/></p><p style="text-align: center;"><img src="/matai/Application/Home/View/default/Static/matai/upload/at/image/20160822/1471849868582908DF7E.gif" title="1471849868582908DF7E.gif" alt="小标题1.gif"/></p><p><br/></p><p style="text-align: center;"><img src="/matai/Application/Home/View/default/Static/matai/upload/at/image/20160822/1471849929140933D049.gif" title="1471849929140933D049.gif" alt="tu3.gif"/></p><p><span style="font-size: 18px;">相比西装裤的一本正经，阔腿裤将正式与休闲间的平衡把握得更好，挺括有垂坠感的阔腿裤配上单鞋还能突显出OL干练却不失女性柔美的特点，本季DUNNU敦奴用阔腿裤搭配风衣，让你显瘦又时尚。<br/></span></p><p><br/></p><p style="text-align: center;"><img src="/matai/Application/Home/View/default/Static/matai/upload/at/image/20160822/14718499467150161050.gif" title="14718499467150161050.gif" alt="a2.gif"/></p><p><br/></p><p style="text-align: center;"><img src="/matai/Application/Home/View/default/Static/matai/upload/at/image/20160822/14718499591386134164.gif" title="14718499591386134164.gif" alt="小标题1.gif"/></p><p><br/></p><p style="text-align: center;"><img src="/matai/Application/Home/View/default/Static/matai/upload/at/image/20160822/14718499671184446306.gif" title="14718499671184446306.gif" alt="tu2.gif"/></p><p><span style="font-size: 18px;">黑色透视加上黄色波点，将小清新进行到底，拼接黑色高腰半裙穿出温婉的情愫，与DUNNU敦奴共同迎接秋天的张扬肆意。</span></p><p><br/></p><p><br/></p><p style="text-align: center;"><img src="/matai/Application/Home/View/default/Static/matai/upload/at/image/20160822/14718499821318329A15.gif" title="14718499821318329A15.gif" alt="tu_10.gif"/></p><p><br/></p><p><span style="font-size: 18px;">罗希说过：“很多人想改变生活改变自己所处的环境，但我认为改变应该接地气一点，要想去改变生活还不如改变自己。”</span></p><p><br/></p><p><br/></p><p style="text-align: center;"><img src="/matai/Application/Home/View/default/Static/matai/upload/at/image/20160822/1471850002867520EB24.jpg" title="1471850002867520EB24.jpg" alt="BAOJ3461调2.jpg"/></p><p><br/></p><p><span style="font-size: 18px;">不随波逐流，坚持做自己，适合自己才是最时尚，这个秋季DUNNU敦奴带你追溯时尚的原点，以独特的风格带给你一种热情洋溢、积极向上、时尚烂漫的感受。</span></p><p><br/></p><p><span style="color: rgb(255, 255, 255); font-size: 18px; background-color: rgb(0, 0, 0);">=小编提示=</span></p><p><span style="color: rgb(255, 255, 255); font-size: 18px; background-color: rgb(0, 0, 0);">以上产品均为DUNNU敦奴2016年秋季新品</span></p><p><span style="color: rgb(255, 255, 255); font-size: 18px; background-color: rgb(0, 0, 0);">现已全国专柜上市</span></p><p><span style="color: rgb(255, 255, 255); font-size: 18px; background-color: rgb(0, 0, 0);">欢迎光临门店试穿体验</span></p>    		</div>
    		<div class="turn">
                              <a href="<?php echo U('Index/news_5');?>" class="prev" title="dunnu2017春季大片时尚发布——致敬艺术与时尚新生"></a>
                                             <a href="" class="next" title="张俪：总有一天你会活成自己想要的模样"></a>
                          </div>


       </div>
   </div>

    
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
</script>   <script src="/matai/Application/Home/View/default/Static/matai/static/web/js/maind7f1.js?v=v2" type="text/javascript" charset="utf-8"></script>   <script>
    $(function(){
     $(".news-nav").css("margin-left", - $(".news-nav").width() / 2)

 })
</script>	

</body>
</html>