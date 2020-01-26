<?php
// include 'Produit.php';
include 'connect.php';
 include './inc/header.php';
 include './inc/slider.php';
 
 if(isset($_GET['message'])){

$message=$_GET['message'];
?>
<div class="success">
<span class="closebtn" onclick="this.parentElement.style.display= 'none' ;">&times;</span>
<?php
echo 'votre compte est acctivé, veuillez vous connecter à la page de connexion !';

echo '</div>';

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


	      <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <?php
					 $db = conectiondb();

					 $x = $Xiaomi_alpha_black->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
				//	 echo  ' <h2>'.$Xiaomi_alpha_black->getName().'</h2>';
					 echo '<img alt=" " src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';
					 ?>


			  	 	<h2><?php echo $Xiaomi_alpha_black->getNameMere(); ?></h2>
					   <form action="preview.php" method="get">
					     <p><?php echo$Xiaomi_alpha_black->getModele();?></p>
					 <p><span class="price"><?php echo $Xiaomi_alpha_black->getPrix();	?></span></p>
           <input type="hidden"  name="id_ref" value="3">

		<!-- 		     <div class="button"><span><a href="preview.php" class="details">Details-->
						<div class="details"><span>   <input class="btn btn-primary" type="submit" name="monurl" value="Details"> </span>	</div>
				
				     </form>


				</div>


				<div class="grid_1_of_4 images_1_of_4">
					 <?php
					 $db = conectiondb();

					 $x = $mateX_BLACK->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
				//	 echo  ' <h2>'.$mateX_BLACK->getName().'</h2>';
					 echo '<img alt=" " src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';


					 ?>

				 <h2><?php echo $mateX_BLACK->getNameMere(); ?></h2>
					 <form action="preview.php" method="get">
					<p><?php echo   $mateX_BLACK->getModele()  ;?> </p>
					 <p><span class="price"><?php echo $mateX_BLACK->getPrix();?></span></p>
              <input type="hidden"  name="id_ref" value="17">
					<div ><span>   <input class="btn btn-primary" type="submit" name="monurl" value="Details"> </span>	</div>
				     </form>
				</div>




				<div class="grid_1_of_4 images_1_of_4">

						 <?php

					 $db = conectiondb();

					 $x = $galaxyfload_BLACK->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
					// echo  ' <h2>'.$galaxyfload_BLACK->getName().'</h2>';
					 echo '<img alt=" " src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';


					 ?>
					 <h2 ><?php echo $galaxyfload_BLACK->getNameMere(); ?> </h2>
					<form action="preview.php" method="get">
				<p ><?php echo   $galaxyfload_BLACK->getModele()  ;?></p>
					 <p><span class="price"><?php echo $galaxyfload_BLACK->getPrix();?></span></p>
           <input type="hidden"  name="id_ref" value="15">

					<div ><span>   <input class="btn btn-primary" type="submit" name="monurl" value="Details"> </span>	</div>
				 </form>
				</div>



				<div class="grid_1_of_4 images_1_of_4">

							 <?php
					 $db = conectiondb();

					 $x = $iphone11PRO_MAX_SILVER->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
				//	 echo  ' <h2>'.$iphone11PRO_MAX_SILVER->getName().'</h2>';

					 echo '<img alt=" " src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';
					 ?>


					 <h2><?php echo $iphone11PRO_MAX_SILVER->getNameMere(); ?> </h2>
					 	<form action="preview.php" method="get">
					 	<p><?php echo   $iphone11PRO_MAX_SILVER->getModele()  ;?></p>
					 <p><span class="price"><?php echo $iphone11PRO_MAX_SILVER->getPrix();?></span></p>
           <input type="hidden"  name="id_ref" value="5">

					<div class="details"><span>   <input class="btn btn-primary" type="submit" name="monurl" value="Details"> </span>	</div>
					</form>
				</div>



			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">


				<div class="grid_1_of_4 images_1_of_4">


							 <?php
					 $db = conectiondb();

					 $x = $iphone10_GRIS->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
				//	 echo  ' <h2>'.$iphone10_GRIS->getName().'</h2>';
					 echo '<img alt=" " src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';


					 ?>


					 <h2><?php echo $iphone10_GRIS->getNameMere(); ?> </h2>
					 	<form action="preview.php" method="get">
					 	<p><?php echo   $iphone10_GRIS->getModele()  ;?></p>
					 <p><span class="price"><?php echo $iphone10_GRIS->getPrix();?></span></p>
           <input type="hidden"  name="id_ref" value="7">

					<div class="details"><span>   <input class="btn btn-primary" type="submit" name="monurl" value="Details"> </span>	</div>
					</form>





				</div>

				<div class="grid_1_of_4 images_1_of_4">


							 <?php
					 $db = conectiondb();

					 $x = $ONEPLUS7_BLEU->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
				//	 echo  ' <h2>'.$ONEPLUS7_BLEU->getName().'</h2>';
					 echo '<img alt=" " src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';


					 ?>


					 <h2><?php echo $ONEPLUS7_BLEU->getNameMere(); ?> </h2>
					 	<form action="preview.php" method="get">
					 	<p><?php echo   $ONEPLUS7_BLEU->getModele()  ;?></p>
					 <p><span class="price"><?php echo $ONEPLUS7_BLEU->getPrix();?></span></p>
           <input type="hidden"  name="id_ref" value="14">

					<div class="details"><span>   <input class="btn btn-primary" type="submit" name="monurl" value="Details"> </span>	</div>
					</form>







				</div>

				<div class="grid_1_of_4 images_1_of_4">



							 <?php
					 $db = conectiondb();

					 $x = $samsungs10_black->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
				//	 echo  ' <h2>'.$samsungs10_black->getName().'</h2>';
					 echo '<img alt=" " src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';


					 ?>


					 <h2><?php echo $samsungs10_black->getNameMere(); ?> </h2>
					 	<form action="preview.php" method="get">
					 	<p><?php echo   $samsungs10_black->getModele()  ;?></p>
					 <p><span class="price"><?php echo $samsungs10_black->getPrix();?></span></p>
           <input type="hidden"  name="id_ref" value="10">

					<div class="details"><span>   <input class="btn btn-primary" type="submit" name="monurl" value="Details"> </span>	</div>
					</form>



				</div>

				<div class="grid_1_of_4 images_1_of_4">

				 		 <?php
					 $db = conectiondb();

					 $x = $PIXEL3XL_BLACK->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
				//	 echo  ' <h2>'.$PIXEL3XL_BLACK->getName().'</h2>';
					 echo '<img alt=" " src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';


					 ?>


					 <h2><?php echo $PIXEL3XL_BLACK->getNameMere(); ?> </h2>
					 	<form action="preview.php" method="get">
					 	<p><?php echo   $PIXEL3XL_BLACK->getModele()  ;?></p>
					 <p><span class="price"><?php echo $PIXEL3XL_BLACK->getPrix();?></span></p>
           <input type="hidden"  name="id_ref" value="16">

					<div class="details"><span>   <input class="btn btn-primary" type="submit" name="monurl" value="Details"> </span>	</div>
					</form>





				</div>





			</div>
    </div>
 </div>

 <?php include 'inc/footer.php'; ?>
