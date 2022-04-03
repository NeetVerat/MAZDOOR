<?php

require 'config.php';
error_reporting(0);

$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

preg_match('/(projectidofbids=.+)/', $url, $key_match);
$tokyraw = $key_match[0];
$projectidofbids = preg_replace("/(projectidofbids=)/", '', $tokyraw);

// $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
//   === 'on' ? "https" : "http") .
//   "://" . $_SERVER['HTTP_HOST'] .
// $_SERVER['REQUEST_URI'];
// $url_components = parse_url($link);
// parse_str($url_components['query'], $params);
// //echo $params['token'];
//and projectidofbids = '$projectidofbids'

$query = "SELECT * FROM projectbids WHERE projectidofbids = '$projectidofbids'";
$query_run = mysqli_query($conn, $query);
$check_empty = mysqli_num_rows($query_run) >= 0;
if ($check_empty) {
  while ($row = mysqli_fetch_assoc($query_run)) {

    $token = $row['tokenpb'];
    $biddersname = $row['biddersname'];
    $biddersdics = $row['biddersdics'];
    $bidderbudget = $row['bidderbudget'];
    $tenderpdf = $row['tenderpdf'];
    $chahiye = $row['chahiye'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/bidding_page.css">
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
      <h1 class="heading_text"><?php echo $row['biddersname']; ?>
      </h1>
      <div class="budget_section">
        <h1>Budget</h1>
        <div class="budget_values">
          <p class="budget_from">&#8377; &nbsp;<?php echo $row['bidderbudget']; ?></p>
        </div>
      </div>
    </header>

    <section>
      <div class="details_container">
        <p style="height: 90%;"><?php echo $row['biddersdics']; ?></p>
        <?php
            $query = "SELECT * FROM projectbids WHERE projectidofbids = '$projectidofbids'";
            $query_run = mysqli_query($conn, $query);
            $check_empty = mysqli_num_rows($query_run) >= 0;
            if ($check_empty) {
              while ($check_empty = mysqli_fetch_assoc($query_run)) {
                if (!empty($chahiye)) {
            ?>
        <form action="#" method="POST">
          <button class="accept_btn" type="submit" name="accept">Accept</button>
          <?php
                    require 'config.php';
                    if (isset($_POST['accept'])) {
                      //$sql1 = "UPDATE `projectbids` SET `chahiye` = 'accept' WHERE `projectbids`.`projectidofbids` = $projectidofbids;";


                      $sql2 = "DELETE from `projects` where `token` = '$token'";

                      echo "$token";

                      $result2 = mysqli_query($conn, $sql2);
                      // $result1 = mysqli_query($conn, $sql1);
                      if ($result2) {
                        echo "<script>alert('Its been ACCEPTED')</script>";
                      } else {
                        echo "<br>Rohan teri bajse Mission Failed hua";
                      }
                    }
                    ?>


          <!--    <form action="#" method="POST">
        <button type="submit" name="reject">Reject</button>  -->
          <?php
                    // require 'config.php';
                    // if (isset($_POST['reject'])) {
                    // $sql12 = "UPDATE `projectbids` SET `chahiye` = 'reject' WHERE `projectbids`.`projectidofbids` = $projectidofbids;";
                    // $result12 = mysqli_query($conn, $sql12);
                    // if($result12){
                    // echo "<script>alert('It's been REJECTED')</script>";
                    //
                    ?>
          <!-- // <META HTTP-EQUIV='REFRESH' CONTENT = "0; URL=http://localhost/main/works_listed.php"> -->
          <?php
                    // } else {
                    //         echo "Mission Failed";
                    //     }}
                    ?>

          <!-- iski zarurat nhi hai tabhi bhi rakha hu nikalna rhega tb bata dena -->
          <?php
                }
              }
            }
              ?>


      </div>
      <div class="bids_container"">
      <iframe src=" ../pdf/<?php echo $tenderpdf; ?>" frameborder="0" width="100%" height="100%">
        </iframe>
      </div>
    </section>


  </div>
  <?php
  }
}

  ?>
</body>

</html>