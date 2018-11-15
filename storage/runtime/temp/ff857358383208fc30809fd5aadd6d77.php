<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"D:\PHPTutorial\WWW/app/admin\view\channel\tree.html";i:1497750599;}*/ ?>
<?php if(is_array($tree) || $tree instanceof \think\Collection || $tree instanceof \think\Paginator): $i = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
	<dl class="cate-item">
		<dt class="clearfix">
			<form action="<?php echo url('update'); ?>" method="post">
				<div class="fold cate-item-line">
                    <i class="fa"></i>
                </div>
				<div class="order cate-item-line">
                    <input type="text" name="sort" class="text input-mini" value="<?php echo $list['sort']; ?>">
                </div>
				<div class="url cate-item-line">
					<input type="text" name="url" class="text" value="<?php echo $list['url']; ?>">
				</div>

				<div class="name cate-item-line">
					<input type="hidden" name="id" value="<?php echo $list['id']; ?>">
					<input type="text" name="title" class="text" value="<?php echo $list['title']; ?>">				
				</div>
				<div class="cate-item-line">
					<a class="btn btn-success btn-xs open-form-modal" title="添加子导航" href="<?php echo url('create?pid='.$list['id']); ?>">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				<span class="cate-item-line msg"></span>

				<div class="btn-toolbar cate-item-btn">
					<a class="table-action-btn open-form-modal" title="编辑" href="<?php echo url('edit?id='.$list['id'].'&pid='.$list['pid']); ?>">
						<i class="fa fa-pencil text-info"></i>
					</a>
                    <?php if($list['status'] == 1): ?>
                    <a class="table-action-btn ajax-get" title="禁用导航[<?php echo $list['title']; ?>]" href="<?php echo url('setStatus?id='.$list['id'].'&status=0'); ?>">
						<i class="fa fa-ban text-warning"></i>
                    </a>
                    <?php elseif($list['status'] == 0): ?>
					<a class="table-action-btn ajax-get" title="启用导航[<?php echo $list['title']; ?>]" href="<?php echo url('setStatus?id='.$list['id'].'&status=1'); ?>">
                        <i class="fa fa-check-circle-o text-success"></i>
                    </a>
                    <?php endif; ?>
					<a class="confirm ajax-del table-action-btn" data-remove=".cate-item" title="导航-<?php echo $list['title']; ?>" href="<?php echo url('delete?id='.$list['id']); ?>">
                        <i class="fa fa-times text-danger"></i>
                    </a>
				</div>
			</form>
		</dt>
		<?php if(isset($list['_child'])): ?>
		<dd>
			<?php echo action('Channel/tree', [$list['_child']], 'controller', true); ?>
		</dd>
		<?php endif; ?>
	</dl>
<?php endforeach; endif; else: echo "" ;endif; ?>
