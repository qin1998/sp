<?php
// +----------------------------------------------------------------------
// | 复新科技 [ better future ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.fxweimob.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: huangnian <skipperprivater@gmail.com> <http://www.fxweimob.com>
// +----------------------------------------------------------------------
namespace Agent\Controller;
use User\Api\MallUserApi;
/**
 * 后台首页控制器
 * @author 荒年 <skipperprivater@gmail.com>
 */
class PublicController extends \Think\Controller {

    protected function _initialize(){
        $config = [];
        $config['TMPL_PARSE_STRING']['__ASSETS__']    =  __ROOT__.'/Public/'.MODULE_NAME;
        $config['TMPL_ACTION_ERROR'] = 'Public/error';
        $config['TMPL_ACTION_SUCCESS'] = 'Public/success';
        C($config); //添加配置

        
    }
    /**
     * 后台用户登录
     * @author 荒年 <skipperprivater@gmail.com>
     */
    public function login($username = null, $password = null, $verify = null){
        if(IS_POST){
            /* 检测验证码 */
            /* 调用UC登录接口登录 */
            $User = new MallUserApi;
            $uid = $User->login(trim($username), trim($password));

            if(0 < $uid){ //UC登录成功
                $Member = D('TinyappList');
                
                if($Member->login($uid)){ //登录用户
                    //TODO:跳转到登录前页面
                    $this->success('登录成功！', U('Index/index'));
                } else {
                    $this->error($Member->getError());
                }

            } else { //登录失败
                switch($uid) {
                    case -1: $error = '用户不存在或被禁用！'; break; //系统级别禁用
                    case -2: $error = '密码错误！'; break;
                    default: $error = '未知错误！'; break; // 0-接口参数错误（调试阶段使用）
                }
                $this->error($error);
            }
        } else {
            if($this->is_login()){
                $this->redirect('Index/index');
            }else{
                /* 读取数据库中的配置 */
                $this->display();
            }
        }
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
     * 退出登录
     * @author 荒年 <skipperprivater@gmail.com>
     */
    public function logout(){
        if($this->is_login()){
            $auth = session('user_auth_agent');
            D('TinyappList')->logout();
            
            session('[destroy]');
            $this->success('退出成功！', U('login'));
        } else {
            $this->redirect('login');
        }
    }

    /**
     * 验证码
     * @author 荒年 <skipperprivater@gmail.com>
     */
    public function verify(){
        $verify = new \Think\Verify();
        $verify->entry(1);
    }

    private function get_role($uid){
        $result = M('UcenterMember')->where(array('id' => $uid))->getField('fx_role');
        return $result;
    }
}
