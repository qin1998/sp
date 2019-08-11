<?php
// +----------------------------------------------------------------------
// | 复新 [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.fxweimob.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 荒年 <skipperprivater@gmail.com> <http://www.fxweimob.com>
// +----------------------------------------------------------------------
namespace Agent\Controller;
use Think\Model;
use Think\Controller;
use User\Api\MallUserApi;

/**
 * 订单页控制器
 * @author 荒年 <skipperprivater@gmail.com>
 */
class IndexController extends Controller{

    /* 初始化方法 */
    protected function _initialize(){
        /* 读取站点配置 */
        $config = [];
        $config['TMPL_PARSE_STRING']['__ASSETS__']    =  __ROOT__.'/Public/'.MODULE_NAME;
        $config['TMPL_ACTION_ERROR'] = 'Public/error';
        $config['TMPL_ACTION_SUCCESS'] = 'Public/success';
        C($config); //添加配置

    }
    /**
     * 检测用户是否登录
     * @return integer 0-未登录，大于0-当前登录用户ID
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    private function is_login(){
        $user = session('user_auth_agent');
        if (empty($user)) {
            return 0;
        } else {
            return session('user_auth_agent_sign') == data_auth_sign($user) ? $user['uid'] : 0;
        }
    }
    /**
     * 后台首页
     * @author 荒年 <skipperprivater@gmail.com>
     */
    public function index(){
        $this->meta_title = 'shouye';
        $this->display();
    }


     public function user_index(){
        $this->meta_title = '用户列表';
        $this->display();
    }

}
