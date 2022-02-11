<?php

include 'config.php';

error_reporting(0);

session_start();


if (isset($_SESSION['clientusername'])) {
  header("Location: login.php");
}
if (isset($_POST['submit'])) {
  $clientusername = $_POST['clientusername'];
  $clientemail = $_POST['clientemail'];
  $clientpassword = md5($_POST['clientpassword']);
  $cpassword = md5($_POST['cpassword']);
  $clientmobilenum = $_POST['clientmobilenum'];
  $clientaadharnum = $_POST['clientaadharnum'];
  $clientpannum = $_POST['clientpannum'];
  $clientadrsline1 = $_POST['clientadrsline1'];
  $clientadrsline2 = $_POST['clientadrsline2'];
  $clientcity = $_POST['clientcity'];
  $clientsstate = $_POST['clientsstate'];
  $clientpincode = $_POST['clientpincode'];
  $clientaltno = $_POST['clientaltno'];
  $caadharfront = $_FILES['caadharfront']['name'];
  $caadharback = $_FILES['caadharback']['name'];
  $cpancardfront = $_FILES['cpancardfront']['name'];
  $clientadrsline3 = $_POST['clientadrsline3'];
  $clientfirst = $_POST['clientfirst'];
  $clientlast = $_POST['clientlast'];
  $clientmiddle = $_POST['clientmiddle'];
  $clientbday =  date('Y-m-d', strtotime($_POST['clientbday']));;
  $clientaddfront = $_FILES['clientaddfront']['name'];
  $clientaddback = $_FILES['clientaddback']['name'];

  if ($clientpassword == $cpassword) {
    $sql = "SELECT * FROM logindetails WHERE clientemail = '$clientemail'";
    $result = mysqli_query($conn, $sql);

    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO logindetails (clientemail, clientusername, clientpassword, clientmobilenum, clientaadharnum, clientpannum, clientadrsline1, clientadrsline2, clientcity, clientsstate, clientpincode, clientaltno, caadharfront, caadharback, cpancardfront, clientadrsline3, clientfirst, clientlast, clientmiddle, clientbday, clientaddfront, clientaddback) VALUES ('$clientemail','$clientusername','$clientpassword','$clientmobilenum','$clientaadharnum','$clientpannum','$clientadrsline1','$clientadrsline2','$clientcity','$clientsstate','$clientpincode','$clientaltno','$caadharfront','$caadharback','$clientbday','$cpancardfront','$clientadrsline3','$clientfirst','$clientlast','$clientmiddle','$clientaddfront','$clientaddback')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('Wow! User Registration Completed.')</script>";
        $clientusername = "";
        $clientemail = "";
        $_POST['clientpassword'] = "";
        $_POST['cpassword'] = "";
        $clientmobilenum = "";
        $clientaadharnum = "";
        $clientpannum = "";
        $clientadrsline1 = "";
        $clientadrsline2 = "";
        $clientcity = "";
        $clientsstate = "";
        $clientpincode = "";
        $clientaltno = "";
        $caadharfront = "";
        $cpancardback = "";
        $cpancardfront = "";
        $clientadrsline3 = "";
        $clientfirst = "";
        $clientlast = "";
        $clientmiddle = "";
        $clientaddfront = "";
        $clientaddback = "";
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