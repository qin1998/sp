<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: ijry <ijry@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------
namespace Home\Controller;
/**
 * 前台标签控制器
 * @author ijry <ijry@qq.com>
 */
class TagsController extends HomeController {
    /**
     * 搜索相关标签
     * @author ijry <ijry@qq.com>
     */
    public function tags(){
        $tags =  D('Tags')->searchTags($_GET['q']);
        $data = array();
        foreach($tags as $value){
            $data[] = array('id' => $value['title'], 'title'=> $value['title']);
        }
        echo json_encode($data);
    }
}
