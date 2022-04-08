<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" method="post" action="reg_verify.php">
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
        <div class="form-group">
			<label for="pass" class="control-label col-md-4">Re-Password</label>
			<div class="col-md-4">
				<input type="password" name="repass" class="form-control">
			</div>
		</div>
	    <center>
                <br/>
                <button type="submit" name="register" class="btn btn-primary">Register</button>
                <br/><br/>
                <a href="./admin.php">I have already an Account!</a>
        </center>
	</form>
	

<?php
	require_once "./template/footer.php";
?>