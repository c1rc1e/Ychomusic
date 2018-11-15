<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"D:\PHPTutorial\WWW/app/admin\view\setting\position.html";i:1497696363;}*/ ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo isset($info['id'])? '编辑' : '新增'; ?>-<?php echo $info['pos_title']; ?></h3>
    </div>
    <div class="panel-body">        
        <form class="form-horizontal form-fixed form-submit" action="<?php echo url("","",true,false);?>">
            <div class="form-group">
                <label class="col-md-2 col-xs-12 text-right control-label">推荐位名称</label>
                <div class="col-md-6 col-xs-12">
                    <input type="text" name="title" class="form-control" value="<?php echo (isset($info['title']) && ($info['title'] !== '')?$info['title']:''); ?>">
                    <span class="help-block">名称不能为空</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 col-xs-12 text-right control-label">字体图标</label>
                <div class="col-md-6 col-xs-12">
                    <input type="text" name="font_icon" class="form-control" value="<?php echo (isset($info['font_icon']) && ($info['font_icon'] !== '')?$info['font_icon']:''); ?>">
                    <span class="help-block">前端css字体图标样式</span>
                </div>
            </div>

            <input type="hidden" name="name" value="<?php echo $info['name']; ?>">
            <input type="hidden" name="id" value="<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:''); ?>">
            <div class="form-group">
                <div class="col-md-offset-2 col-lg-6 text-left">
                    <button onclick="" type="button"
                            class="btn btn-default btn-return">
                        <i class=" icon-arrow-left16 position-right"></i>返回上页
                    </button>
                    <button type="submit" class="btn btn-primary" type="submit">
                        确认提交<i class="icon-arrow-right16 position-right"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>