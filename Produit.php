<?php 
class Produit {
    public $nameMere;
    public $description;
    public $prix;   
    public $modele;
    public $systemeExploitation;
    public $ecran;
    public $memoire ;
    public $batterie;
    public $Appareil_photo;
    public $ram;
    public $poid;
    public $color;
    public $image;
    public $name;
    public $image2;
    public $name2;
    
    
function __construct($nameMere, $description,$prix,$modele,$systemeExploitation,$ecran,$memoire,$batterie,$Appareil_photo,$ram,$poid,$color,$image,$name,$image2,$name2) {
        $this->nameMere = $nameMere;
        $this->description = $description;
        $this->prix = $prix;
        $this->modele=$modele;
        $this->systemeExploitation = $systemeExploitation;
        $this->ecran = $ecran;
        $this->memoire  = $memoire;
        $this->batterie = $batterie;
        $this->Appareil_photo = $Appareil_photo;
        $this->ram = $ram;
        $this->poid = $poid;
        $this->color = $color;
        $this->image = $image;
        $this->name = $name;
        $this->image2 = $image2;
        $this->name2 = $name2;
        
    }
    
    
    
    
    
    
    
    
     
    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * @return mixed
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * @param mixed $image1
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @param mixed $name1
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $image2
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;
    }

    /**
     * @param mixed $name2
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
    }

    /**
     * @return mixed
     */
    public function getNameMere()
    {
        return $this->nameMere;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @return mixed
     */
    public function getSystemeExploitation()
    {
        return $this->systemeExploitation;
    }

    /**
     * @return mixed
     */
    public function getEcran()
    {
        return $this->ecran;
    }

    /**
     * @return mixed
     */
    public function getMemoire()
    {
        return $this->memoire;
    }

    /**
     * @return mixed
     */
    public function getBatterie()
    {
        return $this->batterie;
    }

    /**
     * @return mixed
     */
    public function getAppareil_photo()
    {
        return $this->Appareil_photo;
    }

    /**
     * @return mixed
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @return mixed
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $nameMere
     */
    public function setNameMere($nameMere)
    {
        $this->nameMere = $nameMere;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @param mixed $systemeExploitation
     */
    public function setSystemeExploitation($systemeExploitation)
    {
        $this->systemeExploitation = $systemeExploitation;
    }

    /**
     * @param mixed $ecran
     */
    public function setEcran($ecran)
    {
        $this->ecran = $ecran;
    }

    /**
     * @param mixed $memoire
     */
    public function setMemoire($memoire)
    {
        $this->memoire = $memoire;
    }

    /**
     * @param mixed $batterie
     */
    public function setBatterie($batterie)
    {
        $this->batterie = $batterie;
    }

    /**
     * @param mixed $Appareil_photo
     */
    public function setAppareil_photo($Appareil_photo)
    {
        $this->Appareil_photo = $Appareil_photo;
    }

    /**
     * @param mixed $ram
     */
    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    /**
     * @param mixed $poid
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

  
    
    
    
}


$iphone11PRO_GREEN = new Produit('Apple', '---',"1 300,00&euro;","iphone11 PRO","Apple - iOS 13",'Ecran tactile 16,5 cm (6,5 pouces) 2688 x 1242 pixels','64 Go','4000 mAh','Triple appareil photo ultra grand-angle, grand-angle et téléobjectif 12 Mpx','8 GO','194 g','green ','','','','');
$iphone11PRO_GREY = new Produit("Apple", "---","1 100,00&euro;","iphone11 PRO gris","Apple - iOS 13",'Ecran tactile 16,5 cm (6,5 pouces) 2688 x 1242 pixels','64 Go','4000 mAh','Triple appareil photo ultra grand-angle, grand-angle et téléobjectif 12 Mpx','8 GO','194 g','gris','','','','');
$iphone11PRO_GOLD = new Produit("Apple", "---","1 259,00&euro;","iphone11 PRO GOLD","Apple - iOS 13",'Ecran tactile 16,5 cm (6,5 pouces) 2688 x 1242 pixels','64 Go','4000 mAh','Triple appareil photo ultra grand-angle, grand-angle et téléobjectif 12 Mpx','8 GO','194 g','gold','','','','');
$iphone11PRO_MAX_SILVER = new Produit("Apple", "---","1 500,00&euro;","iphone11 PRO MAX Silver","Apple - iOS 13",'Ecran tactile 16,5 cm (6,5 pouces) 2688 x 1242 pixels','128 Go','4500 mAh','Triple appareil photo ultra grand-angle, grand-angle et téléobjectif 12 Mpx','12 GO','194 g','silver','','','','');
$iphone11PRO_MAX_PURPLE = new Produit("Apple", "---","1 500,00&euro;","iphone11 PRO MAX Purple","Apple - iOS 13",'Ecran tactile 16,5 cm (6,5 pouces) 2688 x 1242 pixels','128 Go','4500 mAh','Triple appareil photo ultra grand-angle, grand-angle et téléobjectif 12 Mpx','12 GO','194 g','purple','','','','');
$iphone10_GRIS = new Produit("Apple", "---","944,00&euro;","iphone10 Gris","OS Apple - iOS 11",'Écran tactile 14,7 cm (5,8) - Super Retina 2 436 x 1 125 pixels','256  Go','3700 mAh','Appareil photo double capteur 12 mégapixels grand angle et téléobjectif - Vidéo UHD 4K','8 GO','174 g','gris','','','','');
$iphone10_argent = new Produit("Apple", "---","944,00&euro;","iphone10 Argent","OS Apple - iOS 11",'Écran tactile 14,7 cm (5,8) - Super Retina 2 436 x 1 125 pixels','256  Go','3700 mAh','Appareil photo double capteur 12 mégapixels grand angle et téléobjectif - Vidéo UHD 4K','8 GO','174 g','argent','','','','');
$iphone10_black = new Produit("Apple", "---","944,00&euro;","iphone10 Black","OS Apple - iOS 11",'Écran tactile 14,7 cm (5,8) - Super Retina 2 436 x 1 125 pixels','256  Go','3700 mAh','Appareil photo double capteur 12 mégapixels grand angle et téléobjectif - Vidéo UHD 4K','8 GO','174 g','noir','','','','');
$samsungs10_black = new Produit("samsung", "---"," 909,00&euro;","samsung galaxy s10 black","OS Android 9 Pie",'Ecran Infinity 6,1 - Full HD+ - Super AMOLED - Gorilla Glass 6','128 Go','3400 mAh','Triple capteur Capteur principal : 12 MP Dual Pixel - Capteur Ultra grand angle : 16 MP','8 GO','174 g','noir','','','','');
$samsungs10_white = new Produit("samsung", "---"," 909,00&euro;","samsung galaxy s10 white","OS Android 9 Pie",'Ecran Infinity 6,1 - Full HD+ - Super AMOLED - Gorilla Glass 6','128 Go','3400 mAh','Triple capteur Capteur principal : 12 MP Dual Pixel - Capteur Ultra grand angle : 16 MP','8 GO','174 g','blanc','','','','');
$p30PRO_BLACK = new Produit("Huawei", "---"," 749,00&euro;","Huawei P30 Pro Black"," Android 9 - EMUI 9.1",'Ecran FullView OLED 6,47" FHD+ 2340 x 1080 pixels','128 Go','4100 mAh','Triple appareil photo 40 + 20 + 8 Mégapixels Caméra frontale 32 Mégapixels','8 GO','180g','noir','','','','');
$MI9_BLACK = new Produit("Xiaomi", "---","499,00&euro;","Xiaomi MI 9 NOIR 64Go"," OS Androi 9 Pie ",'Écran AMOLED 6.39"- Qualcomm Snapdragon 855 Processeur 7 nm boosté par IA','64 Go','4000 mAh','Caméra Ultra Haute résolution 48MP - Triple caméra, nouvel objectif grand angle','6 GO','185g','noir','','','','');
$ONEPLUS7_BLEU = new Produit("ONEPLUS", "---","759,00&euro;","Oneplus 7 Pro Nebula Blue","OS Androi 9 Pie",'Incroyablement immersif, Ecran 6.67 Fluid AMOLED 90Hz QHD+','256 Go','4000 mAh','Triple capteur photo pour chaque instant, 48MP, grand angle, zoom optique x3','7 GO','195 g','bleu','','','','');
$PIXEL3XL_BLACK = new Produit("Google", "---","1 059,00&euro;","Google PIXEL 3 XL","OS Androi 9 Pie",'Écran OLED flexible QHD+ (2 960 x 1 440) à 523 ppp','256 Go','4000 mAh','Caméra arrière 12,2 Mpx + Caméra avant : Appareils photo grand angle et téléobjectif de 8 Mpx','8 GO','190g','noir','','','','');
$galaxyfload_BLACK = new Produit("samsung", "---","2 020,00&euro;","GALAXY FOLD NOIR","OS Androi 9 Pie",'2 écrans: Écran externe : GorillaGlass 6, SuperAMOLED 4,6 HD+ (21:9), Écran intérieur : Polymère, DynamicAMOLED, 7,3','512 Go','5000 mAh','APPAREIL PHOTO PRINCIPAL: Capteur principal: 12 MP Dual Pixel, Capteur Ultra grand angle : 16 MP, Capteur Téléobjectif avec zoom optiquex2 : 12 MP - CAMÉRA FRONTALE : extérieur : 10 MP, intérieur : 12 MP + 8 MP','8 GO','276 g','noir','','','','');
$mateX_BLACK = new Produit("Huawei", "---","4 020,00&euro;",'Huawei Mate X',"OS Androi 9 Pie EMUI 9.1",'2 écrans: Écran externe : GorillaGlass 6, SuperAMOLED 4,6 HD+ (21:9), Écran intérieur : Polymère, DynamicAMOLED, 7,3 QXGA+ (4,2:3)','512 Go','4500 mAh','APPAREIL PHOTO PRINCIPAL: Triple capteur: Capteur principal: 12 MP Dual Pixel, Capteur Ultra grand angle : 16 MP,Capteur Téléobjectif avec zoom optiquex2 :12 MP -CAMÉRA FRONTALE :extérieur:10 MP,intérieur :12MP 8MP','8 GO','276g','noir','','','','');
$Xiaomi_alpha_black = new Produit("Xiaomi", "---",'3 020,00&euro;',"Xiaomi alpha"," OS Androi 9 Pie  ",'Flexible Super AMOLED 7.92" pouces 2088 x 2250 px','512 Go','4500 mAh','108 MP, Trois caméras 12 MP ,20 MP','8 GO','276g','noir','','','','');
?>