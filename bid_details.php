<?php

require 'config.php';
// error_reporting(0);

$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

preg_match('/(tokenpb=.+)/', $url, $key_match);
$tokyraw = $key_match[0];
$tokenpb = preg_replace("/(tokenpb=)/", '', $tokyraw);

// $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
//   === 'on' ? "https" : "http") .
//   "://" . $_SERVER['HTTP_HOST'] .
// $_SERVER['REQUEST_URI'];
// $url_components = parse_url($link);
// parse_str($url_components['query'], $params);
// //echo $params['token'];

$query = "SELECT * FROM projectbids WHERE tokenpb = '$tokenpb'";
$query_run = mysqli_query($conn, $query);
$check_empty = mysqli_num_rows($query_run) > 0;
if ($check_empty) {
while ($row = mysqli_fetch_assoc($query_run)) {


$biddersname = $row['biddersname'];
$biddersdics = $row['biddersdics'];
$bidderbudget = $row['bidderbudget'];
$tenderpdf = $row['tenderpdf'];

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
        <button>ACCEPT</button>
        <button>REJECT</button>
      </div>
    </section>
      <div class="bids_container">
        <iframe src="<?php echo $rows['tenderpdf'] ?>" frameborder="0" width="100%" height="100%"></iframe>
      </div>

</div>
<?php 
}
}

?>
</body>

</html>