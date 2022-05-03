<?php

require 'config.php';



if (isset($_POST['hireup'])) {
	$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if (preg_match('/(id=.+)/', $url, $uamatch)){
                    $idraw = $uamatch[0];
                    $id = preg_replace("/(id=)/", '', $idraw);
                    echo $id;
	$query12 = "UPDATE requesthire SET hirework = 'done' WHERE requesthireid = ". $id;
	$query_run12 = mysqli_query($conn, $query12);
}

}

die(header("Location: hireinprogress.php"));



?>