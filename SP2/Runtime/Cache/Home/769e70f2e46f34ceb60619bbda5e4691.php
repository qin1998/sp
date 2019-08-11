<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
<title><?php echo ($meta_title); ?>盛邦官网</title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="author" content="">
<meta name="keywords" content="<?php echo ($keywords); ?>">
<meta name="description" content="<?php echo ($description); ?>">
<meta name="generator" content="ThinkPHP">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php echo C('WEB_SITE_TITLE');?>">
<meta name="format-detection" content="telephone=no,email=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="icon" type="image/png" href="/sp2/Application/Home/View/default/Static/caow/img/favicon.png">

<!-- Animated CSS -->


<link rel="stylesheet" href="/sp2/Application/Home/View/default/Static/caow/css/sp.css">
<link rel="stylesheet" href="/sp2/Application/Home/View/default/Static/caow/css/zzsc.css">
<link rel="stylesheet" href="/sp2/Application/Home/View/default/Static/caow/src/jquery.skidder.css">
<link rel="stylesheet" href="/sp2/Application/Home/View/default/Static/caow/css/caow.css">
<link rel="stylesheet" href="/sp2/Application/Home/View/default/Static/caow/css/caow1 (2).css">
<link rel="stylesheet" href="/sp2/Application/Home/View/default/Static/caow/css/caow1 (3).css">
<link rel="stylesheet" href="/sp2/Application/Home/View/default/Static/caow/css/caow1 (4).css">
<link rel="icon" href="/sp2/Application/Home/View/default/Static/caow/img/favicon-20190731074507423.ico">







<link rel="stylesheet" href="/sp2/Application/Home/View/default/Static/caow/css/mobile.css">
<!-- Theme CSS-->

<link rel="stylesheet" href="/sp2/Application/Home/View/default/Static/caow/src/jquery.skidder.css">
 <script src="/sp2/Application/Home/View/default/Static/caow/js/jquery-1.11.0.min.js"></script>
 <script src="/sp2/Application/Home/View/default/Static/caow/js/imagesloaded.js"></script>
 <script src="/sp2/Application/Home/View/default/Static/caow/js/smartresize.js"></script>
 <script src="/sp2/Application/Home/View/default/Static/caow/src/jquery.skidder.js"></script>

<!-- Favicon -->




 <!-- 载入文件，文件地址为从default文件夹开始，路径为Public/head.html -->
</head>
<body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
  <?php if(($langs) == "zh"): ?><div class="we wd1024 nav-header">
    <div class="demo2" style="font-size:0;"><img src="/sp2/Application/Home/View/default/Static/caow/img/top-logo.jpg"  alt=""></div>
    <div class="nav-bar">
        <div class="nav-menu"><a href="<?php echo U('index/index');?>">首页</a></div>
        <div class="nav-menu"><a href="<?php echo U('index/about');?>">关于我们</a></div>
        <div class="nav-menu"><a href="<?php echo U('index/products');?>">产品中心</a></div>
        <div class="nav-menu"><a href="<?php echo U('index/news_list');?>">新闻资讯</a></div>
        <div class="nav-menu"><a href="<?php echo U('index/connects');?>">联系我们</a></div>
        <div class="nav-menu"><a href="<?php echo U();?>?l=en-us">EN</a></div>
        <div class="nav-menu"><img src="/sp2/Application/Home/View/default/Static/caow\img\搜索.png"style="width:40px;vertical-align:middle;" alt=""></div> 
        <div style="clear:both;"></div>
        
    </div>
 
    <div class="m-btn fr">
        <span class="box nav-btn">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </span>
        <div class="m-btn-submenu">
            <ul>

              <li>

                <span class="col-box f-cb">

                  <span class="fl tit"><a href="<?php echo U('index/index');?>">首页</a></span>

                  <span class="fr point"></span>

                </span>

              </li>

              <li>

                <span class="col-box f-cb">

                  <span class="fl tit"><a href="<?php echo U('index/about');?>">关于我们</a></span>

                  <span class="fr point"></span>

                </span>

              </li>

              <li>

                <span class="col-box f-cb">

                  <span class="fl tit"><a href="<?php echo U('index/products');?>">产品中心</a></span>

                  <span class="fr point"></span>

                </span>

              </li>

              <li>

                <span class="col-box f-cb">

                  <span class="fl tit"><a href="<?php echo U('index/news_list');?>">新闻资讯</a></span>

                  <span class="fr point"></span>

                </span>

              </li>

              <li>

              </li>

                <li>

                <span class="col-box f-cb">

                  <span class="fl tit"><a href="<?php echo U('index/connects');?>">联系我们</a></span>

                  <span class="fr point"></span>

                </span>

              </li>
              

            </ul>
        </div>
    </div>
</div><?php endif; ?>

<?php if(($langs) == "en"): ?><div class="we wd1024 nav-header">
      <div class="demo2" style="font-size:0;"><img src="/sp2/Application/Home/View/default/Static/caow/img/top-logo.jpg"  alt=""></div>
      <div class="nav-bar">
          <div class="nav-menu"><a href="<?php echo U('index/index');?>">HOME</a></div>
          <div class="nav-menu"><a href="<?php echo U('index/about');?>">ABOUT US </a></div>
          <div class="nav-menu"><a href="<?php echo U('index/products');?>">PRODUCT</a></div>
          <div class="nav-menu"><a href="<?php echo U('index/news_list');?>">NEWS</a></div>
          <div class="nav-menu"><a href="<?php echo U('index/connects');?>">CONTACT US</a></div>
          <div class="nav-menu"><a href="<?php echo U();?>?l=zh-en">ZH</a></div>
          <div class="nav-menu"><img src="/sp2/Application/Home/View/default/Static/caow\img\搜索.png"style="width:40px;vertical-align:middle;" alt=""></div> 
          <div style="clear:both;"></div>
      </div>
   
      <div class="m-btn fr">
          <span class="box nav-btn">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
          </span>
          <div class="m-btn-submenu">
              <ul>
  
                <li>
  
                  <span class="col-box f-cb">
  
                    <span class="fl tit"><a href="<?php echo U('index/index');?>">HOME</a></span>
  
                    <span class="fr point"></span>
  
                  </span>
  
                </li>
  
                <li>
  
                  <span class="col-box f-cb">
  
                    <span class="fl tit"><a href="<?php echo U('index/about');?>">ABOUT US</a></span>
  
                    <span class="fr point"></span>
  
                  </span>
  
                </li>
  
                <li>
  
                  <span class="col-box f-cb">
  
                    <span class="fl tit"><a href="<?php echo U('index/products');?>">PRODUCT</a></span>
  
                    <span class="fr point"></span>
  
                  </span>
  
                </li>
  
                <li>
  
                  <span class="col-box f-cb">
  
                    <span class="fl tit"><a href="<?php echo U('index/news_list');?>">NEWS</a></span>
  
                    <span class="fr point"></span>
  
                  </span>
  
                </li>
  
                <li>
  
                </li>
  
                  <li>
  
                  <span class="col-box f-cb">
  
                    <span class="fl tit"><a href="<?php echo U('index/connects');?>">CONTACT US</a></span>
  
                    <span class="fr point"></span>
  
                  </span>
  
                </li>
  
              </ul>
          </div>
      </div>
  </div><?php endif; ?>



    
    <?php if(($langs) == "zh"): ?><div  class="slideshow" >
            <div class="slide"><img src="/sp2/Application/Home/View/default/Static/caow/img/236485298879146142.jpg"></div>
            <div class="slide"><img src="/sp2/Application/Home/View/default/Static/caow/img/158999172948270336.jpg"></div>
        </div>
        <?php echo ($langs); ?>
        <div class="kaif_F  wd1024">关于盛邦</div>
   <!-- 中间第二部分-->
   <div class="xinrun">
        <div class="Company_Profile ">
              <div class="Company">
                    <img src="/sp2/Application/Home/View/default/Static/caow/img/gydp.jpg" alt=""> 
                        <div class="text-clal">
                            <div class="jian_Ji">
                                公司创办于2008年，占地15000平方米，公司聚集高中级管理人员25<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;人在推行全面质量管理的基础上，按IS09001标准建;立了完整的文化质量体<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;系并通过认证，以此向用户提供可靠地质量保证。
                            </div>
                            </div>
                            <div class="text-cla2">
                            <div class="jian_Ji">
                                本公司以生产据铝机，钢材机为主，并拥有专业的模具开发人员及技<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;术人员，拥有车，铣，磨，电脉冲，数控车床，数控铣床，格式钻床和加工<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中心，拥有从主要配件到整机的一条龙自主生产能力，有效地控制产品质量<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;并降低了产品的成本，给客户性价比到位的产品，也拥有按照客户需求制造<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;产品能力。产品产销国内市场，出口多个国家和地区，欢迎各界朋友指导参<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;参观和业务洽谈！
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
              </div>
        </div>
  </div>

<!-- 第二部分 -->
<div class="ppp">
 <div class="syt_tr" style="background:url(/sp2/Application/Home/View/default/Static/caow/img/3.jpg) no-repeat;background-size:100%;background-color:#e4e4e4;"> 
    <div class="distance"></div>
        <div class="ku1">  
            <div class="jiui">
                <div class="image1">
                    <a href="<?php echo U('Index/product_detail', array('id' => '32807'));?>">
                    <div class="tutui-active">
                        <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                    </div>
                    <div class="Product-font">CB1201</div>
                    </a>
                </div>

                <div class="image1">
                    <a href="<?php echo U('Index/product_detail', array('id' => '32808'));?>">
                    <div class="tutui-active">
                        <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                    </div>
                    <div class="Product-font">CB1201</div>
                    </a>
                </div>

                <div class="image1">
                    <a href="<?php echo U('Index/product_detail', array('id' => '32810'));?>">
                    <div class="tutui-active">
                        <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                    </div>
                    <div class="Product-font">CB1201</div>
                    </a>
                </div>

                <div style="clear:both;"></div>
                        <div class="image1">
                            <a href="<?php echo U('Index/product_detail', array('id' => '32812'));?>">
                            <div class="tutui-active">
                                <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                            </div>
                            <div class="Product-font">CB1201</div>
                            </a>
                        </div>

                        <div class="image1">
                            <a href="<?php echo U('Index/product_detail', array('id' => '32813'));?>">
                            <div class="tutui-active">
                                <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                            </div>
                            <div class="Product-font">CB1201</div>
                            </a>
                        </div>

                        <div class="image1">
                            <a href="<?php echo U('Index/product_detail', array('id' => '32816'));?>">
                            <div class="tutui-active">
                                <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                            </div>
                            <div class="Product-font">CB1201</div>
                            </a>
                        </div>
                    <div style="clear:both;"></div>
                </div>
            </div> 
            </div> 
        </div>
        <a href="<?php echo U('index/products');?>"> <div class='kaif'>最新动态</div></a>
    </div>  <!-- </body>   -->
</div>

<!-- 第三块 -->

<div class="wujin wujin_WUJJ">
    <div class="wujin1">
        <div class="xiaode">
            <img src="/sp2/Application/Home/View/default/Static/caow/img/xw1.jpg" alt="">
            <a href="<?php echo U('index/news_list');?>">
            <div class="xiao_de">
                <div class="shij">五金工具行业全力开辟农村新市场</div>
                <div class="shi-j">在世界范围类，五金行业的消费于个性化，注重质量，价格合理等<br>
                更多选择，五金正从传统意义上的工具行业转向时尚行业。在今后<br>
                的发展中，五金工具产业还需要探寻新型出路比如打造乡村市场将<br>
                行业方向选择。五金工具开发极富潜力不失为一个明确的
            </div>
            <div class="button_two">点击查看</div>
            <div class="shi-J">2019-07-04</div>
        </div> 
        </a>
            <div style="clear:both;"></div> 
        </div>
    </div>
</div>



<div class="wujin">
        <div class="wujin1_W">
            <div class="xiaode">
                <img src="/sp2/Application/Home/View/default/Static/caow/img/xw2.jpg" alt="">
                <div class="xiao_DE">
                    <a href="<?php echo U('index/news_list');?>">
                    <div class="shij shij-bix">2019年我国电动车工具行业发展趋势分析</div>
                    <div class="shi-j">在世界范围类，五金行业的消费于个性化，注重质量，价格合理等<br>
                    更多选择，五金正从传统意义上的工具行业转向时尚行业。在今后<br>
                    的发展中，五金工具产业还需要探寻新型出路比如打造乡村市场将<br>
                    行业方向选择。五金工具开发极富潜力不失为一个明确的
                </div>
                <div class="button_two">点击查看</div>
                <div class="shi-J">2019-07-04</div>
                </a>
            </div> 
                <div style="clear:both;"></div> 
            </div>
        </div>
    </div>
    

<!-- 第四小部分 -->
<div class="More-boxes">
    <div class="More-boxes1">
            <a href="<?php echo U('index/news_list');?>" style="color:black;"><div class="More-boxes2">查看更多</div></a>
    </div>
</div><?php endif; ?>











<!-- 英文 -->
<?php if(($langs) == "en"): ?><div  class="slideshow" >
            <div class="slide"><img src="/sp2/Application/Home/View/default/Static/caow/img/236485298879146142.jpg"></div>
            <div class="slide"><img src="/sp2/Application/Home/View/default/Static/caow/img/158999172948270336.jpg"></div>
        </div>
        
        <div class="kaif_F  wd1024">ABOUT SNBON</div>
   <!-- 中间第二部分-->
   <div class="xinrun">
        <div class="Company_Profile ">
              <div class="Company">
                    <img src="/sp2/Application/Home/View/default/Static/caow/img/gydp.jpg" alt=""> 
                        <div class="text-clal">
                            <div class="jian_Ji">
                                    Yongkang Snbon Industry Trade Company Ltd 
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;located in China Hardware Capital, yongkang city,
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zhejiang province, China. is amanufacture special of miter 
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;saw and cut-off machine
                            </div>
                            </div>
                            <div class="text-cla2">
                            <div class="jian_Ji">
                                    So far the company area morn than 20, 000 square 
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;meter, with more than 300 employees are working, 20 of 
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;them working in senior management, 20 of them working 
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in professional technician departmentOn the basis of
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; high standards and high quality, the company 
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;constantly improved..
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
              </div>
        </div>
  </div>

<!-- 第二部分 -->
<div class="ppp">
 <div class="syt_tr" style="background:url(/sp2/Application/Home/View/default/Static/caow/img/3.jpg) no-repeat;background-size:100%;background-color:#e4e4e4;"> 
    <div class="distance"></div>
        <div class="ku1">  
            <div class="jiui">
                <div class="image1">
                    <a href="<?php echo U('Index/product_detail', array('id' => '32807'));?>">
                    <div class="tutui-active">
                        <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                    </div>
                    <div class="Product-font">CB1201</div>
                    </a>
                </div>

                <div class="image1">
                    <a href="<?php echo U('Index/product_detail', array('id' => '32808'));?>">
                    <div class="tutui-active">
                        <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                    </div>
                    <div class="Product-font">CB1201</div>
                    </a>
                </div>

                <div class="image1">
                    <a href="<?php echo U('Index/product_detail', array('id' => '32810'));?>">
                    <div class="tutui-active">
                        <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                    </div>
                    <div class="Product-font">CB1201</div>
                    </a>
                </div>

                <div style="clear:both;"></div>
                        <div class="image1">
                            <a href="<?php echo U('Index/product_detail', array('id' => '32812'));?>">
                            <div class="tutui-active">
                                <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                            </div>
                            <div class="Product-font">CB1201</div>
                            </a>
                        </div>

                        <div class="image1">
                            <a href="<?php echo U('Index/product_detail', array('id' => '32813'));?>">
                            <div class="tutui-active">
                                <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                            </div>
                            <div class="Product-font">CB1201</div>
                            </a>
                        </div>

                        <div class="image1">
                            <a href="<?php echo U('Index/product_detail', array('id' => '32816'));?>">
                            <div class="tutui-active">
                                <div class="tu1" ><img src="/sp2/Application/Home/View/default/Static/caow/img/cp.jpg" alt=""></div>
                            </div>
                            <div class="Product-font">CB1201</div>
                            </a>
                        </div>
                    <div style="clear:both;"></div>
                </div>
            </div> 
            </div> 
        </div>
        <a href="<?php echo U('index/products');?>"> <div class='kaif'>News information</div></a>
    </div>  <!-- </body>   -->
</div>

<!-- 第三块 -->

<div class="wujin wujin_WUJJ">
    <div class="wujin1_en">
        <div class="xiaode">
            <img src="/sp2/Application/Home/View/default/Static/caow/img/xw1.jpg" alt="">
            <a href="<?php echo U('index/news_list');?>">
            <div class="xiao_de-en">
                <div class="shij_en">Hardware Tool Industry Makes ...</div>
                <div class="shi-j-en">
                        In the world, the consumption of hardware industry is more individualized, focusing on quality, reasonable price and other choices. Hardware industry is changing from the traditional sense of tool industry to fashion industry.
                </div>
            <div class="button_two">Click View</div>
            <div class="shi-J">2019-07-04</div>
        </div> 
        </a>
            <div style="clear:both;"></div> 
        </div>
    </div>
</div>



<div class="wujin">
        <div class="wujin1_W">
            <div class="xiaode">
                <img src="/sp2/Application/Home/View/default/Static/caow/img/xw2.jpg" alt="">
                <div class="xiao_DE">
                    <a href="<?php echo U('index/news_list');?>">
                    <div class="shij shij-bix">Development Trend Analysis of ...</div>
                    <div class="shi-j-enn">t present, more than 85% of the electric tools used in the world are produced in China. Many parts and components of the electric tools produced abroad are also ...
                </div>
                <div class="button_two">Click View</div>
                <div class="shi-J">2019-07-04</div>
                </a>
            </div> 
                <div style="clear:both;"></div> 
            </div>
        </div>
    </div>
    

<!-- 第四小部分 -->
<div class="More-boxes">
    <div class="More-boxes1">
            <a href="<?php echo U('index/news_list');?>" style="color:black;"><div class="More-boxes2">Learn more</div></a>
    </div>
</div><?php endif; ?>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/imagesloaded.js"></script>
<script src="js/smartresize.js"></script>
<script src="src/jquery.skidder.js"></script>
<script type="text/javascript">
	$('.slideshow').each( function() {
		  var $slideshow = $(this);
		  $slideshow.imagesLoaded( function() {
			$slideshow.skidder({
			  slideClass    : '.slide',
			  animationType : 'css',
			  scaleSlides   : true,
			  maxWidth : 1600,
			  maxHeight: 650,
			  paging        : true,
			  autoPaging    : true,
			  pagingWrapper : ".skidder-pager",
			  pagingElement : ".skidder-pager-dot",
			  swiping       : true,
			  leftaligned   : false,
			  cycle         : true,
			  jumpback      : false,
			  speed         : 400,
			  autoplay      : false,
			  autoplayResume: false,
			  interval      : 4000,
			  transition    : "slide",
			  afterSliding  : function() {},
			  afterInit     : function() {}
			});
		  });
	});
	
	$(window).smartresize(function(){
		  $('.slideshow').skidder('resize');
	});
</script>

    
   <?php if(($langs) == "zh"): ?><!-- 底部 -->
   <div class="Last_block">
      <div class="laYt_block1"></div>
      <div class="Last_block1">
         <div class="sn_BON">
            <div class="sn_BON1"><img src="/sp2/Application/Home/View/default/Static/caow/img/logo.png" alt=""></div>
            <div class="sn_bon2">公司创办于2008年，专业生产据铝机，<br>
            钢材机为主，愿意优质产品和真诚的<br>
            服务与国内外客户精诚合作！
            </div>
         </div>

         <div class="Site_navigation">
            <div class="sn_bon4">网站导航</div>
            <div class="SN">
               <a href="<?php echo U('index/index');?>"><div class="sn_bon5">首页</div></a>
               <a href="<?php echo U('index/products');?>"><div class="sn_bon5">产品中心</div></a>
               <a href="<?php echo U('index/about');?>"><div class="sn_bon5">关于我们</div></a>
               <a href="<?php echo U('index/news_list');?>"><div class="sn_bon5">新闻资讯</div></a>
               <a href="<?php echo U('index/connects');?>"><div class="sn_bon5">联系我们</div></a>
            </div>
         </div> 

         <div class="Site_nAvigation">
            <div class="sn_bon6">客户服务热线</div>
            <div class="sn_bon7">+0086-579-87321018</div>
            <div class="SN">
               <div class="sn_bon8">其它联系方式</div>
               <div class="sn_bon9">邮箱：Sales01@snbon.com</div>
               <div class="sn_bon9">传真:+0086-579-87320575</div>
            </div>
         </div>
         <div class="QR_code">
            <div class="qr_code"></div>
         </div>
         <div style="clear:both;"></div> 
      </div>
   </div>

   <!-- 最后 -->
   <div class="Last_bottom">
      <div class="Last_bottom2"> </div>
         <div class="Last_bottom1"><samp style="color:white;">COPYRIGHT @ 永康市盛邦工贸有限公司ALL RIGHTS RESERVED</samp> <samp style="color:#f7a619;">技术支持:BDMA品牌营销联盟</samp></div>
   </div><?php endif; ?>






   <!-- 英文 -->

   <?php if(($langs) == "en"): ?><!-- 底部 -->
   <div class="Last_block_en">
      <div class="laYt_block1"></div>
      <div class="Last_block1">
         <div class="sn_BON">
            <div class="sn_BON1"><img src="/sp2/Application/Home/View/default/Static/caow/img/logo.png" alt=""></div>
            <div class="sn_bon2_en">
                  The Beauty of hi-tech<br> 
                  achievements in quality
            </div>
            <div class="sn_bonen_en">Wish to cooperate with customers<br>
                at home and abroad with high<br>
                 quality products and sincere<br>
                 service!</div>
         </div>

         <div class="Site_navigation_en">
            <div class="sn_bon4">Site navigation</div>
            <div class="SN">
               <a href="<?php echo U('index/index');?>"><div class="sn_bon5_en">Home</div></a>
               <a href="<?php echo U('index/products');?>"><div class="sn_bon5_en">Product Center</div></a>
               <a href="<?php echo U('index/about');?>"><div class="sn_bon5_en">About us</div></a>
               <a href="<?php echo U('index/news_list');?>"><div class="sn_bon5_en">News</div></a>
               <a href="<?php echo U('index/connects');?>"><div class="sn_bon5_en">Contact us</div></a>
            </div>
         </div> 

         <div class="Site_nAvigation">
            <div class="sn_bon6_en">hotline</div>
            <div class="sn_bon7_en">+0086-579-87321018</div>
            <div class="SN">
               <div class="sn_bon8_en">Contact information</div>
               <div class="sn_bon9_en">mailbox：Sales01@snbon.com</div>
               <div class="sn_bon9_en">fax:+0086-579-87320575</div>
            </div>
         </div>
         <div class="QR_code">
            <div class="qr_code"></div>
         </div>
         <div style="clear:both;"></div> 
      </div>
   </div>

   <!-- 最后 -->
   <div class="Last_bottom_en">
      <div class="Last_bottom2"> </div>
         <div class="Last_bottom1_en"><samp style="color:white;">COPYRIGHT Yongkang Shengbang Industry and Trade Co., Ltd.ALL RIGHTS RESERVED</samp> <samp style="color:#f7a619;">Technical support: BDMA 品牌营销联盟</samp></div>
   </div><?php endif; ?>


<script>
$(function(){
    $('.nav-btn').on('click', function(){
        console.log(123)
        $('.m-btn-submenu').toggle();
    })
})
</script>
 



</body>
</html>