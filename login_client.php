<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: client.php");
}

if (isset($_POST['submit'])) {
	$clientemail = $_POST['clientemail'];
	$clientpassword = md5($_POST['clientpassword']);

	$sql = "SELECT * FROM logindetails WHERE clientemail='$clientemail' AND clientpassword='$clientpassword'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['clientusername'] = $row['clientusername'];
		header("Location: client.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>