<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:49:"D:\PHPTutorial\WWW/app/admin\view\genre\tree.html";i:1498134568;}*/ ?>
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

				<div class="name cate-item-line">
					<input type="text" name="name" class="text" value="<?php echo $list['name']; ?>">			
				</div>

				<div class="name cate-item-line">
					<input type="text" name="alias" class="text" value="<?php echo $list['alias']; ?>">			
				</div>

				<div class="url cate-item-line">
					<input type="text" name="cover_url" class="text" value="<?php echo $list['cover_url']; ?>">
				</div>
				<?php if($list['pid'] == 0): ?>
				<div class="cate-item-line">
					<a class="btn btn-success btn-xs" title="添加子分类" href="<?php echo url('create?pid='.$list['id']); ?>">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				<?php endif; ?>
				<span class="cate-item-line msg"></span>

				<div class="btn-toolbar cate-item-btn">
					<a class="table-action-btn" title="编辑" href="<?php echo url('edit?id='.$list['id'].'&pid='.$list['pid']); ?>">
						<i class="fa fa-pencil text-info"></i>
					</a>
                    <?php if($list['status'] == 1): ?>
                    <a class="table-action-btn ajax-get" title="禁用[<?php echo $list['name']; ?>]" href="<?php echo url('setStatus?id='.$list['id'].'&status=0'); ?>">
						<i class="fa fa-ban text-warning"></i>
                    </a>
                    <?php elseif($list['status'] == 0): ?>
					<a class="table-action-btn ajax-get" title="启用[<?php echo $list['name']; ?>]" href="<?php echo url('setStatus?id='.$list['id'].'&status=1'); ?>">
                        <i class="fa fa-check-circle-o text-success"></i>
                    </a>
                    <?php endif; ?>
					<a class="confirm ajax-del table-action-btn" data-remove=".cate-item" title="<?php echo $list['name']; ?>" href="<?php echo url('delete?id='.$list['id']); ?>">
                        <i class="fa fa-times text-danger"></i>
                    </a>
				</div>
				<input type="hidden" name="id" value="<?php echo $list['id']; ?>">
			</form>
		</dt> <?php if(isset($list['_child'])): ?>
    <dd>
        <?php echo action('Genre/tree', [$list['_child']], 'controller', true); ?>
    </dd>
    <?php endif; ?>
</dl>
<?php endforeach; endif; else: echo "" ;endif; ?>