<?php
function logup(){

  include_once'db.inc.php';


      $name = mysqli_real_escape_string($db,$_POST['name']);
      $city = mysqli_real_escape_string($db,$_POST['city']);
      $zipcode = mysqli_real_escape_string($db,$_POST['zipcode']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $address = mysqli_real_escape_string($db,$_POST['address']);
      $country = mysqli_real_escape_string($db,$_POST['country']);
      $phone = mysqli_real_escape_string($db,$_POST['phone']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

      if ( empty($name) || empty($city) || empty($zipcode) || empty($email) || empty($address) || empty($country) || empty($phone) || empty($password))
      {
                $x = '<div class="alert">';
        $x .=           '  <span class="closebtn"  ';
        $x.=      '  onclick="this.parentElement.style.display = ';
        $x.=  " 'none' ;\"      "  ;
        $x.=  " >&times;</span>   "                 ;


      $x.= 'veuillez remplir tous les champs';
      $x .= "</div>";
      $mesasage = $x;
        
      }
      else {
          $sql = "SELECT * FROM user WHERE id_user='$email'";
          $result = mysqli_query($db,$sql);
          $resultCheck = mysqli_num_rows($result);

              if ($resultCheck > 0 ){
                         $x = '<div class="alert">';
            $x .=        '  <span class="closebtn"  ';
            $x.=      '  onclick="this.parentElement.style.display = ';
            $x.=  " 'none' ;\"      "  ;
            $x.=  " >&times;</span>   "                 ;


          $x.= 'email que vous avez choisit est pris par un autre utilisatuer !';
          $x .= "</div>";
          $mesasage = $x;
        } else {
          $hashpass=password_hash($password,PASSWORD_DEFAULT);
          $sql = "INSERT INTO user VALUES('$name','$city','$zipcode','$address','$country','$phone','$hashpass','$email',0)";
          $query=mysqli_query($db,$sql);
          if($query){
                            $objet = 'Confirmation de votre inscription' ;
                $contenu = '
                <html>
                <head>
                   <title>Vous avez effectué une inscription en ligne dans notre site</title>
                </head>
                <body>
                   <p>Bonjour Mr/Mmme '.$name.'</p>
                    <p> pour activer votre compte veuillez cliquer sur ce lien :</p>
              
                    <p><a href=\'https://bazare-ucp.000webhostapp.com/inc/activer.php?email='.$email.'\'>cliquez ici</a></p>
                </body>
                </html>';$entetes =
                'Content-type: text/html; charset=utf-8' . "\r\n" .
                'From: asssist@bazar.com'."\r\n" .
                'Reply-To:asssist@bazar.com'."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                mail($email, $objet, $contenu, $entetes);

              
            $x = '<div class="success">';
            $x .=           '  <span class="closebtn"  ';
            $x.=      '  onclick="this.parentElement.style.display = ';
            $x.=  " 'none' ;\"      "  ;
            $x.=  " >&times;</span>   "                 ;


          $x.= 'inscription envoyé avec succés vous aller recevoir un message de confirmation';
          $x .= "</div>";
          $mesasage = $x;
          
          }else{
              echo "error";
          }
          
      }

    }
    
    return $mesasage;

}
