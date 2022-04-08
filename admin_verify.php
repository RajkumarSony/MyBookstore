<?php
	session_start();
	if(!isset($_POST['submit'])){
		echo "Something wrong! Check again!";
		exit;
	}
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$name = trim($_POST['name']);
	$pass = trim($_POST['pass']);

	if($name == "" || $pass == ""){
		echo "Name or Pass is empty!";
		exit;
	}

	// get from db
	$query = "SELECT * from admin where name='".$name."' AND pass='".$pass."' limit 1";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result)==1){
		$_SESSION['admin'] = true;
		header("Location: admin_book.php");
		exit;
	}
	else{
		echo "Name or pass is wrong. Check again!";
		$_SESSION['admin'] = false;
		exit;
	}

	if(isset($conn)) {
		mysqli_close($conn);
	}
?>