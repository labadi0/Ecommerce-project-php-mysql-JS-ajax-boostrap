<?php
session_start();
include('inc/db.inc.php');
if(isset($_POST['lien']) && !empty($_POST['lien']) ){

  $lien = mysqli_real_escape_string($db,$_POST['lien']);
  $sql = "SELECT * FROM produit WHERE nameMere='$lien'";
  $query=mysqli_query($db,$sql);

  $row=mysqli_num_rows($query);
  if($row==true){
    while($row=mysqli_fetch_assoc($query)){
      echo "<p>".$row['Appareil_photo']."</p>";
      echo "<p>".$row['batterie']."</p>";
      echo "<p>".$row['color']."</p>";
      echo "<p>".$row['description']."</p>";
      echo "<p>".$row['ecran']."</p>";
      echo "<p>".$row['image']."</p>";
      echo "<p>".$row['image2']."</p>";
      echo "<p>".$row['memoire']."</p>";
      echo "<p>".$row['modele']."</p>";
      echo "<p>".$row['name']."</p>";
      echo "<p>".$row['name2']."</p>";
      echo "<p>".$row['nameMere']."</p>";
      echo "<p>".$row['poid']."</p>";
      echo "<p>".$row['prix']."</p>";
      echo "<p>".$row['ram']."</p>";
      echo "<p>".$row['systemeExploitation']."</p>";



      $_SESSION['Appareil_photo'] = $row['Appareil_photo'];
      $_SESSION['batterie'] = $row['batterie'];
      $_SESSION['color'] = $row['color'];
      $_SESSION['description'] = $row['description'];
      $_SESSION['ecran'] = $row['ecran'];
      $_SESSION['image'] = $row['image'];
      $_SESSION['image2'] = $row['image2'];
      $_SESSION['memoire'] = $row['memoire'];
      $_SESSION['modele'] = $row['modele'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['name2'] = $row['name2'];
      $_SESSION['nameMere'] = $row['nameMere'];
      $_SESSION['poid'] = $row['poid'];
      $_SESSION['prix'] = $row['prix'];
      $_SESSION['ram'] = $row['ram'];
      $_SESSION['systemeExploitation'] = $row['systemeExploitation'];






    }
  }
  }
  ?>
