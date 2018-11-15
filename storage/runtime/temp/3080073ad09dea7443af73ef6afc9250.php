<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:24:"./addons/Pay/widget.html";i:1507727169;}*/ ?>
<link rel="stylesheet" type="text/css" href="/addons/Pay/assets/css/pay.css">

<div class="charge-select clearfix">
	<div class="label"> 你的账号：</div>
	<div class="charge-content">
		<a target="_blank" class="red" href="<?php echo $user['url']; ?>">
			<b class="nickname"><?php echo $user['nickname']; ?></b>
			<b class="uid">(ID:<?php echo $user['uid']; ?>)</b>
		</a>
		<span class="pull-right">你的金币余额：<b class="red balance"><?php echo $user['coin']; ?></b></span>
	</div>
</div>

<div class="charge-select clearfix">
	<div class="label"> 充值数量：</div>
	<div class="charge-content">
		<ul id="package-list" class="package-list clearfix">
			<li data-price="5" data-packageid="package1" class="item active">
				<a href="javascript:void(0);">
					<b class="amount"><?php echo $payConfig['pay_ratio']*5; ?>金币</b>
					<b class="price">¥5</b>
				</a>
			</li>

			<li data-price="10" data-packageid="package2" class="item">
				<a href="javascript:void(0);">
					<b class="amount"><?php echo $payConfig['pay_ratio']*10; ?>金币</b>
					<b class="price">¥10</b>
				</a>
			</li>

			<li data-price="30" data-packageid="package3" class="item">
				<a href="javascript:void(0);">
					<b class="amount"><?php echo $payConfig['pay_ratio']*30; ?>金币</b>
					<b class="price">¥30</b>
				</a>
			</li>
			<li data-price="50" data-packageid="package4" class="item">
				<a href="javascript:void(0);">
					<b class="amount"><?php echo $payConfig['pay_ratio']*50; ?>金币</b>
					<b class="price">¥50</b>
				</a>
			</li>

			<li data-price="100" data-packageid="package5" class="item">
				<a href="javascript:void(0);">
					<b class="amount"><?php echo $payConfig['pay_ratio']*100; ?>金币</b>
					<b class="price">¥100</b>
				</a>
			</li>

			<!--li data-price="6" data-packageid="-1" class="item">
				<a href="javascript:void(0);" data-text="custom">
					<b class="amount">自定义</b>
					<b class="price">充值金额</b>
				</a>
			</li-->
		</ul>
	</div>
</div>

<div class="charge-select clearfix">
	<div class="label"> 应付金额：</div>
	<div class="charge-content">
		<b class="red balance" id="showPrice">5.00</b>元
	</div>
</div>

<div class="charge-select clearfix">
	<div class="label"> 支付方式：</div>
	<div class="charge-content">
		<ul id="charge-list" class="charge-source-list clearfix">
			<li class="item  active">
				<a href="javascript:void(0);" data-text="custom">
					<img src="/addons/Pay/assets/images/alipay.jpg">
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="charge-select clearfix">
	<div class="label"> </div>
	<div class="charge-content">
		<form id="pay-form" class="form-horizontal" method="post"  target="_blank" action="<?php echo addons_url('pay/alipay'); ?>">
			<input type="hidden" name="out_trade_no" value="<?php echo $out_trade_no; ?>"/>
			<input type="hidden" name="nickname" value="<?php echo $user['nickname']; ?>"/>
			<input type="hidden" name="uid" value="<?php echo $user['uid']; ?>"/>
			<input type="hidden" id="pay-price" name="price" value="5" />		
			<input id="pay-btn" type="submit"  value="立即支付" />
		</form>
	</div>
</div>
<script type="text/javascript">
window.onload=function(){ 
	$('#package-list').find('li').click(function(){
		var price = $(this).attr('data-price');
		$('#showPrice').text(price+'.00');
		$('#pay-price').val(price);
		$(this).addClass('active').siblings().removeClass('active');
	})
}
</script>


