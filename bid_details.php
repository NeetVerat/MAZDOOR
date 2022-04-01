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


    $biddersname = $row['biddersname'];
    $biddersdics = $row['biddersdics'];
    $bidderbudget = $row['bidderbudget'];
    $tenderpdf = $row['tenderpdf'];

    // $projectidofbids = $row['projectidofbids '];
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
        <p><?php echo $row['biddersdics']; ?></p>
        <a href="https://chat.gise.at/#apvuqpcrqvaokjavdhbf">Chat</a>
        <button type="submit" name="accept" onclick="clickAccept()">Accept</button>
        <button type="submit" name="reject" onclick="clickReject()">Reject</button>

        <?php
        $query = "SELECT * FROM projectbids WHERE projectidofbids = '$projectidofbids'";
        $query_run = mysqli_query($conn, $query);
        $check_empty = mysqli_num_rows($query_run) >= 0;
        if ($check_empty) {
          while ($row = mysqli_fetch_assoc($query_run)) {
            function accept_func()
            {
              $sql = "SELECT chahiye from projectbids WHERE projectidofbids = '$projectidofbids'";
              $chahiye111 = $row['chahiye'];
              if (is_null($chahiye111)) {
                $sql1 = "UPDATE projectbids SET chahiye = 'ACCEPT' WHERE projectidofbids = '$projectidofbids'";
              }
            }
            function reject_func()
            {
              $sql = "SELECT chahiye from projectbids WHERE projectidofbids = '$projectidofbids'";
              $chahiye111 = $row['chahiye'];
              if (is_null($chahiye111)) {
                $sql1 = "UPDATE projectbids SET chahiye = 'REJECT' WHERE projectidofbids = '$projectidofbids'";
              }
            }
          }
        }
      }
    }
        ?>
      </div>
    </section>
    <div class="bids_container">
      <iframe src="../pdf/<?php echo $tenderpdf; ?>" frameborder="0" width="100%" height="100%">
      </iframe>
      <?php echo $tenderpdf; ?>
    </div>
  </div>
  <script>
  function clickAccept() {
    var acceptresult = "<?php accept_func(); ?>"
    document.write(acceptresult);
  }

  function clickReject() {
    var rejectresult = "<?php reject_func(); ?>"
    document.write(rejectresult);
  }
  </script>
</body>

</html>