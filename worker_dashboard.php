<?php

include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

$sql = "SELECT * from projects";

if ($result = mysqli_query($conn, $sql)) {

  $row = mysqli_num_rows($result);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/client_dashboard.css" />
  <title>Worker Dashboard</title>
</head>

<body>
  <div class="container">
    <!-- -------------- Start of Navbar ---------------- -->
    <nav class="navbar">
      <div class="logo">
        <a href="index.html" class="logo_link">MAZDOOR</a>
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
      <div class="works_done">
        <a href="works_assigned_done.html">5</a>
        <h2>Works Done</h2>
      </div>
      <div class="Loyalty_Badge">
        <a href="works_assigned_done.html">2</a>
        <h2>Loyalty Badge</h2>
      </div>
      <div class="work_done_worth">
        <a href="works_assigned_done.html">500000</a>
        <h2>Work Done Worth</h2>
      </div>
      <div class="dislike">
        <a href="works_listed.php"><?php echo $row; ?></a>
        <h2>Dislike</h2>
      </div>
    </div>


    <div class="contain">
      <div class="postdiv">
        <img src="images/new-post.png" alt="">
        <div class="row1">
          <a class="postprojbtn" href="postaboutworker.php">Edit Profile</a>
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
</body>

</html>