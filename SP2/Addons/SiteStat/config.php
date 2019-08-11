<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: ijry <ijry@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------
return array(
    'title'=>array(
        'title'=>'显示标题:',
        'type'=>'text',
        'value'=>'系统信息',
    ),
    'width'=>array(
        'title'=>'显示宽度:',
        'type'=>'select',
        'options'=>array(
            '1'=>'1格',
            '2'=>'2格',
            '4'=>'4格'
        ),
        'value'=>'4'
    ),
    'display'=>array(
        'title'=>'是否显示:',
        'type'=>'radio',
        'options'=>array(
            '1'=>'显示',
            '0'=>'不显示'
        ),
        'value'=>'1'
    )
);
