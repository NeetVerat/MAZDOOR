<?php

require 'config.php';

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

<!DOCTYPE html>
<html lang="en">
<html lan>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bidding_page.css">
  <!-- <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html {
    font-family: "Playfair Display", serif;

    background: #cdf2ca;
  }

  .container {
    width: 99vw;
    height: 100vh;
  }

  li {
    list-style: none;
  }

  a {
    text-decoration: none;
  }

  .navbar {
    font-family: "Roboto", sans-serif;
    display: flex;
    justify-content: start;
    padding: 0.5rem 0 0.5rem 0;
    background: #cdf2ca;
    z-index: 2;
  }

  .logo_link {
    font-size: 2rem;
    margin-right: 8rem;
    color: #000;
    margin-left: 20rem;
  }

  .logo {
    display: flex;
    flex-direction: row;
    align-items: center;
    transform: translateX(-7rem);
  }

  .logo ul {
    display: flex;
    margin-right: 2rem;
  }

  .logo ul li {
    font-size: 1.2rem;
    justify-content: space-between;
    padding: 1rem 1rem 0.5rem 1rem;
  }

  .logo ul li a {
    color: #000;
  }

  header {
    display: flex;
    justify-content: space-around;
    background: #06442f;
    padding: 1rem 0 1rem 0;
    align-items: center;
  }

  header h1 {
    max-width: 50rem;
  }

  .heading_text {
    color: #fff;
  }

  .budget_section {
    font-family: "Roboto", sans-serif;
    background: #dddddd;
    border-radius: 1rem;
    padding: 1rem;
  }

  .budget_section h1 {
    margin-bottom: 1rem;
  }

  .budget_values {
    display: flex;
    justify-content: space-between;
  }

  .budget_from,
  .budget_to {
    background: #fff;
    border-radius: 0.4rem;
    padding: 0.8rem;
  }

  .budget_to {
    margin-left: 1rem;
  }

  /* ------------------------ Details section ------------------------------- */

  section {
    display: flex;
  }

  .details_container {
    display: flex;
    width: 50vw;
    height: 73vh;
    background: #faf1e6;
    border-radius: 1rem;
    margin: 1rem 0 1rem 1rem;
  }

  .details_container p {
    width: 60rem;
    height: 30rem;
    margin-top: 3rem;
    margin-left: 1rem;
    overflow: scroll;
  }

  .imgdesc img {
    height: 20rem;
    width: 20rem;
  }

  .bids_container {
    display: flex;
    width: 50vw;
    height: 73vh;
    background: #000;
    border-radius: 1rem;
    margin: 1rem 0.6rem 0 1rem;
  }
  </style> -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />
  <title>Document</title>
</head>

<body>
  <div class="container">
    <!-- -------------- Start of Navbar ---------------- -->
    <nav class="navbar">
      <div class="logo">
        <a href="index.html" class="logo_link">MAZDOOR</a>
        <ul>
          <li><a href="how_it_works.html">How it Works</a></li>
          <li><a href="bidding_page.php">Browse Jobs</a></li>
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
          <img src="uploads/upload1/<?php echo $ddescimg1; ?>" alt="img1" />
          <img src="uploads/upload2/<?php echo $ddescimg2; ?>" alt="img2" />
          <img src="uploads/upload3/<?php echo $ddescimg3; ?>" alt="img3" />
          <img src="uploads/upload4/<?php echo $ddescimg4; ?>" alt="img4" />
        </div>
      </div>

      <div class="bids_container">
        <ul>
          <li>
            <div>
              <div>
                <h2>Bidder's Name</h2>
                <p>Description over here</p>
              </div>
              <p>Budget</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </div>
</body>

</html>