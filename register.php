<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	$mobilenum = $_POST['mobilenum'];
	$aadharnum = $_POST['aadharnum'];
	$pannum = $_POST['pannum'];
	$adrsline1 = $_POST['adrsline1'];
	$adrsline2 = $_POST['adrsline2'];
	$city = $_POST['city'];
	$sstate = $_POST['sstate'];
	$pincode = $_POST['pincode'];


	if ($password == $cpassword) {
		$sql = "SELECT * FROM logindetails WHERE email= '$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO logindetails (username, email, password, mobilenum, aadharnum, pannum, adrsline1, adrsline2, city, sstate, pincode) VALUES ( '$username','$email','$password','$mobilenum','$aadharnum','$pannum','$adrsline1','$adrsline2', '$city', '$sstate', '$pincode')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				$mobilenum = "";
				$aadharnum = "";
				$pannum = "";
				$adrsline1 = "";
				$adrsline2 = "";
				$city = "";
				$sstate = "";
				$pincode = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="css/register.css">

  <title>Register Form</title>
</head>

<body>
  <div class="container">
    <form action="" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
      <div class="reg-in">
        <div class="reg1">
          <div class="input-group">
            <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
          </div>
          <div class="input-group">
            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
          </div>
          <div class="input-group">
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>"
              required>
          </div>
          <div class="input-group">
            <input type="password" placeholder="Confirm Password" name="cpassword"
              value="<?php echo $_POST['cpassword']; ?>" required>
          </div>
          <div class="input-group">
            <input type="number" placeholder="Mobile Number" name="mobilenum" value="<?php echo $mobilenum; ?>"
              required>
          </div>
          <div class="input-group">
            <input type="number" placeholder="Aadhar Number" name="aadharnum" value="<?php echo $aadharnum; ?>"
              required>
          </div>
        </div>

        <!-- -------------------------------------  -------------------------------------- -->


        <div class="reg2">
          <div class="input-group">
            <input type="text" placeholder="Pan number" name="pannum" value="<?php echo $pannum; ?>" required>
          </div>
          <div class="input-group">
            <input type="text" placeholder="Address Line 1" name="adrsline1" value="<?php echo $adrsline1; ?>" required>
          </div>
          <div class="input-group">
            <input type="text" placeholder="Address Line 2" name="adrsline2" value="<?php echo $adrsline2; ?>" required>
          </div>
          <div class="input-group">
            <input type="text" placeholder="City" name="city" value="<?php echo $city; ?>" required>
          </div>
          <div class="input-group">
            <input type="text" placeholder="state" name="sstate" value="<?php echo $sstate; ?>" required>
          </div>
          <div class="input-group">
            <input type="number" placeholder="Pin Code" name="pincode" value="<?php echo $pincode; ?>" required>
          </div>
        </div>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Register</button>
      </div>
      <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
    </form>
  </div>
</body>

</html>