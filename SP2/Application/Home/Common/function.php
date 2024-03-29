<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: ijry <ijry@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------

/**
 * 前台公共库文件
 * 主要定义前台公共函数库
 */

/**
 * 检测验证码
 * @param  integer $id 验证码ID
 * @return boolean     检测结果
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function check_verify($code, $id = 1){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}

/**
 * 获取列表总行数
 * @param  string  $category 分类ID
 * @param  integer $status   数据状态
 * @param  integer $uid      用户ID
 * @param  integer $pos      推荐位
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function get_list_count($category, $status = 1, $uid, $pos){
    static $count;
    if(!isset($count[$category])){
        $count[$category] = D('Document')->listCount($category, $status, $uid, $pos);
    }
    return $count[$category];
}

/**
 * 获取段落总数
 * @param  string $id 文档ID
 * @return integer    段落总数
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function get_part_count($id){
    static $count;
    if(!isset($count[$id])){
        $count[$id] = D('Document')->partCount($id);
    }
    return $count[$id];
}

/**
 * 获取导航URL
 * @param  string $url 导航URL
 * @return string      解析或的url
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function get_nav_url($nav){
    switch($nav['type']){
        case 1:
            $url = U('Channel/detail/id/'.$nav['id']);
            break;
        default:
            switch ($nav['url']) {
                case 'http://' === substr($url, 0, 7):
                    $url = $nav['url'];
                    break;
                case '#' === substr($url, 0, 1):
                    break;
                default:
                    $url = U($nav['url']);
                    break;
            }
            break;
    }
    return $url;
}

function get_products_by_userinfo($user_info = ''){
    if (!empty($user_info)) {
        $result = M('cart')->where(array('user_info' => $user_info))->field('product_info')->find();
        if (!empty($result) && is_array($result) && array_key_exists('product_info', $result)) {
            return unserialize($result['product_info']);  
        }
    }
}

function get_product_info_by_id($id){
    $result = M('Document')->where(array('id' => $id))->field('title,cover_id')->find();
    $info = M('Document_products')->where(array('id' => $id))->field('title_en')->find();
    if (is_array($result) && is_array($info) && array_key_exists('title_en', $info)) {
        $result['title_en']  = $info['title_en'];
    }
    return $result;
}

function product_count($product_category_id){
    $count = M('document_products')->where(array('display' => 1, 'product_category_id' => $product_category_id))->count();
    return $count;
}

function get_product_category_child($product_category_id){
    $result = M('product_category')->where(array('pid' => $product_category_id, 'status' => 1))->order('sort')->select();
    return $result;
}