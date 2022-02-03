<?php

include 'config.php';

session_start();

if (!isset($_SESSION['clientusername'])) {
  header("Location: index.php");
}

$sql = "SELECT * from projects";

if ($result = mysqli_query($conn, $sql)) {

  $rowcount = mysqli_num_rows($result);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/client_dashboard.css" />
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
      <div class="welcome-client">
        <?php echo "<h1>" . $_SESSION['clientusername'] . "</h1>"; ?>
        <a href="logout.php">Logout</a>
      </div>
    </nav>

    <!-- -------------- End of Navbar ---------------- -->


    <!-- ----------------- Start of Statistics ---------------------- -->

    <header>Statistics</header>
    <div class="row">
      <div class="works_done">
        <a href="works_assigned_done.html">5</a>
        <h2>Works Assigned done</h2>
      </div>
      <div class="Loyalty_Badge">
        <a href="works_assigned_done.html">2</a>
        <h2>Work in progress</h2>
      </div>
      <div class="work_done_worth">
        <a href="works_assigned_done.html">500000</a>
        <h2>Total Expenses</h2>
      </div>
      <div class="dislike">
        <a href="works_listed.php"><?php echo $rowcount; ?></a>
        <h2>work listed</h2>
      </div>
    </div>


    <div class="postdiv">
      <img src="images/new-post.png" alt="">
      <div class="row1">
        <a class="postprojbtn" href="postaproject.php">Post Project</a>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eveniet cupiditate illo maiores facilis similique
          quam dolorem? Odio, quos ea.</p>
      </div>
    </div>
  </div>
</body>

</html>