<?php 
  require 'config.php';
  error_reporting(0);




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/work_assigned_done.css">
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
          <li><a href=" worker.php">Browse Jobs</a></li>
        </ul>
      </div>
    </nav>

    <!-- -------------- End of Navbar ---------------- -->

    <header>Works Listed</header>
    <div class="column">
    <?php
          require 'config.php';

          $query = "SELECT * FROM projects";
          $query_run = mysqli_query($conn, $query);
          $check_empty = mysqli_num_rows($query_run) > 0;
          if ($check_empty) {
            while ($row = mysqli_fetch_assoc($query_run)) {
          ?>
          <?php 
            for($row['id'] = 0; $row['id'] < 1; $row['id']++){
          echo "<div class=","row",">";
          echo '<img src=','"images/paysafely.svg"','alt=',"",'>';
              echo "<div class=","inner_row",">";
              echo "<h1>";
                echo $row['projectname'];
                echo "</h1>";
                echo "<h2>";
                echo $row['description'];
                echo "</h2>";
                echo "</div>";
                echo "<h3>";
                echo $row['tomoney']; 
                echo "</h3>";  
                echo "</div>";
                }

          ?>

              <!-- <h1> <?php //while($row['id'] > 0){  $row['id']-- ;}?> </h1>
              <h1> <?php //while($row['id'] > 0){  $row['id']-- ;}?> </h1>    -->
             <?php
            }
          } else {
            echo "SeD!!! no one here";
          }
          ?>
    </div>
  </div>
</body>
</html>