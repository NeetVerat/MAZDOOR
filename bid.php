<?php

require 'config.php';
error_reporting(0);

$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

preg_match('/(token=.+)/', $url, $key_match);
$tokraw = $key_match[0];
$token = preg_replace("/(token=)/", '', $tokraw);


$query = "SELECT * FROM projects WHERE token = '$token'";
$data = mysqli_query($conn, $query);
$rows = mysqli_fetch_assoc($data);

$projname = $rows['projectname'];
$projdes = $rows['description'];
$bigdesc = $rows['bigdescription'];
$from = $rows['frommoney'];
$tomon = $rows['tomoney'];
$cardimg = $rows['cardimage'];
$ddescimg1 = $rows['descimg1'];
$ddescimg2 = $rows['descimg2'];
$ddescimg3 = $rows['descimg3'];
$ddescimg4 = $rows['descimg4'];

?>
<?php

require 'config.php';
error_reporting(0);

$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
  === 'on' ? "https" : "http") .
  "://" . $_SERVER['HTTP_HOST'] .
  $_SERVER['REQUEST_URI'];
$url_components = parse_url($link);
parse_str($url_components['query'], $params);
//echo $params['token'];

if (isset($_POST['submit'])) {
  $biddersname = $_POST['biddersname'];
  $biddersdics = $_POST['biddersdics'];
  $bidderbudget = $_POST['bidderbudget'];
  $tenderpdf = $_FILES['tenderpdf'];
  $token = $_POST['token'];

  $sql = "SELECT * FROM projectbids ";
  $result = mysqli_query($conn, $sql);
  if (!$result->num_rows > 0) {
    $sql = "INSERT INTO projectbids(biddersname, biddersdics, bidderbudget, tenderpdf, token ) VALUES ('$biddersname','$biddersdics','$bidderbudget','$tenderpdf','$token')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script>alert('Wow! Your BID Submitted.')</script>";
      $biddersname = " ";
      $biddersdics = " ";
      $bidderbudget = " ";
      $tenderpdf = " ";
      $token = " ";
    } else {
      //echo "<script>alert('Result vala mai error.')</script>";
    }
  } else {
    //echo "<script>alert('Insert vala mai error.')</script>";
  }
} else {
  //echo "<script>alert('isset vale mai error.')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bidding_page.css">
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
        <a href="index.php" class="logo_link">MAZDOOR</a>
        <ul>
          <li><a href="../how_it_works.html">How it Works</a></li>
        </ul>
      </div>
    </nav>

    <!-- -------------- End of Navbar ---------------- -->

    <header>
      <h1 class="heading_text">
        <?php echo $projname; ?>
      </h1>
      <div class="budget_section">
        <h1>Budget</h1>
        <div class="budget_values">
          <p class="budget_from">&#8377; &nbsp;<?php echo $from; ?></p>
          <p class="budget_to">&#8377; &nbsp;<?php echo $tomon; ?></p>
        </div>
      </div>
    </header>

    <section>
      <div class="details_container">
        <p><?php echo $bigdesc; ?></p>
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
                echo "</li>";
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