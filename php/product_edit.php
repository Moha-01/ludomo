<?php

// servername => localhost
// username => root
// password => empty
// database name => ludomo
$conn = mysqli_connect("localhost", "root", "", "ludomo");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$id = $_GET['overview'];
$genre_id =  $_POST['game_genre'];
$brand_id = $_POST['game_brand'];
$S_M_id =  $_POST['game_mode'];
$name = $_POST['title'];
$preis = $_POST['ovp_price'];
$rabatt = $_POST['discount'];
$endpreis = $_POST['end_price'];
$fsk_id = $_POST['game_fsk'];
$platform_id = $_POST['game_platform'];
$discription = $_POST['description'];


//Save New Informations per SQL Statement in the DataBase!
$sql = "UPDATE products SET `genre_id` = '$genre_id',
                            `brand_id` = '$brand_id',
                            `S_M_id` = '$S_M_id',
                            `name` = '$name',
                            `preis` = '$preis',
                            `rabatt` = '$rabatt',
                            `endpreis` = '$endpreis',
                            `fsk_id` = '$fsk_id',
                            `platform_id` = '$platform_id',
                            `discription` = '$discription'
        WHERE ID = '$id' ";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

//reload to shop
header("Location: /dhbw/ludomo/php/shop.php");

?>
