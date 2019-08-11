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
        'title'=>'是否开启:',
        'type'=>'radio',
        'options'=>array(
            '1'=>'开启',
            '0'=>'关闭',
        ),
        'value'=>'1',
    ),
    'comment_type'=>array(
        'title'=>'使用类型:',
        'type'=>'select',
        'options'=>array(
            '1'=>'有言',
            '2'=>'多说',
        ),
        'value'=>'1',
    ),
    'group'=>array(
        'type'=>'group',
        'options'=>array(
            'youyan'=>array(
                'title'=>'友言配置',
                'options'=>array(
                    'comment_uid_youyan'=>array(
                        'title'=>'账号id:',
                        'type'=>'text',
                        'value'=>'90040',
                        'tip'=>'填写自己登录友言后的uid,填写后可进相应官方后台'
                    ),
                )
            ),
            'duoshuo'=>array(
                'title'=>'多说配置',
                'options'=>array(
                    'comment_short_name_duoshuo'=>array(
                        'title'=>'短域名',
                        'type'=>'text',
                        'value'=>'',
                        'tip'=>'每个站点一个域名'
                    ),
                    'comment_form_pos_duoshuo'=>array(
                        'title'=>'表单位置:',
                        'type'=>'radio',
                        'options'=>array(
                            'top'=>'顶部',
                            'buttom'=>'底部'
                        ),
                        'value'=>'buttom'
                    ),
                    'comment_data_list_duoshuo'=>array(
                        'title'=>'单页显示评论数',
                        'type'=>'text',
                        'value'=>'10'
                    ),
                    'comment_data_order_duoshuo'=>array(
                        'title'=>'评论显示顺序',
                        'type'=>'radio',
                        'options'=>array(
                            'asc'=>'从旧到新',
                            'desc'=>'从新到旧'
                        ),
                        'value'=>'asc'
                    )
                )
            )
        )
    )
);
