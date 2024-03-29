<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: ijry <ijry@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------
namespace Home\Model;
use Think\Model;
/**
 * 分类模型
 */
class ChannelModel extends Model {
    /**
     * 获取导航列表，支持多级导航
     * @param  boolean $field 要列出的字段
     * @return array          导航树
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function lists($field = true){
        $map = array('status' => 1);
        $list = $this->field($field)->where($map)->order('sort asc, id asc')->select();
        return list_to_tree($list, 'id', 'pid', '_');
    }
}
