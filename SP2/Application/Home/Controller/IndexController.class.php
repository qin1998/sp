<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: ijry <ijry@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------
namespace Home\Controller;
use Think\Page;
use GuzzleHttp\Client;
/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {
    private $company_id = 7633;
    //系统首页
    public function index(){
        if(C('WEB_SITE_HOME_PAGE') !== 'Index/index'){
            $this->redirect(C('WEB_SITE_HOME_PAGE'));
        }
        $this->assign('meta_keywords', '');
        $this->assign('meta_description', '，');
        $this->display();
    }

    //搜索
    public function search(){
        if($_GET['key']){
            $key  = (string)I('key');
            $list = D('Document')->page(!empty($_GET["p"])?$_GET["p"]:1, 10)->lists($category = null, $field = true, $order = "`create_time` desc", $status = 1, $uid = false, $pos = false , $key);
            $count = D('Document')->listCount($category, $status = 1, $uid = false, $pos = false, $key);
            $Page = new Page($count,10);
            $show = $Page->show();
            $this->assign('list', $list);
            $this->assign('page',$show);
            $this->assign('meta_title', '搜索');
            $this->assign('meta_keywords', C('WEB_SITE_KEYWORD'));
            $this->assign('meta_description', C('WEB_SITE_DESCRIPTION'));
        }else{
            $this->error("请您输入关键字后搜索");
        }
        $this->display();
    }

    public function about(){
        $this->assign('meta_title', '关于我们');
        $this->display();
    }

    public function news(){
        $this->assign('meta_title', '新闻中心');
        $this->display();
    }

    public function news_list(){
        $id = intval(I('id'));
        //var_dump($id);exit();
        $p = $_GET['p'] ? $_GET['p'] : 1;
        // 二级分类，_child数据为三级分类
        vendor('GuzzleHttp.autoloader');
        $client = new Client([
            'timeout' => 30
        ]);
        $url = 'https://www.dinghuo365.vip/index.php/DealerWechat/Show/get_topic_data_by_cate_id/company_id/%d/cate_id/%d';
        $url = sprintf($url, $this->company_id, 783);
        
        // var_dump($url);exit();
        $response = $client->get($url);
        $body = (string) $response->getBody();
        
        $body = @json_decode($body, true);
        if (array_key_exists('errcode', $body)) {
            throw new \Exception('获取小程序access_token失败-' . $body['errcode'] . '，错误信息-' . $body['errmsg']);
        }
        // var_dump($body['data']);exit();
        $this->assign('news_list',$body['data']);//获取中文下的分类
        $this->assign('meta_title', '新闻中心');
        $this->display();
    }

    public function news_detail(){
        $id = intval(I('id'));
        //var_dump($id);exit();
        $p = $_GET['p'] ? $_GET['p'] : 1;
        // 二级分类，_child数据为三级分类
        vendor('GuzzleHttp.autoloader');
        $client = new Client([
            'timeout' => 30
        ]);
        $url = 'https://www.dinghuo365.vip/index.php/DealerWechat/Show/get_topic_detail/company_id/%d/id/%d';
        $url = sprintf($url, $this->company_id, $id);
        //var_dump($url);exit();
        $response = $client->get($url);
        $body = (string) $response->getBody();
        
        $body = @json_decode($body, true);
        if (array_key_exists('errcode', $body)) {
            throw new \Exception('获取小程序access_token失败-' . $body['errcode'] . '，错误信息-' . $body['errmsg']);
        }
        //var_dump($body['data']);exit();
        $this->assign('news_detail',$body['data']);//获取中文下的分类
        $this->assign('meta_title', '新闻详情');
        $this->display();
    }

    public function cooperation(){
        $this->assign('meta_title', '加盟合作');
        $this->display();
    }


    public function video_detail(){
        $id = intval(I('id'));
        //var_dump($id);exit();
        $p = $_GET['p'] ? $_GET['p'] : 1;
        // 二级分类，_child数据为三级分类
        vendor('GuzzleHttp.autoloader');
        $client = new Client([
            'timeout' => 30
        ]);
        $url = 'https://www.dinghuo365.vip/index.php/DealerWechat/Show/get_topic_detail/company_id/%d/id/%d';
        $url = sprintf($url, $this->company_id, $id);
        //var_dump($url);exit();
        $response = $client->get($url);
        $body = (string) $response->getBody();
        
        $body = @json_decode($body, true);
        if (array_key_exists('errcode', $body)) {
            throw new \Exception('获取小程序access_token失败-' . $body['errcode'] . '，错误信息-' . $body['errmsg']);
        }
        // var_dump($body['data']);exit();
        $this->assign('news_detail',$body['data']);//获取中文下的分类
        $this->assign('meta_title', '详情视频');
        $this->display();
    }

    public function products(){
        $id = intval(I('id'));
        //var_dump($id);exit();
        $p = $_GET['p'] ? $_GET['p'] : 1;
        // 二级分类，_child数据为三级分类
        vendor('GuzzleHttp.autoloader');
        $client = new Client([
            'timeout' => 30
        ]);
        $url = 'https://www.dinghuo365.vip/index.php/DealerWechat/Show/get_nested_categoies/pid/0/type/3/company_id/'.$this->company_id;

        $type = trim(I('type'));
        $p = $_GET['p'] ? $_GET['p'] : 1;
        $map = array();
        $map['display'] = 1;
        $response = $client->get($url);
        $body = (string) $response->getBody();
        
        $body = @json_decode($body, true);
        if (array_key_exists('errcode', $body)) {
            throw new \Exception('获取小程序access_token失败-' . $body['errcode'] . '，错误信息-' . $body['errmsg']);
        }
        $id = intval(I('product_cate_id'));
        if($id){
            $url_3 = 'https://www.dinghuo365.vip/index.php/DealerWechat/Show/get_goods/f_cate_id/'.$id.'/p/'.$p.'/pageSize/9/company_id/'.$this->company_id;
            //var_dump($url_2);exit();
            $response_3 = $client->get($url_3);
            $body_3 = (string) $response_3->getBody();
            
            $body_3 = @json_decode($body_3, true);
            if (array_key_exists('errcode', $body_3)) {
                throw new \Exception('获取小程序access_token失败-' . $body_3['errcode'] . '，错误信息-' . $body_3['errmsg']);
            }
            var_dump($body_3['data']);exit();
            $this->assign('products',$body_3['data']);
            $count = $body_3['count'];
            $Page= new \Think\Page($count,9);
            $show  = $Page->show();
            $this->assign('page',$show);
        }else{
            $url_3 = 'https://www.dinghuo365.vip/index.php/DealerWechat/Show/get_goods/p/'.$p.'/pageSize/9/company_id/'.$this->company_id;
            //var_dump($url_2);exit();
            $response_3 = $client->get($url_3);
            $body_3 = (string) $response_3->getBody();
            
            $body_3 = @json_decode($body_3, true);
            if (array_key_exists('errcode', $body_3)) {
                throw new \Exception('获取小程序access_token失败-' . $body_3['errcode'] . '，错误信息-' . $body_3['errmsg']);
            }
            // var_dump($body_3['data']);exit();
            $this->assign('products',$body_3['data']);
            $count = $body_3['count'];
            $Page= new \Think\Page($count,9);
            $show  = $Page->show();
            $this->assign('page',$show);
        }
        //var_dump($body['data']);exit();
        $this->assign('first_list',$body['data']);//获取一级分类
        $name = I('name');
        $this->assign('name',$name);
        $this->assign('id',$id);
        $this->assign('meta_title', '产品中心');
        $this->display();
    }
    public function video(){
        $id = intval(I('id'));
        //var_dump($id);exit();
        $p = $_GET['p'] ? $_GET['p'] : 1;
        // 二级分类，_child数据为三级分类
        vendor('GuzzleHttp.autoloader');
        $client = new Client([
            'timeout' => 30
        ]);

        $url = 'https://www.dinghuo365.vip/index.php/DealerWechat/Show/get_topic_data_by_cate_id/company_id/%d/cate_id/%d';
        $url = sprintf($url, $this->company_id, 650);
        
        //var_dump($url);exit();
        $response = $client->get($url);
        $body = (string) $response->getBody();
        
        $body = @json_decode($body, true);
        if (array_key_exists('errcode', $body)) {
            throw new \Exception('获取小程序access_token失败-' . $body['errcode'] . '，错误信息-' . $body['errmsg']);
        }
         // var_dump($body['data']);exit();
        $this->assign('news_list',$body['data']);//获取中文下的分类
        $this->assign('meta_title', '视频中心');
        $this->display();
    }
    public function connects(){
        $this->assign('meta_title', '视频中心');
        $this->display();
    }
    public function product_list(){
        $product_cate_id = intval(I('product_cate_id'));
        $type = trim(I('type'));
        $p = $_GET['p'] ? $_GET['p'] : 1;
        $map = array();
        $map['display'] = 1;
        $map['category_id'] = 6;

        if ($product_cate_id) {
            $result = M('product_category')->where(array('id' => $product_cate_id))->find();
            if ($result && is_array($result) && array_key_exists('pid', $result)) {
                if ($result['pid'] > 0) {
                    $map['product_category_id'] = $product_cate_id;
                }else{
                    $result = M('product_category')->where(array('pid' => $product_cate_id))->field('id')->select();
                    
                    if ($result && is_array($result)) {
                        $data = array_column($result, 'id');;
                        
                        $map['product_category_id'] = array('in', $data);
                    }
                }
            }
            
        }
        if (L('sys_lang') === 1) {
            $map['is_english'] = 1;
        }else{
            $map['is_english'] = 0;
        }

        $result = M('Document')->alias('dc')->join(C('DB_PREFIX').'document_article pro on dc.id=pro.id')->where($map)->field('dc.id as id,title,cover_id')->order('level desc')->page($p .',9')->select();

        $count = M('Document')->alias('dc')->join(C('DB_PREFIX').'document_article pro on dc.id=pro.id')->where($map)->count();

        $this->product_page($count, 9);

        $this->get_product_categories();

        $this->assign('products', $result);
        $this->assign('meta_title', '产品中心');
        $this->display();
    }

    public function product_detail(){
        $id = intval(I('id'));
        //var_dump($id);exit();
        $p = $_GET['p'] ? $_GET['p'] : 1;
        // 二级分类，_child数据为三级分类
        vendor('GuzzleHttp.autoloader');
        $client = new Client([
            'timeout' => 30
        ]);

        $url = 'https://www.dinghuo365.vip/index.php/DealerWechat/Show/goods_detail/company_id/%d/goods_id/%d';
        $url = sprintf($url, $this->company_id, $id);
        
        //var_dump($url);exit();
        $response = $client->get($url);
        $body = (string) $response->getBody();
        
        $body = @json_decode($body, true);
        if (array_key_exists('errcode', $body)) {
            throw new \Exception('获取小程序access_token失败-' . $body['errcode'] . '，错误信息-' . $body['errmsg']);
        }
        //var_dump($body['data']);exit();
        $this->assign('pro',$body['data']);//获取中文下的分类
        $name = I('name');
        $this->assign('name',$name);
        $name2 = I('name2');
        $this->assign('name2',$name2);
        $this->assign('meta_title', '产品详情');
        $this->display();
    }

    public function feed_back(){
        $this->assign('meta_title', '留言反馈');
        $this->display();
    }

    public function contact_us(){
        $this->assign('meta_title', '联系我们');
        $this->display();
    }

    public function msg_submit(){
        $name_fx = trim(I('name_fx'));
        $phone_fx = trim(I('phone_fx'));
        $msg_fx = trim(I('msg_fx'));
        $email_fx = trim(I('email_fx'));
        $address_fx = trim(I('address_fx'));
        if (empty($name_fx) || empty($phone_fx) || empty($msg_fx) || empty($email_fx) || empty($address_fx)) {
            $this->error('Incomplete information');
        }
        //var_dump($msg_fx);exit();
        vendor('GuzzleHttp.autoloader');
        $client = new Client([
            'timeout' => 30
        ]);
        $data = [
            ['name' => '姓名', 'value' => $name_fx ],
            ['name' => '电话', 'value' => $phone_fx],
            ['name' => '信息', 'value' => $msg_fx ],
            ['name' => '邮箱', 'value' => $email_fx],
            ['name' => '地址', 'value' => $address_fx],
            
        ];
        //var_dump($data);exit();
        $message_url = 'http://www.dinghuo365.vip/index.php/DealerWechat/Show/uni_form_latest/company_id/'.$this->company.'/app_name/槽王网站';
        //var_dump($message_url);exit();
        //var_dump($url);exit();
        $response = $client->request('POST', $message_url, ['body' => json_encode($data, JSON_UNESCAPED_UNICODE)]);
        $body = (string) $response->getBody();
        // var_dump($body);exit();

        $post=$_POST;
    }

    public function job(){
        $this->assign('meta_title', '人力资源');
        $this->display();
    }


    public function view_carts(){
        $data = get_products_by_userinfo($this->_get_user_info());
        $data = $data ? $data : array();
        if (count($data) >=1) {
            foreach ($data as $k => $v) {
                $result = M('Document')->alias('dc')->join(C('DB_PREFIX').'document_products pro on dc.id=pro.id')->where(array('dc.id' => $v['id']))->field('title,cover_id,title_en,cargo_no,cargo_no_en,capacity,capacity_en,material,material_en,specifications,specifications_en,description,description_en,remarks,remarks_en')->find();
                if ($result && is_array($result)) {
                    $data[$k] = array_merge($v, $result);
                }
            }
            
        }
    }

    public function add_carts(){
        $result = M('cart')->where(array('user_info' => $this->_get_user_info()))->find();
        if (empty($result)) {
            $sdata = array();
            $sdata['user_info'] = $this->_get_user_info();
            $sdata['product_info'] = serialize($this->data);
            $sdata['create_time'] = time();

            $insertId = M('cart')->add($sdata);
            if (empty($insertId)) {
                echo "insert data fail";
            }else{
                echo "insert data success";
            }
        }else{
            echo "cart exists";
        }
    }

    public function add_product_to_cart(){
        $user_info = $this->_get_user_info();
        $product_id = intval(I('id'));
        $amount = intval(I('amount'));
        if (empty($product_id) || !is_numeric($product_id)) {
            $this->error('invalid product id');
        }
        if(!$this->checkProductById($product_id)) $this->error('Product does not exists!');
        if ($amount < 1) {
            $this->messages(-1, L('invalid_amount'));
        }
        if (IS_AJAX) {
            $result = $this->productInUserCart($product_id, $user_info);
            if (true === $result) {
                $this->modifyCartProduct($product_id, $user_info, $amount, 3);
            }else{
                $sdata = array();
                $result = M('cart')->where(array('user_info' => $user_info))->find();
                if (empty($result)) {   //This user does not have cart info
                    $sdata['user_info'] = $this->_get_user_info();
                    $sdata['create_time'] = time();
                    $sdata['product_info'] = serialize(array(array('id' => $product_id, 'amount' => $amount)));
                    $insertId = M('cart')->add($sdata);
                    if (empty($insertId)) {
                        $this->messages(-1, 'insert data fail');
                    }
                }else{
                    $products = get_products_by_userinfo($user_info);
                    if (!empty($products) && is_array($products)) {
                        array_push($products, array('id' => $product_id, 'amount' => $amount));
                        $sdata['product_info'] = serialize($products);
                    }else{
                        $sdata['product_info'] = serialize(array(array('id' => $product_id, 'amount' => $amount)));
                    }
                    
                    M('cart')->where(array('user_info' => $user_info))->save($sdata);
                }
                $this->ajaxReturn(array('status' => 1));
            }
        }

    }

    public function add_order(){
        if (IS_AJAX) {

            $data = array();
            $data['email'] = trim(I('email'));
            $data['contactor'] = trim(I('name'));
            $data['phone'] = trim(I('phone'));
            $data['message'] = trim(I('message'));
            if (empty($data['email']) || empty($data['contactor']) || empty($data['phone'])) {
                $this->messages(-1, L('order_field_error'));
            }

            $result = M('cart')->where(array('user_info' => $this->_get_user_info()))->find();
            if (empty($result)) {
                $this->messages(-1, L('cart_not_exists'));
            }elseif ($result && is_array($result) && array_key_exists('product_info', $result)) {
                $products = unserialize($result['product_info']);
                if (count($products) === 0) {
                    $this->messages(-1, L('cart_is_empty'));
                } 
            }
            $data['product_info'] = $result['product_info'];
            $data['create_time'] = time();

            $insertId = M('order')->add($data);
            if ($insertId) {
                $this->clear_carts();
                $this->ajaxReturn(array('status' => 1));
            }else{
                $this->messages(-1, L('db_insert_error'));
            }
        }else{
            echo "123";
        }
        
    }

    public function get_carts(){
        //dumps(get_products_by_userinfo($this->_get_user_info()));exit();
        if (IS_AJAX) {
            $data = get_products_by_userinfo($this->_get_user_info());
            $data = $data ? $data : array();
            if (count($data) >= 1) {
                foreach ($data as $k => $v) {
                   $product = get_product_info_by_id($v['id']);
                   if ($product && is_array($product) && array_key_exists('title', $product) && array_key_exists('cover_id', $product)) {
                        if (L('sys_lang') == 1) {
                            $data[$k]['title'] = $product['title_en'];
                        }else{
                            $data[$k]['title'] = $product['title'];
                        }
                        
                        $data[$k]['img'] = get_cover($product['cover_id'], 'path');
                   }
                }
            }
            $this->ajaxReturn(array('status' => 1, 'data' => $data, 'count' => count($data)));
        }else{
            exit('invalid request');
        }
    }

    private function clear_carts(){
        $data = array();
        $data['product_info'] = '';
        M('cart')->where(array('user_info' => $this->_get_user_info()))->save($data);
    }

    public function modify_carts(){
        $user_info = $this->_get_user_info();
        $product_id = I('id');
        $amount = intval(I('amount'));
        $type = intval(I('type'));

        if ($type === 1 && $amount < 1) {
            $this->messages(-1, L('invalid_amount'));
        }
        if (IS_AJAX) {
            $result = $this->productInUserCart($product_id, $user_info);
            if (true === $result) {
                $this->modifyCartProduct($product_id, $user_info, $amount, $type);
            }else{
                $this->messages(-1, L('product_not_exists_in_cart'));
            }
        }
        
    }

    /*
     * check the cart is/not belonging to the user
    */
    private function productInUserCart($product_id, $user_info){
        $products = get_products_by_userinfo($user_info);
        if (!empty($products) && is_array($products)) {
            foreach ($products as $k => $v) {
                if ($v['id'] === intval($product_id)) {
                    return true;
                }
            }
            return false;
        }else{
            return false;
        }
    }

    /*
     * type definition
     * 1 = modify product amount
     * 2 = remove product from cart
    */
    private function modifyCartProduct($product_id, $user_info, $amount = 1, $type = 1){
        if (in_array($type, array(1,2,3))) {
            $products = get_products_by_userinfo($user_info);
            if (!empty($products) && is_array($products)) {
                foreach ($products as $k => $v) {
                    if ($v['id'] === intval($product_id)) {
                        if ($type === 1) {
                            $products[$k]['amount'] = intval($amount);
                        }elseif ($type === 2) {
                            unset($products[$k]);
                        }elseif ($type === 3) {
                            $products[$k]['amount'] += intval($amount);
                        }
                    }
                }
                $data['product_info'] = serialize($products);
                M('cart')->where(array('user_info' => $user_info))->save($data);
                $this->ajaxReturn(array('status' => 1));
            }
        }
    }
}
