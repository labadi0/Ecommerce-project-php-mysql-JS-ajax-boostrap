<?php

include 'connect.php';

include './inc/header.php';


$db  = conectiondb();

// inserer une image dans une base de donnes

if (isset($_POST['submit'])) {

        $nameMere = $_POST['nameMere'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $modele = $_POST['modele'];
        $systemeExploitation = $_POST['systemeExploitation'];
        $ecran = $_POST['ecran'];
        $memoire = $_POST['memoire'];
        $batterie = $_POST['batterie'];
        $Appareil_photo = $_POST['Appareil_photo'];
        $ram = $_POST['ram'];
        $poid = $_POST['poid'];
        $color = $_POST['color'];


        //image principal
        $image = $_FILES['imagefile']['tmp_name'];
        $name = $_FILES['imagefile']['name'];
        $image = addslashes(file_get_contents($image));


        $image2 = $_FILES['imagefileicon']['tmp_name'];
        $name2 = $_FILES['imagefileicon']['name'];
        $image2 = addslashes(file_get_contents($image2));
        //    function __ ($nameMere, $description,$prix,$modele,$systemeExploitation,$ecran,$memoire,$batterie,$Appareil_photo,$ram,$poid,$color,$image,$name,$image2,$name2)

        $smp = new Produit ($nameMere, $description,$prix,$modele,$systemeExploitation,$ecran,$memoire,$batterie,$Appareil_photo,$ram,$poid,$color,$image,$name,$image2,$name2);

        $sqlInsertimageintodb = "INSERT INTO `produit` (`nameMere`,`description`,`prix`,`modele`,`systemeExploitation`,`ecran`,`memoire`,`batterie`,`Appareil_photo`,`ram`,`poid`,`color`,`image`,`name`,`image2`,`name2`) VALUES ('$nameMere','$$description','$prix','$modele','$systemeExploitation','$ecran','$memoire','$batterie','$Appareil_photo','$ram','$poid','$color','$image','$name','$image2','$name2')";



               //problemme au finale chouf bien
             //  mysqli_query($db, $sqlInsertimageintodb);
               if (mysqli_query($db,$sqlInsertimageintodb)){
                   echo "bine ";
               }

          /**
          if (mysqli_query($db, $sqlInsertimageintodb)) {
            echo "<br />Image uploaded successfully.";
        } else {
            echo "<br />Image Failed to upload.<br />";
        }
        **/

        // image icon




//       $smp = new Produit($nameMere, $description,$prix,$modele,$systemeExploitation,$ecran,$memoire,$batterie,$Appareil_photo,$ram,$poid,$color,$image,$name,$image2,$name2);






    }



// afffichage
/**
$sql = "SELECT * FROM blobi WHERE id = 11";
$sth = $db->query($sql);
 $result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpg;base64,'.base64_encode( $result['image'] ).'" alt = " khra" style = "width : 300px; height :400px;/>';

**/
//function __construct($nameMere, $description,$prix,$modele,$systemeExploitation,$ecran,$memoire,$batterie,$Appareil_photo,$ram,$poid,$color)
?>



<div style="width:70%;margin:4% 15%;">
<form style="width:70%;margin:4% 15%;" action="" method="post" enctype="multipart/form-data">
<label >image principle</label>
  <input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type="file" name="imagefile">
  <label>icon</label>
 <input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type="file" name="imagefileicon">
 <label>marque</label>
 <input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;"  type ="text" name ="nameMere" >
 <label>description</label>
<input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type ="text" name ="description">
<label>prix</label>
<input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type ="text" name ="prix" >
<label>modele</label>
 <input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type ="text" name ="modele" >
 <label>systeme Exploitation</label>
<input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type ="text" name ="systemeExploitation" >
<label>ecran</label>
 <input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type ="text" name ="ecran" >
<label>memoire</label>
 <input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type ="text" name ="memoire" >
<label>batterie</label>
 <input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type ="text" name ="batterie" >
 <label>Appareil photo</label>
 <input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type ="text" name ="Appareil_photo" >
 <label>Ram</label>
<input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type ="text" name ="ram" >
 <label>poid</label>
 <input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type ="text" name ="poid" >
 <label>color</label>
 <input style="margin-bottom: 20px;margin-top: 10px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;" type ="text" name ="color" >
<input style="margin-bottom: 20px;width:100%;padding: 15px;border-radius:5px;border:1px solid #7ac9b7;background-color: #4180C5;color: aliceblue;font-size:15px;cursor:pointer;" type="submit" name="submit" value="Upload">

</form>

</div>
<?php
include './inc/footer.php';

 ?>
