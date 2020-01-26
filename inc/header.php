<?php
require 'Panier.php';
session_start();
if( !isset($_SESSION['panier']) ){
    $_SESSION['panier'] = array();
}
$paniers = new Panier();
if(isset( $_POST['article']) ){
    $article = new Article($id_produit,$prix ,1,$modele);
    $paniers->ajouter($article);
}
?>
<?php
    if(isset( $_GET['p']) ){
        $id = 13;
        $prix = 0.25;
        $aticle = new Article($id,$prix,1,'$MI9_BLACK');
        $paniers->ajouter($aticle);
    }
?>
<?php
    if(isset( $_GET['p1']) ){
    $id = 1;
    $prix = 0.25;
    $aticle = new Article($id,$prix,1,'iphone11PRO_GREEN');
    $paniers->ajouter($aticle);
    }
?>
<?php
    if(isset( $_GET['p2']) ){
        $id = 4;
        $prix = 0.25;
        $aticle = new Article($id,$prix,1,'iphone11PRO_GOLD');
        $paniers->ajouter($aticle);
    }
?>
<?php
    if(isset( $_GET['p3']) ){
        $id = 9;
        $prix = 0.25;
        $aticle = new Article($id,$prix,1,'iphone10_black');
        $paniers->ajouter($aticle);
    }
?>
<!DOCTYPE HTML>
<html lang="en" >
<head>
<title>phone house</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/msg.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/div.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/rech.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"  />
<script src="js/jquerymain.js"></script>
<script src="js/script.js" ></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script src="js/func.js" ></script>

<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/forme.css"/>
  <?php
    include("inc/fonctions.inc.php");
  ?>

    <style>
    a{
        color : white;
        	text-decoration:none;

    }
     a:active {
            color : white;
        	text-decoration:none;

    }
     a:hover {
            color : white;
        	text-decoration:none;

    }
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

						    <?php

						        if( isset($_SESSION['name']) ) {
    echo        '  <button class = "btn btn-success" type="submit" name="reglageee-submit" style=" float: left; top :20px; margin-left:20px; ">'.$_SESSION['name'].'</button>  ';
						        }
						    ?>


						</div>
			      </div>
            <?php
              if (isset($_SESSION['name'])) {
              echo '<form style = " " action="inc/logout.inc.php" method="post">
              <button class="btn btn-primary" type="submit" name="logout-submit" style = "float : right;"  >Logout</button>
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
 if (isset($_SESSION['name'])) {

echo '<div class="menu"  style = "background-color:#232f3e;" >
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="index.php">Home</a></li>
	  <li><a href="../productAffiche.php">Products</a> </li>

    <li><a href="client.php">Votre Profil</a> </li>
    <li style="float : right;">
    <a href="monpanier.php">
    Panier <span class="badge badge-light">'.$paniers->getNbArticles().'</span>'.'</a>

    </li>
    </ul>
	  <div class="clear"></div>


</div>';
}else{
  echo '<div class="menu" style = "background-color:#232f3e;">
  	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
  	  <li><a href="index.php">Home</a></li>
  	  <li><a href="../productAffiche.php">Products</a> </li>
      <li style="float : right;">
    <a href="monpanier.php">
    Panier <span class="badge badge-light">'.$paniers->getNbArticles().'</span>'.'</a>

    </li>
    </ul>
  	  <div class="clear"></div>

  </div>';
}

?>
<div id="infos">
</div>
