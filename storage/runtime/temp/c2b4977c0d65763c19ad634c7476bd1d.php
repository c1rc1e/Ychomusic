<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\PHPTutorial\WWW/app/admin\view\songs\bulk_recommend.html";i:1500857143;}*/ ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">歌曲批量推荐</h3>
    </div>
    <div class="panel-body">

        <form class="form-horizontal form-submit" action="<?php echo url('bulk?type=recommend'); ?>" role="form">
            <div class="form-group">
                <label class="col-sm-2 control-label">操作类型</label>
                <div class="col-sm-4">
                    <label class="radio-inline" style="padding:7px 10px 0 20px">
                        <input type="radio" onclick="$('#remove-warp').hide(); $('#add-warp').show()" name="is_add" value="1" checked>添加
                    </label>
                    <label class="radio-inline ">
                        <input type="radio"  onclick="$('#add-warp').hide();$('#remove-warp').show();" name="is_add" value="0">移除
                    </label>
                </div>
            </div>
            <div id="add-warp">
                <div class="form-group">
                    <label class="col-sm-2 control-label">榜单</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="rank_id">
                            <option value="0">---选择榜单---</option>
                            <?php $_result=get_ranks();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $ss['id']; ?>"><?php echo $ss['name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label text-right col-lg-2">推荐位</label>
                    <div class="col-lg-10">
                        <?php $_5bd3301e1beb6=config('music_position'); if(is_array($_5bd3301e1beb6) || $_5bd3301e1beb6 instanceof \think\Collection || $_5bd3301e1beb6 instanceof \think\Paginator): if( count($_5bd3301e1beb6)==0 ) : echo "" ;else: foreach($_5bd3301e1beb6 as $k=>$vo): ?>
                        <label class="checkbox-inline i-checkboxs">
                            <input type="checkbox" name="position[]" value="<?php echo $k; ?>"><?php echo $vo; ?>
                        </label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="help-block">可选择多个推荐位</span>
                    </div>
                </div>
            </div>

            <div id="remove-warp" style="display: none;">
                <div class="form-group">
                    <label class="col-sm-2 control-label">移除榜单</label>
                    <div class="col-sm-4">
                        <label class="radio-inline i-radios">
                            <input type="radio" name="is_remove_rank" value="1">是
                        </label>
                        <label class="radio-inline i-radios">
                            <input type="radio" name="is_remove_rank" value="0" checked>否
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">移除推荐位</label>
                    <div class="col-sm-4">
                        <label class="radio-inline i-radios">
                            <input type="radio" name="is_remove_pos" value="1">是
                        </label>
                        <label class="radio-inline i-radios">
                            <input type="radio" name="is_remove_pos" value="0" checked>否
                        </label>
                        <span class="help-block">推荐位将会全部移除</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <input type="hidden" name="ids" value="">
                    <button type="submit" class="btn btn-default">
                        确认操作
                    </button>
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-primary m-l-5">
                        取消
                    </button>
                </div>
            </div>
        </form>
    </div>
 </div>