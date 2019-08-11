<?php
// +----------------------------------------------------------------------
// | TOPThink [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2010 http://topthink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi.cn@gmail.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------
// | MsnSDK.class.php 2013-02-27
// +----------------------------------------------------------------------
class MsnSDK extends ThinkOauth {
    /**
     * 获取requestCode的api接口
     * @var string
     */
    protected $GetRequestCodeURL = 'https://login.live.com/oauth20_authorize.srf';

    /**
     * 获取access_token的api接口
     * @var string
     */
    protected $GetAccessTokenURL = 'https://login.live.com/oauth20_token.srf';

    /**
     * 获取request_code的额外参数 URL查询字符串格式
     * @var srting
     */
    protected $Authorize = 'scope=wl.basic wl.offline_access wl.signin wl.emails wl.photos';

    /**
     * API根路径
     * @var string
     */
    protected $ApiBase = 'https://apis.live.net/v5.0/';

    /**
     * 组装接口调用参数 并调用接口
     * @param  string $api    微博API
     * @param  string $param  调用API的额外参数
     * @param  string $method HTTP请求方法 默认为GET
     * @return json
     */
    public function call($api, $param = '', $method = 'GET', $multi = false){
        /*  MSN 调用公共参数 */
        $params = array(
            'access_token' => $this->Token['access_token'],
        );

        $data = $this->http($this->url($api), $this->param($params, $param), $method);
        return json_decode($data, true);
    }

    /**
     * 解析access_token方法请求后的返回值
     * @param string $result 获取access_token的方法的返回值
     */
    protected function parseToken($result, $extend){
        $data = json_decode($result, true);
        if($data['access_token'] && $data['token_type'] && $data['expires_in']){
            $this->Token = $data;
            $data['openid'] = $this->openid();
            return $data;
        } else
            throw new Exception("获取 MSN ACCESS_TOKEN出错：未知错误");
    }

    /**
     * 获取当前授权应用的openid
     * @return string
     */
    public function openid(){
        if(isset($this->Token['openid']))
            return $this->Token['openid'];

        $data = $this->call('me');
        if(!empty($data['id']))
            return $data['id'];
        else
            throw new Exception('没有获取到 MSN 用户ID！');
    }
}
