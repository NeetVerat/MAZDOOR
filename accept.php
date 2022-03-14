<?php 
require 'config.php';

session_start();

//error_reporting(0);
if (isset($_SESSION['biddersname'])) {
    header("Location: bid_details.php");
}

// $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// preg_match('/(projectidofbids=.+)/', $url, $key_match);
// $tokyraw = $key_match[0];
// $projectidofbids = preg_replace("/(projectidofbids=)/", '', $tokyraw);
echo $projectidofbids;

if (isset($_POST['accept'])) {
$sql = "UPDATE projectbids SET chahiye = 'accept' WHERE projectidofbids = '$projectidofbids'";
$result = mysqli_query($conn, $sql);
if($result){
header("Location: bid_details.php");
echo "<script>alert('Working')</script>";
} else {
        echo "<script>alert('If mai error')</script>";
    }
?>