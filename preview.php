<?php
include 'connect.php';
if ( isset($_GET['monurl']) ){
    $myUrl = $_GET['id_ref'];

$tab = array();
$tab = extracter($myUrl,'id_produit');

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

$name = $tab['name'];

$image2 = $tab['image2'];

$name2 = $tab['name2'];


$smp = new Produit($nameMere, $description,$prix,$modele,$systemeExploitation,$ecran,$memoire,$batterie,$Appareil_photo,$ram,$poid,$color,$image,$name,$image2,$name2);
}



include './inc/header.php';

//($nameMere,$description,$prix,$modele,$systemeExploitation,$ecran,$memoire,$batterie,$Appareil_photo,$ram,$poid,$color);

?>

 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
					<div class="grid images_3_of_2">
					<!-- 	<img alt = " "  src="images/preview-img.jpg" alt="" />   -->
					<?php
					$db = conectiondb();
					$x = $smp->getModele();
                 $sql = "SELECT * FROM produit WHERE modele = '$x'";
                $sth = $db->query($sql);
                $result=mysqli_fetch_array($sth);
                   echo '<img alt = "a" src="data:image/jpg;base64,'.base64_encode( $result['image'] ).'"  style = "width : 300px; height :450px;"/>';
//			<h2 style = 'font-family: "Arial Black", Gadget, sans-serif;text-transform: uppercase;'> details de la chanson </h2>
//

                    ?>
					</div>
				<div class ="desc_span_3_of_2">
					<h2 style = 'font-family: "Arial Black", Gadget, sans-serif;text-transform: uppercase;'><?php
					echo '<br />';
					echo $smp->getModele();	?></h2>
					<p><?php echo $smp->getDescription(); ?></p>
					<div class="price">
						<p>prix: <span><?php echo	$smp->getPrix();	?> &euro;</span></p>
						<p>marque:<span> <?php echo $smp->getNameMere()   ?></span></p>
						<p>Note : </p><?php
						
                         $dsn = 'mysql:host=localhost;dbname=id11108118_bazar;';
                
                          try {
                              $pdo = new PDO($dsn, 'id11108118_bazar' , 'barbarossa1945');
                          }   catch (PDOException $exception) {
                              exit('Erreur de connexion à la base de données');
                          }
                          
                          $str = " SELECT AVG(note) AS note FROM avis WHERE id_produit=$id_produit";
                          //execution de la requete
                          $query   = $pdo->query($str);
                
                          //le resultat est stocker dans le tableau resultat
                           $resultat = $query->fetchAll();
                          foreach ($resultat as $key => $variable) {
                            if($query) {
                                echo  makeRating($resultat[$key]['note']) ;
                                //echo $resultat[$key]['note'];
                            }
                          }
          
						//echo makeRating(5) 
						?>
						
						<!--  SELECT AVG(note) FROM avis  -->

					</div>
				<div class="add-cart">
						<div>
                            
                            <form action="#" method="post">
                            <!--<div class="button"><span><a href="preview.php">Add to cart</a></span></div>-->
                            <button type="submit"  name="article" class="buysubmit">Ajouter au panier </button>
                            
                            </form>

				</div>
			</div>
			<div class="product-desc">
	<!--  		$smp = new Produit($nameMere, $description,$prix,$modele,$systemeExploitation,$ecran,$memoire,$batterie,$Appareil_photo,$ram,$poid,$color);-->

			<h2>Product Details </h2>
			<p>&nbsp;&nbsp;marque : <?php  echo $smp->getNameMere() ; ?></p>
	        <p>&nbsp;&nbsp;modele : <?php echo $smp->getModele() ;   ?></p>
	        <p>&nbsp;&nbsp;systeme exploitation : <?php echo $smp->systemeExploitation ;    ?></p>
	       	<p>&nbsp;&nbsp;ecran : <?php echo $smp->getEcran() ;   ?></p>
	        <p>&nbsp;&nbsp;memoire : <?php   echo $smp->getMemoire() ; ?></p>
	        <p>&nbsp;&nbsp;batterie : <?php echo $smp->getBatterie() ;    ?></p>
	        <p>&nbsp;&nbsp;appareil photo : <?php echo $smp->getAppareil_photo() ;   ?></p>
	        <p>&nbsp;&nbsp;Ram : <?php  echo $smp->getRam() ;  ?></p>
	        <p>&nbsp;&nbsp;poid : <?php   echo $smp->getPoid() ; ?></p>
	       	<p>&nbsp;&nbsp;color : <?php  echo $smp->getColor() ; ?></p>

        <script>
        /**
        Lorsqu'un utilisateur sélectionne un client dans la liste déroulante ci-dessus,
        une fonction appelée showCustomer()est exécutée. La fonction est déclenchée par l' onchangeévénement:

        showCustomer :
        Vérifier si une note est choisis
        Créer un objet XMLHttpRequest
        Créer la fonction à exécuter lorsque la réponse du serveur est prête
        Envoyer la demande à un fichier sur le serveur
        Notez qu'un paramètre (q) est ajouté à l'URL (avec le contenu de la liste déroulante)

        **/
        function showCustomer(str) {
          var xhttp;
          if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
          }
          xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "inc/hint.php?q="+str, true);
          xhttp.send();
        }
        </script>

        <?php

        if( isset($_SESSION['id_user']) ) {
        echo '<details>
        <summary>Faire un commentaire</summary>
        <form method="post" action="">
          <input type="text" id="titre" placeholder="Titre" required="required" name="titre" style="width: 50%;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;">
          <input type="range" id="note" name="note" onchange="showCustomer(this.value)" min="1" max="5" step="1">
           <p> <span id="txtHint"></span> </p>
          <textarea placeholder="Votre commentaire" required="required" name="commentaire"></textarea> <br />
          <input type="submit" name="ok" id="soumettre" value="Soumettre" style="background:#99B92C;
        	color:white;
        	border-radius:5px;
        	height : 30px;
        	cursor:pointer;
        	font-weight:bold;
        	width : 50%;
        	margin-bottom : 30px;
        	margin-top : 10px;">
        </form></details>';

        if( isset($_POST['ok']) ){
            $titre = $_POST['titre'];
            $note  = $_POST['note'];
            $commentaire = $_POST['commentaire'];
            $id_user = $_SESSION['id_user'];
            $id_article = $id_produit;
            $date = date("Y-m-d H:i:s");

            $insertion = "INSERT INTO avis VALUES('$id_article','$id_user','$titre',$note,'$commentaire','$date'); ";
          //execution de la requete
           $resultat  = $pdo->query($insertion);
           if( !$resultat ){
               echo "<p> Vous avez deja donné votre avis sur ce produit </p>";
           } else {
               echo "<p> Avis pris en compte</p>";
           }
        }

        }
        ?>



    <details>
		<summary>Les commentaires</summary>
        <?php
          /*debut des requetes**/
          $str = "SELECT * FROM ( (SELECT * FROM `avis` WHERE id_produit= $id_produit) AS commentaire NATURAL JOIN user ) ";
          //execution de la requete
          $query    = $pdo->query($str);

          //le resultat est stocker dans le tableau resultat
          if($query) {
              $resultat = $query->fetchAll();
              foreach ($resultat as $key => $variable) {
                  echo " <div class='avis'>
                            <div class='titre' > ".$resultat[$key]['titre']." </div>
                            <div class='note'> ". makeRating($resultat[$key]['note']) ."</div>
                            <div class='commentaire'> <p> ".$resultat[$key]['commentaire']." </p> </div>
                            <div class='auteur'>Publié par ".$resultat[$key]['name']." le ".$resultat[$key]['date']." </div>
                         </div>";
              }
          }
       ?>
	</details>

	    </div>

	</div>

 		</div>
 	</div>
		</div>
	</div>


 <?php include 'inc/footer.php'; ?>

