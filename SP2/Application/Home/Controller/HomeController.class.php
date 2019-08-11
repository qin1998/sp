<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: ijry <ijry@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------
namespace Home\Controller;
use Think\Controller;

/**
 * 前台公共控制器
 * 为防止多分组Controller名称冲突，公共Controller名称统一使用分组名称
 */
class HomeController extends Controller {
    protected $company = 5133;
    /* 空操作，用于输出404页面 */
    public function _empty(){
        $this->redirect('Index/index');
    }

    /* 初始化方法 */
    protected function _initialize(){
        /* 读取站点配置 */
        $config = api('Config/lists');
        /* 模板相关配置 */
        $config['TMPL_PARSE_STRING']['__STATIC__'] =  __ROOT__.'/Public/static';
        $config['TMPL_PARSE_STRING']['__IMG__']    =  __ROOT__.'/Application/'.MODULE_NAME.'/View/'.$config['DEFAULT_THEME'].'/Static/images';
        $config['TMPL_PARSE_STRING']['__CSS__']    =  __ROOT__.'/Application/'.MODULE_NAME.'/View/'.$config['DEFAULT_THEME'].'/Static/css';
        $config['TMPL_PARSE_STRING']['__JS__']     =  __ROOT__.'/Application/'.MODULE_NAME.'/View/'.$config['DEFAULT_THEME'].'/Static/js';
        $config['TMPL_PARSE_STRING']['__HS__']     =  __ROOT__.'/Application/'.MODULE_NAME.'/View/'.$config['DEFAULT_THEME'].'/Static/caow';
        $config['TMPL_PARSE_STRING']['__PLUGINS__']     =  __ROOT__.'/Application/'.MODULE_NAME.'/View/'.$config['DEFAULT_THEME'].'/plugins';
    
        C($config); //添加配置
        $meta_keywords = '盛邦,锯铝机,永康盛邦,浙江盛邦,盛邦官网,品牌锯铝机';
        $meta_description = '本公司以生产据铝机，钢材机为主,并拥有专业的模具开发人员及技 术人员,拥有车,铣，磨，电脉冲，数控车床，数控铣床，格式钻床和加工中心，拥有从主要配件到整机的一条龙自主生产能力，有效地控制产品质量并降低了产品的成本，给客户性价比到位的产品，也拥有按照客户需求制造产品能力。产品产销国内市场，出口多个国家和地区';
        $this->assign("keywords", $meta_keywords);
        $this->assign("description",$meta_description);

        $this->checkLang();
    }

    private function checkLang(){
        if (L('sys_lang') == 1) {
            $this->assign('langs', 'en');
        }else{
            $this->assign('langs', 'zh');
        }
    }

    /* 用户登录检测 */
    protected function login(){
        /* 用户登录检测 */
        is_login() || $this->error('您还没有登录，请先登录！', U('User/login'));
    }

    protected function _set_user_info(){
        $user_info = cookie('userinfo');
        if (!$user_info) {
            cookie('userinfo', generate_chars(16), 3600000);
        }
    }

    public function _get_user_info(){
        return cookie('userinfo');
    }

    public function messages($status = 0, $msg = ''){
        $this->ajaxReturn(array('status' => $status, 'msg' => $msg));
    }

    protected function checkProductById($id){
        $result = M('Document')->where(array('id' => $id))->field('id')->find();
        if (!empty($result) && is_array($result) && array_key_exists('id', $result)) {
            return true;
        }
        return false;
    }

    protected function product_page($count, $pageSize = 5){
        $Page = new \Think\Page($count, $pageSize);// 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();// 分页显示输出
        $this->assign('_page',$show);// 赋值分页输出
    }

    protected function get_product_categories(){
        $map = array();
        $map['status'] = 1;
        $map['pid'] = 0;
        if (L('sys_lang') === 1) {
            $map['is_english'] = 1;
        }else{
            $map['is_english'] = 0;
        }
        $result = M('product_category')->where($map)->field('id,name')->order('sort')->select();
        $this->assign('categories', $result);
    }
}
