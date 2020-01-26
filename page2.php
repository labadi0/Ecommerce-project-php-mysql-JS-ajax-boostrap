<?php
include './inc/header.php';



      $_SESSION['Appareil_photo'];
      $_SESSION['batterie'];
      $_SESSION['color'];
      $_SESSION['description'];
      $_SESSION['ecran'];
      $_SESSION['image'];
      $_SESSION['image2'];
      $_SESSION['memoire'];
      $_SESSION['modele'];
      $_SESSION['name'];
      $_SESSION['name2'];
      $_SESSION['nameMere'];
      $_SESSION['poid'];
      $_SESSION['prix'];
      $_SESSION['ram'];
      $_SESSION['systemeExploitation'];

?>




				<div class="desc span_3_of_2">
					<h2><?php
					echo $_SESSION['modele'];	?></h2>
					<p><?php echo $_SESSION['prix']; ?></p>
					<div class="price">
						<p>prix: <span><?php echo	$_SESSION['prix'];	?> &euro;</span></p>
						<p>marque:<span> <?php echo $_SESSION['modele'];  ?></span></p>
						<p>description:<span> <?php echo $_SESSION['description'];   ?></span></p>

					</div>
				<div class="add-cart">
					<form action="cart.php" method="post">
						<input type="number" class="buyfield" name="" value="1"/>
						<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
					</form>
				</div>
			</div>
			<div class="product-desc">
	<!--  		$smp = new Produit($nameMere, $description,$prix,$modele,$systemeExploitation,$ecran,$memoire,$batterie,$Appareil_photo,$ram,$poid,$color);-->

			<h2>Product Details </h2>
			<p>&nbsp;&nbsp;marque : <?php  echo  $_SESSION['modele']; ?></p>
	        <p>&nbsp;&nbsp;modele : <?php $_SESSION['modele'];   ?></p>
	        <p>&nbsp;&nbsp;systeme exploitation : <?php echo $_SESSION['systemeExploitation'];    ?></p>
	       	<p>&nbsp;&nbsp;ecran : <?php echo $_SESSION['ecran'];   ?></p>
	        <p>&nbsp;&nbsp;memoire : <?php   echo $_SESSION['memoire']; ?></p>
	        <p>&nbsp;&nbsp;batterie : <?php echo $_SESSION['batterie'];    ?></p>
	        <p>&nbsp;&nbsp;appareil photo : <?php echo $_SESSION['Appareil_photo'];   ?></p>
	        <p>&nbsp;&nbsp;Ram : <?php  echo $_SESSION['ram'];  ?></p>
	        <p>&nbsp;&nbsp;poid : <?php   echo $_SESSION['poid']; ?></p>
	       	<p>&nbsp;&nbsp;color : <?php  echo $_SESSION['color']; ?></p>


	    </div>

	</div>

 		</div>
 	</div>
	</div>

  <?php include 'inc/footer.php'; ?>
