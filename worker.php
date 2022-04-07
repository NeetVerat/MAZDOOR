<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/worker.css" />
  <title>MAZDOOR - USER DASHBOARD</title>
</head>

<body>
  <div class="main-container">
    <!-- -------------- Start of Navbar ---------------- -->
    <nav class="navbar">
      <div class="logo">
        <a class="logo_link" href="index.php">MAZDOOR</a>
        <ul>
          <li><a href="how_it_works.html">How it Works</a></li>
          <li><a href="client_dashboard.php">Dashboard</a></li>
        </ul>
      </div>

    </nav>

    <!-- -------------- End of Navbar ---------------- -->

    <div class="main-container2">
      <!-- -------------------- Search box Container ------------------ -->
      <!-- <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search" />
          <button type="submit">Search</button>
        </form>
      </div> -->

      <!-- ------------------------ Filter Conatiner--------------------- -->

      <!-- <div class="filter-container"> -->
      <!-- -------- Category -------------- -->
      <!-- <select class="filter-category">
          <option value="0">Category</option>
          <option value="1">Plumbing</option>
          <option value="2">Electrical</option>
          <option value="3">Painting</option>
          <option value="4">Carpenting</option>
          <option value="5">Welding</option>
          <option value="6">Sweeping and Cleaning</option>
          <option value="7">Loading and unloading</option>
          <option value="8">Construction</option>
          <option value="9">Agriculture</option>
        </select>
      </div> -->

      <!-- ------------------- card section ------------------------->
      <div class="card-exterior">
        <div class="cards">
          <?php
          require 'config.php';

          $query = "SELECT * FROM requesthire";
          $query_run = mysqli_query($conn, $query);
          $check_empty = mysqli_num_rows($query_run) > 0;
          if ($check_empty) {
            while ($row = mysqli_fetch_assoc($query_run)) {
              if ($row['hirework']=='hire') {
                
              
          ?>
          <div class="card-1">
            <img src="uploads/upload5/<?php echo $row['descimg1']; ?>" alt="SeD" />
            <div class="card1_text">
              <h1> <?php echo $row['holdername']; ?> </h1>
              <h2>Budget</h2>
              <h2>&#8377;<?php echo $row['maxtotal']; ?> </h2>
            </div>
            <a href="bidding_page_worker.php/?token=<?php echo $row['requesthireid']; ?>" target="_blank">Hire</a>
          </div>

          <?php
            }}
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