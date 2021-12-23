<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Success</title>
  </head>
  <body>
    <center>


<?php

$target_dir = "../assets/images/";
$imgName = basename($_FILES["image"]["name"]);
$target_file = $target_dir . $imgName;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}



// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}



// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "", "ludomo");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$genre_id =  $_POST['game_genre'];
$brand_id = $_POST['game_brand'];
$S_M_id =  $_POST['game_mode'];
$name = $_POST['title'];
$preis = $_POST['ovp_price'];
$rabatt = $_POST['discount'];
$endpreis = $_POST['end_price'];
//Picture Pfad
$picture = "http://localhost/dhbw/ludomo/assets/images/".$imgName. "";
echo $picture;
$fsk_id = $_POST['game_fsk'];
$platform_id = $_POST['game_platform'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO products
(`brand_id`, `genre_id`, `S_M_id`, `name`, `preis`, `rabatt`, `endpreis`, `picture`, `fsk_id`, `platform_id`)
 VALUES ('$brand_id', '$genre_id','$S_M_id','$name','$preis','$rabatt','$endpreis','$picture','$fsk_id','$platform_id')";

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

header("Location: /dhbw/ludomo/php/shop.php");

?>

</center>
</body>

</html>
