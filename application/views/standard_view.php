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
    <li><?=anchor('user_controller', "违章信息")?></li>
	<li><?=anchor('upload_controller', "违章上传")?></li>
	<li id="current"><?=anchor('standard_controller', "违章处罚标准")?></li>
</ul>
</div>

<div id="content1">
<div id="maincontent">

<div id ="show">
<table cellspacing='0'>
	<tr>
		<td><?="违章类型"?></td>
		<td><?="违章扣分"?></td>
		<td><?="违章罚款"?></td>
	</tr>
	 <?php foreach ($query as $item): ?>
	<tr>
		<td><?=$item->type?></td>
		<td><?=$item->score?></td>
		<td><?=$item->fine?></td>
	</tr>
	<?php endforeach; ?>
</table>
</div>


