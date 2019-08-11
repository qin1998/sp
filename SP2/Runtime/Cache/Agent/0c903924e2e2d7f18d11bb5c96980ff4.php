<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo ($meta_title); ?></title>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="/caow/Public/Agent/assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="/caow/Public/Agent/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="/caow/Public/Agent/assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="/caow/Public/Agent/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="/caow/Public/Agent/assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="/caow/Public/Agent/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="/caow/Public/Agent/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="/caow/Public/Agent/assets/css/sleek.css" />
  <!-- FAVICON -->
  <link rel="shortcut icon" type="image/x-icon" href="/logo.png">
  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="/caow/Public/Agent/assets/plugins/nprogress/nprogress.js"></script>
  
  <style type="text/css">
    .sidebar-dark .sidebar .sub-menu{background-color: white;}
    .sidebar-dark .sidebar .sub-menu > li > a{color: black;}
    .sidebar-dark .left-sidebar{background-color: white;}
    .sidebar-dark .sidebar .sub-menu > li > a:hover{color: #03b8cc;}
  </style>
</head>
  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <!-- <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script> -->
    <div class="mobile-sticky-body-overlay"></div>
    <div class="wrapper">
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand" style="background-color: #03b8cc;">
              <a href="javascript:void(0)">
                <img src="https://www.dinghuo365.vip/Public/Company/images/logo-1.png" style="max-width: 160px;" />
              </a>
            </div>

            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar" style="background-color: white;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner">
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">法卡萨浮动</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                          <li >
                            <a class="sidenav-item-link" href="<?php echo U('Index/index');?>">
                              <span class="nav-text">我的账号</span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href="<?php echo U('Index/index');?>">
                              <span class="nav-text">OEM信息</span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href="<?php echo U('Index/');?>">
                              <span class="nav-text">用户信息</span>
                            </a>
                          </li>
                            <li >
                            <a class="sidenav-item-link" href="<?php echo U('Index/index');?>">
                              <span class="nav-text">资金流水</span>
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href="<?php echo U('Index/index');?>">
                              <span class="nav-text">退出登录</span>
                            </a>
                          </li>
                      </div>
                    </ul>
                  </li>
              </ul>
            </div>
          </div>
        </aside>

      

      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <div style="flex: 1;"></div>
              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <i class="mdi mdi-account user-image" style="font-size: 18px;"></i>
                      <span class="d-none d-lg-inline-block"><?php echo ($user_info['company_profile']['title']); ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a href="<?php echo U('Index/changepassword');?>"> <i class="mdi mdi-settings"></i> 修改密码 </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="<?php echo U('Public/logout');?>"> <i class="mdi mdi-logout"></i> 退出 </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>


        <div class="content-wrapper">
          <div class="content">
            
            <div class="breadcrumb-wrapper">
								<h1><?php echo ($meta_title); ?></h1>
                <nav aria-label="breadcrumb" style="margin-top: 10px;">
                  <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                      <a href="<?php echo U('Index/index');?>">
                        <span class="mdi mdi-home"></span>                
                      </a>
                    </li>
                    <?php if(is_array($breadcrumb)): $i = 0; $__LIST__ = $breadcrumb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="breadcrumb-item"><?php if((count($breadcrumb) - 1) != $key): ?><a href="<?php echo ($vo["url"]); ?>"><?php else: ?><a href="javascript:void(0)"><?php endif; echo ($vo["label"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                  </ol>
                </nav>
						</div>
            
            
<div class="row">
    <div class="col-12">
      <!-- Recent Order Table -->
      <div class="card card-table-border-none" id="recent-orders">
        <div class="card-body pt-0 pb-5">
          <table class="table card-table table-responsive table-responsive-large" style="width:100%">
            <thead>
              <tr>
                <th>微信用户</th>
                <th>手机号</th>
                <th class="d-none d-md-table-cell">用户数</th>
                <th class="d-none d-md-table-cell">地区</th>
                <th class="d-none d-md-table-cell">注册时间</th>
                <th>最近登录</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td >fgdsgfds</td>
                  <td >fgsdgdsfgs</td>
                  <td >
                    <a class="text-dark" href=""> sfdsgsdgsd</a>
                  </td>
                  <td class="d-none d-md-table-cell">sfgdsgsdf</td>
                  <td class="d-none d-md-table-cell">hgfdhgf</td>
                  <td class="d-none d-md-table-cell">yfdsgds</td>
                  <td class="text-right">
                    <div class="dropdown show d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                        <li class="dropdown-item">
                          <a href="<?php echo U('role_index', ['mall_user_id' => $vo['id']]);?>">用户管理</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
			
          </div>
        </div>

       <footer class="footer mt-auto">
          <div class="copyright bg-white">
            <p>
              &copy; <span id="copy-year">2019</span> 杭州复新科技有限公司
              <a
                class="text-primary"
                href="http://www.fxweimob.com/"
                target="_blank"
                >Abdus</a
              >.
            </p>
          </div>
          <script>
              var d = new Date();
              var year = d.getFullYear();
              document.getElementById("copy-year").innerHTML = year;
          </script>
        </footer>
        <div style="position: fixed;z-index: 9;left: 20rem;bottom: 1rem;width: 80%;background-color: white;">
          <nav aria-label="Page navigation example">
            <?php echo ($page); ?>
          </nav>
        </div>
      </div>
    </div>
<script src="/caow/Public/Agent/assets/plugins/jquery/jquery.min.js"></script>
<script src="/caow/Public/Agent/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/caow/Public/Agent/assets/plugins/toaster/toastr.min.js"></script>
<script src="/caow/Public/Agent/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="/caow/Public/Agent/assets/plugins/charts/Chart.min.js"></script>
<script src="/caow/Public/Agent/assets/plugins/ladda/spin.min.js"></script>
<script src="/caow/Public/Agent/assets/plugins/ladda/ladda.min.js"></script>
<script src="/caow/Public/Agent/assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="/caow/Public/Agent/assets/plugins/select2/js/select2.min.js"></script>
<script src="/caow/Public/Agent/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="/caow/Public/Agent/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="/caow/Public/Agent/assets/plugins/daterangepicker/moment.min.js"></script>
<script src="/caow/Public/Agent/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/caow/Public/Agent/assets/plugins/jekyll-search.min.js"></script>
<script src="/caow/Public/Agent/assets/js/sleek.js"></script>
<script src="/caow/Public/Agent/assets/js/chart.js"></script>
<script src="/caow/Public/Agent/assets/js/date-range.js"></script>
<script src="/caow/Public/Agent/assets/js/map.js"></script>
<script src="/caow/Public/Agent/assets/js/custom.js"></script>
<script type="text/javascript">
  function highlight_leftmenu(current_url){
    console.log(current_url);
    $('li.has-sub').find('a[href="'+current_url+'"]').parent().parent().parent().addClass('show');
    $('li.has-sub').find('a[href="'+current_url+'"]').parent().parent().parent().parent().addClass('expand');
  }
</script>

  <script type="text/javascript">
  highlight_leftmenu('<?php echo U("index");?>');
</script>

  </body>

</html>