<?php

include('config.php');


if (isset($_POST['submit_project'])) {
  $n = 16;
  function getRandomString($n)
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
      $index = rand(0, strlen($characters) - 1);
      $randomString .= $characters[$index];
    }

    return $randomString;
  }

  $token = getRandomString($n);
  $projectname = $_POST['project_name'];
  $description = $_POST['description'];
  $bigdescription = $_POST['bigdescription'];
  $frommoney = $_POST['from_money'];
  $tomoney = $_POST['to_money'];
  $cardimage = $_FILES["card-image"]['name'];
  $descimg1 = $_FILES["desc-image1"]['name'];
  $descimg2 = $_FILES["desc-image2"]['name'];
  $descimg3 = $_FILES["desc-image3"]['name'];
  $descimg4 = $_FILES["desc-image4"]['name'];

  $query = "INSERT INTO projects (`token`,`projectname`,`description`,`bigdescription`,`frommoney`,`tomoney`,`cardimage`,`descimg1`,`descimg2`,`descimg3`,`descimg4`) VALUES ('$token','$projectname','$description','$bigdescription','$frommoney','$tomoney','$cardimage','$descimg1','$descimg2','$descimg3','$descimg4')";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    move_uploaded_file($_FILES["card-image"]["tmp_name"], "uploads/" . $_FILES["card-image"]["name"]);
    move_uploaded_file($_FILES["desc-image1"]["tmp_name"], "uploads/upload1/" . $_FILES["desc-image1"]["name"]);
    move_uploaded_file($_FILES["desc-image2"]["tmp_name"], "uploads/upload2/" . $_FILES["desc-image2"]["name"]);
    move_uploaded_file($_FILES["desc-image3"]["tmp_name"], "uploads/upload3/" . $_FILES["desc-image3"]["name"]);
    move_uploaded_file($_FILES["desc-image4"]["tmp_name"], "uploads/upload4/" . $_FILES["desc-image4"]["name"]);
    $_SESSION['success'] = "Project Added";
    header('Location: postaproject.php');
  } else {
    $_SESSION['success'] = "Project Not Added";
    header('Location: postaproject.php');
  }
}