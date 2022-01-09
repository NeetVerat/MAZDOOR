<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) 
{
    header("Location: login.php");
}

if (isset($_POST['submit'])) 
{
			$username = $_POST['username'];
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      $cpassword = md5($_POST['cpassword']);
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $middlename = $_POST['middlename'];
      $bdate =date('Y-m-d',strtotime($_POST['bdate']));
      $phoneno = $_POST['phoneno'];
      $altno = $_POST['altno'];
      $aadharcard = $_POST['aadharcard'];
      $aadharfront = $_FILES['aadharfront']['name'];
      $aadharback = $_FILES['aadharback']['name'];
      $workerpanno = $_POST['workerpanno'];
      $panfront = $_FILES['panfront']['name'];
      $panback = $_FILES['panback']['name'];
      $add1 = $_POST['add1'];
      $add2 = $_POST['add2'];
      $add3 = $_POST['add3'];
      $city = $_POST['clientcity'];
      $state = $_POST['state'];
      $pincode = $_POST['pincode'];
      $addfront = $_FILES['addfront']['name'];
      $addback = $_FILES['addback']['name'];

      if ($password == $cpassword) 
      {
        $sql = "SELECT * FROM workerlogin WHERE email= '$email'";
        $result = mysqli_query($conn, $sql);
        
        if (!$result->num_rows > 0) 
        {
        $sql = "INSERT INTO workerlogin (email, username, password, bdate, add1, add2, add3, city, state, phoneno, altno, aadharcard, aadharfront, aadharback, workerpanno, panfront, panback, addfront, addback, firstname, lastname, middlename, pincode) VALUES ( '$email','$username','$password','$bdate','$add1','$add2','$add3','$city','$state','$phoneno','$altno','$aadharcard','$aadharfront','$aadharback','$workerpanno','$panfront','$panback','$addfront','$addback', '$firstname', '$lastname','$middlename','$pincode')";
          $result = mysqli_query($conn, $sql);

          if ($result) 
          {
            echo "<script>alert('Wow! User Registration Completed.')</script>";
            $username = "";
            $email = "";
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
            $firstname = "";
            $lastname = "";
            $middlename = "";
            $bdate = "";
            $phoneno = "";
            $altno = "";
            $aadharcard = "";
            $aadharfront = "";
            $aadharback = "";
            $workerpanno = "";
            $panfront = "";
            $panback = "";
            $add1 = "";
            $add2 = "";
            $add3 = "";
            $city = "";
            $state = "";
            $pincode = "";
            $addfront = "";
            $addback = "";
					} 
					else 
						{
							echo "<script>alert('Woops! Something Wrong Went.')</script>";
						}
				} 	
				else {
						echo "<script>alert('Woops! Email Already Exists.')</script>";
						}
			} 	
			else 	
					{
					echo "<script>alert('Password Not Matched.')</script>";
					}
}

?>