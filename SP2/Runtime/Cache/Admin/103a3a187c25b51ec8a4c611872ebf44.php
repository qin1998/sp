<?php if (!defined('THINK_PATH')) exit();?><div class="span<?php echo ($addons_config["width"]); ?>">
    <div class="columns-mod">
        <div class="hd cf">
            <h5><?php echo ($addons_config["title"]); ?></h5>
            <div class="title-opt">
                <a class="wm-refresh" href="javascript:;"><i class="reload"></i></a>
            </div>
        </div>
        <div class="bd">
            <div class="sys-info">
                <table id="qiubai">
                <tr><td>正在加载中...</td></tr>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function refresh(){
        var $table = $('#qiubai');
        var loading = '<tr><td><span class="loding-text">正在加载中</span><span class="loading-process">.</span></td></tr>';
        $table.html(loading);
        var qiubai_interval = window.setInterval(function(){
            $process = $table.find('.loading-process');
            $count = $process.text().length;
            $target = ($count+1) %10;
            $target_process = [];
            for(i=0;i<=$target; i++){
                $target_process.push('.');
            }
            $process.text($target_process.join(''));
        },150);
        $.ajax({
                url: '<?php echo addons_url("QiuBai://QiuBai/getList");?>',
                success:function(data){

                    if(data.status){
                        var html = [];
                        for (i in data.data){

                            html.push("<tr><td>" + data.data[i].content+ "</td></tr>")
                        }
                        html = html.join('');
                        $table.html(html);
                    }else{
                        $table.html('<tr><td>'+ data.info +'</td></tr>')
                    }
                },
                error:function(XMLHttpRequest, textStatus, errorThrown){
                    $table.html('<tr><td>更新失败</td></tr>')
                },
                complete:function(XMLHttpRequest, textStatus){
                    window.clearInterval(qiubai_interval);
                }
            }
        );
    }
    $(function(){
        refresh();// 首次加载 自动ajax一次获取内容
        $('#qiubai').parents('.bd').prev().find('.wm-refresh').click(function(){
            refresh();
        });
    })
</script>