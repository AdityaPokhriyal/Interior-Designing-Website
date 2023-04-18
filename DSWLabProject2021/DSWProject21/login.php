<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: DSWProject.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: DSWProject.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form</title>
  <style>
    html {
      font-family: 'Playfair Display';
    }
  </style>  
</head>
<body>
	<div class="container">
		<form action="login.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800; font-family: 'Playfair Display';">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text" style="font-family: 'Playfair Display';">Don't have an account? <a href="register.php" style="font-family: 'Playfair Display';">Register Here</a>.</p>
		</form>
	</div>
	<script></script>
</body>
</html>