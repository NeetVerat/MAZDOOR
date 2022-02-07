<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/postaproject.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />
  <title>Request for Hiring</title>
</head>

<body>
  <form action="requesthire.php" method="POST" enctype="multipart/form-data">
    <h2>Request for Hiring</h2>
    <div class="container">
      <div class="left_right">
        <div class="left">
          <input type="text" name="holdername" placeholder="Your Name" class="proj_name" required><br>
          <textarea name="shortdics" type="text" rows="4" cols="2300" class="form-control"
            placeholder="Short Description" required></textarea>
          <textarea name="longdics" type="text" rows="4" cols="2300" class="form-control"
            placeholder="Brief Description" required></textarea>
        </div>
        <div class="right">
          <div class="money">
            <h2>Budget</h2>
            <div class="row">
              <input name="mintotal" type="number" placeholder="From" required />
              <input name="maxtotal" type="number" placeholder="To" required />
            </div>
          </div>
          <button id="myBtn">Upload Photos</button>
        </div>
      </div>
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <form action="" method="POST" enctype="multipart/form-data">
            <span class="close">&times;</span>
            <div class="down">
              <input type="file" name="desc-image1" id="desc-image1" class="form-control" required />
              <input type="file" name="desc-image2" id="desc-image2" class="form-control" required />
              <input type="file" name="desc-image3" id="desc-image3" class="form-control" required />
              <input type="file" name="desc-image4" id="desc-image4" class="form-control" required />
              <br>
              <button name="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <button type="submit" name="submitrequst" class="submit_proj">Submit</button>
  </form>
  <script>

  var modal = document.getElementById("myModal");
  var btn = document.getElementById("myBtn");
  var span = document.getElementsByClassName("close")[0];
  btn.onclick = function() {
    modal.style.display = "block";
  }
  span.onclick = function() {
    modal.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>
</body>

</html>