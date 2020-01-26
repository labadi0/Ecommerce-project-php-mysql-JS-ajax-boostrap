<?php
require 'inc/Panier.php';
include 'connect.php';
session_start();
if( !isset($_SESSION['panier']) ){
    $_SESSION['panier'] = array();
}
$paniers = new Panier();  

?>
<!DOCTYPE HTML>
<html lang="en" >
<head>
<title>phone house</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/div.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/rech.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"  />
<script src="js/jquerymain.js"></script>
<script src="js/script.js" ></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script  src="js/nav.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/nav-hover.js"></script>
<script src="js/func.js" ></script>

<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script >
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
<link rel="stylesheet" type="text/css" href="css/forme.css"/>
  <?php
    include("inc/fonctions.inc.php");
  ?>

    <style>
    a{
        color : white;
        	text-decoration:none;

    }
    a:hover, a:active {
color : white;
        	text-decoration:none;}
    </style>

</head>
<body>
  <div class="wrap">
		<div class="header_top">

			<div class="logo">
				<a href="index.php"><img src="images/logo.jpg" alt="logo" style="width : 100px; height : 100px  " /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
            <form action="#" method="POST" id="search_form">
              <input type="text" name="search" id="search" placeholder="search users">
				    </form>
			    </div>
			  

			    <div id="result">
                <ul>
                </ul>
                </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
						    <?php

						        if( isset($_SESSION['id_user']) ) {
						            echo "<span class='no_product'>".$_SESSION['id_user']."</span> " ;
						        }
						    ?>

							</a>
						</div>
			      </div>
            <?php
              if (isset($_SESSION['id_user'])) {
              echo '<form style = " " action="inc/logout.inc.php" method="post">
              <button class="btn btn-primary" type="submit" name="logout-submit" style = "float : right";  >Logout</button>
                </form>';

                  }
              else {
              echo '<div class="btn btn-primary" style = "float :right;" ><a href="login.php" >Login</a></div>';

              }

              ?>

		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>

<?php
//echo '<p id="id_article" value="'.$paniers->getIdpanier().'"> </p>';
echo '<input type="hidden"   id="id_article" value="'.$paniers->getIdpanier().'">';
 if (isset($_SESSION['id_user'])) {

echo '<div class="menu" style = "background : #1c2531;">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="index.php">Home</a></li>
	  <li><a href="../productAffiche.php">Products</a> </li>

    <li><a href="client.php">Votre Profil</a> </li>
    <li style="float : right;">
    <a href="monpanier.php">
    Panier <span class="badge badge-light">'.count($_SESSION['panier']).'</span></a>
    </li>
    	</ul>
	  <div class="clear"></div>

	
</div>';
}else{
  echo '<div class="menu" style = "background : #1c2531;">
  	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
  	  <li><a href="index.php">Home</a></li>
  	  <li><a href="../productAffiche.php">Products</a> </li>
      <li style="float : right;">
    <a href="monpanier.php">
    Panier <span class="badge badge-light">'.count($_SESSION['panier']).'</span></a>
    
    </li>
    </ul>
  	  <div class="clear"></div>
  	
  </div>';
}

?>

<?php
$dsn = 'mysql:host=localhost;dbname=id11108118_bazar;';

try {
    $pdo = new PDO($dsn, 'id11108118_bazar' , 'barbarossa1945');
}   catch (PDOException $exception) {     
 exit('Erreur de connexion à la base de données'); 
}
    
if( isset($_GET['payer']) && $_GET['payer']=='oui' ){
    $date = date("Y-m-d H:i:s");
    //INSERT INTO commande(id_user,id_produit,date) VALUES('z','17','2019-12-03 23:18:14') 
    foreach ($_SESSION['panier'] as $article ) {
         $str = "INSERT INTO commande(id_user,id_produit,date,quantite) VALUES('".$_SESSION['id_user']."','".$article->getId()."','".$date."','".$article->getQuantite()."') ";
         $query    = $pdo->query($str);
         //var_dump($query);
         //$resultat = $query->fetchAll();
          if(!$query) {
              exit();  
          }
    }
    echo '
    <h1 class="display-2 mt-xl-5 p-5 bg-primary" style="color : white;" >Votre commande a été passée avec succès</h1>
    ';
     unset($_SESSION['panier']); 
}
else if( isset($_SESSION['panier']) && count($_SESSION['panier']) > 0 ){
    

    echo " <div class='row text-center'> "; 
    foreach ($_SESSION['panier'] as $article ) {
         $str = "SELECT * FROM produit WHERE id_produit=".$article->getId();
         $query    = $pdo->query($str);
         $resultat = $query->fetchAll();
          if($query) {
                foreach ($resultat as $key => $variable) {
                $prix = $resultat[$key]['prix'];
                $nom = $resultat[$key]['modele'];
                $photo = $resultat[$key]['image2'];
                }
          }
          $quantite = $article->getQuantite();
           //echo '<img class="card-img-top alt=" "  src="data:image/jpg;base64,'.base64_encode( $photo  ).'"  />';
           
    	//	echo "id : ".$article->getId()." prix : ".$article->getPrix()." quantité : ".$article->getQuantite()."<br />";
    echo '
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100"><img class="card-img-top alt=" "  src="data:image/jpg;base64,'.base64_encode( $photo  ).'"  />
              <div class="card-body">
                <h4 class="card-title">'. $nom .'</h4>
              </div>
               <div class="card-footer">
                Quantité : '.$quantite .'
              </div>
              <div class="card-footer font-weight-bold">
                '.$prix .'  €
              </div>
            </div>
          </div>';

    }
    echo '<input type="hidden"   id="total" value="'.$paniers->getPrixpanier().'">';
     echo '<input type="hidden"   id="noms" value="'.$paniers->getNompanier().'">';
    echo "</div>";
    //var_dump($paniers->getPrixpanier());
    echo '<h1 style="text-align : center;"> <span class="badge badge-secondary">Prix Total : '.$paniers->getPrixpanier().' €</span></h1>';
    if( isset($_SESSION['id_user']) ){
    echo '
<div id="infos">
    <!-- <button type="button"  class="btn py-3  btn-success btn-block font-weight-bold " onclick="loadDoc()"> Passer votre commande</button>
     -->
     <button class="btn btn-success btn-block font-weight-bold py-3 mb-4" onclick="loadDoc()">
    <span class="spinner-grow spinner-grow-sm"></span>
    Passer votre Commande
    </button> <div id="paie" class="mb-xl-5 d-flex justify-content-center" ></div>

                            <script>
                            function loadDoc() {
                              var xhttp = new XMLHttpRequest();
                              xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                  document.getElementById("paie").innerHTML =
                                  this.responseText;
                                }
                              };
                              var id_article = document.getElementById("id_article").value;
                              var total = document.getElementById("total").value;
                              var nom = document.getElementById("noms").value;
                              
                              xhttp.open("GET", "inc/paiement.php?id="+id_article+"&&total="+total+"&&nom="+nom, true);
                              xhttp.send();
                            }
                            </script>
                            
</div>';
} else {
    echo '
<div id="infos">
    <button class="btn btn-success btn-block font-weight-bold py-3 mb-4">
    <span class="spinner-grow spinner-grow-sm"></span>
      Connectez-vous pour passer la commande
    </button>
</div>';
}
} else {
echo '
    <h1 class="display-2 mt-xl-5 p-5 bg-dark" style="color : White;">Votre panier est vide </h1>
    ';
}
if( count($_SESSION['panier']) != 0)
include 'inc/footer.php'; 
?>