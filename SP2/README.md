# CoreThink

## 项目介绍

CoreThink是一套轻量级产品开发框架，追求简单、高效、卓越。可轻松实现移动互联网时代支持多终端的轻量级产品快速开发。系统功能采用模块化开发，内置权限控制、文档模型、模板标签、用户支付等模块，便于用户灵活扩展和二次开发。内建数据备份、云存储、邮件管理、静态化、插件扩展、敏感词过滤、用户行为记录、广告管理等功能。

## 目录结构
```
├─index.php 入口文件
├─Addons 插件目录
│
├─Application 应用模块目录
│  ├─Admin 后台模块
│  │  ├─Conf 后台配置文件目录
│  │  ├─Common 后台函数公共目录
│  │  ├─Controller 后台控制器目录
│  │  ├─Model 后台模型目录
│  │  ├─Logic 后台模型逻辑目录
│  │  └─View 后台视图文件目录
│  │
│  ├─Common 公共模块目录（不能直接访问）
│  │  ├─Conf 公共配置文件目录
│  │  ├─Common 公共函数文件目录
│  │  ├─Controller 模块访问控制器目录
│  │  └─Model 公共模型目录
│  │
│  ├─Home Home 前台模块
│  │  ├─Conf 前台配置文件目录
│  │  ├─Common 前台函数公共目录
│  │  ├─Controller 前台控制器目录
│  │  ├─Model 前台模型目录
│  │  ├─Logic 前台模型逻辑目录
│  │  ├─TagLib 前台标签库目录
│  │  └─View 模块视图文件目录
│  │
│  └─User 用户模块（不能直接访问）
│     ├─Api 用户接口文件目录
│     ├─Conf 用户配置目录
│     ├─Common 后台函数公共目录
│     ├─Model 用户模型目录
│     └─Service 用户Service文件目录
│
├─Public 应用资源文件目录 
├─Runtime 应用运行时目录
├─ThinkPHP 框架目录
└─Uploads 上传根目录
  ├─Download 文件上传目录
  ├─Picture 图片上传目录
  └─Editor 编辑器图片上传目录
```

##问题反馈

在使用中有任何问题，欢迎反馈给我们，可以用以下联系方式跟我们交流

* 邮件: ijry@qq.com
* QQ: 598821125
* 电话: 15005173785

##感激

感谢以下的项目,排名不分先后

* [ThinkPHP](http://thinkphp.cn/) 
* [OneThink](http://onethink.cn/)
* [Bootstrap](http://getbootstrap.com)
* [jQuery](http://jquery.com)

##关于我们

南京同好网络科技有限公司
