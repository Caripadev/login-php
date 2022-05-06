<?php
$page_title = 'Login';
include_once('layout/header.php');  
?>


		<div class="login">
			<h1>Login</h1>
			<form action="aut.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" class="btn btn-dark" value="Login">
			</form>
		</div>
		
<?php include_once('layout/footer.php'); ?>