<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
	<title><?=$title?></title>
	<?=link_tag('style.css')?>
<script language="javascript">
function AddElement(){
var num,TemO=document.getElementById("add");
var number =document.getElementsByName("number")[0].value;
    for( var i = 0; i < number; i++ )
 	   {
var newInput = document.createElement("input"); 
newInput.type="file"; 
newInput.name="file"+i;
TemO.appendChild(newInput);
var newline= document.createElement("br");
TemO.appendChild(newline);
  } 
}
</script>

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
	<li id="current"><?=anchor('upload_controller', "违章上传")?></li>
	<li><?=anchor('standard_controller', "违章处罚标准")?></li>
	</ul>
</div>

<div id="content1">
<div id="maincontent">

<form action="../index.php/upload_controller/load" method="post"
enctype="multipart/form-data" name="add">
<table>
	<tr>
		<td><i><?="违章车牌号:"?></i></td>
		<td><?=form_input('carnum')?></td>
	</tr><tr>
		<td><i><?="违章类型 :"?></i></td>
		<td><?=form_input('type')?></td>
	</tr>
	<tr>
		<td><i><?="违章时间 :"?></i></td>
		<td id="date"><?=form_input('year')?><i><?=" 年"?></i>
		    <?=form_input('month')?><i><?=" 月"?></i>
			<?=form_input('day')?><i><?=" 日"?></i>
		</td>
		
	</tr>
	<tr>
		<td><i><?="详细描述 :"?></i></td>
		<td><?=form_textarea('content')?></td>
	</tr>
	<tr>
		<td><i><?="图片数量 :"?></i></td>
		<td><input type="text" name='number' /></td>
		
		
	</tr>
		<tr>
		<td><i><input name="" type="button" value='上传图片' onClick="AddElement()"/></i></td>
		<td><div id="add"></div></td>
		
	</tr>
	
	
	<tr>
		<td></td>
		<td><?=form_submit('submit', 'upload')?></td>
	</tr>
</table>
</form>

