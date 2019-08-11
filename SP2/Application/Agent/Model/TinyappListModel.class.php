<?php
// +----------------------------------------------------------------------
// | 复新科技 [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.fxweimob.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 荒年 <skipperprivater@gmail.com> <http://www.fxweimob.com>
// +----------------------------------------------------------------------
namespace Agent\Model;
use Think\Model;

/**
 * 商品分类模型
 * @author 荒年 <skipperprivater@gmail.com>
 */
class TinyappListModel extends Model {
     /**
     * 登录指定用户
     * @param  integer $uid 用户ID
     * @return boolean      ture-登录成功，false-登录失败
     */
    public function login($uid){
        /* 检测是否在当前应用注册 */
        $user = $this->where(array('account_id' => $uid, 'deleted' => 0 ))->field(true)->find();
        if(!$user) {
            $this->error = '用户不存在或已被禁用！'; //应用级别禁用
            return false;
        }

        //记录行为
        //action_log('user_login', 'member', $uid, $uid);

        /* 登录用户 */
        $this->autoLogin($user);
        return true;
    }

    /**
     * 注销当前用户
     * @return void
     */
    public function logout(){
        $auth = session('user_auth_agent');
        session('user_auth_agent', null);
        session('user_auth_agent_sign', null);
    }

    /**
     * 自动登录用户
     * @param  integer $user 用户信息数组
     */
    private function autoLogin($user){

        /* 记录登录SESSION和COOKIES */
        $auth = array(
            'id' => $user['id'],
            'uid'             => $user['account_id'],
            'company_id'      => $user['company_id'],
            'company_profile' => $user,
            'username'        => $user['title'],
        );

        session('user_auth_agent', $auth);
        session('user_auth_agent_sign', data_auth_sign($auth));

    }
}