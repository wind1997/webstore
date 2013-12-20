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
	<?php if ($login_user == 'admin'):?>
	<li id="current"><?=anchor('user_controller', "违章信息")?></li>
	<li><?=anchor('upload_controller', "违章上传")?></li>
	<li><?=anchor('standard_controller', "违章处罚标准")?></li>
	<?php elseif ($login_user):?>
	<li id="current"><?=anchor('user_controller', "违章信息")?></li>
	<li><?=anchor('car_controller', "添加车辆")?></li>
	<?php else:?>
	<li id="current"><?=anchor(' ', "登录")?></li>
	<li><?=anchor('register_controller', "注册")?></li>
	<?php endif;?>
	</ul>
</div>

<div id="content1">
<div id="maincontent">

	