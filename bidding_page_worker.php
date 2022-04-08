<?php

require 'config.php';
// error_reporting(0);
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

preg_match('/(token=.+)/', $url, $key_match);
$tokraw = $key_match[0];
$token = preg_replace("/(token=)/", '', $tokraw);

$query = "SELECT * FROM requesthire WHERE requesthireid = '$token'";
$query_run = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($query_run);

// $requesthireid = $row['requesthireid'];
$holdername = $row['holdername'];
$mintotal = $row['mintotal'];
$maxtotal = $row['maxtotal'];
$longdics = $row['longdics'];
$descimg1 = $row['descimg1'];
$descimg2 = $row['descimg2'];
$descimg3 = $row['descimg3'];
$descimg4 = $row['descimg4'];

echo $token;


    include('config.php');
    // $requesthireid = $_POST['requesthireid'];
    // $hirework

    if (isset($_POST['hirebutton'])) {
      $sql = "UPDATE `requesthire` SET `hirework` = 'hired' WHERE `requesthireid` = '$token';";
      $qury = mysqli_query($conn, $sql);
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/bidding_page_worker.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />
  <title>Bidding Page</title>
</head>

<body>
  <div class="container">
    <!-- -------------- Start of Navbar ---------------- -->
    <nav class="navbar">
      <div class="logo">
        <a href="../index.php" class="logo_link">MAZDOOR</a>
        <ul>
          <li><a href="../how_it_works.html">How it Works</a></li>
        </ul>
      </div>
    </nav>

    <!-- -------------- End of Navbar ---------------- -->

    <header>
      <h1 class="heading_text">
        <?php echo $row['holdername']; ?>
      </h1>
      <div class="budget_section">
        <h1>Budget</h1>
        <div class="budget_values">
          <p class="budget_from">&#8377; &nbsp;<?php echo $row['mintotal']; ?></p>
          <p class="budget_to">&#8377; &nbsp;<?php echo $row['maxtotal']; ?></p>
        </div>
      </div>
    </header>

    <section>
      <div class="details_container" >
        <div class="andarwalarow">
          <p><?php echo $row['longdics']; ?></p>
          <div class="imgdesc">
            <img src="../uploads/upload5/<?php echo $row['descimg1']; ?>" alt="img1" />
            <img src="../uploads/upload6/<?php echo $row['descimg2']; ?>" alt="img2" />
            <img src="../uploads/upload7/<?php echo $row['descimg3']; ?>" alt="img3" />
            <img src="../uploads/upload8/<?php echo $row['descimg4']; ?>" alt="img4" />
          </div>
        </div>
        <div class="andarwalarow1">
          <form action="#" method="POST">
          <button name="hirebutton" class="hirebutton" type="sumbit">Hire</button>
        </div>
      </div>
    </section>
  </div>
</body>
</html>