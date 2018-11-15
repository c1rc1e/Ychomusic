<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:27:"./addons/Editor/widget.html";i:1498134844;}*/ ?>
<?php if($addons_config['editor_wysiwyg'] == '1'): ?>
<link type="text/css" href="/addons/Editor/assets/wangEditor/css/wangEditor.min.css" rel="stylesheet" />
<script type="text/javascript" src="/addons/Editor/assets/wangEditor/js/wangEditor.min.js?1.0"></script>
<script type="text/javascript">
    //编辑器
    var editor = new wangEditor('<?php echo $addons_param['element']; ?>');
    // 颜色
    editor.config.menus = [
        'source',
        'bold',
        'underline',
        'italic',
        'strikethrough',
        'eraser',
        'forecolor',
        'bgcolor',
        'quote',
        'fontfamily',
        'fontsize',
        'head',
        'unorderlist',
        'orderlist',
        'alignleft',
        'aligncenter',
        'alignright',
        'link',
        'unlink',
        'table',
        'emotion',
        'img',
        'insertcode',
        'undo',
        'redo',
        'fullscreen'
    ];
    editor.config.menuFixed = false;
    editor.config.uploadImgUrl = "<?php echo $addons_param['uploadServer']; ?>?file_type=image&upload_type=wangEdit2";
    editor.config.uploadImgFileName = 'files';
    editor.create();
</script>
<?php endif; ?>