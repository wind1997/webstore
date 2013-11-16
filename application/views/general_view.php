<div id ="show">
<table cellspacing='0'>
	<tr>
		<td><?="车牌号"?></td>
		<td><?="违章类型"?></td>
		<td><?="上传时间"?></td>
		<td><?="是否缴费"?></td>
	</tr>
	 <?php foreach ($query as $item): ?>
	<tr>
	<td><?=anchor('user_controller/content/'.$item->id, $item->carnum)?></td>
		<td><?=$item->type?></td>
		<td><?=$item->time?></td>
		<td><?=$item->deal?></td>
	</tr>
	<?php endforeach; ?>
</table>
</div>

