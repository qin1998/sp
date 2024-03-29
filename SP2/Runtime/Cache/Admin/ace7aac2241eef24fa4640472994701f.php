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
                <table id="weather">
                <tr><td>正在加载中...</td></tr>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function loadweather(){
        var $table = $('#weather');
        var loading = '<tr><td><span class="loding-text">正在加载中</span><span class="loading-process">.</span></td></tr>';
        $table.html(loading);
        var weather_interval = window.setInterval(function(){
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
                url: '<?php echo addons_url("Weather://Weather/getList");?>',
                success:function(data){
                    if(data){
                        var html = [];
                        html.push("<tr><td rowspan="+(data.data.showday+1)+">" + data.data.city + "</tr>");
                        for(var i = 0;i < data.data.showday;i++)
                        {
                            html.push("<tr><td>" + data.data.date[i]+ "</td>");
                            html.push("<td><img src = " + data.data.pictureUrl[i] + "></td>");
                            html.push("<td>" + data.data.temperature[i] + "</td>");
                            html.push("<td>" + data.data.wind[i] +"</td>");
                            html.push("<td>" + data.data.weather[i] + "</td></tr>");
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
                    window.clearInterval(weather_interval);
                }
            }
        );
    }
    $(function(){
        loadweather();// 首次加载 自动ajax一次获取内容
        $('#weather').parents('.bd').prev().find('.wm-refresh').click(function(){
            loadweather();
        });
    })
</script>