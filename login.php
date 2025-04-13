<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<style>
		body {
		  font-family: 'Roboto', serif; 
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  height: 100vh;
		  margin: 0;
		  background-color: #b66878;
		}

		.login-container {
		  width: 300px;
		  padding: 20px;
		  border: 1px solid black;
		  border-radius: 5px;
		  background-color: #efc3ca;
		}

		.login-container h2 {
		  text-align: center;
		  color: #b66878;
		}

		.login-container input[type="text"],
		.login-container input[type="password"] {
		  width: 100%;
		  padding: 10px;
		  margin: 8px 0;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		.login-container input[type="submit"] {
		  width: 100%;
		  background-color: #b66878; 
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		  background-color: #b66878;
		}

		.login-container input[type="submit"]:hover {
		  background-color: #ff91a2; 
		}

    </style>


  </style>
</head>
<body>
	<div class="login-container">
    <h2><center>Login</center></h2><br>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo "<p style='color:red;'>Incorrect Manager ID or Password!</p>";
    }
    ?>
	<div align="center">
	<table>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<tr>
        <td><label for="manager_id">Manager ID:</label></td>
        <td><input type="text" id="manager_id" name="manager_id" required><br></td>
		</tr>
		<tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" id="password" name="password" required><br></td>
		</tr>
	</table>
        <br><input type="submit" value="Login">
    </form>
	</div>

    <?php
		require("connection.php");
		$myobject = new myCon();

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$manager_id = $_POST['manager_id'];
			$password = $_POST['password'];

			$query = "SELECT * FROM manager WHERE manager_id = :manager_id AND password = :password";
			$stmt = $myobject->getConnection()->prepare($query);
			$stmt->execute(array(':manager_id' => $manager_id, ':password' => $password));
			$result = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($result) {
				session_start();
				$_SESSION['manager_id'] = $manager_id;
				header("Location: frameset.php");
				exit;
			} else {
				header("Location: login.php?error=1");
				exit;
			}
		}
	?>



</body>
</html>
