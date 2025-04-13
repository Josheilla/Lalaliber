<html>
	<head>
		<style> 
			body {
				background-color:#ffcccc;
			}
			.log {
				font-size: 15px; 
				padding: 10px 20px; 
				border-radius: 10px; 
				background-color: #ef98aa; 
				color: #000; 
				border: none; 
				cursor: pointer; 
			}
			.log:hover {
				background-color: #ff9999; 
			}
		</style>
	</head>
	<body>
	<table align="right">
		<tr height="50px">
			<th><a href="logout.php" target="page" method="post">
			<button type="submit" name="logout" class="log" onclick="return confirm('Are you sure you want to logout?')">Logout</button></th>
		</tr>
	</table>
	</div>
	</body>
</html>