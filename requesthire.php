<?php

include('config.php');


if (isset($_POST['submitrequst'])) 
{
  $holdername = $_POST['holdername'];
  $shortdics = $_POST['shortdics'];
  $longdics = $_POST['longdics'];
  $mintotal = $_POST['mintotal'];
  $maxtotal = $_POST['maxtotal'];
  $category = $_POST['category'];
  $descimg1 = $_FILES["desc-image1"]['name'];
  $descimg2 = $_FILES["desc-image2"]['name'];
  $descimg3 = $_FILES["desc-image3"]['name'];
  $descimg4 = $_FILES["desc-image4"]['name'];

  $query = "INSERT INTO requesthire (`holdername`,`shortdics`,`longdics`,`mintotal`,`maxtotal`,`descimg1`,`descimg2`,`descimg3`,`descimg4`) VALUES ('$holdername','$shortdics','$longdics','$mintotal','$maxtotal','$descimg1','$descimg2','$descimg3','$descimg4')";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) 
  {
    move_uploaded_file($_FILES["desc-image1"]["tmp_name"], "uploads/upload5/" . $_FILES["desc-image1"]["name"]);
    move_uploaded_file($_FILES["desc-image2"]["tmp_name"], "uploads/upload6/" . $_FILES["desc-image2"]["name"]);
    move_uploaded_file($_FILES["desc-image3"]["tmp_name"], "uploads/upload7/" . $_FILES["desc-image3"]["name"]);
    move_uploaded_file($_FILES["desc-image4"]["tmp_name"], "uploads/upload8/" . $_FILES["desc-image4"]["name"]);
    $_SESSION['success'] = "Request Added";
    header('Location: postaboutworker.php');
  } 
  else 
  {
    $_SESSION['failed'] = "Request did Not Added";
    header('Location: postaboutworker.php');
  }
// else 
// {
//     echo 'This is ERROR';
// }
}