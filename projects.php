<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/projects.css" />
    <title>MAZDOOR - USER DASHBOARD</title>
</head>

<body>
    <div class="main-container">
        <!-- -------------- Start of Navbar ---------------- -->
        <nav class="navbar">
            <div class="logo">
                <a class="logo_link" href="index.php">MAZDOOR</a>
                <ul>
                    <li><a href="worker_dashboard.php">Dashboard</a></li>
                </ul>
            </div>

        </nav>

        <!-- -------------- End of Navbar ---------------- -->

        <div class="main-container2">
            <!-- ------------------- card section ------------------------->
            <div class="card-exterior">
                <div class="cards">
                    <?php
          require 'config.php';

          $query = "SELECT * FROM projects";
          $query_run = mysqli_query($conn, $query);
          $check_empty = mysqli_num_rows($query_run) > 0;
          if ($check_empty) {
            while ($row = mysqli_fetch_assoc($query_run)) {
          ?>
                    <div class="card-1">
                        <img src="uploads/<?php echo $row['cardimage']; ?>" alt="SeD" />
                        <div class="card1_text">
                            <h1> <?php echo $row['projectname']; ?> </h1>
                            <p><?php echo $row['description']; ?></p>
                        </div>
                        <div class="hover-card">
                            <p><?php echo $row['description']; ?></p>
                            <h2>Budget</h2>
                            <h2>&#8377;<?php echo $row['frommoney']; ?> - &#8377;<?php echo $row['tomoney']; ?> </h2>
                            <a href="bidding_page.php/?token=<?php echo $row['token']; ?>" target="_blank">BID</a>
                        </div>

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
    </div>
    </div>
</body>

</html>