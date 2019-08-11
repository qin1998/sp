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

<link rel="stylesheet" href="/hanchuan/Application/Home/View/default/Static/hanchuan/css/global.css" type="text/css">
<link rel="stylesheet" href="/hanchuan/Application/Home/View/default/Static/hanchuan/css/layout.css" type="text/css">
<link rel="stylesheet" href="/hanchuan/Application/Home/View/default/Static/hanchuan/css/page.css" type="text/css">
<link rel="stylesheet" href="/hanchuan/Application/Home/View/default/Static/hanchuan/css/style.css" type="text/css">
<script type="text/javascript" src="/hanchuan/Application/Home/View/default/Static/hanchuan/js/jQuery.js"></script>
<script type="text/javascript" src="/hanchuan/Application/Home/View/default/Static/hanchuan/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/hanchuan/Application/Home/View/default/Static/hanchuan/js/comon.js"></script>
<!--[if IE 6]>
	<script src="/js/IE6PNG.js"></script>
	<script type="text/javascript">
		IE6PNG.fix('.PNG');
	</script>
<![endif]-->
<link rel="stylesheet" href="/hanchuan/Application/Home/View/default/Static/hanchuan/css/index.css" type="text/css">

<link rel="apple-touch-icon" sizes="57x57" href="/hanchuan/Public/static/fac/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/hanchuan/Public/static/fac/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/hanchuan/Public/static/fac/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/hanchuan/Public/static/fac/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/hanchuan/Public/static/fac/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/hanchuan/Public/static/fac/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/hanchuan/Public/static/fac/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/hanchuan/Public/static/fac/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/hanchuan/Public/static/fac/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/hanchuan/Public/static/fac/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/hanchuan/Public/static/fac/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/hanchuan/Public/static/fac/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/hanchuan/Public/static/fac/favicon-16x16.png">
<link rel="manifest" href="/hanchuan/Public/static/fac/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/hanchuan/Public/static/fac/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<link href="/hanchuan/Application/Home/View/default/Static/hanchuan/css/css.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]><script type="text/javascript" src="/hanchuan/Public/static/jquery/jquery-1.11.1.min.js" charset="utf-8"></script><![endif]-->
<!--[if gte IE 9]><!--><script type="text/javascript" src="/hanchuan/Public/static/jquery/jquery-2.1.1.min.js" charset="utf-8"></script><!--<![endif]-->
<script type="text/javascript" src="/hanchuan/Public/static/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
<script type="text/javascript" src="/hanchuan/Public/static/jquery.bootstrap.autohidingnavbar.js"></script>

<?php echo hook('pageHeader');?>

</head>
<body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
<div class="t_dh7">
  <table width="1020" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="108" align="right" valign="bottom"><a href="index-3.html">简体中文</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="html-e/about-53.html">English</a></td>
  </tr>
</table>

</div>
   <div class="head_bg">
  <div class="head">

<div class="menu_bg">
  <div class="menu_1002">
    <div class="menu">

<UL class="topmenu">             
    <a href="<?php echo U('Index/index');?>"><li class="topmenu_a1 index">首页</li></a>
    <li id="menu_line"></li>
    <a href="<?php echo U('Index/about_us');?>"><li class="topmenu_a1 about_us">关于我们</li></a>
    <li id="menu_line"></li>
    <a href="<?php echo U('Index/news_list');?>"><li class="topmenu_a2 news_list">新闻资讯</li></a>
    <li id="menu_line"></li>
    <a href="<?php echo U('Index/pro_list');?>"><li  class="topmenu_a3 pro_list">产品中心</li></a>
    <li id="menu_line"></li>
    <a href="<?php echo U('Index/feed_back');?>"><li class="topmenu_a4 feed_back">留言反馈</li></a>
    <li id="menu_line"></li>
    <a href="<?php echo U('Index/contact_us');?>"><li class="topmenu_a5 contact_us">联系我们</li></a>
    <li id="menu_line"></li>
    <a href="<?php echo U('Index/job');?>"><li class="topmenu_a6 job">人力资源</li></a>
    </UL></div> 
 
    </div>                                                                                                        
    </div>
  </div>
</div>

    
<div class="t_dh8"></div>
<div class="main">
  
    <div class="m_left">
   <div class="l_t">关于我们 / About Us</div>
  <div class="l_class">
        
   <div class="Pro_class_D"><a href="../html/about-53.html">关于我们</a></div>

      
   <div class="Pro_class_D"><a href="../html/about-136.html">企业文化</a></div>

  
     <div class="Pro_class_D"><a href="../html/pic-76-1.html">荣誉资质</a></div>
     
      <!--<div class="Pro_class_D"><a href="../html/pic-80-1.html">设施设备</a></div><div class="Pro_class_D"><a href="../html/pic-79-1.html">企业风采</a></div> 
  <div class="Pro_class_D"><a href="../html-E/pic-76-1.html">Corporate style</a></div>  <div class="Pro_class_D"><a href="../html-E/pic-75-1.html">Factory View Tour</a></div>
           -->

</div>
  </div>
    <!--  <div class="r_t1">当前位置:<a href="../index.html" class="">首页</a> > </div>
   -->
    <!---->
   <div class="m_right">
  <div class="r_t">当前位置:<a href="../index.html">首页</a> &gt; 留言反馈</div>
   <div class="r_content">
<div class="r_contentx">
    <script language="javascript">
<!--
function checkform(){
  if(document.gb.subject.value==""){
      alert("请输入留言主题!");
      gb.subject.focus();
      return false;
  }
  
  if(document.gb.g_name.value==""){
      alert("请输入您的姓名!");
      gb.g_name.focus();
      return false;   
  }   
  
  if (document.gb.content.value==""){
      alert("请输入留言内容!");
      gb.content.focus();
      return false;
      }
  else
      return true;
}

-->
</script>
<div style="text-align:left">
  <div align="left">
      <br>
    
    欢迎您提出宝贵的建议和意见！我们会用心倾听并持续改进产品，把更好的体验带给您！<br>
    
  </div>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
<tbody><tr>
  <td><table border="0" cellpadding="2" cellspacing="1">
    <form name="gb" onsubmit="return checkform();" action="../guestbook/add_msg.asp" method="post"></form>
    
    <tbody><tr>
      <td width="75" align="right" height="25" style="text-align:right"><font color="#FF0000">*</font>标题：</td>
      <td colspan="2"><input class="input_k" maxlength="50" size="35" name="subject">  
      <input type="hidden" name="act" value="act">
      <input type="hidden" name="act2" value="g">     </td>
    </tr>
    <tr>
      <td align="right" height="25" style="text-align:right"><font color="#FF0000">*</font>姓名：</td>
      <td colspan="2"><input class="input_k" maxlength="20" size="35" name="g_name" value="">                                                              </td>
    </tr>
    <tr>
      <td align="right" height="25" style="text-align:right">公司：</td>
      <td colspan="2"><input class="input_k" maxlength="70" size="35" name="companyname" value="">                                                              </td>
    </tr>
    <tr>
      <td align="right" height="25" style="text-align:right">Email：</td>
      <td colspan="2"><input class="input_k" maxlength="120" size="35" name="mail" value="">                                                              </td>
    </tr>
    <tr>
      <td align="right" height="25" style="text-align:right">电话：</td>
      <td colspan="2"><input class="input_k" maxlength="120" size="35" name="homepageurl" value="">                                                              </td>
    </tr>
    <tr>
      <td align="right" valign="top" height="25" style="text-align:right"><br>
        <font color="#FF0000">*</font>内容：</td>
      <td colspan="2" align="left"><textarea style="font-family:Arial, Helvetica, sans-serif" name="content" rows="8" cols="65" class="input_k2"></textarea>                                                              </td>
    </tr>
    <tr>
      <td align="right" height="25" style="text-align:right"><font color="#FF0000">*</font>验证码：</td>
      <td width="122" height="25"><input name="yzm" type="text" id="yzm" class="input_k"></td>
      <td width="550"><table width="60" height="20" border="0" align="left" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td style="background-color:#FFFFFF"><script language="javascript">
                var D=new Date();
                var hh=D.getHours();
                var mm=D.getMinutes();
                var ss=D.getSeconds();
document.write("<img src=../guestbook/include/newcode.asp?time=" + hh + ":" + mm + ":" + ss + " width=70 height=12>");
</script><img src="../guestbook/include/newcode.asp?time=15:31:57" width="70" height="12"></td>
      </tr>
      </tbody></table></td>
    </tr>
    <tr>
      <td align="left" height="38">&nbsp;</td>
      <td height="38" colspan="2" align="left"><input type="submit" value="提交" name="sub" style=" padding:5px">
            <input type="reset" value="取消" name="res" style=" padding:5px"></td>
      </tr>
    
  </tbody></table></td>
</tr>
<tr>
  <td height="10"></td>
</tr>
</tbody></table>
   
   </div></div></div>
</div>

    <div class="foot">
  <table border="0" align="center" cellpadding="0" cellspacing="0">
    
     <tr>
      <td align="center" valign="middle" class="wz1"><img src="/hanchuan/Application/Home/View/default/Static/hanchuan/images/1_26.jpg" width="248" height="159" alt="" /></td>
      <td width="872" align="left" valign="top" background="/hanchuan/Application/Home/View/default/Static/hanchuan/images/1_27.jpg" class="wz1"><br />
<a href="<?php echo U('Index/index');?>">返回首页</a> / <a href="<?php echo U('Index/about_us');?>">关于我们</a> / <a href="<?php echo U('Index/news_list');?>">新闻资讯</a> / <a href="<?php echo U('Index/pro_list');?>">产品中心</a> / <a href="<?php echo U('Index/feed_back');?>">留言反馈</a> / <a href="<?php echo U('Index/contact_us');?>">联系我们</a><br />
<p align="left"><font style="FONT-FAMILY: Arial">版权所有 @ 浙江韩川工贸有限公司&nbsp; &nbsp;地址:武义县茭道镇杨家工业区&nbsp;&nbsp;&nbsp;浙ICP备<a href="http://www.miibeian.gov.cn/" target="_blank">14027401号-1</a>&nbsp; &nbsp;&nbsp;</font></p>&nbsp;&nbsp;&nbsp;&nbsp;
策划设计:<a href="#" target="_blank" class="">复新科技</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" target="_blank" class="">后台管理</a></td>
    </tr>

  </table>
</div>
<script type="text/javascript" src="/hanchuan/Application/Home/View/default/Static/hanchuan/js/i_ban.js"></script>
<script type="text/javascript" src="/hanchuan/Application/Home/View/default/Static/hanchuan/js/jquery.imgScroll.js"></script>
<script type="text/javascript">
	$(function(){
		var action = '<?php echo (ACTION_NAME); ?>'.toLowerCase();
		if (action == 'pro_detail') {
			action = 'pro_list';
		}
		$('.head_bg .topmenu li').removeClass('active');
		console.log(action);
		$('.'+action).addClass('active');
	})
</script>
</body>
</html>