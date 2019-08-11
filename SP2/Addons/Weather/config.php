<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: ijry <ijry@qq.com> <http://www.corethink.cn>
// +----------------------------------------------------------------------
return array(
    'status'=>array(
        'title'=>'是否显示:',
        'type'=>'radio',
        'options'=>array(
            '1'=>'显示',
            '0'=>'不显示'
        ),
        'value'=>'1'
    ),
    'title'=>array(
        'title'=>'显示标题:',
        'type'=>'text',
        'value'=>'天气预报',
    ),
    'city'=>array(
        'title'=>'显示城市',
        'type'=>'text',
        'tip'=>'前台显示可不填',
        'value'=>'南京'
    ),
    'showplace'=>array(
        'title'=>'显示位置',
        'type'=>'checkbox',
        'options'=>array(
            '1'=>'前台',
            '0'=>'后台'
        ),
        'value'=>array('0', '1')
    ),
    'showday'=>array(
        'title'=>'显示天数',
        'type'=>'select',
        'options'=>array(
            '1'=>'1天',
            '2'=>'2天',
            '3'=>'3天',
            '4'=>'4天'
        ),
        'value'=>'4',
    ),
    'ak'=>array(
        'title'=>'百度密钥',
        'type'=>'text',
        'value'=>'51da9f03c9731fa65316f2c93c13cb26'
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
    )
);
