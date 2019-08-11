<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($meta_title); ?>｜<?php echo C('WEB_SITE_TITLE');?>后台管理系统</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo (get_cover(C("WEB_SITE_FAVICON"),'path')); ?>">
    <link rel="stylesheet" type="text/css" href="/matai/Public/Admin/css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="/matai/Public/Admin/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="/matai/Public/Admin/css/module.css">
    <link rel="stylesheet" type="text/css" href="/matai/Public/Admin/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="/matai/Public/Admin/css/theme/<?php echo (C("COLOR_STYLE")); ?>.css" media="all">
    <link rel="stylesheet" href="/matai/Public/static/sweetalert/sweet-alert.min.css">
     <!--[if lt IE 9]>
    <script type="text/javascript" src="/matai/Public/static/jquery/jquery-1.11.1.min.js charset="utf-8""></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/matai/Public/static/jquery/jquery-2.1.1.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="/matai/Public/static/sweetalert/sweet-alert.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="/matai/Public/static/jquery.mousewheel.js" charset="utf-8"></script>
    <!--<![endif]-->
    
    <style>
        body{padding: 0}
    </style>

</head>
<body>
    <!-- 头部 -->
    <div class="header">
        <!-- Logo -->
        <a href="/matai/" target="_blank">
            <div class="logo"><?php echo C('WEB_SITE_TITLE');?></div>
        </a>
        <!-- /Logo -->
        <!-- 主导航 -->
        <ul class="main-nav">
            <?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php echo ((isset($menu["class"]) && ($menu["class"] !== ""))?($menu["class"]):''); ?>"><a href="<?php echo (U($menu["url"])); ?>"><?php echo ($menu["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- /主导航 -->
        <!-- 用户栏 -->
        <div class="user-bar">
            <a href="javascript:;" class="user-entrance"><i class="icon-user"></i></a>
            <ul class="nav-list user-menu hidden">
                <li class="manager">你好，<em title="<?php echo session('user_auth.username');?>"><?php echo session('user_auth.username');?></em></li>
                <li><a href="<?php echo U('User/updatepassword');?>">修改密码</a></li>
                <li><a href="<?php echo U('User/updatenickname');?>">修改昵称</a></li>
                <li><a href="<?php echo U('Admin/Update/rmdirr');?>" class="ajax-get">清除缓存</a></li>
                <li><a href="<?php echo U('Public/logout');?>" class="ajax-get">退出登录</a></li>
            </ul>
        </div>
    </div>
    <!-- /头部 -->
    <!-- 边栏 -->
    <div class="sidebar">
        <!-- 子导航 -->
        
        <!-- /子导航 -->
    </div>
    <!-- /边栏 -->
    <!-- 内容区 -->
    <div id="main-content">
        <div id="main" class="main">
            
                <!-- nav -->
                <?php if(!empty($_show_nav)): ?><div class="breadcrumb">
                        <span>您的位置:</span>
                        <?php $i = '1'; ?>
                        <?php if(is_array($_nav)): foreach($_nav as $k=>$v): if($i == count($_nav)): ?><span><?php echo ($v); ?></span>
                            <?php else: ?>
                            <span><a href="<?php echo ($k); ?>"><?php echo ($v); ?></a>&gt;</span><?php endif; ?>
                            <?php $i = $i+1; endforeach; endif; ?>
                    </div><?php endif; ?>
                <!-- nav -->
            
            
    <!-- 主体 -->
    <div id="indexMain" class="index-main">
       <!-- 插件块 -->
       <div class="container-span"><?php echo hook('adminIndex');?></div>
    </div>

        </div>
        <div class="cont-ft">
            <div class="copyright">
                <div class="fl">
                    <p>
                        <span><?php echo C('WEB_SITE_COPYRIGHT');?></span>
                        <span style="margin-left:15px;color: #999;font-size: 12px;"><?php echo C('WEB_SITE_ICP');?></span>
                    </p>
                </div>
                <div class="fr">V<?php echo (CORETHINK_VERSION); ?></div>
            </div>
        </div>
    </div>
    <!-- /内容区 -->
    <script type="text/javascript">
    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "/matai", //当前网站地址
            "APP"    : "/matai/index.php?s=", //当前项目地址
            "PUBLIC" : "/matai/Public", //项目公共目录地址
            "DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
            "MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
        }
    })();
    </script>
    <script type="text/javascript" src="/matai/Public/static/think.js"></script>
    <script type="text/javascript" src="/matai/Public/Admin/js/common.js"></script>
    <script type="text/javascript">
        +function(){
            var $window = $(window), $subnav = $("#subnav"), url;
            $window.resize(function(){
                $("#main").css("min-height", $window.height() - 130);
            }).resize();

            /* 左边菜单高亮 */
            url = window.location.pathname + window.location.search;
            url = url.replace(/(\/(p)\/\d+)|(&p=\d+)|(\/(id)\/\d+)|(&id=\d+)|(\/(group)\/\d+)|(&group=\d+)/, "");
            $subnav.find("a[href='" + url + "']").parent().addClass("current");

            /* 左边菜单显示收起 */
            $("#subnav").on("click", "h3", function(){
                var $this = $(this);
                $this.find(".icon").toggleClass("icon-fold");
                $this.next().slideToggle("fast").siblings(".side-sub-menu:visible").
                      prev("h3").find("i").addClass("icon-fold").end().end().hide();
            });

            $("#subnav h3 a").click(function(e){e.stopPropagation()});

            /* 头部管理员菜单 */
            $(".user-bar").mouseenter(function(){
                var userMenu = $(this).children(".user-menu ");
                userMenu.removeClass("hidden");
                clearTimeout(userMenu.data("timeout"));
            }).mouseleave(function(){
                var userMenu = $(this).children(".user-menu");
                userMenu.data("timeout") && clearTimeout(userMenu.data("timeout"));
                userMenu.data("timeout", setTimeout(function(){userMenu.addClass("hidden")}, 100));
            });

            /* 表单获取焦点变色 */
            $("form").on("focus", "input", function(){
                $(this).addClass('focus');
            }).on("blur","input",function(){
                        $(this).removeClass('focus');
                    });
            $("form").on("focus", "textarea", function(){
                $(this).closest('label').addClass('focus');
            }).on("blur","textarea",function(){
                $(this).closest('label').removeClass('focus');
            });

            // 导航栏超出窗口高度后的模拟滚动条
            var sHeight = $(".sidebar").height();
            var subHeight  = $(".subnav").height();
            var diff = subHeight - sHeight; //250
            var sub = $(".subnav");
            if(diff > 0){
                $(window).mousewheel(function(event, delta){
                    if(delta>0){
                        if(parseInt(sub.css('marginTop'))>-10){
                            sub.css('marginTop','0px');
                        }else{
                            sub.css('marginTop','+='+10);
                        }
                    }else{
                        if(parseInt(sub.css('marginTop'))<'-'+(diff-10)){
                            sub.css('marginTop','-'+(diff-10));
                        }else{
                            sub.css('marginTop','-='+10);
                        }
                    }
                });
            }
        }();
    </script>
    
    <script type="text/javascript">
        /* 插件块关闭操作 */
        $(".title-opt .wm-slide").each(function(){
            $(this).click(function(){
                $(this).closest(".columns-mod").find(".bd").toggle();
                $(this).find("i").toggleClass("mod-up");
            });
        })
        $(function(){
            $('.sidebar').remove();
            $('.copyright .fl').removeClass('fl');
            $('.copyright .fr').remove();
        })
    </script>

</body>
</html>