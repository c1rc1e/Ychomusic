<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:27:"./addons/Slider/widget.html";i:1520174840;}*/ ?>
<?php if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): if(!isset($addons_param['type'])): ?>
<link rel="stylesheet" type="text/css" href="/public/static/libs/swiper/css/swiper.min.css">
<script src="/public/static/libs/swiper/js/swiper.jquery.min.js"></script>
<style>
.swiper-container {width: 1140px;height: 360px;margin-top: 15px;
.swiper-pagination-bullet {width: 30px;height: 4px;border-radius: 0;background: #000;opacity: .2;}
.swiper-pagination-bullet-active {background-color: #e73c31;opacity: 1;}
</style>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
        <div class="swiper-slide" data-url="<?php echo url('index/index', 'id=5&name=jy'); ?>">
            <a href="<?php echo $vo['link']; ?>"><img src="<?php echo $vo['cover_url']; ?>"></a>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!-- 如果需要分页器 -->
    <div class="swiper-pagination"></div>

    <!-- 如果需要导航按钮 -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
</div>
<script>
$(document).ready(function () {
  var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
    autoplay: 5000,
    // 如果需要分页器
    pagination: '.swiper-pagination',
    // 如果需要前进后退按钮
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
  })
})
</script>
<?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
    <li class="relative">
        <a title="<?php echo $vo['title']; ?>" href="<?php echo $vo['link']; ?>">
            <img src="<?php echo $vo['cover_url']; ?>">
            <span class="focus_title"><?php echo $vo['title']; ?></span>
        </a>
    </li>
    <?php endforeach; endif; else: echo "" ;endif; endif; endif; ?>
