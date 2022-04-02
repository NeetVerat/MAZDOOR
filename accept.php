<?php 
require 'config.php';
if (isset($_POST['accept'])) {
$projectidofbids = $_GET['projectidofbids'];
$sql1 = "UPDATE `projectbids` SET `chahiye` = 'accept' WHERE `projectbids`.`projectidofbids` = $projectidofbids;";
$result1 = mysqli_query($conn, $sql1);
if($result1){
echo "<script>alert('Working')</script>";
?>
<META HTTP-EQUIV='REFRESH' CONTENT = "0; URL=http://localhost/main/works_listed.php">
<?php
} else {
        echo "Mission Failed";
    }}
?>