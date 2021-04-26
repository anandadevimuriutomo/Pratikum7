<html>
<head>
	<title>Membuat Login </title>	
</head>
<body>
	<h3>Laman Login </h3> 
	<form method="post" action="login.php" > <!--membuat form dengan method post, ketika form dikirim akan mengeksekusi file login.php -->	
		<table> <!-- membuat tabel yang berisi text username dan password-->
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td> <
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td> 
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td> 
			</tr>
		</table>
	</form>
</body>
</html>