<?php if (!defined('THINK_PATH')) exit();?><div class="span<?php echo ($addons_config["width"]); ?>">
    <div class="columns-mod">
        <div class="hd cf">
            <h5>产品团队</h5>
            <div class="title-opt">
            </div>
        </div>
        <div class="bd">
            <div class="sys-info">
                <table>
                    <tr>
                        <th>总策划</th>
                        <td><?php echo ($addons_config["producer"]); ?></td>
                    </tr>
                    <tr>
                        <th>产品设计及研发团队</th>
                        <td><?php echo ($addons_config["codeteam"]); ?></td>
                    </tr>
                    <tr>
                        <th>界面及用户体验团队</th>
                        <td><?php echo ($addons_config["uiteam"]); ?></td>
                    </tr>
                    <tr>
                        <th>官方网址</th>
                        <td><a href="<?php echo ($addons_config["website"]); ?>" target="_blank"><?php echo ($addons_config["website"]); ?></a></td>
                    </tr>
                    <tr>
                        <th>官方QQ群</th>
                        <td><?php echo ($addons_config["qqgroup"]); ?></td>
                    </tr>
                    <tr>
                        <th>联系我们</th>
                        <td><?php echo ($addons_config["contact"]); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>