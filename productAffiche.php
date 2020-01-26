<?php

//include 'Produit.php';
include './inc/header.php';
include 'connect.php';
function calculatrice($value,$max)
{
  $x = $value + 8;
  if ($x<$max){
    return $x;
  }
  else{
    $y=$max-$value;
    $x = $y + $value;
    return $x;
  }
}
function display() {

if (isset($_GET['page'])){

  $page = $_GET['page'];

}
else
{
  $page  = 1;
}
//echo "yawwww rani hna  : ".$page ;
$num_per_page = 8;
$start_from = ($page -1)*8;

    $db = conectiondb();
    //$x= counter($start_from,$num_per_page);
    $Y = counter() ;
    $x = calculatrice($start_from,$Y);


  //  echo "x rahou hnnnna " .$x;
  //  echo "<br>";
    $tab = array();

    $j = 1;

$i = $start_from +1;
//echo "hada i men win yedbda : ". $i;
//echo "<br>";


    for ($i; $i <= $x ; $i++) {

        $tab = extracter($i,'id_produit');

        //   if (empty( $tab )){
        //      continue;
        //  }

        $id_produit = $tab['id_produit'] ;
        $nameMere = $tab['nameMere'];
        $description = $tab['description'];
        $prix = $tab['prix'];
        $modele = $tab['modele'];
        $systemeExploitation = $tab['systemeExploitation'];
        $ecran = $tab['ecran'];
        $memoire = $tab['memoire'];
        $batterie = $tab['batterie'];
        $Appareil_photo = $tab['Appareil_photo'];
        $ram = $tab['ram'];
        $poid = $tab['poid'];
        $color = $tab['color'];
        $image = $tab['image'];
        $image2 = $tab['image2'];
        //   echo $image2;





        //echo '<img src="data:image/jpg;base64,'.base64_encode( $result['image'] ).'"  style = "width : 200px; height :200px;/>';


        if ($j == 1 || $j == 5  ){

            echo' <div class="section group">';

            echo '<div class="grid_1_of_4 images_1_of_4"> ';


            $sql = "SELECT * FROM produit WHERE modele = '$modele'";
            $sth = $db->query($sql);
            $result=mysqli_fetch_array($sth);
            echo  ' <h2>'.$nameMere.'</h2>';
            echo '<img alt=" " src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';

            echo ' <form action="preview.php" method="get"  enctype="multipart/form-data" > ';




            echo ' <p>'.$modele.'</p>';
            echo  '<p><span class="price">'.$prix.'&euro;</span></p>';
            echo '<input type="hidden"  name="id_ref" value="'.$id_produit.'">';
            //	<!-- 		     <div class="button"><span><a href="preview.php" class="details">Details-->
            echo '	<div class="details"><span>   <input  class="btn btn-primary" type="submit" name="monurl" value="Details"> </span>	</div> ';
            echo '</form>';

            if ($j==5){
              $j=1;
            }

            echo		'</div>';
            $j++;



        }


        elseif ($j<= 4){
            echo '<div class="grid_1_of_4 images_1_of_4"> ';

            $sql = "SELECT * FROM produit WHERE modele = '$modele'";
            $sth = $db->query($sql);
            $result=mysqli_fetch_array($sth);
            echo  ' <h2>'.$nameMere.'</h2>';
            echo '<img alt=" " src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';

            echo ' <form action="preview.php" method="get"  enctype="multipart/form-data" > ';


            echo ' <p>'.$modele.'</p>';
            echo  '<p><span class="price">'.$prix.'&euro;</span></p>';
            echo '<input type="hidden"  name="id_ref" value="'.$id_produit.'">';

            //	<!-- 		     <div class="button"><span><a href="preview.php" class="details">Details-->
            echo '	<div class="details"><span>   <input  class="btn btn-primary" type="submit" name="monurl" value="Details"> </span>	</div> ';
            echo '</form>';



            echo		'</div>';
            $j++;

        }
        else {
            echo '</div>';
            $j=1;


        }


    }



        $db = conectiondb();

      //  $sql="SELECT * FROM produit";
      $sql="SELECT id_produit FROM produit ";


        if ($result=mysqli_query($db,$sql))
        {
            // Return the number of rows in result set
        $rowcount    =mysqli_num_rows($result);
         //   printf("Result set has %d rows.\n",$rowcount);

        }


$total_record = $rowcount;
$total_page = ceil($total_record/$num_per_page);
/*
//$_POST[nombre] = $total_page;
echo '<div style = "position: static ;


margin-top:45%;
float: right;


  ">';
echo "</div>";
*/

}

?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>


	       <?php

	       display();

	       ?>
 </div>
 </div>
</div>
</div>

<?php 
 echo ' <ul class="pagination justify-content-center">';
    for ($i=1; $i <= 3; $i++) {
    //echo "<a href = 'productAffiche.php?page=".$i." ' class = 'btn btn-primary '>$i</a>";
    echo "<li class='page-item'> <a class='page-link' href = 'productAffiche.php?page=".$i."   '\t >$i</a></li>";
    }
 echo ' </ul>';
?>

 <?php include 'inc/footer.php'; ?>
