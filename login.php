<?php
session_start();
include 'inc/signup.inc.php';

if(isset($_POST['submit'])){
  echo logup();
}
if(isset($_POST['submit2'])){
include_once'inc/db.inc.php';
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['passw']);

    if(empty($username) || empty($password))
    {

    }else{
      $sql = "SELECT * FROM user  WHERE id_user='$username' AND valid=1";
      $result = mysqli_query($db, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck<1) {
        ?>
        <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display= 'none' ;">&times;</span>
        <?php
        echo 'Email est incorrect';

        echo '</div>';


      }else {
        if($row=mysqli_fetch_assoc($result)) {
          $hashedpass=password_verify($password,$row['password']);
          if($hashedpass==false) {
            ?>
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display= 'none' ;">&times;</span>
            <?php
            echo 'mot de passe est incorrect';

            echo '</div>';
          }elseif ($hashedpass==true) {
            $_SESSION['id_user']= $row['id_user'];
            $_SESSION['name']= $row['name'];
            $_SESSION['city']= $row['city'];
            $_SESSION['zipcode']= $row['zipcode'];
            $_SESSION['address']= $row['address'];
            $_SESSION['phone']= $row['phone'];
            $_SESSION['password']= $row['password'];
            $_SESSION['country']= $row['country'];

            header('Location: index.php');
   
          }
        }
      }
    }
}
 ?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<title>entrer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquerymain.js"></script>
<link href="css/msg.css" rel="stylesheet" type="text/css" media="all"/>

<script src="js/script.js" ></script>
<script  src="js/jquery-1.7.2.min.js"></script>

</head>
<body>
  <div class="wrap">
		<div class="header_top">

			  <div class="header_top_right">
			   
			    <div class="shopping_cart">
				
			      </div>

		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu" style = "background-color:#232f3e;">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="index.php">Home</a></li>
	  <li><a href="productaffiche.php">Products</a> </li>
</ul>
	  <div class="clear"></div>
	
</div>
 <div class="main" >
    <div class="content">
    	 <div class="login_panel">
        	<h3>connectez-vous</h3>
        
        	<form action="#" method="POST" id="member">
                	<input name="username" type="text" value="Username" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
                    <input name="passw" type="password" value="Password" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                    <div class="buttons"><div><button name="submit2" class="grey">Sign In</button></div></div>

                 </form>
                    </div>
    	<div class="register_account">
    		<h3>créer un compte</h3>
    		<form action = "#" method = "POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name"  placeholder="name">
							</div>

							<div>
								<input type="text" id='postal' name="zipcode" onchange="test()"   class="field" placeholder="code postal">
							</div>
							
							<div>
							   <select class="frm-field" name="city" id="ville">
							        <option class="frm-field">Choississez votre ville</option>
							   </select>
							</div>
							
							<script>
                              function test(){
                                var myObj,code_postal,j,k,i,region,ville,url,xmlhttp,txt="";
                                code_postal = document.getElementById("postal").value;
                                url = "https://api.zippopotam.us/"+document.getElementById('country').value+"/"+code_postal;
                                //url = "http://api.zippopotam.us/fr/95000";
                                
                                xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {
                                  if (this.readyState == 4 && this.status == 200) {
                                    myObj = JSON.parse(xmlhttp.response);
                                    //txt += "<select>";
                                    for( i in myObj['places'] ){
                                        for(j in myObj['places'][i] ){
                                          if( j == "place name")
                                          txt += "<option>" + myObj['places'][i]['place name'] + "</option> <br />";
                                        }
                                    }
                                  }
                                  //txt += "</select>";
                                  document.getElementById("ville").innerHTML = txt;
                                }
                                xmlhttp.open('GET', url);
                                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                xmlhttp.send();
                              }
                            </script>
							
							<div>
								<input type="text" name="email" value="" placeholder="email">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address" value="" placeholder="adresse">
						</div>
		    		<div>
						<select id="country" name="country"  class="frm-field required">
							<option value="fr" selected="selected">France</option>
		                  </select>
				 </div>

		           <div>
		          <input type="text" name="phone" value=""  placeholder="telephone">
		          </div>

				  <div>
					<input type="password" name="password"  value="" placeholder="password">
				</div>
		    	</td>
		    </tr>
		    </tbody></table>
		   <div class="search"><div><button name="submit" class="grey">Create Account</button></div></div>
		    <div class="clear"></div>
		    </form>
    	</div>
       <div class="clear"></div>
    </div>
 </div>

 




<?php

include 'inc/footer.php'
?>