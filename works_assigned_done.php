<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/work_assigned_done.css">
    <title>Work Assigned Done</title>
</head>

<body>
    <div class="container">
        <!-- -------------- Start of Navbar ---------------- -->
        <nav class="navbar">
            <div class="logo">
                <a href="index.php" class="logo_link">MAZDOOR</a>
                <ul>
                    <li><a href=" client_dashboard.php">Dashboard</a></li>
                </ul>
            </div>
        </nav>

        <!-- -------------- End of Navbar ---------------- -->

        <header>Works Assigned Done</header>
        <div class="column">
            <?php
      require 'config.php';
      $query = "SELECT * FROM projects";
      $query_run = mysqli_query($conn, $query);
      $check_empty = mysqli_num_rows($query_run) > 0;
      if ($check_empty) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          if ($row['toshow'] == 'no') {
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
                    echo "<br>";
                    echo "</h3>";
                    echo "</div></a>";
                  }
                }
              }
            }
          }
        }
      }
      ?>


        </div>
</body>

</html>