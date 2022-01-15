<?php

session_start();

if (!isset($_SESSION['clientusername'])) {
    header("Location: index.html");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/worker_dashboard.css" />
    <title>Client Dashboard</title>
  </head>
  <body>
    <div class="container">
      <!-- -------------- Start of Navbar ---------------- -->
      <nav class="navbar">
        <div class="logo">
          <a href="index.html" class="logo_link">MAZDOOR</a>
          <ul>
            <li><a href="how_it_works.html">How it Works</a></li>
            <li><a href="bidding_page.html">Browse Jobs</a></li>
          </ul>
        </div>
      </nav>

      <!-- -------------- End of Navbar ---------------- -->
      <div class="welcome-client">
        <?php echo "<h1>Welcome, " . $_SESSION['clientusername'] . "</h1>"; ?>
        <a href="logout.php">Logout</a>
      </div>

      <!-- ----------------- Start of Statistics ---------------------- -->

      <header>Statistics</header>
      <div class="row">
        <div class="works_done"><h2>5</h2></div>
        <div class="Loyalty_Badge"><h2>5</h2></div>
        <div class="work_done_worth"><h2>5</h2></div>
        <div class="dislike"><h2>5</h2></div>
      </div>

      <div class="row1">
        <div class="works_done_txt"><h2>Works Assigned done</h2></div>
        <div class="Loyalty_Badge_txt"><h2>Work in progress</h2></div>
        <div class="work_done_worth_txt"><h2>Total Expenses</h2></div>
        <div class="dislike_txt"><h2>work listed</h2></div>
      </div>
    </div>
  </body>
</html>
