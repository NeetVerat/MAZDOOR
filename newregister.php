<?php

error_reporting(0)

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/newregister.css" />
  <title>Register - Mazdoor</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="register_worker.php" method="POST" enctype="multipart/form-data">
        <h1>Create Worker Account</h1>
        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" />
        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" />
        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" />
        <input type="password" placeholder="Confirm Password" name="cpassword"
          value="<?php echo $_POST['cpassword']; ?>" />
        <input type="text" placeholder="First Name" name="firstname" value="<?php echo $firstname; ?>" />
        <input type="text" placeholder="Last Name" name="lastname" value="<?php echo $lastname; ?>" />
        <input type="text" placeholder="Middle Name" name="middlename" value="<?php echo $middlename; ?>" />
        <input type="date" placeholder="Birthday" name="bdate" value="<?php echo $bdate; ?>" />
        <input type="text" placeholder="Phone Number" name="phoneno" value="<?php echo $phoneno; ?>" />
        <input type="text" placeholder="Alternative Number" name="altno" value="<?php echo $altno; ?>" />
        <input type="text" placeholder="Aadhar Card Number" name="aadharcard" value="<?php echo $aadharcard; ?>" />
        <input type="file" placeholder="Upload aadharfront" name="aadharfront" value="<?php echo $aadharfront; ?>" />
        <input type="file" placeholder="Upload aadharback" name="aadharback" value="<?php echo $aadharback; ?>" />
        <input type="text" placeholder="Pan Card Number" name="workerpanno" value="<?php echo $workerpanno; ?>" />
        <input type="file" placeholder="Upload pan front" name="panfront" value="<?php echo $panfront; ?>" />
        <input type="text" placeholder="Address Line 1" name="add1" value="<?php echo $add1; ?>" />
        <input type="text" placeholder="Address Line 2" name="add2" value="<?php echo $add2; ?>" />
        <input type="text" placeholder="Address Line 3" name="add3" value="<?php echo $add3; ?>" />
        <input type="text" placeholder="City" name="City" value="<?php echo $city; ?>" />
        <input type="text" placeholder="State" name="state" value="<?php echo $state; ?>" />
        <input type="text" placeholder="Pincode" name="pincode" value="<?php echo $pincode; ?>" />
        <input type="file" placeholder="Upload Address front" name="addfront" value="<?php echo $addfront; ?>" />
        <input type="file" placeholder="Upload Address back" name="addback" value="<?php echo $addback; ?>" />
        <button name="submit">SignUp</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="register_client.php" method="POST" enctype="multipart/form-data">
        <h1>Create Client Account</h1>
        <input type="text" placeholder="Username" name="clientusername" value="<?php echo $clientusername; ?>" />
        <input type="email" placeholder="Email" name="clientemail" value="<?php echo $clientemail; ?>" />
        <input type="password" placeholder="Password" name="clientpassword"
          value="<?php echo $_POST['clientpassword']; ?>" />
        <input type="password" placeholder="Confirm Password" name="cpassword"
          value="<?php echo $_POST['cpassword']; ?>" />
        <input type="text" placeholder="First Name" name="clientfirst" value="<?php echo $clientfirst; ?>" />
        <input type="text" placeholder="Last Name" name="clientlast" value="<?php echo $clientlast; ?>" />
        <input type="text" placeholder="Middle Name" name="clientmiddle" value="<?php echo $clientmiddle; ?>" />
        <input type="date" placeholder="Birthday" name="clientbday" value="<?php echo $clientbday; ?>" />
        <input type="text" placeholder="Phone Number" name="clientmobilenum" value="<?php echo $clientmobilenum; ?>" />
        <input type="text" placeholder="Alternative Number" name="clientaltno" value="<?php echo $clientaltno; ?>" />
        <input type="text" placeholder="Aadhar Card Number" name="clientaadharnum"
          value="<?php echo $clientaadharnum; ?>" />
        <input type="file" placeholder="Upload Aadhar front" name="caadharfront" value="<?php echo $caadharfront; ?>" />
        <input type="file" placeholder="Upload Aadhar back" name="caadharback" value="<?php echo $caadharback; ?>" />
        <input type="text" placeholder="Pan Card Number" name="clientpannum" value="<?php echo $clientpannum; ?>" />
        <input type="file" placeholder="Upload pan front" name="cpancardfront" value="<?php echo $cpancardfront; ?>" />
        <input type="text" placeholder="Address Line 1" name="clientadrsline1"
          value="<?php echo $clientadrsline1; ?>" />
        <input type="text" placeholder="Address Line 2" name="clientadrsline2"
          value="<?php echo $clientadrsline2; ?>" />
        <input type="text" placeholder="Address Line 3" name="clientadrsline3"
          value="<?php echo $clientadrsline3; ?>" />
        <input type="text" placeholder="City" name="clientcity" value="<?php echo $clientcity; ?>" />
        <input type="text" placeholder="State" name="clientsstate" value="<?php echo $clientsstate; ?>" />
        <input type="text" placeholder="Pincode" name="clientpincode" value="<?php echo $clientpincode; ?>" />
        <input type="file" placeholder="Upload Address front" name="clientaddfront"
          value="<?php echo $clientaddfront; ?>" />
        <input type="file" placeholder="Upload Address back" name="clientaddback"
          value="<?php echo $clientaddback; ?>" />
        <button name="submit">SignUp</button>
        <!-- iss button ka naam IF vale naam se match hona chaiye vrna work nhi krega -->
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>
            To keep connected with us please login with your personal info
          </p>
          <button class="ghost" id="signIn">Sign Up</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Worker</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
  <script>
  const signUpButton = document.getElementById("signUp");
  const signInButton = document.getElementById("signIn");
  const container = document.getElementById("container");

  signUpButton.addEventListener("click", () => {
    container.classList.add("right-panel-active");
  });

  signInButton.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
  });
  </script>
</body>

</html>