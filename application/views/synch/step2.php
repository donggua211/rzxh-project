<div id="nav">
	<span class="action-span"><a href="<?php echo site_url() ?>"  target="_top">管理系统</a></span>
	配置系统 -> 第三步
</div>

<div id="main">
	<div class="room_main">
		机房数据已经获取</br>
		<?php print_r($rooms); ?></br>
		
		第四步：获取机房数据：</br>
		请按“确定”继续。</br>
		<form action="<?php echo site_url('configer/synch') ?>" method="post" name="addstaff">
		<div class="button-div">
			<input type="hidden" value="3" name="step">
			<input type="submit" class="button" value=" 确定 " name="submit">
			<input type="reset" class="button" value=" 重置 " name="reset">
		</div>
		</form>
	<div>
</div>