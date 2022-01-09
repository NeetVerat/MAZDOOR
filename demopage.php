<?php

// require 'config.php';

// $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// preg_match('/(token=.+)/', $url, $key_match);
// $tokraw = $key_match[0]; 
// $token = preg_replace("/(token=)/", '', $tokraw);


// $query = "SELECT * FROM projects WHERE token = '$token'";
// $data = mysqli_query($conn, $query);
// $rows = mysqli_fetch_assoc($data);

// $projname = $rows['projectname'];
// $projdes = $rows['description'];
// $bigdesc = $rows['bigdescription'];
// $from = $rows['frommoney'];
// $tomon = $rows['tomoney'];
// $cardimg = $rows['cardimage'];
// $ddescimg1 = $rows['descimg1'];
// $ddescimg2 = $rows['descimg2'];
// $ddescimg3 = $rows['descimg3'];
// $ddescimg4 = $rows['descimg4'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>neet randi hai</title>
</head>
<body>
      <img src="uploadcheck.jpg" alt="img2" />
</body>
</html>
<!-- Sed                     Worker                       -->

<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap"
      rel="stylesheet"
    />

  <link rel="stylesheet" type="text/css" href="css/register.css">

  <title>Register Form</title>
</head> -->
<body>
  <div class="container">
    <form action="" method="POST" class="login-email" enctype="multipart/form-data">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
          <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>"/>
          <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>"/>
          <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>"/>
          <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>"/>
          <input type="text" placeholder="First Name" name="firstname" value="<?php echo $firstname; ?>"/>
          <input type="text" placeholder="Last Name" name="lastname" value="<?php echo $lastname; ?>"/>
          <input type="text" placeholder="Middle Name" name="middlename" value="<?php echo $middlename; ?>"/>
          <input type="date" placeholder="Birthday" name="bdate" value="<?php echo $bdate; ?>"/>
          <input type="text" placeholder="Phone Number" name="phoneno" value="<?php echo $phoneno; ?>"/>
          <input type="text" placeholder="Alternative Number" name="altno" value="<?php echo $altno; ?>"/>
          <input type="text" placeholder="Aadhar Card Number" name="aadharcard" value="<?php echo $aadharcard; ?>"/>
          <input type="file" placeholder="Upload aadharfront" name="aadharfront" value="<?php echo $aadharfront; ?>"/>
          <input type="file" placeholder="Upload aadharback" name="aadharback" value="<?php echo $aadharback; ?>" />
          <input type="text" placeholder="Pan Card Number" name="workerpanno" value="<?php echo $workerpanno; ?>" />
          <input type="file" placeholder="Upload pan front" name="panfront" value="<?php echo $panfront; ?>" />
          <input type="file" placeholder="Upload pan back" name="panback" value="<?php echo $panback; ?>" />
          <input type="text" placeholder="Address Line 1" name="add1" value="<?php echo $add1; ?>" />
          <input type="text" placeholder="Address Line 2" name="add2" value="<?php echo $add2; ?>" />
          <input type="text" placeholder="Address Line 3" name="add3" value="<?php echo $add3; ?>" />
          <input type="text" placeholder="City" name="City" value="<?php echo $city; ?>" />
          <input type="text" placeholder="State" name="state" value="<?php echo $state; ?>" />
          <input type="text" placeholder="Pincode" name="pincode" value="<?php echo $pincode; ?>" />
          <input type="file" placeholder="Upload Address front" name="addfront" value="<?php echo $addfront; ?>" />
          <input type="file" placeholder="Upload Address back" name="addback" value="<?php echo $addback; ?>" />
        <button name="submit" class="btn">Register</button>
      </div>
      <p class="login-register-text">Have an account? <a href="login.php">Login Here</a></p>
    </form>
  </div>
</body>
<!-- </html -->

<!-- Sed Client -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap"
      rel="stylesheet"
    />

  <link rel="stylesheet" type="text/css" href="css/register.css">

  <title>Register Form</title>
</head>
<body>
  <div class="container">
    <form action="" method="POST" class="login-email" enctype="multipart/form-data">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
      <input type="text" placeholder="Username" name="clientusername" value="<?php echo $clientusername; ?>"/>
      <input type="email" placeholder="Email" name="clientemail" value="<?php echo $clientemail; ?>"/>
      <input type="password" placeholder="Password" name="clientpassword" value="<?php echo $_POST['clientpassword']; ?>"/>
      <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>"/>
      <input type="text" placeholder="First Name" name="clientfirst" value="<?php echo $clientfirst; ?>"/>
      <input type="text" placeholder="Last Name" name="clientlast" value="<?php echo $clientlast; ?>"/>
      <input type="text" placeholder="Middle Name" name="clientmiddle" value="<?php echo $clientmiddle; ?>"/>
      <input type="date" placeholder="Birthday" name="clientbday" value="<?php echo $clientbday; ?>"/>
      <input type="text" placeholder="Phone Number" name="clientmobilenum" value="<?php echo $clientmobilenum; ?>"/>
      <input type="text" placeholder="Alternative Number" name="clientaltno" value="<?php echo $clientaltno; ?>"/>
      <input type="text" placeholder="Aadhar Card Number" name="clientaadharnum" value="<?php echo $clientaadharnum; ?>"/>
      <input type="file" placeholder="Upload Aadhar front" name="caadharfront" value="<?php echo $caadharfront; ?>"/>
      <input type="file" placeholder="Upload Aadhar back" name="caadharback" value="<?php echo $caadharback; ?>" />
      <input type="text" placeholder="Pan Card Number" name="clientpannum" value="<?php echo $clientpannum; ?>" />
      <input type="file" placeholder="Upload pan front" name="cpancardfront" value="<?php echo $cpancardfront; ?>" />
      <input type="file" placeholder="Upload pan back" name="cpancardback" value="<?php echo $cpancardback; ?>" />
      <input type="text" placeholder="Address Line 1" name="clientadrsline1" value="<?php echo $clientadrsline1; ?>" />
      <input type="text" placeholder="Address Line 2" name="clientadrsline2" value="<?php echo $clientadrsline2; ?>" />
      <input type="text" placeholder="Address Line 3" name="clientadrsline3" value="<?php echo $clientadrsline3; ?>" />
      <input type="text" placeholder="City" name="clientcity" value="<?php echo $clientcity; ?>" />
      <input type="text" placeholder="State" name="clientsstate" value="<?php echo $clientsstate; ?>" />
      <input type="text" placeholder="Pincode" name="clientpincode" value="<?php echo $clientpincode; ?>" />
      <input type="file" placeholder="Upload Address front" name="clientaddfront" value="<?php echo $clientaddfront; ?>" />
      <input type="file" placeholder="Upload Address back" name="clientaddback" value="<?php echo $clientaddback; ?>" />
      <div class="input-group">
        <button name="submit" class="btn">Register</button>
      </div>
<!--      <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p> -->
    </form>
  </div>
</body>
</html>

<!-- register databasse structre -->

<?php 

error_reporting(0);

// include 'config.php';

// error_reporting(0);

// session_start();

// // yaha pr if dalna hai dono alg login k liye



// if(isset($_POST['signinwoker']))
// {
//     if (isset($_SESSION['clientusername'])) {
//         header("Location: login.php");
//     }

//     if (isset($_POST['submit'])) {
//       $username = $_POST['clientusername'];
//       $email = $_POST['clientemail'];
//       $password = md5($_POST['clientpassword']);
//       $cpassword = md5($_POST['cpassword']);
//       $clientfirst = $_POST['clientfirst'];
//       $clientlast = $_POST['clientlast'];
//       $clientmiddle = $_POST['clientmiddle'];
//       $clientbday = $_POST['clientbday'];
//       $mobilenum = $_POST['clientmobilenum'];
//       $clientaltno = $_POST['clientaltno'];
//       $aadharnum = $_POST['clientaadharnum'];
//       $caadharfront = $_POST['caadharfront'];
//       $caadharback = $_POST['caadharback'];
//       $pannum = $_POST['clientpannum'];
//       $cpancardfront = $_POST['cpancardfront'];
//       $cpancardback = $_POST['cpancardback'];
//       $adrsline1 = $_POST['clientadrsline1'];
//       $adrsline2 = $_POST['clientadrsline2'];
//       $clientadrsline3 = $_POST['clientadrsline3'];
//       $city = $_POST['clientcity'];
//       $sstate = $_POST['clientsstate'];
//       $pincode = $_POST['clientpincode'];
//       $clientaddfront = $_POST['clientaddfront'];
//       $clientaddback = $_POST['clientaddback'];

//       if ($password == $cpassword) {
//         $sql = "SELECT * FROM logindetails WHERE clientemail= '$email'";
//         $result = mysqli_query($conn, $sql);
//         if (!$result->num_rows > 0) {
//           $sql = "INSERT INTO logindetails (clientusername, clientemail, clientpassword, clientfirst, clientlast, clientmiddle, clientbday, clientmobilenum, clientaltno,clientaadharnum, caadharfront, caadharback, clientpannum, cpancardfront, cpancardback, clientadrsline1, clientadrsline2, clientadrsline3, clientcity, clientsstate, clientpincode, clientaddfront, clientaddfront,) VALUES ( '$username','$email','$password', '$clientfirst', '$clientlast','$clientmiddle','$clientmiddle','$clientbday','$mobilenum','$clientaltno','$aadharnum','$caadharfront','$caadharback','$pannum','$cpancardfront','$cpancardback','$adrsline1','$adrsline2','$clientadrsline3','$city','$sstate','$pincode','$clientaddfront','$clientaddback')";
//           $result = mysqli_query($conn, $sql);
//           if ($result) {
//             echo "<script>alert('Wow! User Registration Completed.')</script>";
//             $username = "";
//             $email = "";
//             $_POST['clientpassword'] = "";
//             $_POST['cpassword'] = "";
//             $clientfirst = "";
//             $clientlast = "";
//             $clientmiddle = "";
//             $mobilenum = "";
//             $clientaltno = "";
//             $aadharnum = "";
//             $caadharfront = "";
//             $cpancardback = "";
//             $pannum = "";
//             $cpancardfront = "";
//             $cpancardback = "";
//             $adrsline1 = "";
//             $adrsline2 = "";
//             $clientadrsline3 = "";
//             $city = "";
//             $sstate = "";
//             $pincode = "";
//             $clientaddfront = "";
//             $clientaddback = "";
//           } else {
//             echo "<script>alert('Woops! Something Wrong Went.')</script>";
//           }
//         } else {
//           echo "<script>alert('Woops! Email Already Exists.')</script>";
//         }

//       } else {
//         echo "<script>alert('Password Not Matched.')</script>";
//       }
//     }
// }

// else if(isset($_POST['signinclient']))
// {
//    if (isset($_SESSION['username'])) {
//         header("Location: login.php");
//     }

//     if (isset($_POST['submit'])) {
//       $username = $_POST['username'];
//       $email = $_POST['email'];
//       $password = md5($_POST['password']);
//       $cpassword = md5($_POST['cpassword']);
//       $firstname = $_POST['firstname'];
//       $lastname = $_POST['lastname'];
//       $middlename = $_POST['middlename'];
//       $bdate = $_POST['bdate'];
//       $phoneno = $_POST['phoneno'];
//       $altno = $_POST['altno'];
//       $aadharcard = $_POST['aadharcard'];
//       $aadharfront = $_POST['aadharfront'];
//       $aadharback = $_POST['aadharback'];
//       $workerpanno = $_POST['workerpanno'];
//       $panfront = $_POST['panfront'];
//       $panback = $_POST['panback'];
//       $add1 = $_POST['add1'];
//       $add2 = $_POST['add2'];
//       $add3 = $_POST['add3'];
//       $city = $_POST['clientcity'];
//       $state = $_POST['state'];
//       $pincode = $_POST['pincode'];
//       $addfront = $_POST['addfront'];
//       $addback = $_POST['addback'];

//       if ($password == $cpassword) {
//         $sql = "SELECT * FROM workerlogin WHERE email= '$email'";
//         $result = mysqli_query($conn, $sql);
//         if (!$result->num_rows > 0) {
//           $sql = "INSERT INTO workerlogin (username, email, password, firstname, lastname, middlename, bdate, phoneno, altno, aadharcard, aadharfront, aadharback, workerpanno, panfront, panback, add1, add2, add3, city, state, pincode, addfront, addback) VALUES ('$username','$email','$password', '$firstname', '$lastname','$middlename','$bdate','$phoneno','$altno','$aadharcard','$aadharfront','$aadharback','$workerpanno','$panfront','$panback','$add1','$add2','$add3','$city','$state','$pincode','$addfront','$addback')";
//           $result = mysqli_query($conn, $sql);
//           if ($result) {
//             echo "<script>alert('Wow! User Registration Completed.')</script>";
//             $username = "";
//             $email = "";
//             $_POST['clientpassword'] = "";
//             $_POST['cpassword'] = "";
//             $firstname = "";
//             $lastname = "";
//             $middlename = "";
//             $phoneno = "";
//             $altno = "";
//             $aadharcard = "";
//             $aadharfront = "";
//             $aadharback = "";
//             $workerpanno = "";
//             $panfront = "";
//             $panback = "";
//             $add1 = "";
//             $add2 = "";
//             $add3 = "";
//             $city = "";
//             $state = "";
//             $pincode = "";
//             $addfront = "";
//             $addback = "";
//           } else {
//             echo "<script>alert('Woops! Something Wrong Went.')</script>";
//           }
//         } else {
//           echo "<script>alert('Woops! Email Already Exists.')</script>";
//         }

//       } else {
//         echo "<script>alert('Password Not Matched.')</script>";
//       }
//     }
// }
// else
// echo "";
?>


<!--  Login worker -->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="css/login.css">

  <title>Login Form</title>
</head>

<body>
  <div class="container">
    <form action="" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
      <div class="input-group">
        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>"
          required>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Login</button>
      </div>
      <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
    </form>
  </div>
</body>

</html>


<!--  clkient login  -->


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="css/login.css">

  <title>Login Form</title>
</head>

<body>
  <div class="container">
    <form action="" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
      <div class="input-group">
        <input type="email" placeholder="Email" name="clientemail" value="<?php echo $clientemail; ?>" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" name="clientpassword" value="<?php echo $_POST['clientpassword']; ?>"
          required>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Login</button>
      </div>
      <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
    </form>
  </div>
</body>

</html>

<!-- include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['clientusername'])) {
    header("Location: client.php");
}

if (isset($_POST['submit'])) {
  $clientemail = $_POST['clientemail'];
  $clientpassword = md5($_POST['clientpassword']);

  $sql = "SELECT * FROM logindetails WHERE clientemail='$clientemail'AND clientpassword='$clientpassword'";

  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['clientusername'] = $row['clientusername'];
    header("Location: client.php");
  } else {
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
  }
} -->



<!--  -->