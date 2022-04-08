<?php
	session_start();
	if(!isset($_POST['register'])){
		echo "Something wrong! Check again!";
		exit;
	}
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$name = trim($_POST['name']);
	$pass = trim($_POST['pass']);
    $repass = trim($_POST['repass']);

	if($name == "" || $pass == "" || $repass == ""){
		echo "Name or Pass is empty!";
		exit;
	}

    if(strcmp($pass,$repass)){
		echo "Password Incorrect!";
		exit;
	}

	// set into db
	$sql = "insert into admin(name,pass) values('$name','$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

	if(isset($conn)) {
        mysqli_close($conn);
    }
?>