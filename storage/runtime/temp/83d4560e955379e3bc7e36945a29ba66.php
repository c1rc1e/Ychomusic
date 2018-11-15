<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:27:"./addons/Upload/widget.html";i:1508704435;}*/ ?>
<link rel="stylesheet" href="/public/static/libs/jymusic/css/jymusic.fileupload.css">
<?php if($addons_param['isBatch'] != 'batch'): ?>
<div class="file-upload-modal" id="upload-modal">
	<div class="modal-bg"></div>
	<div class="modal-content" id="upload-modal-content">
		<h1 class="modal-title" control-move="" style="cursor: move;">
			文件上传
		</h1>
		<div class='modal-close close-pos-r-t'>✖</div>
		<div class="file-upload-warp" id="modal-upload-warp">
	        <!-- The table listing the files available for upload/download -->
	        <table role="presentation" class="table table-striped">
	        	<tbody class="files" id="table-files"></tbody>
	        </table>
	        <div class="fileupload-progress" id="global-progress" style="display:none">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">正在处理...</p>
        </td>
        <td class="">
            {% if (!i && !o.options.autoUpload) { %}
            <button class="btn btn-primary start" disabled>
                <span>上传</span>
            </button>
            {% } %}
            {% if (!i) { %}
            <button class="btn btn-warning cancel" onclick="$.UploadModal.close()">
                <span>取消</span>
            </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">错误</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <span>删除</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel"  onclick="$.UploadModal.close()">
                    <span>取消</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<script>
if (typeof jQuery === 'undefined') {
	document.write('<script type="text/javascript" src="/public/static/libs/jquery/jquery-1.10.2.min.js"><\/script>');
}
</script>
<script type="text/javascript" src="/public/static/libs/jquery-file-upload/jquery.fileupload.full.min.js"></script>
<script type="text/javascript">
    var uploadDom = <?php echo json_encode($addons_param['element']); ?>;
    var bindServer = "<?php echo $addons_param['bindServer']; ?>";
    var isBatch = "<?php echo $addons_param['isBatch']; ?>";
    var activeDrive = "<?php echo $addons_param['activeDrive']; ?>";

    <?php switch($addons_param['activeDrive']): case "qiniu": ?>
        var qiniuGetUrl  = "<?php echo addons_url('upload/qiniu/sign'); ?>";
    <?php break; case "alioss": ?>
        var ossGetUrl  = "<?php echo addons_url('upload/alioss/sign'); ?>";
    <?php break; default: ?>
        var uploadServer = "<?php echo $addons_param['uploadServer']; ?>";
    <?php endswitch; ?>
</script>
<script type="text/javascript" src="/addons/Upload/assets/js/upload.js"></script>
