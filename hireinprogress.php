<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/work_assigned_done.css">
  <title>Hired Workers</title>
</head>
<body>
  <div class="container">
    <!-- -------------- Start of Navbar ---------------- -->
    <nav class="navbar">
      <div class="logo">
        <a href="index.php" class="logo_link">MAZDOOR</a>
        <ul>
          <li><a href="how_it_works.html">How it Works</a></li>
          <li><a href="worker_dashboard.php">Dashboard</a></li>
        </ul>
      </div>
    </nav>

    <!-- -------------- End of Navbar ---------------- -->

    <header>Hired Workers</header>
    <div class="column">
   <?php
      require 'config.php';
      $query = "SELECT * FROM requesthire";
      $query_run = mysqli_query($conn, $query);
      $check_empty = mysqli_num_rows($query_run) > 0;
      if ($check_empty) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          if ($row['hirework'] == 'hired') {
            $requesthireid = $row['requesthireid'];
            for ($row['hirework'] = 0; $row['hirework'] < 1; $row['hirework']++) {
                    echo "<div class=", "row", ">";
                    echo '<img src=', '"images/paysafely.svg"', 'alt=', "", '>';
                    echo "<div class=", "inner_row", ">";
                    echo "<h1>";
                    echo $row['holdername'];
                    echo "</h1>";
                    echo $row['longdics'];
                    echo "</h2>";
                    echo "</div>";
                    echo "<h3> ₹ ";
                    echo $row['maxtotal'];
                    echo "</h3>";
                    ?>
                    <form action="#" method="POST">
                    <button name="hireup" type="submit" class="hireup">Hired Work Done</button>
                    <?php
                    if (isset($_POST['hireup'])) {
                    $query12 = "UPDATE `requesthire` SET `hirework` = 'done' WHERE `requesthire`.`requesthireid` = '$requesthireid';";
                    $query_run12 = mysqli_query($conn, $query12);
                    echo $requesthireid;
                    echo "</div></a>";
              }
            }
            }
          }
        }
        ?>
  </div>
</body>
</html>