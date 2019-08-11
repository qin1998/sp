<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
<title><?php echo ($meta_title); ?>｜<?php echo C('WEB_SITE_TITLE');?></title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="author" content="<?php echo C('WEB_SITE_TITLE');?>">
<meta name="keywords" content="<?php echo ($meta_keywords); ?>">
<meta name="description" content="<?php echo ($meta_description); ?>">
<meta name="generator" content="ThinkPHP">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php echo C('WEB_SITE_TITLE');?>">
<meta name="format-detection" content="telephone=no,email=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" type="image/x-icon" href="/zuoqi/Application/Home/View/default/Static/zuoqi/img/favicon.ico">

<!-- all css here -->
<!-- bootstrap v3.3.6 css -->
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/css/bootstrap.min.css">
<!-- animate css -->
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/css/animate.css">
<!-- pe-icon-7-stroke -->
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/css/pe-icon-7-stroke.min.css">
<!-- jquery-ui.min css -->
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/css/jquery-ui.min.css">
<!-- Image Zoom CSS
============================================ -->
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/css/img-zoom/jquery.simpleLens.css">
<!-- meanmenu css -->
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/css/meanmenu.min.css">
<!-- nivo slider CSS
============================================ -->
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/lib/css/nivo-slider.css" type="text/css" />
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/lib/css/preview.css" type="text/css" media="screen" />
<!-- owl.carousel css -->
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/css/owl.carousel.css">
<!-- font-awesome css -->
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/css/font-awesome.min.css">
<!-- style css -->
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/css/style.css">
<!-- responsive css -->
<link rel="stylesheet" href="/zuoqi/Application/Home/View/default/Static/zuoqi/css/responsive.css">
<!-- modernizr css -->
<script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/vendor/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->

 <!-- 载入文件，文件地址为从default文件夹开始，路径为Public/head.html -->
</head>
<body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
<header>
  <div class="header-bottom header-bottom-one" id="sticky-menu">
    <div class="container relative">
      <div class="row">
        <div class="col-sm-2 col-md-2 col-xs-4">
          <div class="logo">
            <a href="index.html"><img src="/zuoqi/Application/Home/View/default/Static/zuoqi/img/logo.png" alt="" /></a>
          </div>
        </div>
        <div class="col-sm-10 col-md-10 col-xs-8 static">
          <div class="all-manu-area">
              <div class="mainmenu clearfix hidden-sm hidden-xs">
                <nav>
                    <ul>
                        <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                        <li><a href="<?php echo U('Index/about_us');?>">关于佐崎</a></li>
                        <li><a href="<?php echo U('Index/pro_list');?>">产品中心</a>
                            <div class="magamenu ">
                                <ul class="again">
                                  <li class="single-menu colmd4"><a href="<?php echo U('Index/pro_list');?>">除草机械</a></li>
                                  <li class="single-menu colmd4"><a href="<?php echo U('Index/pro_list');?>">耕种机械</a></li>
                                  <li class="single-menu colmd4"><a href="<?php echo U('Index/pro_list');?>">收获机械</a></li>
                                  <li class="single-menu colmd4"><a href="<?php echo U('Index/pro_list');?>">茶园机械</a></li>
                                  <li class="single-menu colmd4"><a href="<?php echo U('Index/pro_list');?>">农业园林工具</a></li>
                                  <li class="single-menu colmd4"><a href="<?php echo U('Index/pro_list');?>">机械附属配件</a></li>
                                  <li class="single-menu colmd4"><a href="<?php echo U('Index/pro_list');?>">其他</a></li>
                                </ul>
                            </div>
                        </li>                     
                        <li><a href="<?php echo U('Index/news_list');?>">新闻中心</a></li>                             
                        <li><a href="<?php echo U('Index/contact_us');?>">联系我们</a></li>
                    </ul>
                </nav>
            </div>
            <!-- mobile menu start -->
            <div class="mobile-menu-area hidden-lg hidden-md">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                            <li><a href="<?php echo U('Index/pro_list');?>">产品中心</a>
                                <ul>
                                    <li><a href="<?php echo U('Index/pro_list');?>">除草机械</a></li>
                                    <li><a href="<?php echo U('Index/pro_list');?>">耕种机械</a></li>
                                    <li><a href="<?php echo U('Index/pro_list');?>">收获机械</a></li>
                                    <li><a href="<?php echo U('Index/pro_list');?>">茶园机械</a></li>
                                    <li><a href="<?php echo U('Index/pro_list');?>">农业园林工具</a></li>
                                    <li><a href="<?php echo U('Index/pro_list');?>">机械附属配件</a></li>
                                    <li><a href="<?php echo U('Index/pro_list');?>">其他</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo U('Index/news_list');?>">新闻中心</a></li>
                            <li><a href="<?php echo U('Index/about_us');?>">关于佐崎</a></li>
                            <li><a href="<?php echo U('Index/contact_us');?>">联系我们</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- mobile menu end -->
            <div class="right-header re-right-header">
                <ul>
                    <li class="re-icon tnm"><i class="fa fa-search" aria-hidden="true"></i>
                        <form method="get" id="searchform" action="#">
                            <input type="text" value="" name="s" id="ws" placeholder="搜索产品..." />
                            <button type="submit"><i class="pe-7s-search"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

    
    <section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">Shop</h2>
                        <p><a href="#">Home</a> | shop</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pages-title-end -->
    <!-- shop-style content section start -->
    <section class="pages products-page section-padding-top">
      <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3 col-sm-12">
                <div class="all-shop-sidebar">
                    <div class="top-shop-sidebar">
                        <h3 class="wg-title" style="color:#1b1b1b;font-weight: bold;">产品分类</h3>
                    </div>
                    <div class="shop-one" style="font-weight: 400;line-height: 30px;margin-top: 10px;">
                        <a href="<?php echo U('Index/pro_list');?>">除草机械</a>
                    </div>
                    
                    <div class="shop-one" style="font-weight: 400;line-height: 30px;margin-top: 10px;">
                        <a href="<?php echo U('Index/pro_list');?>">耕种机械</a>
                    </div>
                    
                    <div class="shop-one" style="font-weight: 400;line-height: 30px;margin-top: 10px;">
                        <a href="<?php echo U('Index/pro_list');?>">收获机械</a>
                    </div>
                    <div class="shop-one" style="font-weight: 400;line-height: 30px;margin-top: 10px;">
                        <a href="<?php echo U('Index/pro_list');?>">茶园机械</a>
                    </div>
                    <div class="shop-one" style="font-weight: 400;line-height: 30px;margin-top: 10px;">
                        <a href="<?php echo U('Index/pro_list');?>">农业园林工具</a>
                    </div>
                    <div class="shop-one" style="font-weight: 400;line-height: 30px;margin-top: 10px;">
                        <a href="<?php echo U('Index/pro_list');?>">机械附属配件</a>
                    </div>
                    <div class="shop-one" style="font-weight: 400;line-height: 30px;margin-top: 10px;">
                        <a href="<?php echo U('Index/pro_list');?>">其他</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="features-tab">
                          <!-- Nav tabs -->
                            
                          <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="row">
                                        <div class="shop-tab">
                                            <!-- single-product start -->
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <img src="/zuoqi/Application/Home/View/default/Static/zuoqi/img/products/1.jpg" alt="产品名称" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product end -->       
                                            <!-- single-product start -->
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <div class="single-product s-res s-non">
                                                    <div class="product-dsc">
                                                        <h4>产品名称</h4>
                                                        <br>                        
                                                        <p>型号</p><br>                   
                                                        <p>2400W超大功率电机</p><br>                  
                                                        <p>加厚加重底座，切割更稳固</p><br>                 
                                                        <p>切割速度快，切割角度精准</p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>


    <footer class="re-footer-section" style="padding-top: 90px;">
	<!-- footer-top area start -->
	<div class="footer-top section-padding-top" style="padding-bottom: 30px;">
		<div class="footer-dsc">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="single-text res-text">
							<div class="footer-title">
								<h4>联系我们</h4>
								<hr class="dubble-border"/>
							</div>
							<div class="footer-text">
								<ul>
									<li>
										<i class="pe-7s-map-marker" style="padding:0"></i>
										<p>浙江省金华市永康市石柱镇下里溪村下里溪工业基地科博尔大道7号</p>
									</li>
									<li>
										<i class="pe-7s-call" style="padding:0"></i>
										<p>+400-728-8918</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="single-text res-text">
							<div class="footer-title">
								<h4>关于我们</h4>
								<hr class="dubble-border"/>
							</div>
							<div class="footer-text">
								<ul>
									<li>
										<span style="float:left;color:#fff;font-size: 14px;font-weight: 300;    line-height: 22px;width: 70px;">旺铺主页:</span>
										<p>https://ykzuoqi.1688.com</p>
									</li>
									<li>
										<span style="float:left;color:#fff;font-size: 14px;font-weight: 300;    line-height: 22px;width: 70px;">电子邮箱:</span>
										<p>info@domainname.com</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- <div class="col-xs-12 col-sm-4 col-md-4">
						<div class="single-text res-text">
							<div class="footer-title">
								<h4>联系我们</h4>
								<hr class="dubble-border"/>
							</div>
							<div class="footer-text">
								<ul>
									<li>
										<i class="pe-7s-map-marker" style="padding:0"></i>
										<p>浙江省金华市永康市科博尔大道7</p>
									</li>
									<li>
										<i class="pe-7s-call" style="padding:0"></i>
										<p>400-728-8918</p>
									</li>
									<li>
										<i class="pe-7s-mail-open" style="padding:0"></i>
										<p>info@domainname.com</p>
									</li>
								</ul>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<!-- <hr class="dubble-border"/> -->
		</div>

	</div>
	<!-- footer-top area end -->
	<!-- footer-bottom area start -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="left floatleft">
						<p>© 2016-2017 永康市石柱佐崎园林工具厂</p>
					</div>
					<div class="right mayment-card floatright">
						<p>浙ICP备12024610号</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer-bottom area end -->
</footer>

  <!-- jquery latest version -->
        <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
        <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/bootstrap.min.js"></script>
        <!-- parallax js -->
        <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/parallax.min.js"></script>
    <!-- owl.carousel js -->
        <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/owl.carousel.min.js"></script>
        <!-- Img Zoom js -->
    <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/img-zoom/jquery.simpleLens.min.js"></script>
    <!-- meanmenu js -->
        <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/jquery.meanmenu.js"></script>
    <!-- jquery.countdown js -->
        <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/jquery.countdown.min.js"></script>
    <!-- Nivo slider js
    ============================================ -->    
    <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/lib/home.js" type="text/javascript"></script>
    <!-- jquery-ui js -->
        <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/jquery-ui.min.js"></script>
    <!-- sticky js -->
        <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/sticky.js"></script>
    <!-- plugins js -->
        <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/plugins.js"></script>
    <!-- main js -->
        <script src="/zuoqi/Application/Home/View/default/Static/zuoqi/js/main.js"></script>

</body>
</html>