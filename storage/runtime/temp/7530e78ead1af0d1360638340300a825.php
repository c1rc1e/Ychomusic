<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"D:\PHPTutorial\WWW/app/admin\view\songs\bulk_changes.html";i:1500690652;}*/ ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">批量修改字符</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">          
                <form class="form-horizontal form-submit" action="<?php echo url('bulk?type=changes'); ?>" role="form">
                    <div class="form-group">
                       <label class="col-sm-2 control-label">所属分类</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="genre_id">
                                <option value="">-----选择-----</option>
                                <?php $_result=get_genre_tree('', '', true);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$genre): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $genre['id']; ?>"><?php echo $genre['title_show']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <label class="col-sm-2 control-label">所属服务器</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="server_id">
                                <option value="">-----选择-----</option>
                                <?php $_result=get_server();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $ss['id']; ?>"><?php echo $ss['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">所属用户</label>
                        <div class="col-sm-4">
                            <input type="hidden" name="up_uname" class="form-control"  value="">
                            <input type="text" name="up_uid" class="form-control"  value=""  placeholder="填写用户id">
                        </div>

                        <label class="col-md-2 control-label">试听次数</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="listens" value="">
                        </div>
                    </div>         
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">下载次数</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="download" value="">
                        </div>
                        <label class="col-md-2 control-label">收藏次数</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="favtimes" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">顶次数</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="digg" value="">
                        </div>

                        <label class="col-md-2 control-label">踩次数</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="bury" value="">
                        </div>
                    </div>
                    <input type="hidden" name="ids" value="">
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-default">
                                确认修改
                            </button>
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-primary m-l-5">
                                取消
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>