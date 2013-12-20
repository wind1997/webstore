<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
	<title><?=$title?></title>
	<?=link_tag('style.css')?>
	
</head>
<body>
<div id="container">
<div id="main">

<div id="logo">
	<h1><?=$title?></h1>
</div>
<div id="menu">
<ul>
<li id="current"><?=anchor('user_controller', "返回")?></li>
</ul>
</div>

<div id="content1">
<div id="maincontent">

<table>
 <?php foreach ($query as $item): ?>
	<tr>
		<td><i><?="违章时间 :"?></i></td>
		<td id="date"><?=$item->year?><i><?=" 年 "?></i>
		    <?=$item->month?><i><?=" 月 "?></i>
			<?=$item->day?><i><?=" 日 "?></i>
		</td>
	</tr><tr>
		<td><i><?="违章扣分 :"?></i></td>
		<td><?=$item->score?><i><?=" 分 "?></i></td>
	</tr><tr>
		<td><i><?="违章罚金 :"?></i></td>
		<td><?=$item->fine?><i><?=" ￥ "?></i></td>
	</tr><tr>
		<td><i><?="详细描述 :"?></i></td>
		<td><div id="detail"><?=$item->content?></div></td>
	</tr>
	<?php endforeach; ?>
	
	<tr>
		<td><i><?="现场图片 :"?></i></td>
		<td></td>
	</tr>
	
</table><div id="pic">
<?php foreach ($pquery as $pitem): ?>
<?php echo"<image width='300px' height='200px'src='../../../$pitem->src' alt=''></image>"?>
		<?php endforeach; ?></div>
