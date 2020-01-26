<?php
include_once'db.inc.php';

if(isset($_GET['email'])){
$email=$_GET['email'];
$sql= "UPDATE user SET valid = 1 WHERE id_user ='".$email."' ";
$query = mysqli_query($db,$sql);
if ($query){
  header('location:../index.php?message=activee');
}
else{
  die('Error : '.mysqli_error());
}
}


?>
