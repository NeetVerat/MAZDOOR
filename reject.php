<?php 
require 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: bid_details.php");
}

if (isset($_POST['reject'])) {

$sql = "UPDATE projectbids SET chahiye = reject WHERE projectidofbids = '$projectidofbids'";

?>