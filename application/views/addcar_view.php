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
<?php if ($login_user):?>
<i><?='您以'.$login_user.'登录'?></i>
	<?=anchor('logout_controller', "退出>>")?>
<?php endif;?>
<div id="menu">
<ul>
	
	<li><?=anchor('user_controller', "违章信息")?></li>
	<li id="current"><?=anchor('car_controller', "添加车辆")?></li>
	
	</ul>
</div>

<div id="content1">
<div id="maincontent">

<?=form_open('car_controller/add')?>
<table>
	<tr>
		<td><i><?="车牌号 :"?></i></td>
		<td><?=form_input('carnum')?></td>
	</tr>
	<tr>
		<td></td>
		<td><?=form_submit('submit', '添加')?></td>
	</tr>
</table>
</form>

