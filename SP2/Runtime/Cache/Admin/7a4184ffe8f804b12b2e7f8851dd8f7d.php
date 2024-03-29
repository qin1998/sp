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
            
            
    <!-- 标题 -->
    <div class="main-title">
        <div class="category fl">
            <select class="form-control" name="category_id" onchange="location.replace(this.options[this.selectedIndex].value)">
                <option>
                    <?php if(!empty($rightNav)): if(is_array($rightNav)): $i = 0; $__LIST__ = $rightNav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><a href="<?php echo U('index','cate_id='.$nav['id']);?>"><?php echo ($nav["title"]); ?></a>
                            <?php if(count($rightNav) > $i): ?><span>> </span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    <?php else: ?>
                        <?php if(empty($position)): ?>所有文档<?php else: ?><a href="<?php echo U('article/index');?>">所有文档</a><?php endif; endif; ?>
                </option>
                <?php if(is_array($category_tree)): $i = 0; $__LIST__ = $category_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><option value="<?php echo U('Admin/article/index/cate_id/'.$cate['id']);?>"><?php echo ($cate["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            <select>
        </div>
        <h2>
            文档列表(<?php echo ($_total); ?>)
            <?php if(empty($rightNav)): ?>[<?php if(is_array(C("DOCUMENT_POSITION"))): foreach(C("DOCUMENT_POSITION") as $key=>$vo): if(($position) != $key): ?><a href="<?php echo U('index',array('position'=>$key));?>"><?php echo ($vo); ?></a><?php else: echo ($vo); endif; ?>&nbsp;<?php endforeach; endif; ?>]<?php endif; ?>
            <?php if(($allow) == "0"): ?>（该分类不允许发布内容）<?php endif; ?>
            <?php if(count($model) > 1): ?>[ 模型：<?php if(empty($model_id)): ?><strong>全部</strong><?php else: ?><a href="<?php echo U('index',array('pid'=>$pid,'cate_id'=>$cate_id));?>">全部</a><?php endif; ?>
                <?php if(is_array($model)): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($model_id) != $vo): ?><a href="<?php echo U('index',array('pid'=>$pid,'cate_id'=>$cate_id,'model_id'=>$vo));?>"><?php echo (get_document_model($vo,'title')); ?></a><?php else: ?><strong><?php echo (get_document_model($vo,'title')); ?></strong><?php endif; ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
            ]<?php endif; ?>
            <?php if(!empty($groups)): ?>[ 分组：<?php if(empty($group_id)): ?><strong>全部</strong><?php else: ?><a href="<?php echo U('index',array('pid'=>$pid,'cate_id'=>$cate_id));?>">全部</a><?php endif; ?>
                <?php if(is_array($groups)): foreach($groups as $key=>$vo): if(($group_id) != $key): ?><a href="<?php echo U('index',array('pid'=>$pid,'cate_id'=>$cate_id,'model_id'=>$model_id,'group_id'=>$key));?>"><?php echo ($vo); ?></a><?php else: ?><strong><?php echo ($vo); ?></strong><?php endif; ?>&nbsp;<?php endforeach; endif; ?>
            ]<?php endif; ?>
        </h2>
    </div>
    <!-- 按钮工具栏 -->
    <div class="cf">
        <div class="fl">
            <div class="btn-group">
                <?php if(($allow) > "0"): ?><button class="btn document_add" <?php if(count($model) == 1): ?>url="<?php echo U('article/add',array('cate_id'=>$cate_id,'pid'=>I('pid',0),'model_id'=>$model[0],'group_id'=>$group_id));?>"<?php endif; ?>>新 增
                        <?php if(count($model) > 1): ?><i class="btn-arrowdown"></i><?php endif; ?>
                    </button>
                    <?php if(count($model) > 1): ?><ul class="dropdown nav-list">
                        <?php if(is_array($model)): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('article/add',array('cate_id'=>$cate_id,'model_id'=>$vo,'pid'=>I('pid',0),'group_id'=>$group_id));?>"><?php echo (get_document_model($vo,'title')); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul><?php endif; ?>
                <?php else: ?>
                    <button class="btn disabled" >新 增
                        <?php if(count($model) > 1): ?><i class="btn-arrowdown"></i><?php endif; ?>
                    </button><?php endif; ?>
            </div>
            <button class="btn ajax-post" target-form="ids" url="<?php echo U("Article/setStatus",array("status"=>1));?>">启 用</button>
            <button class="btn ajax-post" target-form="ids" url="<?php echo U("Article/setStatus",array("status"=>0));?>">禁 用</button>
            <button class="btn ajax-post" target-form="ids" url="<?php echo U("Article/move");?>">移 动</button>
            <button class="btn ajax-post" target-form="ids" url="<?php echo U("Article/copy");?>">复 制</button>
            <button class="btn ajax-post" target-form="ids" hide-data="true" url="<?php echo U("Article/paste");?>">粘 贴</button>
            <input type="hidden" class="hide-data" name="cate_id" value="<?php echo ($cate_id); ?>"/>
            <input type="hidden" class="hide-data" name="pid" value="<?php echo ($pid); ?>"/>
            <button class="btn ajax-post confirm" target-form="ids" url="<?php echo U("Article/setStatus",array("status"=>-1));?>">删 除</button>
            <button class="btn list_sort" url="<?php echo U('sort',array('cate_id'=>$cate_id,'pid'=>I('pid',0)),'');?>">排序</button>
        </div>
        <!-- 高级搜索 -->
        <div class="search-form fr cf">
            <div class="sleft">
                <div class="drop-down">
                    <span id="sch-sort-txt" class="sort-txt" data="<?php echo ($status); ?>"><?php if(get_status_title($status) == ''): ?>所有<?php else: echo get_status_title($status); endif; ?></span>
                    <i class="arrow arrow-down"></i>
                    <ul id="sub-sch-menu" class="nav-list hidden">
                        <li><a href="javascript:;" value="">所有</a></li>
                        <li><a href="javascript:;" value="1">正常</a></li>
                        <li><a href="javascript:;" value="0">禁用</a></li>
                        <li><a href="javascript:;" value="2">待审核</a></li>
                    </ul>
                </div>
                <input type="text" name="title" class="search-input" value="<?php echo I('title');?>" placeholder="请输入标题文档">
                <a class="sch-btn" href="javascript:;" id="search" url="<?php echo U('article/index','pid='.I('pid',0).'&cate_id='.$cate_id,false);?>"><i class="btn-search"></i></a>
            </div>
            <div class="btn-group-click adv-sch-pannel fl">
                <button class="btn">高 级<i class="btn-arrowdown"></i></button>
                <div class="dropdown cf">
                    <div class="row">
                        <label>更新时间：</label>
                        <input type="text" id="time-start" name="time-start" class="text input-2x" value="" placeholder="起始时间" /> -
                        <input type="text" id="time-end" name="time-end" class="text input-2x" value="" placeholder="结束时间" />
                    </div>
                    <div class="row">
                        <label>创建者：</label>
                        <input type="text" name="nickname" class="text input-2x" value="" placeholder="请输入用户名">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 数据表格 -->
    <div class="data-table">
        <table>
            <!-- 表头 -->
            <thead>
                <tr>
                    <th class="row-selected row-selected">
                        <input class="check-all" type="checkbox">
                    </th>
                    <?php if(is_array($list_grids)): $i = 0; $__LIST__ = $list_grids;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?><th><?php echo ($field["title"]); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
                </tr>
            </thead>
            <!-- 列表 -->
            <tbody>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><input class="ids" type="checkbox" value="<?php echo ($data['id']); ?>" name="ids[]"></td>
                        <?php if(is_array($list_grids)): $i = 0; $__LIST__ = $list_grids;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$grid): $mod = ($i % 2 );++$i;?><td><?php echo get_list_field($data,$grid);?></td><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <!-- 分页 -->
    <div class="page">
        <?php echo ($_page); ?>
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
    
    <link href="/matai/Public/static/datetimepicker/css/datetimepicker.css" rel="stylesheet" type="text/css">
    <link href="/matai/Public/static/datetimepicker/css/dropdown.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/matai/Public/static/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="/matai/Public/static/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $(function(){
            //搜索功能
            $("#search").click(function(){
                var url = $(this).attr('url');
                var status = $("#sch-sort-txt").attr("data");
                var query  = $('.search-form').find('input').serialize();
                query = query.replace(/(&|^)(\w*?\d*?\-*?_*?)*?=?((?=&)|(?=$))/g,'');
                query = query.replace(/^&/g,'');
                if(status != ''){
                    query = 'status=' + status + "&" + query;
                }
                if( url.indexOf('?')>0 ){
                    url += '&' + query;
                }else{
                    url += '?' + query;
                }
                window.location.href = url;
            });

            /* 状态搜索子菜单 */
            $(".search-form").find(".drop-down").hover(function(){
                $("#sub-sch-menu").removeClass("hidden");
            },function(){
                $("#sub-sch-menu").addClass("hidden");
            });
            $("#sub-sch-menu li").find("a").each(function(){
                $(this).click(function(){
                    var text = $(this).text();
                    $("#sch-sort-txt").text(text).attr("data",$(this).attr("value"));
                    $("#sub-sch-menu").addClass("hidden");
                })
            });

            //只有一个模型时，点击新增
            $('.document_add').click(function(){
                var url = $(this).attr('url');
                if(url != undefined && url != ''){
                    window.location.href = url;
                }
            });

            //点击排序
            $('.list_sort').click(function(){
                var url = $(this).attr('url');
                var ids = $('.ids:checked');
                var param = '';
                if(ids.length > 0){
                    var str = new Array();
                    ids.each(function(){
                        str.push($(this).val());
                    });
                    param = str.join(',');
                }

                if(url != undefined && url != ''){
                    window.location.href = url + '/ids/' + param;
                }
            });

            //回车自动提交
            $('.search-form').find('input').keyup(function(event){
                if(event.keyCode===13){
                    $("#search").click();
                }
            });

            $('#time-start').datetimepicker({
                format: 'yyyy-mm-dd',
                language:"zh-CN",
                minView:2,
                autoclose:true
            });

            $('#time-end').datetimepicker({
                format: 'yyyy-mm-dd',
                language:"zh-CN",
                minView:2,
                autoclose:true
            });
            
            //导航高亮
            highlight_subnav('<?php echo U('Article/index');?>');
        })
    </script>

</body>
</html>