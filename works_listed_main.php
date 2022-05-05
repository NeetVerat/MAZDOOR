<?php 
  require 'config.php';
  // error_reporting(0);




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
                    <li><a href=" worker.php">Browse Jobs</a></li>
                </ul>
            </div>
        </nav>

        <!-- -------------- End of Navbar ---------------- -->

        <header>Works Listed</header>
        <div class="column">
            <div class="row">
                <img src="images/paysafely.svg" alt="">
                <?php
          require 'config.php';

          $query = "SELECT * FROM projects";
          $query_run = mysqli_query($conn, $query);
          $check_empty = mysqli_num_rows($query_run) > 0;
          if ($check_empty) {
            while ($row = mysqli_fetch_assoc($query_run)) {
          ?>
                <div class="card-1">
                    <div class="card1_text">
                        <h1> <?php echo $row['token']; ?> </h1>
                        <?php
                              require 'config.php';

                              $query = "SELECT * FROM logindetails WHERE  clientemail =  ";
                              $query_run = mysqli_query($conn, $query);
                              $check_empty = mysqli_num_rows($query_run) > 0;
                              if ($check_empty) {
                                while ($row = mysqli_fetch_assoc($query_run)) {
                              ?>
                        <div class="card-1">
                            <div class="card1_text">
                                <h1> <?php echo $row['id']; ?> </h1>

                            </div>

                            <?php
                                }
                              } else {
                                echo "SeD!!! no one here";
                              }
                              ?>

                        </div>

                        <?php
            }
          } else {
            echo "SeD!!! no one here";
          }
          ?>
                    </div>
                </div>
            </div>
</body>

</html>