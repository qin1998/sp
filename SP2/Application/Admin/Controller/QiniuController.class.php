<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: ijry <ijry@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------
namespace Admin\Controller;
use Think\Upload\Driver\Qiniu\QiniuStorage;
/**
 * 七牛扩展类测试控制器
 * @author yangweijie <yangweijiester@gmail.com>
 */
class QiniuController extends AdminController {
    /**
     * 初始化方法
     * @author yangweijie <yangweijiester@gmail.com>
     */
    public function _initialize(){
        parent:: _initialize();
        $config = C('UPLOAD_QINIU_CONFIG');
        $this->qiniu = new QiniuStorage($config);
    }

    /**
     * 获取文件列表
     * @author yangweijie <yangweijiester@gmail.com>
     */
    public function index(){
        $this->meta_title = '七牛云存储';
        $map = array();
        $prefix = trim(I('post.prefix'));
        if($prefix)
            $map['prefix'] = $prefix;
        $list = $this->qiniu->getList($map);
        if(!$list)
            trace($this->qiniu->error);
        $this->assign('qiniu', $this->qiniu);
        $this->assign('_list', $list['items']);
        $this->display();
    }

    /**
     * 删除文件
     * @author yangweijie <yangweijiester@gmail.com>
     */
    public function del(){
        $file = trim(I('file'));
        if($file){
            $result = $this->qiniu->del($file);
            if(false === $result){
                $this->error($this->qiniu->errorStr);
            }else{
                $this->success('删除成功');
            }
        }else{
            $this->error('错误的文件名');
        }
    }

    /**
     * 删除图片
     * @author yangweijie <yangweijiester@gmail.com>
     */
    public function dealImage($key){
        $url = $this->qiniu->dealWithType($key, 'img') ;
        redirect($url);
    }

    /**
     * 删除文档
     * @author yangweijie <yangweijiester@gmail.com>
     */
    public function dealDoc($key){
        $url = $this->qiniu->dealWithType($key, 'doc');
        redirect($url);
    }

    /**
     * 重命名
     * @author yangweijie <yangweijiester@gmail.com>
     */
    public function rename(){
        $key = I('get.file');
        $new = I('new_name');
        $result = $this->qiniu->rename($key, $new);
        if(false === $result){
            trace($this->qiniu->error);
            $this->error($this->qiniu->errorStr);
        }else{
            $this->success('改名成功');
        }
    }

    /**
     * 批量删除
     * @author yangweijie <yangweijiester@gmail.com>
     */
    public function batchDel(){
        $files = $_GET['key'];
        if(is_array($files) && $files !== array()){
            $files = array_column($files,'value');
            $result = $this->qiniu->delBatch($files);
            if(false === $result){
                $this->error($this->qiniu->errorStr);
            }else{
                $this->success('删除成功');
            }
        }else{
            $this->error('请至少选择一个文件');
        }
    }

    /**
     * 文件详情
     * @author yangweijie <yangweijiester@gmail.com>
     */
    public function detail($key){
        $result = $this->qiniu->info($key);
        if($result){
            if(in_array($result['mimeType'], array('image/jpeg','image/png'))){
                $img = "<img src='{$this->qiniu->downlink($key)}?imageView/2/w/203/h/203'>";
            }else{
                $img = '<img class="file-prev" src="https://dn-portal-static.qbox.me/v104/static/theme/default/image/resource/no-prev.png">';
            }
            $time = date('Y-m-d H:i:s', strval($result['putTime'])/10000000);
            $filesize = format_bytes($result['fsize']);
            $tpl = <<<tpl
            <div class="right-head">
                预览
            </div>
            <div class="right-body">
                <div class="right-body-block">
                    <div class="prev-block">
                        {$img}
                    </div>
                    <div class="file-info-item">
                        外链地址：
                        <div class="file-share-link">{$this->qiniu->downlink($key)}</div>
                    </div>
                    <div class="file-info-item">
                        最后更新时间：<div>{$time}</div>
                    </div>
                    <div class="file-info-item">
                        文件大小：<span class="file-size">{$filesize}</span>
                    </div>
                </div>
            </div>
tpl;
            $this->success('as', '', array('tpl'=>$tpl));
        }else{
            $this->error('获取文件信息失败');
        }

    }

    /**
     * 用uploadify上传单个文件
     * @author yangweijie <yangweijiester@gmail.com>
     */
    public function uploadOne(){
        $file = $_FILES['qiniu_file'];
        $file = array(
            'name'=>'file',
            'fileName'=>$file['name'],
            'fileBody'=>file_get_contents($file['tmp_name'])
        );
        $config = array();
        $result = $this->qiniu->upload($config, $file);
        if($result){
            $this->success('上传成功','', $result);
        }else{
            $this->error('上传失败','', array(
                'error'=>$this->qiniu->error,
                'errorStr'=>$this->qiniu->errorStr
            ));
        }
        exit;
    }
}
