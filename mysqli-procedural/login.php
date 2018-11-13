<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
</head>
<body>
	<form action="aksi_login.php" method="post" name="frmLogin" id="frmLogin">
		<table width="400" border="1" align="center">
			<tr>
				<th width="160" scope="col"><div align="left">User Id</div></th>
				<th width="224" scope="col"><div align="left">
					<input type="text" name="username" id="username">
				</div></th>
			</tr>
			<tr>
				<td><div align="left">Password</div></td>
				<td><div align="left">
					<input type="password" name="password" id="password">
				</div></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="login" id="btnLogin" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>