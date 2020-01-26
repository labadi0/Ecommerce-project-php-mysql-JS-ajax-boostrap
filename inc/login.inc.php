<?php
session_start();


if(isset($_POST['submit2'])){
include_once'db.inc.php';
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['passw']);

    if(empty($username) || empty($password))
    {

    }else{
      $sql = "SELECT * FROM user  WHERE id_user='$username'";
      $result = mysqli_query($db, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck<1) {
        echo '<script>alert("email que vous avez saisit est incorrect !");</script>';

      }else {
        if($row=mysqli_fetch_assoc($result)) {
          $hashedpass=password_verify($password,$row['password']);
          if($hashedpass==false) {
            echo '<script>alert("mot de passe que vous avez entré est erroné !");</script>';
          }elseif ($hashedpass==true) {
            $_SESSION['id_user']= $row['id_user'];
            $_SESSION['name']= $row['name'];
            $_SESSION['city']= $row['city'];
            $_SESSION['zipcode']= $row['zipcode'];
            $_SESSION['address']= $row['address'];
            $_SESSION['phone']= $row['phone'];
            $_SESSION['password']= $row['password'];
            $_SESSION['country']= $row['country'];

            header("Location: ../index.php");
            exite();
          }
        }
      }
    }


}
