<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: ijry <ijry@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------
/**
 * 安装程序配置文件
 */
define('INSTALL_APP_PATH', realpath('./') . '/');

return array(
    /* 产品配置 */
    'INSTALL_PRODUCT_NAME'   => 'CoreThink', //产品名称
    'INSTALL_WEBSITE_DOMAIN' => 'http://www.corethink.cn', //官方网址
    'INSTALL_COMPANY_NAME'   => '南京同好网络科技有限公司', //公司名称
    'ORIGINAL_TABLE_PREFIX'  => 'ct_', //默认表前缀

    /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/static',
        '__ADDONS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/Addons',
        '__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images',
        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
    ),
);
