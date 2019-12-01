<?php
include 'function.php';

$db = mysqli_connect("localhost", "root", "", "movie_projectadmin");
if(!$db){
    die("Error 01: cannot connect to Database <a href='#'>Report this error</a>". mysqli_connect_error());
}
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        // Get text
        $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

        $obj = new image();
        $obj->movieImage($image,$image_text);
  }
  
?>
