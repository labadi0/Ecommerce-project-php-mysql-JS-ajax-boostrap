<?php

function makeRating($rate, $bestvalue = 5) {
    // extraction de la partie entière de la note (qu'elle soit décimale ou non)
    $intrate=intval($rate);				
    // calcul de la partie décimale éventuelle en %
    $decrate=(floatval($rate) - $intrate) * 100;
    //  insertion des microformats et microdatas
    $ratingBox  = '						<!-- item AggregateRating -->' . PHP_EOL;
    $ratingBox .= '				<p>' . PHP_EOL;
    $ratingBox .= '				<span title="'. $rate .' / '. $bestvalue .'">' . PHP_EOL;
    // génération du nombre d'étoiles correspondant au maximum possible
    for($i=0; $i<$bestvalue; ++$i) {
    $ratingBox .= '				<svg height="16" width="16">' . PHP_EOL;
      // étoile(s) totalement jaune(s) calculée(s) sur la valeur entière de la note
      if($i<$intrate) {
        $ratingBox .= '				  <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5" fill="Yellow" stroke="DarkKhaki" stroke-width=".5" />' . PHP_EOL;
      }
      elseif($i==$intrate && $decrate>0 ) {
      // étoile partiellement jaune basée sur la valeur décimale de la note
        $ratingBox .= '				  <defs>' . PHP_EOL;
        $ratingBox .= '				     <linearGradient id="starGradient">' . PHP_EOL;
        $ratingBox .= '				       <stop offset="'. $decrate .'%" stop-color="Yellow"/>' . PHP_EOL;
        $ratingBox .= '				       <stop offset="'. $decrate .'%" stop-color="LightGrey"/>' . PHP_EOL;
        $ratingBox .= '				     </linearGradient>' . PHP_EOL;
        $ratingBox .= '				  </defs>' . PHP_EOL;
        $ratingBox .= '				  <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5" fill="url(#starGradient)" stroke="DarkKhaki" stroke-width=".5" />' . PHP_EOL;
      }
      else {
      // étoile(s) grise(s) pour la fin
        $ratingBox .= '				  <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5"  fill="LightGrey" stroke="DimGray" stroke-width=".5" />' . PHP_EOL;
      }
      $ratingBox .= '				</svg>' . PHP_EOL;
    }
    $ratingBox .= '				</span>' . PHP_EOL;
    //  insertion de la note en texte clair mais masqué, avec microformat et microdata - supprimer style="display:none;" pour l'afficher
    $ratingBox .= '				<span style="display:none;"><span>'. $rate .'</span>';
    $ratingBox .= '<span > / </span><span>'. $bestvalue .'</span></span>' . PHP_EOL;
    $ratingBox .= '				</p>' . PHP_EOL;
    $ratingBox .= '						<!-- end of item -->' . PHP_EOL;
    return $ratingBox;
  }
?>