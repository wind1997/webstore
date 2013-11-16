<?=$tips?>
<?=form_open('login_controller/login')?>
<table>
	<tr>
		<td><i><?="用户名 :"?></i></td>
		<td><?=form_input('name')?></td>
	</tr>
	<tr>
		<td><i><?="密码  :"?></i></td>
		<td><?=form_password('password')?></td>
	</tr>
	<tr>
		<td></td>
		<td><?=form_submit('submit', 'Login')?></td>
	</tr>
</table>
</form>
</body>
</html>
