<?php
          require 'config.php';

          $query = "SELECT * FROM projects";
          $query_run = mysqli_query($conn, $query);
          $check_empty = mysqli_num_rows($query_run) > 0;
          if ($check_empty) {
            while ($row = mysqli_fetch_assoc($query_run)) {
          ?>


 <?php
            }
          } else {
            echo "SeD!!! no one here";
          }
          ?>



projectlister
amount
ddescription
tokenn
ied












biddersname
biddersdics
bidderbudget
tenderpdf


projectbids

$sql = "SELECT * FROM projectbids WHERE email= '$email'";
        $result = mysqli_query($conn, $sql);
if (!$result->num_rows > 0) 
{
 $sql = "INSERT INTO projectbids(biddersname, biddersdics, bidderbudget, tenderpdf ) VALUES ('$biddersname','$biddersdics','$bidderbudget','$tenderpdf')";
$result = mysqli_query($conn, $sql);
if ($result) 
{
echo "<script>alert('Wow! Your bid Submitted.')</script>";
$biddersname = " ";
$biddersdics = " ";
$bidderbudget = " ";
$tenderpdf = " ";
}




