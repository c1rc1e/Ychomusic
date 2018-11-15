<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:26:"./addons/Links/widget.html";i:1500872752;}*/ ?>
<?php if($addons_config['link_type'] == 1): ?><!-- 普通友情链接 -->
  <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	<li style="margin:5px; display: inline-block;"><a href="<?php echo $vo['link']; ?>" target="_blank"><?php echo $vo['title']; ?></a></li>
  <?php endforeach; endif; else: echo "" ;endif; elseif($addons_config['link_type'] == 2): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
   <li style="margin:5px; display: inline-block;">
		<a href="<?php echo $vo['link']; ?>" target="_blank" >
			<img src="<?php echo $vo['cover_url']; ?>" style="max-height:60px" title="<?php echo $vo['title']; ?>"/>
		</a>
	</li>
  <?php endforeach; endif; else: echo "" ;endif; else: ?><!-- 图片友情链接 -->
  <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
   <li style="margin:5px; display: inline-block;">
		<a href="<?php echo $vo['link']; ?>" target="_blank">
			<div><img style="max-height:50px" src="<?php echo $vo['cover_url']; ?>"></div>
			<span style="width:100%; display:block; text-align:center"><?php echo $vo['title']; ?></span>
		</a>		
   </li>	
  <?php endforeach; endif; else: echo "" ;endif; endif; ?>
