<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: ijry <ijry@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------
return array(
    'title'=>array(//配置在表单中的键名 ,这个会是config[title]
        'title'=>'显示标题:',    //表单的文字
        'type'=>'text',         //表单的类型：text、textarea、checkbox、radio、select等
        'value'=>'开发团队信息',  //表单的默认值
    ),
    'width'=>array(
        'title'=>'显示宽度:',
        'type'=>'select',
        'options'=>array(
            '1'=>'1格',
            '2'=>'2格',
            '4'=>'4格'
        ),
        'value'=>'2'
    ),
    'display'=>array(
        'title'=>'是否显示:',
        'type'=>'radio',
        'options'=>array(
            '1'=>'显示',
            '0'=>'不显示'
        ),
        'value'=>'1'
    ),
    'producer'=>array(
        'title'=>'总策划:',
        'type'=>'text',
        'value'=>'一点科技'
    ),
    'codeteam'=>array(
        'title'=>'产品设计及研发团队:',
        'type'=>'text',
        'value'=>'一点科技'
    ),
    'uiteam'=>array(
        'title'=>'界面及用户体验团队:',
        'type'=>'text',
        'value'=>'一点科技'
    ),
    'website'=>array(
        'title'=>'官方网址:',
        'type'=>'text',
        'value'=>'http://www.yidiannet.cn'
    ),
    'qqgroup'=>array(
        'title'=>'官方QQ群:',
        'type'=>'text',
        'value'=>'130747567'
    ),
    'contact'=>array(
        'title'=>'联系我们:',
        'type'=>'text',
        'value'=>'yi@yidiannet.cn'
    )
);
