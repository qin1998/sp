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
<link rel="icon" type="image/png" href="/sp/Application/Home/View/default/Static/caow/img/favicon.png">

<!-- Animated CSS -->


<link rel="stylesheet" href="/sp/Application/Home/View/default/Static/caow/css/sp.css">
<link rel="stylesheet" href="/sp/Application/Home/View/default/Static/caow/css/zzsc.css">
<link rel="stylesheet" href="/sp/Application/Home/View/default/Static/caow/src/jquery.skidder.css">
<link rel="stylesheet" href="/sp/Application/Home/View/default/Static/caow/css/caow.css">
<link rel="stylesheet" href="/sp/Application/Home/View/default/Static/caow/css/caow1 (2).css">
<link rel="stylesheet" href="/sp/Application/Home/View/default/Static/caow/css/caow1 (3).css">
<link rel="stylesheet" href="/sp/Application/Home/View/default/Static/caow/css/caow1 (4).css">
<link rel="icon" href="/sp/Application/Home/View/default/Static/caow/img/favicon-20190731074507423.ico">







<link rel="stylesheet" href="/sp/Application/Home/View/default/Static/caow/css/mobile.css">
<!-- Theme CSS-->

<link rel="stylesheet" href="/sp/Application/Home/View/default/Static/caow/src/jquery.skidder.css">
 <script src="/sp/Application/Home/View/default/Static/caow/js/jquery-1.11.0.min.js"></script>
 <script src="/sp/Application/Home/View/default/Static/caow/js/imagesloaded.js"></script>
 <script src="/sp/Application/Home/View/default/Static/caow/js/smartresize.js"></script>
 <script src="/sp/Application/Home/View/default/Static/caow/src/jquery.skidder.js"></script>

<!-- Favicon -->




 <!-- 载入文件，文件地址为从default文件夹开始，路径为Public/head.html -->
</head>
<body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
  <?php if(($langs) == "zh"): ?><div class="we wd1024 nav-header">
    <div class="demo2" style="font-size:0;"><img src="/sp/Application/Home/View/default/Static/caow/img/top-logo.jpg"  alt=""></div>
    <div class="nav-bar">
        <div class="nav-menu"><a href="<?php echo U('index/index');?>">首页</a></div>
        <div class="nav-menu"><a href="<?php echo U('index/about');?>">关于我们</a></div>
        <div class="nav-menu"><a href="<?php echo U('index/products');?>">产品中心</a></div>
        <div class="nav-menu"><a href="<?php echo U('index/news_list');?>">新闻资讯</a></div>
        <div class="nav-menu"><a href="<?php echo U('index/connects');?>">联系我们</a></div>
        <div class="nav-menu"><a href="<?php echo U();?>?l=en-us">EN</a></div>
        <div class="nav-menu"><img src="/sp/Application/Home/View/default/Static/caow\img\搜索.png"style="width:40px;vertical-align:middle;" alt=""></div> 
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
      <div class="demo2" style="font-size:0;"><img src="/sp/Application/Home/View/default/Static/caow/img/top-logo.jpg"  alt=""></div>
      <div class="nav-bar">
          <div class="nav-menu"><a href="<?php echo U('index/index');?>">HOME</a></div>
          <div class="nav-menu"><a href="<?php echo U('index/about');?>">ABOUT US </a></div>
          <div class="nav-menu"><a href="<?php echo U('index/products');?>">PRODUCT</a></div>
          <div class="nav-menu"><a href="<?php echo U('index/news_list');?>">NEWS</a></div>
          <div class="nav-menu"><a href="<?php echo U('index/connects');?>">CONTACT US</a></div>
          <div class="nav-menu"><a href="<?php echo U();?>?l=zh-en">ZH</a></div>
          <div class="nav-menu"><img src="/sp/Application/Home/View/default/Static/caow\img\搜索.png"style="width:40px;vertical-align:middle;" alt=""></div> 
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



    
            <div><img src="/sp/Application/Home/View/default/Static/caow\img\1.jpg" width="100%;"alt=""></div>
        <div class="ji"></div>

        <!-- 第三块 -->
<div class="prouduct_center">
    <div class="prounduct_one">NEWS</div>
    <div class="prounduct_two">NEWS AND INFORMATION</div>
</div>
<div class="da_K">
    <div class="waic">
        <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="News_style">
            <div class="zitk">
                <a href="<?php echo U('news_detail', ['id' => $vo['id']]);?>" style="display:block;margin:0;padding:0;">
                <?php if(($langs) == "zh"): ?><samp class="Font_part">&nbsp;&nbsp;<?php echo ($vo["title"]); ?></samp><samp class="font-part2">&nbsp;&nbsp;<?php echo ($vo["create_time"]); ?></samp>
                <div class="Worldwide"><?php echo ($vo["description"]); ?></div>
                <div class="New_type"><?php echo ($vo["description"]); ?></div><?php endif; ?>
                <?php if(($langs) == "en"): ?><samp class="Font_part">&nbsp;&nbsp;<?php echo ($vo["en_title"]); ?></samp><samp class="font-part2">&nbsp;&nbsp;<?php echo ($vo["create_time"]); ?></samp>
                <div class="Worldwide"><?php echo ($vo["en_description"]); ?></div>
                <div class="New_type"><?php echo ($vo["en_description"]); ?></div><?php endif; ?>

            </div>
        </a>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>    

    
   <?php if(($langs) == "zh"): ?><!-- 底部 -->
   <div class="Last_block">
      <div class="laYt_block1"></div>
      <div class="Last_block1">
         <div class="sn_BON">
            <div class="sn_BON1"><img src="/sp/Application/Home/View/default/Static/caow/img/logo.png" alt=""></div>
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
            <div class="sn_BON1"><img src="/sp/Application/Home/View/default/Static/caow/img/logo.png" alt=""></div>
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