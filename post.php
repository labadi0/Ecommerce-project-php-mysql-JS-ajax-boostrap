<?php

include('inc/db.inc.php');

if(isset($_POST['search']) && !empty($_POST['search'])){
  $search = mysqli_real_escape_string($db,$_POST['search']);
  $sql="SELECT * FROM produit WHERE modele like '$search%'";
  $query=mysqli_query($db,$sql);

  while($row=mysqli_fetch_assoc($query)){
    echo "<li><a href='preview.php?id_ref=".$row['id_produit']."&monurl=Details'>".$row['modele']."</a></li>";
  }
}
 ?>
