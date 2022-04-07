<?php

include 'config.php';

session_start();

if (!isset($_SESSION['clientusername'])) {
  header("Location: index.php");
}

$sql = "SELECT * FROM projects WHERE toshow = 'show'";

if ($result = mysqli_query($conn, $sql)) {

  $rowcount = mysqli_num_rows($result);
}

$sql1 = "SELECT * FROM projects WHERE toshow = 'no'";

if ($result1 = mysqli_query($conn, $sql1)) {

  $rowcount1 = mysqli_num_rows($result1);
}

$sql2 = "SELECT * FROM projects WHERE toshow = 'yes'";

if ($result2 = mysqli_query($conn, $sql2)) {

  $rowcount2 = mysqli_num_rows($result2);
}

$sql3 = "SELECT * FROM requesthire WHERE hirework = 'hired'";

if ($result3 = mysqli_query($conn, $sql3)) {

  $rowcount3 = mysqli_num_rows($result3);
}

$sql4 = "SELECT * FROM requesthire WHERE hirework = 'done'";

if ($result4 = mysqli_query($conn, $sql4)) {

  $rowcount4 = mysqli_num_rows($result4);
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
        <a href="index.php" class="logo_link">MAZDOOR</a>
        <ul>
          <li><a href="../how_it_works.html">How it Works</a></li>
        </ul>
      </div>
      <div class="welcome-client">
        <?php echo "<h1>" . $_SESSION['clientusername'] . "</h1>"; ?>
        <a href="logout.php">Logout</a>
      </div>
    </nav>

    <!-- -------------- End of Navbar ---------------- -->


    <!-- ----------------- Start of Statistics ---------------------- -->

    <div class="row">
      <a href="works_assigned_done.php">
        <div class="works_done">
          <p><?php echo $rowcount1; ?></p>
          <h2>Works Assigned done</h2>
        </div>
      </a>
      <a href="works_in_progress.php">
        <div class="Loyalty_Badge">
          <p><?php echo $rowcount2; ?></p>
          <h2>Work in progress</h2>
        </div>
      </a>
      <a href="works_listed.php">
        <div class="dislike">
          <p><?php echo $rowcount; ?></p>
          <h2>work listed</h2>
        </div>
      </a>

    </div>

    <div class="row">
      <a href="hire_assigned_done.php">
        <div class="works_done">
          <p><?php echo $rowcount4; ?></p>
          <h2>Hired Work Done</h2>
        </div>
      </a>
      <a href="hireinprogress.php">
        <div class="Loyalty_Badge">
          <p><?php echo $rowcount3; ?></p>
          <h2>Hired Workers</h2>
        </div>
      </a>
    </div>

    <div class="contain">
      <a class="postprojbtn" href="postaproject.php">
        <div class="postdiv">
          <img src="images/new-post.png" alt="">
          <div class="row1">
            <h2>Post Project</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eveniet cupiditate illo maiores facilis
              similique
              quam dolorem? Odio, quos ea.</p>
          </div>
        </div>
      </a>


      <a class="postprojbtn" href="worker.php">
        <div class="hirediv">
          <img src="images/headhunter.png" alt="">
          <div class="row1">
            <h2>Hire Worker</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eveniet cupiditate illo maiores facilis
              similique
              quam dolorem? Odio, quos ea.</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</body>

</html>