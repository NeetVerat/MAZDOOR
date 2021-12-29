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
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap"
      rel="stylesheet"
    />
    <title>Post a Project</title>
  </head>
  <body>
    <form action="code.php" method="POST" enctype="multipart/form-data">
      <h2>POST PROJECT</h2>
      <div class="container">
      <div class="form-group">
        <label for="project_name">Choose a name for your Project</label>
        <input name="project_name" type="text" required="required" />
      </div>
      <div class="form-group form-descrip">
        <label for="description">Tell us more about your project</label>
        <textarea name="description" type="text" rows="4" cols="23" class="form-control" required="required"></textarea>
      </div>
      <!-- <label for="">What is your estimated budget?</label>
      <select name="inr" id="">
        <option value="0">inr</option>
      </select> -->

      <div class="form-group form-big-descrip">
        <label class="lbl_descrip" for="bigdescription">Tell us more about your project in brief</label>
        <textarea name="bigdescription" type="text" rows="8" cols="23" class="form-control" required="required"></textarea>
      </div>

      <div class="money">
        <h2>Budget</h2>
        <div class="row">
          <div class="form-group">
            <label for="from_money">From</label>
            <input name="from_money" type="number" required="required" />
          </div>
          <div class="form-group">
            <label for="to_money">To</label>
            <input name="to_money" type="number" required="required" />
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="card-image"> Upload Image for card </label>
        <input
          type="file"
          name="card-image"
          id="card-image"
          class="form-control"
          required="required"
        />
      </div>
      <div class="form-group">
        <label for="desc-image1"> Upload Image for description </label>
        <input
          type="file"
          name="desc-image1"
          id="desc-image1"
          class="form-control"
          required="required"
        />
      </div>
      <div class="form-group">
        <label for="desc-image2"> Upload Image for description </label>
        <input
          type="file"
          name="desc-image2"
          id="desc-image2"
          class="form-control"
          required="required"
        />
      </div>
      <div class="form-group">
        <label for="desc-image3"> Upload Image for description</label>
        <input
          type="file"
          name="desc-image3"
          id="desc-image3"
          class="form-control"
          required="required"
        />
      </div>
      <div class="form-group">
        <label for="desc-image4"> Upload Image for description</label>
        <input
          type="file"
          name="desc-image4"
          id="desc-image4"
          class="form-control"
          required="required"
        />
      </div>
      </div>
      <button type="submit" name="submit_project">Submit</button>
    </form>
  </body>
</html>
