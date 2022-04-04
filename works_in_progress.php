<?php
include "config.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/work_assigned_done.css">
  <title>Work In Progress</title>
</head>

<body>
  <div class="container">
    <!-- -------------- Start of Navbar ---------------- -->
    <nav class="navbar">
      <div class="logo">
        <a href="index.php" class="logo_link">MAZDOOR</a>
        <ul>
          <li><a href="how_it_works.html">How it Works</a></li>
          <li><a href=" client_dashboard.php">Dashboard</a></li>
        </ul>
      </div>
    </nav>

    <!-- -------------- End of Navbar ---------------- -->

    <header>Works In Progress</header>
    <div class="column">
      <?php
      require 'config.php';
      $query = "SELECT * FROM projects";
      $query_run = mysqli_query($conn, $query);
      $check_empty = mysqli_num_rows($query_run) > 0;
      if ($check_empty) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          if ($row['toshow'] == 'yes') {
            for ($row['toshow'] = 0; $row['toshow'] < 1; $row['toshow']++) {
              $query1 = "SELECT * FROM projectbids";
              $query_run1 = mysqli_query($conn, $query1);
              $check_empty1 = mysqli_num_rows($query_run1) > 0;
              if ($check_empty1) {
                while ($row1 = mysqli_fetch_assoc($query_run1)) {
                  $token = $row['token'];
                  if ($row1['chahiye'] == 'accept' && $row1['tokenpb'] == $row['token']) {
                    echo "<div class=", "row", ">";
                    echo '<img src=', '"images/paysafely.svg"', 'alt=', "", '>';
                    echo "<div class=", "inner_row", ">";
                    echo "<h1>";
                    echo $row['projectname'];
                    echo "</h1>";
                    echo "<h2> Work Assigned To: ";
                    echo $row1['biddersname'];
                    echo "</h2>";
                    echo "</div>";
                    echo "<h3> ₹ ";
                    echo $row1['bidderbudget'];
                    echo "</h3>";
      ?>
      <form action="#" method="POST">
        <button name="wokdon" type="submit" class="wokdon">Work Done</button>
        <?php

                    echo "</div></a>";
                  }
                }
              }
              if (isset($_POST['wokdon'])) {
                $query12 = "UPDATE `projects` SET `toshow` = 'no' WHERE `projects`.`token` = '$token'";
                $query_run12 = mysqli_query($conn, $query12);
              }
            }
          }
        }
      }
      // }

        ?>

        <!-- <div class="row">
      <img src="images/paysafely.svg" alt="">
      <div class="inner_row"><h1>Lorem</h1>
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam inventore eligendi quibusdam voluptates corrupti totam.</p>
      </div>
      <h3>1000</h3>
      <img id="img_done" src="images/icons8-done.svg" alt="completed img" >
      <h3>COMPLETED</h3>
    </div> -->
    </div>
</body>

</html>