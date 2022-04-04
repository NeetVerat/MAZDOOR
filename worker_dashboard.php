<?php

include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

$sql1 = "SELECT * FROM projects WHERE toshow = 'no'";

if ($result1 = mysqli_query($conn, $sql1)) {

  $rowcount1 = mysqli_num_rows($result1);
}

$sql2 = "SELECT * FROM projects WHERE toshow = 'yes'";

if ($result2 = mysqli_query($conn, $sql2)) {

  $rowcount2 = mysqli_num_rows($result2);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/worker_dashboard.css" />
  <title>Worker Dashboard</title>
</head>

<body>
  <div class="container">
    <!-- -------------- Start of Navbar ---------------- -->
    <nav class="navbar">
      <div class="logo">
        <a href="index.php" class="logo_link">MAZDOOR</a>
        <ul>
          <li><a href="how_it_works.html">How it Works</a></li>
        </ul>
      </div>
      <div class="welcome-client">
        <?php echo "<h1>" . $_SESSION['username'] . "</h1>"; ?>
        <a href="logout.php">Logout</a>
      </div>
    </nav>

    <!-- -------------- End of Navbar ---------------- -->


    <!-- ----------------- Start of Statistics ---------------------- -->

    <div class="row">
      <a href="workassigneddone.php">
        <div class="works_done">
          <div class="works_done_left">
            <p><?php echo $rowcount1; ?></p>
            <h2>Works Done</h2>
          </div>

          <div class="works_done_right">
            <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_6uhcq95s.json"
              background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
          </div>
        </div>

      </a>
      <a href="workinprogress.php">
        <div class="Loyalty_Badge">
          <div class="workinprogress_left">
            <p><?php echo $rowcount2; ?></p>
            <h2>Work in progress</h2>
          </div>
          <div class="workinprogress_right">
            <lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_ytezzo51.json"
              background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
          </div>
        </div>
      </a>
    </div>


    <div class="contain">
      <div class="postdiv">
        <img src="images/new-post.png" alt="">
        <div class="row1">
          <a class="postprojbtn" href="postaboutworker.php">Apply for work</a>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eveniet cupiditate illo maiores facilis
            similique
            quam dolorem? Odio, quos ea.</p>
        </div>
      </div>


      <div class="hirediv">
        <img src="images/headhunter.png" alt="">
        <div class="row1">
          <a class="postprojbtn" href="projects.php">Browse Jobs</a>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eveniet cupiditate illo maiores facilis
            similique
            quam dolorem? Odio, quos ea.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>