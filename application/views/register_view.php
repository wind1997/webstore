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
	
	<li ><?=anchor(' ', "登录")?></li>
	<li id="current"><?=anchor('register_controller', "注册")?></li>
	
	</ul>
</div>

<div id="content1">
<div id="maincontent">
<?=form_open('register_controller/add')?>
<table>
	<tr>
		<td><i><?="用户名 :"?></i></td>
		<td><?=form_input('name')?></td>
	</tr><tr>
		<td><i><?="真实姓名 :"?></i></td>
		<td><?=form_input('truename')?></td>
	</tr>
	<tr>
		<td><i><?="密码 :"?></i></td>
		<td><?=form_password('password')?></td>
	</tr>
	<tr>
		<td><i><?="邮箱 :"?></i></td>
		<td><?=form_input('email')?></td>
	</tr>
	<tr>
		<td><i><?="驾驶证号 :"?></i></td>
		<td><?=form_input('drivingnum')?></td>
	</tr>
	<tr>
		<td></td>
		<td><?=form_submit('submit', 'register')?></td>
	</tr>
</table>
</form>

