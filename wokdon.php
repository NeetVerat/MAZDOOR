<?php

require 'config.php';

if (isset($_POST['wokdon'])) {
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (preg_match('/(ids=.+)/', $url, $unamatch)){
$idraws = $unamatch[0];
$ids = preg_replace("/(ids=)/", '', $idraws);
echo $ids;
$token = $ids;
$query13 = "UPDATE `projects` SET `toshow` = 'no' WHERE `projects`.`token` = '$token'";
$query_run13 = mysqli_query($conn, $query13);
}

}

die(header("Location: works_in_progress.php"));



?>