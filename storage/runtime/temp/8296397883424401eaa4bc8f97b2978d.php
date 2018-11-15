<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:25:"./addons/Comment/sso.html";i:1501917313;}*/ ?>
<?php switch($config['type']): case "3": ?>
<!-- UY BEGIN -->
<div id="uyan_frame"></div>
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=<?php echo $config['youyan_uid']; ?>"></script>
<script type="text/javascript">
    $.post("<?php echo addons_url('SocialComment://Sso/uysso'); ?>");
    $(function(){
        var listobj  = $('#uyan_frame').find('#uyan_cmt_list');
        $("a[href='http://www.uyan.cc']").css({'display': 'none'});
    })
</script>
<style><<?php echo $addons_config['comment_css_youyan']; ?>></style>
<!-- UY END -->
<?php break; case "2": ?>
<!-- CHANYAN BEGIN -->
<div id="SOHUCS" sid="<?php echo $param['type']; ?><?php echo $param['id']; ?>"></div>
<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" ></script>
<script type="text/javascript">
    window.changyan.api.config({
        appid: '<?php echo $config['changyan_appid']; ?>',
        conf: '<?php echo $config['changyan_appkey']; ?>'
    });
</script> <!-- CHANGYAN END -->
<style><?php echo $config['changyan_css']; ?></style>
<?php break; case "1": ?>
<div id="local-comment" class="comment-wrap clearfix">
    <div id="result"></div>

    <div class="comment-editor clearfix">
        <div class="head-face">
            <img id="comment-avatar" src="/public/static/images/df_avatar.png" />
        </div>
        <div class="content">
            <div class="cont-box">
                <textarea class="text" id="comment-text" placeholder="请输入..."></textarea>
                <div class="inner error">请输入内容</div>
                <input type="hidden" name="type" id="comment-page-type" value="<?php echo $param['type']; ?>">
                <input type="hidden" name="id" id="comment-page-id" value="<?php echo $param['id']; ?>">
            </div>
            <div class="tools-box">
                <div class="operator-box-btn">
                    <a href="javascript:;" data-insert="#comment-text" id="select-face-btn" class="face-icon">☺</a>
                    <div class="submit-btn">
                        <a href="javascript:;" id="send-comment" class="btn-disabled">发布</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div  id="info-show" class="list-warp">
        <ul class="comment-list clearfix" id="comment-warp-list">
        </ul>
    </div>

    <div class="more">
        <a href="javascript:;" id="load-comment-more">点击加载更多</a>
    </div>

    <div class="comment-alert" id="info-msg"></div>

</div>

<script id="item-content-tpl" type="text/html">
    <div class="item-warp">
        <div class="head-face">
            <a href="{{user.url}}" target="_user">
                <img src="{{user.avatar}}" />
            </a>
        </div>
        <div class="reply-cont">
            <div class="username">
                <a href="{{user.url}}" target="_user">{{user.nickname}}</a>
                {{if by_user}}
                :回复<a href="{{by_user.url}}" target="_user">@{{by_user.nickname}}</a>
                {{/if}}
            </div>
            <div class="comment-body">{{content | formatEmoji}}</div>
            <div class="comment-reply-warp"></div>
            <div class="comment-footer">
                <div class="comment-actions">
                    <span class="time">{{create_time}}</span>
                    <span class="btns">
                        <a class="digg digg-btn" data-id="{{id}}" href="javascript:;">
                            点赞 <em>{{if digg}}{{digg}}{{/if}}</em>
                        </a>
                        <a class="reply reply-btn" data-reply-id="{{id}}"  href="javascript:;">回复</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</script>

<script id="comment-item-tpl" type="text/html">
    <li class="item" id="comment-item-{{id}}">
        {{include 'item-content-tpl'}}
        <ul class="comment-list clearfix" id="reply-warp-{{id}}"></ul>
    </li>
</script>

<script id="comment-reply-item-tpl" type="text/html">
    <li class="item" id="comment-item-{{id}}">
        {{include 'item-content-tpl'}}
    </li>
</script>

<script id="comment-reply-tpl" type="text/html">
    <div class="reply-editor comment-editor clearfix">
        <div class="reply-form-top">
            <em>◆</em><span>◆</span>
        </div>

        <div class="content">
            <div class="cont-box">
                <textarea class="text" id="reply-text" placeholder="请输入..."></textarea>
                <div class="inner error">请输入内容</div>
                <input type="hidden" name="reply_id" id="comment-reply-id" value="{{id}}">
            </div>
            <div class="tools-box">
                <div class="operator-box-btn">
                    <a href="javascript:;" data-insert="#reply-text" id="select-reply-face" class="face-icon">☺</a>
                    <div class="submit-btn">
                        <a href="javascript:;" id="reply-send-comment">发布</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script id="comment-list-tpl" type="text/html">
    {{each result as val}}
    <li class="item" id="comment-item-{{val.id}}">
        {{include 'item-content-tpl' val}}
        <ul class="comment-list clearfix" id="reply-warp-{{val.id}}">
            {{if val.reply}}
            {{each val.reply as rep}}
            <li class="item" id="comment-item-{{rep.id}}">
            {{include 'item-content-tpl' rep}}
            </li>
            {{/each}}
            {{/if}}
        </ul>
    </li>
    {{/each}}
</script>


<script type="text/javascript">
    var sendUrl = "<?php echo addons_url('comment/local/send'); ?>",
        replyUrl = "<?php echo addons_url('comment/local/reply'); ?>",
        listUrl = "<?php echo addons_url('comment/local/index'); ?>",
        diggUrl = "<?php echo addons_url('comment/local/digg'); ?>",
        listLimit = "<?php echo $config['local_list_limit']; ?>",
        cssLink = "/addons/Comment/assets/css/comment.css";
    if (typeof $.App === 'undefined') {
        var deferred = $.Deferred();
        var style = document.createElement('link');
        style.rel = 'stylesheet';
        style.type = 'text/css';
        style.href = cssLink;
        style.onload = function (e) {
            deferred.resolve(e);
        };
        style.onerror = function (e) {
            deferred.reject(e);
        };
        document.head.appendChild(style);
    } else {
        $.App.load(cssLink);
    }
</script>
<script type="text/javascript" src="/addons/Comment/assets/js/comment.js"></script>
<?php break; endswitch; ?>
