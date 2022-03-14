<?php

require 'config.php';
// error_reporting(0);

$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

preg_match('/(token=.+)/', $url, $key_match);
$tokraw = $key_match[0];
$token = preg_replace("/(token=)/", '', $tokraw);


$query = "SELECT * FROM projects WHERE token = '$token'";
$data = mysqli_query($conn, $query);
$rows = mysqli_fetch_assoc($data);

$projectname = $rows['projectname'];
$description = $rows['description'];
$bigdescription = $rows['bigdescription'];
$frommoney = $rows['frommoney'];
$tomoney = $rows['tomoney'];
$cardimage = $rows['cardimage'];
$ddescimg1 = $rows['descimg1'];
$ddescimg2 = $rows['descimg2'];
$ddescimg3 = $rows['descimg3'];
$ddescimg4 = $rows['descimg4'];

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
      <h1 class="heading_text">
        <?php echo $rows['projectname']; ?>
      </h1>
      <div class="budget_section">
        <h1>Budget</h1>
        <div class="budget_values">
          <p class="budget_from">&#8377; &nbsp;<?php echo $rows['frommoney']; ?></p>
          <p class="budget_to">&#8377; &nbsp;<?php echo $rows['tomoney']; ?></p>
        </div>
      </div>
    </header>

    <section>
      <div class="details_container">
        <p><?php echo $rows['bigdescription']; ?></p>
        <div class="imgdesc">
          <img src="../uploads/upload1/<?php echo $ddescimg1; ?>" alt="img1" />
          <img src="../uploads/upload2/<?php echo $ddescimg2; ?>" alt="img2" />
          <img src="../uploads/upload3/<?php echo $ddescimg3; ?>" alt="img3" />
          <img src="../uploads/upload4/<?php echo $ddescimg4; ?>" alt="img4" />
        </div>
      </div>

      <div class="bids_container">
        <ul>
          <?php
          require 'config.php';

          $query = "SELECT * FROM projectbids";
          $query_run = mysqli_query($conn, $query);
          $check_empty = mysqli_num_rows($query_run) > 0;

          if ($check_empty) {
            while ($row = mysqli_fetch_assoc($query_run)) {
          ?>
          <?php

              for ($row['id'] = 0; $row['id'] < 1; $row['id']++) {
                if ($row['tokenpb'] == $token) {
                  echo "<a href=", "../bid_details.php/?projectidofbids=" . $row['projectidofbids'] . ">";
                  echo "<li>";
                  echo '<div class="row">';
                  echo '<div class="column">';
                  echo "<h2>";
                  echo $row['biddersname'];
                  echo "</h2>";
                  echo "<p>";
                  echo $row['biddersdics'];
                  echo "</p>";
                  echo "</div>";
                  echo "<p> ₹ ";
                  echo $row['bidderbudget'];
                  echo "</p>";
                  echo "</div>";
                  echo "</li></a>";
                }
              }

              ?>
          <?php
            }
          } else {
            echo "SeD!!! no one here";
          }
          ?>
          </li>
        </ul>
      </div>



</body>

</html>