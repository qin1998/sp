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
			<li><a href="4.html" >搭配推荐</a></li>
			<li><a href="<?php echo U('Index/new_1');?>" class='cur'>时尚营销</a></li>
			<li><a href="6.html" >品牌活动</a></li>
		</ul>
	</div>	
	<div class="inews f-cb por ovh h-t">
		<ul>
			<li >
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2016/12/24</p>
						<a href="info/190.html">
							<p class="t">dunnu2017春季大片时尚发布——致敬艺…</p>
							<p>=小编提示=dunnu敦奴2017春季新品即将发售，更多新动态，敬请关注dunnu敦奴官方服务号。</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/190.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2016/12/24/148254242826em2it.png" alt="dunnu2017春季大片时尚发布——致敬艺术与时尚新生" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2016/08/22</p>
						<a href="info/158.html">
							<p class="t">罗希:改变生活还不如改变自己</p>
							<p>今年除了奥运的另一件大事便是——G20峰会在杭州的举行，歌曲《最美杭州》依托举世瞩目的G20峰…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/158.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2016/08/22/147185005348v11iu.jpg" alt="罗希:改变生活还不如改变自己" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2016/07/29</p>
						<a href="info/154.html">
							<p class="t">张俪：总有一天你会活成自己想要的模…</p>
							<p>温柔的她是《北京青年》里的美波斯丁香；妖娆的她是《心花路放》里的大长腿思晴；性感的她是《男…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/154.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2016/07/29/146977620266j33pa.jpg" alt="张俪：总有一天你会活成自己想要的模样" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2016/07/09</p>
						<a href="info/149.html">
							<p class="t">2016 DUNNU敦奴秋冬广告大片随“…</p>
							<p>2016秋冬，时尚界亟待一缕新的光芒，带着时尚界溯光的渴盼，DUNNU为您寻找最纯净最本源的时…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/149.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2016/07/09/146804515042povgu.png" alt="2016 DUNNU敦奴秋冬广告大片随“光”穿梭于上海虹桥、浦东机场" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2016/07/02</p>
						<a href="info/145.html">
							<p class="t">朱一静览遍中外时尚，却衷情于她…</p>
							<p>《北京客》是北京电视台青少频道推出的一档最炫的中外文化交流栏目，节目遍邀中外时尚达人，营造…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/145.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2016/07/02/14674398539969q3g.jpg" alt="朱一静览遍中外时尚，却衷情于她…" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2016/05/28</p>
						<a href="info/138.html">
							<p class="t">DUNNU敦奴女装携手海清演绎《女…</p>
							<p>继蜗居之后、编剧六六作品再度震撼来袭海清联手杜淳演绎都市女性成长励志剧《女不强大天不容》5月…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/138.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2016/05/28/146440105889lrsz2.jpg" alt="DUNNU敦奴女装携手海清演绎《女不强大天不容》，即将热播…" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2016/05/06</p>
						<a href="info/133.html">
							<p class="t">杨乐：走过的路不会忘记，更好的自己…</p>
							<p>《Ｘ诊所》是星尚推出的一档致力于传递健康新知，解密健康未知数的健康益智节目。作为星尚当家花…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/133.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2016/05/06/146251719081cr598.jpg" alt="杨乐：走过的路不会忘记，更好的自己正在到来" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2016/03/05</p>
						<a href="info/124.html">
							<p class="t">尚语贤——从《老炮儿》走出来的“国…</p>
							<p>作为首部大银幕之作尚语贤就搭档管虎、冯小刚两位知名导演，参演电影《老炮儿》，并亮相威尼斯电…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/124.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2016/03/05/14571429502x59qb.jpg" alt="尚语贤——从《老炮儿》走出来的“国民学姐”" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2016/02/27</p>
						<a href="info/121.html">
							<p class="t">“太子妃”张天爱女神闯入男神圈，除…</p>
							<p>在这组照片里，张天爱身着敦奴2016年春季新款服装，时尚感十足，红色长裙，白色T恤搭配黑色半裙…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/121.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2016/02/27/145653591934mcrr6.jpg" alt="“太子妃”张天爱女神闯入男神圈，除了颜值还要靠衣品" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2016/02/22</p>
						<a href="info/120.html">
							<p class="t">时尚主播告诉你：如何穿出气质？</p>
							<p>春节的热闹还尚未褪去，节日里的喜悦气氛一直延续至今，而新一年的忙碌早已开始，近日，DUNN…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/120.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2016/02/22/145612154881p22pm.jpg" alt="时尚主播告诉你：如何穿出气质？" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2016/01/11</p>
						<a href="info/114.html">
							<p class="t">新锐女星袁晶全新时尚大片，演绎时尚…</p>
							<p>此次新锐女星袁晶身着DUNNU连衣裙拍摄时尚大片，镜头下现代感的几何图案，既有几分科幻感，…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/114.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2016/01/11/145247552159cf35x.jpg" alt="新锐女星袁晶全新时尚大片，演绎时尚清新魅力" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2015/09/17</p>
						<a href="info/71.html">
							<p class="t">为什么这些明星都爱穿DUNNU敦奴</p>
							<p>明星的穿着总是众人争相模仿的焦点，也是最能引领时尚潮流的，LOOK！这些明星都不约而同穿上…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/71.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/09/17/144245785443omyvv.jpg" alt="为什么这些明星都爱穿DUNNU敦奴" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2015/08/28</p>
						<a href="info/67.html">
							<p class="t">DUNNU x 马苏，活泼鲜明的真性情…</p>
							<p>她是《大唐歌飞》中玄宗皇帝宠爱的歌妃许合子，她是《北京青年》里重走青春的权筝姐，她是《新白…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/67.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/09/02/1441155347499t1yk.jpg" alt="DUNNU x 马苏，活泼鲜明的真性情！" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2015/07/24</p>
						<a href="info/58.html">
							<p class="t">7月《汽车风尚》明星徐囡楠如何展现几…</p>
							<p>7月，《汽车风尚》杂志迎来一位集气质与美貌于一身的时尚影视明星，她很会打扮自己，同时也可以驾…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/58.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/08/14390136401319u.jpg" alt="7月《汽车风尚》明星徐囡楠如何展现几何极致之美" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2015/07/18</p>
						<a href="info/56.html">
							<p class="t">看7月巨蟹座女星秦岚，身穿DUNNU…</p>
							<p>热情7月，看巨蟹座女星秦岚，如何演绎柔暖女人心？“柔柔的才最真实”，本期《瑞丽服饰美容》杂志…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/56.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/08/143901343079xykb6.jpg" alt="看7月巨蟹座女星秦岚，身穿DUNNU如何演绎柔暖女人心？" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2015/07/10</p>
						<a href="info/53.html">
							<p class="t">上海虹桥机场敦奴DUNNU秋冬广告…</p>
							<p>2015年7月，上海虹桥机场敦奴DUNNU品牌广告大片优雅焕新，在秋冬形象大片中，DUNNU以更…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/53.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/08/143901941576shw0l.jpg" alt="上海虹桥机场敦奴DUNNU秋冬广告大片优雅置换" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2015/06/05</p>
						<a href="info/45.html">
							<p class="t">超模穿DUNNU倾情演绎《时尚•C…</p>
							<p>近日，《时尚·COSMOPOLITAN》曝光六月时尚内页大片，由SMG新锐超模谢欣身穿DU…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/45.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/08/143901160043c1wjg.jpg" alt="超模穿DUNNU倾情演绎《时尚•COSMOPOLITAN》大片" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2015/05/29</p>
						<a href="info/44.html">
							<p class="t">主播朱一静穿DUNNU连身裙优雅亮…</p>
							<p>近日，北京电视台《北京客》时尚女主播朱一静以一身优雅的DUNNU敦奴连身裙亮相荧屏。柔和的…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/44.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/08/14390114592486xyj.jpg" alt="主播朱一静穿DUNNU连身裙优雅亮相荧屏" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2015/05/28</p>
						<a href="info/42.html">
							<p class="t">《超级访问》知名主播李静身着DUN…</p>
							<p>5月20日，重庆卫视综艺节目《超级访问.星星的故事》迎来了开心麻花喜剧大咖组沈腾、艾伦、杨沅翰…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/42.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/10/143918171341n55st.jpg" alt="《超级访问》知名主播李静身着DUNNU女装揭秘沈腾青涩过往" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2015/05/06</p>
						<a href="info/38.html">
							<p class="t">DUNNU携《健康到家》女主播刘然…</p>
							<p>《健康到家》是一档由BTV推出的大型全媒体健康帮助类节目，《健康到家》网络直播节目的开启是…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/38.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/10/1439181527739yity.jpg" alt="DUNNU携《健康到家》女主播刘然--解析优雅生活" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2015/02/12</p>
						<a href="info/20.html">
							<p class="t">DUNNU携手BTV时尚女主播王巍…</p>
							<p>临近年底，接二连三的宴席，没完没了的走亲访友，城市噪声的喧嚣，已使我们的内心世界无法保持宁…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/20.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/08/143900261704o6fbv.jpg" alt="DUNNU携手BTV时尚女主播王巍，为您解析健康密码" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2015/02/12</p>
						<a href="info/18.html">
							<p class="t">学时尚主持人傲然，“修养”健康明媚…</p>
							<p>“健康的体质、优雅的外在、活力的内心“，在DUNNU都会丽人看来，亦是一道美丽的修为。北京…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/18.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/08/14390022499y437n.jpg" alt="学时尚主持人傲然，“修养”健康明媚姿态" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2015/01/09</p>
						<a href="info/17.html">
							<p class="t">DUNNU携手《时尚芭莎》呈现冬季…</p>
							<p>DUNNU以时尚衣柜的独特视角，重新定义本季时尚新态度。DUNNU冬季画册《时尚衣柜必备清…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/17.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/08/143900199773ylyzg.jpg" alt="DUNNU携手《时尚芭莎》呈现冬季时尚衣柜" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2015/01/09</p>
						<a href="info/16.html">
							<p class="t">王子子穿DUNNU连身裙，时尚出镜…</p>
							<p>近日，知名女主持王子子，在主持北京电视台《北京客》中，以一身优雅的DUNNU连身裙亮相荧屏…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/16.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/08/143900181391zba4z.jpg" alt="王子子穿DUNNU连身裙，时尚出镜《北京客》" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2015/06/26</p>
						<a href="info/8.html">
							<p class="t">《超级访问》李静身着 DUNNU采访…</p>
							<p>　　【时尚】《超级访问》李静身着 DUNNU采访“国民老爸”高亚麟　　6月17日，重庆卫视综艺…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/8.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/07/28/1438020779141nhtyj.jpg" alt="《超级访问》李静身着 DUNNU采访“国民老爸”高亚麟" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li class="right">
				<div class="detail poa z2  ">
					<div class="in por">
						<p class="time">2015/05/18</p>
						<a href="info/9.html">
							<p class="t">陈数身着DUNNU女装做客OnlyLa…</p>
							<p>　艺人陈数身着DUNNU女装做客OnlyLady CoverStar　　父爱如山，母爱如水，母亲的爱总是…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fr por ovh">
					<a href="info/9.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/07/28/1438021212190601fw5.jpg" alt="陈数身着DUNNU女装做客OnlyLady CoverStar" width="100%" class="scale">
					</a>
				</div>
			</li>
			<li >
				<div class="detail poa z2  r">
					<div class="in por">
						<p class="time">2014/12/16</p>
						<a href="info/7.html">
							<p class="t">辣妈学院</p>
							<p>　　“曹贵人”陈思斯身着DUNNU女装优雅亮相深圳卫视《辣妈学院》　　近日，在热播剧《甄嬛…</p>
						</a>
					</div>
					<img src="/matai/Application/Home/View/default/Static/matai/static/web/img/sign03d7f1.png?v=v2" alt="" class="sign poa">
					<div class="arrow poa"></div>
				</div>
				<div class="img fl por ovh">
					<a href="info/7.html"><img src="/matai/Application/Home/View/default/Static/matai/upload/2015/08/14/143953227088u4aou.jpg" alt="辣妈学院" width="100%" class="scale">
					</a>
				</div>
			</li>
		</ul>
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


<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='/matai/Application/Home/View/default/Static/matai/api/js/share6e53.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

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
</script>	<div class="tips-scroll"><div class="in poa"></div></div>
<script src="/matai/Application/Home/View/default/Static/matai/web/js/maind7f1.js?v=v2" type="text/javascript" charset="utf-8"></script><script>
$(function(){
	$(".news-nav").css("margin-left", - $(".news-nav").width() / 2)
	// INDEX NEWS
	$(".inews li").hover(function(){
		var $detail = $(this).find(".detail"),
		$sign   = $(this).find("img.sign"),
		$img    = $(this).find(".img img");
		$sign.stop(false, false).transition({rotate: 180}, 600)
		$detail.addClass("hover")
		$img.addClass("hover")
	}, function(){
		var $detail = $(this).find(".detail"),
		$sign   = $(this).find("img.sign"),
		$img    = $(this).find(".img img");
		$sign.stop(false, false).transition({rotate: 360}, 600, function(){
			$sign.css({rotate: 0})
		})
		$detail.removeClass("hover")
		$img.removeClass("hover")
	})

	// WINDOW SCROLL
	$(".inews li:eq(0), .inews li:eq(1)").addClass("end")
	var n = Math.ceil($(window).height() / $(".inews li").height());
	NewsListF($(".inews li").eq(0),n * 2)
	
	$(window).scroll(function(){
		var _h = $(window).scrollTop();
		$(".inews li:even").each(function(){
			var _this = $(this);
			if(_h > _this.offset().top - $(".inews li").height() && _this.attr("class") != "end"){
				_this.addClass("end").stop().animate({
					left : 0,
					opacity : 1
				}, 800).next().addClass("end").stop().animate({
					right : 0,
					opacity : 1
				}, 800)
			}
		})
		if(_h >= $("body").height() - $(window).height() ){
			$(".tips-scroll").hide()	
		}
	})
})
function NewsListF(obj,n){
	if(obj.index() < n){
		obj.stop().animate({left : 0}, 800)
		obj.next().stop().animate({right : 0}, 800)
		setTimeout(function(){
			if(obj.next().next()){
				NewsListF(obj.next().next(),n)
			}
		}, 600)
	}
}
</script>

</body>
</html>