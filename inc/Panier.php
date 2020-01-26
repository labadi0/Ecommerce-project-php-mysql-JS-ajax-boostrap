<?php
class Article {
	private $id;
	private $prix;
	private $quantite;
	private $nom;


	public function __construct($id, $prix,$quantite,$nom){
		$this->id = $id;
		$this->prix = $prix;
		$this->quantite = $quantite; 
		$this->nom = $nom;
	}

	public function getId(){
		return $this->id;
	}

	public function getPrix(){
		return $this->prix;
	}

	public function getNom(){
		return $this->nom;
	}

	public function getQuantite(){
		return $this->quantite;
	}

	public function setQantite($quantite){
		$this->quantite = $quantite;
	}
}

class Panier {

	public function __construct(){
		
	}

	public function getNbArticles()
    {
        return count($_SESSION['panier']);
    }

	public function ajouter(Article $article) {
		/**tester l'existance par identifiant*/
		$bool = "faux";
		foreach ($_SESSION['panier'] as $art ) {
			if( $art->getId() == $article->getId()){
				$q = $art->getQuantite();
				$q = $q + 1;
				$art->setQantite($q);
				$bool = "vrai";
			}
    	}

		if( $bool == "faux") {
        	array_push($_SESSION['panier'], $article);
        }
    }

    public function getPrixpanier(){
    	$total = 0;
    	foreach ($_SESSION['panier'] as $article ) {
    		$total += $article->getPrix()*$article->getQuantite();
    	}
    	return $total;
    }
	
	public function afficher(){
    	foreach ($_SESSION['panier'] as $article ) {
    		echo "id : ".$article->getId()." prix : ".$article->getPrix()." quantité : ".$article->getQuantite()."Nom = ".$article->getNom()."<br />";
    	}
	}
	
	public function getNompanier(){
    	$nom = '';
    	foreach ($_SESSION['panier'] as $article ) {
			$nom = $nom.' '.$article->getNom();
    	}
    	return $nom;
	}
	
	public function getIdpanier(){
    	$nom = '';
    	foreach ($_SESSION['panier'] as $article ) {
			$nom = $nom.' '.$article->getId();
    	}
    	return $nom;
    }
	
}

?>