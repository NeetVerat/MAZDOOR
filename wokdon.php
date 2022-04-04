<?php 
require "config.php";
echo $token;
if(isset($_POST['wokdon'])) {
        echo $token;
$token = $_POST['token'];
$query1 = "UPDATE `projects` SET `toshow` = 'no' WHERE `projects`.`token` = '$token'";
echo $query1;
$query_run2 = mysqli_query($conn, $query1);
if ($query_run2) {
echo "<script>alert('Its been ACCEPTED')</script>";
} else {
echo "<br>Mission Failed hua";
}}
?>