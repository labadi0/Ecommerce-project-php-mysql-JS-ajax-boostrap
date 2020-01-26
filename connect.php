<?php
include 'Produit.php';



function conectiondb() {
    $dbServername ="localhost";
    $dbUsername="id11108118_bazar";
    $dbPassword = "barbarossa1945";
    $dbName = "id11108118_bazar";

    try {
        $db = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    } catch (Exception $e) {
        echo "fail to connect to database";
    }
        return $db;
}


function extracter($x,$modele){

    $db = conectiondb();

$sql = "SELECT * FROM produit WHERE $modele ='$x'";

$result = $db->query($sql);
$tab = array();



    while($row = $result->fetch_assoc()) {
      //  echo "id: " . $row["id_produit"]. " - Namemere: " . $row["nameMere"]. " " . $row["description"]. "<br>";
        $tab =$row;


}

return $tab;

}


function counter() {
    $db = conectiondb();

    $sql="SELECT id_produit FROM produit";

    if ($result=mysqli_query($db,$sql))
    {
        // Return the number of rows in result set
        $rowcount=mysqli_num_rows($result);
     //   printf("Result set has %d rows.\n",$rowcount);

       return  $rowcount;
    }

}
