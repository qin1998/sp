<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: ijry <ijry@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------
/**
 * 前台配置文件
 * 所有除开系统级别的前台配置
 */
return array(
    // 预先加载的标签库
    'TAGLIB_PRE_LOAD' => 'Home\\TagLib\\Article,Home\\TagLib\\Think',

    /* 主题设置 */
    'DEFAULT_THEME' => 'default', // 默认模板主题名称

    /* 数据缓存设置 */
    'DATA_CACHE_PREFIX' => ENV_PRE.MODULE_NAME.'_', // 缓存前缀

    /* SESSION 和 COOKIE 配置 */
    'SESSION_PREFIX' => ENV_PRE.MODULE_NAME.'_', //session前缀
    'COOKIE_PREFIX'  => ENV_PRE.MODULE_NAME,     //Cookie前缀 避免冲突
    'VAR_SESSION_ID' => 'session_id',    //修复uploadify插件无法传递session_id的bug
    'LANG_SWITCH_ON' => true,   // 开启语言包功能
    'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
    'DEFAULT_LANG' => 'zh-cn', // 默认语言
    'LANG_LIST'        => 'zh-cn,en-us', // 允许切换的语言列表 用逗号分隔
    'VAR_LANGUAGE'     => 'l', // 默认语言切换变量,GET param

);
