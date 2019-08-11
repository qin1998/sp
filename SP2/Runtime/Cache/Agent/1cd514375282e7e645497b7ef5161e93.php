<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>五湖商舟</title>

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
  <link href="/logo.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

</head>
  <body class="bg-light-gray" id="body">
      <div class="container d-flex flex-column justify-content-between vh-100">
      <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header bg-primary" style="background-color: #03b8cc !important;">
              <div class="app-brand" style="background-color: #03b8cc;">
                <a href="javascript:void(0)">
                  <img src="https://www.dinghuo365.vip/Public/Company/images/logo-1.png" style="max-width: 160px;" />
                </a>
              </div>
            </div>
            <div class="card-body p-5">

              <h4 class="text-dark mb-5">账号登录</h4>
              <form action="<?php echo U('login');?>" method="POST">
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="text" class="form-control input-lg" id="email" aria-describedby="emailHelp" name="username" placeholder="用户名">
                  </div>
                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="密码">
                  </div>
                  <div class="col-md-12">
                    <div class="d-flex my-2 justify-content-between">
                      <div class="d-inline-block mr-3">
                        <label class="control control-checkbox">记住密码
                          <input type="checkbox" />
                          <div class="control-indicator"></div>
                        </label>
                      </div>
                    </div>
                    <button type="submit" target-form="form-material" class="btn btn-lg btn-primary btn-block mb-4" style="background-color: #03b8cc;">登录</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright pl-0">
        <p class="text-center">&copy; 2019 Copyright 杭州复新科技有限公司
          <a class="text-primary" href="http://www.fxweimob.com/" target="_blank">Abdus</a>.
        </p>
      </div>
    </div>
</body>
</html>