<?php
?>
<div class="header_bottom">
  <div class="header_bottom_left">
    <div class="section group">


      <div class="listview_1_of_2 images_1_of_2">
        <div class="listimg listimg_2_of_1">

        	 <?php
           $dbServername ="localhost";
           $dbUsername="id11108118_bazar";
           $dbPassword = "barbarossa1945";
           $dbName = "id11108118_bazar";

        	   $db = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

					 $x = $MI9_BLACK->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
					 //echo  ' <h2>'.$MI9_BLACK->getName().'</h2>';
					 echo '<img alt=" "  src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';
					 ?>


        	 </div>
          <div class="text list_2_of_1">
          <h2> <?php
          $x = $MI9_BLACK->getNameMere();
          echo $x;
          ?>
          </h2>
          <p>
          <?php


          $x = $MI9_BLACK->getModele();
          echo $x;
          ?>

          </p>
          <!--<div class="button"><span><a href="preview.php">Add to cart</a></span></div>-->
          <form action="#" method="get">
                <input type="hidden"  name="id_ref" value="13">

                <!--<div class="button"><span><a href="preview.php">Add to cart</a></span></div>-->
                <button type="submit" name="p" class="btn btn-primary">Ajouter</button>
                
            </form>
          
         </div>
       </div>



      <div class="listview_1_of_2 images_1_of_2">
        <div class="listimg listimg_2_of_1">
             <?php

             $dbServername ="localhost";
             $dbUsername="id11108118_bazar";
             $dbPassword = "barbarossa1945";
             $dbName = "id11108118_bazar";

        	   $db = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

        	   $x = $iphone11PRO_GREEN->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
					 //echo  ' <h2>'.$MI9_BLACK->getName().'</h2>';
					 echo '<img alt=" "  src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';


					 ?>
        </div>
        <div class="text list_2_of_1">
            <h2>
            <?php
            $x = $iphone11PRO_GREEN->getNameMere();
          echo $x;
          ?>

            </h2>
            <p>
            <?php
            $x = $iphone11PRO_GREEN->getModele();
          echo $x;
          ?>
            </p>
            <form action="#" method="get">
                <!--<div class="button"><span><a href="preview.php">Add to cart</a></span></div>-->
                <input type="hidden"  name="id_ref" value="1">

                <button type="submit" name="p1" class="btn btn-primary">Ajouter</button>
                
            </form>
            
        </div>
      </div>

    </div>



    <div class="section group">

      <div class="listview_1_of_2 images_1_of_2">
        <div class="listimg listimg_2_of_1">

      <?php
      $dbServername ="localhost";
      $dbUsername="id11108118_bazar";
      $dbPassword = "barbarossa1945";
      $dbName = "id11108118_bazar";

        	   $db = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

        	   $x = $iphone11PRO_GOLD->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
					 //echo  ' <h2>'.$MI9_BLACK->getName().'</h2>';
					 echo '<img alt=" "  src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';


					 ?>



        </div>
          <div class="text list_2_of_1">
          <h2>

           <?php
           $x = $iphone11PRO_GOLD->getNameMere();
          echo $x;
          ?>


          </h2>
          <p>
             <?php


             $x = $iphone11PRO_GOLD->getModele();
          echo $x;
          ?>


          </p>
          <!-- <div class="button"><span><a href="preview.php">Add to cart</a></span></div> -->
            <form action="#" method="get">
             <input type="hidden"  name="id_ref" value="4">

                <!--<div class="button"><span><a href="preview.php">Add to cart</a></span></div>-->
                <button type="submit" name="p2" class="btn btn-primary">Ajouter</button>
                
            </form>
         </div>
       </div>




      <div class="listview_1_of_2 images_1_of_2">
        <div class="listimg listimg_2_of_1">

  <?php
  $dbServername ="localhost";
  $dbUsername="id11108118_bazar";
  $dbPassword = "barbarossa1945";
  $dbName = "id11108118_bazar";

        	   $db = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

        	   $x = $iphone10_black->getModele();
					 $sql = "SELECT * FROM produit WHERE modele = '$x'";
					 $sth = $db->query($sql);
					 $result=mysqli_fetch_array($sth);
					 //echo  ' <h2>'.$MI9_BLACK->getName().'</h2>';
					 echo '<img alt=" "  src="data:image/jpg;base64,'.base64_encode( $result['image2'] ).'"  />';


					 ?>



        </div>
        <div class="text list_2_of_1">
            <h2>
  <?php
  $x = $iphone10_black->getNameMere();
          echo $x;
          ?>

</h2>
            <p>

             <?php


             $x = $iphone10_black->getModele();
          echo $x;
          ?>


            </p>
            <!-- <div class="button"><span><a href="preview.php">Add to cart</a></span></div> -->
            <form action="#" method="get">
                <!--<div class="button"><span><a href="preview.php">Add to cart</a></span></div>-->
                <input type="hidden"  name="id_ref" value="9">

                <button type="submit" name="p3" class="btn btn-primary">Ajouter</button>
            </form>
            
        </div>
      </div>



    </div>
    <div class="clear"></div>
  </div>
     <div class="header_bottom_right_images">
     <!-- FlexSlider -->

    <section class="slider">
        <h1 style="font-size: 0px; margin: 0px;">s</h1>
        <div class="flexslider">
        <ul class="slides">
          <li><img src="images/1.jpg" alt=""/></li>
          <li><img src="images/2.jpg" alt=""/></li>
          <li><img src="images/3.jpg" alt=""/></li>
          <li><img src="images/4.jpg" alt=""/></li>
          </ul>
        </div>
      </section>
<!-- FlexSlider -->
    </div>
  <div class="clear"></div>
</div>
