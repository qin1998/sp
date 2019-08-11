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
        
            <div id="subnav" class="subnav">
                <?php if(!empty($_extra_menu)): ?>
                    <?php echo extra_menu($_extra_menu,$__MENU__); endif; ?>
                <?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?><!-- 子导航 -->
                    <?php if(!empty($sub_menu)): if(!empty($key)): ?><h3><i class="icon icon-unfold"></i><?php echo ($key); ?></h3><?php endif; ?>
                        <ul class="side-sub-menu">
                            <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li>
                                    <a class="item" href="<?php echo (U($menu["url"])); ?>"><?php echo ($menu["title"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul><?php endif; ?>
                    <!-- /子导航 --><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        
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
            
            
    <div class="main-title">
        <h2><?php echo ($typename); ?></h2>
    </div>
    <form action="<?php echo U(Article/proedit);?>" method="post" class="form-horizontal">
        <div class="form-item">
            <label class="item-label">标题<span class="check-tips">（标题）</span></label>
            <div class="controls">
                <input type="text" class="text input-large" name="name" value="<?php echo ($data['name']); ?>">
            </div>
        </div>
        <div class="form-item">
            <label class="item-label">上级菜单<span class="check-tips">（所属的上级菜单）</span></label>
            <div class="controls">
                <select name="pid">
                    <option value="0">无</option>
                    <?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><option value="<?php echo ($category["id"]); ?>" <?php if($data['pid'] == $category['id']): ?>selected<?php endif; ?>><?php echo ($category["title_show"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="form-item">
            <label class="item-label">是否为英文<span class="check-tips"></span></label>
            <div class="controls">
                <label class="radio">
                    <input type="radio" value="0" name="is_english" <?php if($data['is_english'] == 0): ?>checked="checked"<?php endif; ?>>否
                </label>
                <label class="radio">
                    <input type="radio" value="1" name="is_english"  <?php if($data['is_english'] == 1): ?>checked="checked"<?php endif; ?> >是
                </label>
            </div>
        </div>
	    <div class="form-item">
            <label class="item-label">排序<span class="check-tips">（数字越小越靠前，最小最好设置为0，默认为0）</span></label>
            <div class="controls">
                <input type="text" class="text input-large" name="sort" value="<?php echo ((isset($data['sort']) && ($data['sort'] !== ""))?($data['sort']):0); ?>">
            </div>
        </div>
	    <div class="form-item">
            <label class="item-label">是否启用<span class="check-tips"></span></label>
            <div class="controls">
                <label class="radio">
                    <input type="radio" value="0" name="status" <?php if($data['status'] == 0): ?>checked="checked"<?php endif; ?>>禁用
                </label>
                <label class="radio">
                    <input type="radio" value="1" name="status"  <?php if($data['status'] == 1): ?>checked="checked"<?php endif; ?> >启用
                </label>
            </div>
        </div>
        <div class="form-item">
            <label class="item-label">描述<span class="check-tips">（产品分类简单描述）</span></label>
            <div class="controls">
                <input type="text" class="text input-large" name="description" value="<?php echo ($data['description']); ?>">
            </div>
        </div>
        <div class="form-item">
            <label class="item-label">分类图片</label>
            <div class="controls">
                <input type="file" id="upload_picture">
                <input type="hidden" name="cover_id" id="cover_id" value="<?php echo ($data['coverid']); ?>"/>
                <div class="upload-img-box">
                <?php if(!empty($data["coverid"])): ?><div class="upload-pre-item"><img src="<?php echo (get_cover($data["coverid"],'path')); ?>"/></div><?php endif; ?>
                </div>
                <script type="text/javascript" src="/matai/Public/static/uploadify/jquery.uploadify.min.js"></script>
                <script type="text/javascript">
                //上传图片
                /* 初始化上传插件 */
                $("#upload_picture").uploadify({
                    "height"          : 30,
                    "swf"             : "/matai/Public/static/uploadify/uploadify.swf",
                    "fileObjName"     : "download",
                    "buttonText"      : "上传图片",
                    "uploader"        : "<?php echo U('File/uploadPicture',array('session_id'=>session_id()));?>",
                    "width"           : 120,
                    'removeTimeout'      : 1,
                    'fileTypeExts'      : '*.jpg; *.png; *.gif;',
                    "onUploadSuccess" : uploadPicture<?php echo ($field["name"]); ?>,
                    'onFallback' : function() {
                        alert('未检测到兼容版本的Flash.');
                    }
                });
                function uploadPicture<?php echo ($field["name"]); ?>(file, data){
                    var data = $.parseJSON(data);
                    var src = '';
                    if(data.status){
                        $("#cover_id").val(data.id);
                        src = data.url || '/matai' + data.path
                        $("#cover_id").parent().find('.upload-img-box').html(
                            '<div class="upload-pre-item"><img src="' + src + '"/></div>'
                        );
                    } else {
                        swal({
                            type: "error",
                            title: "Oops...",
                            text: data.info,
                            timer: 2000
                        });
                        setTimeout(function(){
                            $(that).removeClass('disabled').prop('disabled',false);
                        },2000);
                    }
                }
                </script>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo ($data['id']); ?>" />
        <input type="hidden" name="type" value="<?php if($is_edit == 1): ?>edit<?php else: ?>add<?php endif; ?>" />
        <div class="form-item">
            <button class="btn submit-btn ajax-post" id="submit" type="submit" target-form="form-horizontal">确 定</button>
            <button class="btn btn-return" onclick="javascript:history.back(-1);return false;">返 回</button>
        </div>
    </form>

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
        //导航高亮
        highlight_subnav('<?php echo U('Article/productcategory');?>');
    </script>

</body>
</html>