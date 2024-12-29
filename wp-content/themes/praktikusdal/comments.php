<?php
	$marksArray = getMarks(get_the_ID());
?>
<? if (!empty($marksArray)): ?>
    <div class="mark-container">
		<? foreach($marksArray as $markItem):?>
			<div class="mark-item">
				<span class="mark-item-text"><?php echo $markItem->name;?></span>
			</div>
		<? endforeach; ?>
	</div>
<? endif; ?>
<div id="mc-container"></div>
<script type="text/javascript">
cackle_widget = window.cackle_widget || [];
cackle_widget.push({widget: 'Comment', id: 72427});
(function() {
    var mc = document.createElement('script');
    mc.type = 'text/javascript';
    mc.async = true;
    mc.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cackle.me/widget.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
})();
</script>
<a id="mc-link" href="http://cackle.me">Комментарии для сайта <b style="color:#4FA3DA">Cackl</b><b style="color:#F65077">e</b></a>