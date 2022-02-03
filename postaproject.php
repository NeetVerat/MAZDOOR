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
  <title>Post a Project</title>
</head>

<body>
  <form action="code.php" method="POST" enctype="multipart/form-data">
    <h2>POST PROJECT</h2>
    <div class="container">
      <div class="left_right">
        <div class="left">
          <input type="text" name="project_name" placeholder="  Project Name" class="proj_name" required><br>
          <textarea name="description" type="text" rows="4" cols="2300" class="form-control"
            placeholder="Short Description" required></textarea>
          <textarea name="bigdescription" type="text" rows="4" cols="2300" class="form-control"
            placeholder="Brief Description" required></textarea>
        </div>
        <div class="right">
          <div class="money">
            <h2>Budget</h2>
            <div class="row">
              <input name="from_money" type="number" placeholder="From" required />
              <input name="to_money" type="number" placeholder="To" required />
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
              <input type="file" name="card-image" id="card-image" class="form-control" required />
              <input type="file" name="desc-image1" id="desc-image1" class="form-control" required />
              <input type="file" name="desc-image2" id="desc-image2" class="form-control" required />
              <input type="file" name="desc-image3" id="desc-image3" class="form-control" required />
              <input type="file" name="desc-image4" id="desc-image4" class="form-control" required />

              <!-- <span id="file-chosen">No file chosen</span>
              <label for="card-image">Upload Card Image</label>
              <input type="file" id="card-image" hidden required />

              <span id="file-chosen1">No file chosen</span>
              <label for="desc-image1">Upload Image</label>
              <input type="file" id="desc-image1" hidden required />

              <span id="file-chosen2">No file chosen</span>
              <label for="desc-image2">Upload Image</label>
              <input type="file" id="desc-image2" hidden required />

              <span id="file-chosen3">No file chosen</span>
              <label for="desc-image3">Upload Image</label>
              <input type="file" id="desc-image3" hidden required />

              <span id="file-chosen4">No file chosen</span>
              <label for="desc-image4">Upload Image</label>
              <input type="file" id="desc-image4" hidden required /> -->

              <br><button name="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <button type="submit" name="submit_project" class="submit_proj">Submit</button>
  </form>
  <script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on the button, open the modal
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>

  <!-- <script>
  const cardimageBtn = document.getElementById('card-image');

  const fileChosen = document.getElementById('file-chosen');

  cardimageBtn.addEventListener('change', function() {
    fileChosen.textContent = this.files[0].name
  })

  const descimage1Btn = document.getElementById('desc-image1');

  const fileChosen1 = document.getElementById('file-chosen1');

  descimage1Btn.addEventListener('change', function() {
    fileChosen1.textContent = this.files[0].name
  })

  const descimage2Btn = document.getElementById('desc-image2');

  const fileChosen2 = document.getElementById('file-chosen2');

  descimage2Btn.addEventListener('change', function() {
    fileChosen2.textContent = this.files[0].name
  })

  const descimage3Btn = document.getElementById('desc-image3');

  const fileChosen3 = document.getElementById('file-chosen3');

  descimage3Btn.addEventListener('change', function() {
    fileChosen3.textContent = this.files[0].name
  })

  const descimage4Btn = document.getElementById('desc-image4');

  const fileChosen4 = document.getElementById('file-chosen4');

  descimage4Btn.addEventListener('change', function() {
    fileChosen4.textContent = this.files[0].name
  })
  </script> -->
</body>

</html>