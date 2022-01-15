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
  <link rel="stylesheet" href="css/client.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet" />
  <title>MAZDOOR</title>
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
    <div class="client_land">
      <div class="welcome-client">
        <?php echo "<h1>Welcome, " . $_SESSION['clientusername'] . "</h1>"; ?>
        <a href="logout.php">Logout</a>
      </div>
      <ul class="cdashboard">
        <li><a class="postprojbtn" href="postaproject.php">Post a project</a></li>
        <li><a href="order_history.html">Project History</a></li>
        <li><a href="current_project.html">Current/Ongoing Project</a></li>
        <li><a href="Messages.html">Messages</a></li>
      </ul>

    </div>
  </div>
</body>

</html>