<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" method="post" action="admin_verify.php">
		<center><h1>Login Form</h1></center><br><br>
		<div class="form-group">
			<label for="name" class="control-label col-md-4">UserName</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Password</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
		<center>
			<br/>
			<button type="submit" name="submit" class="btn btn-primary">Login</button>
			<br/><br/>
			<a href="./register.php">I am new user!</a>
		</center>
	</form>

<?php
	require_once "./template/footer.php";
?>