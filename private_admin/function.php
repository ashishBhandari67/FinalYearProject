<?php 
class user
 {
    function __construct($username, $password)
    {
        $conn = mysqli_connect("localhost","root","","movie_projectadmin");
        if(mysqli_connect_errno()){
            die("Error 01: cannot connect to Database <a href='#'>Report this error</a>". mysqli_connect_error());
        }
        $Userqry = "SELECT username FROM admin_manager WHERE username = '$username'";//username validating query
        $Passwordqry = "SELECT username, password FROM admin_manager";

        $UserResult = $conn->query($Userqry);
        $PwResult = $conn->query($Passwordqry);

        if(!$UserResult && !$PwResult){//if accessing data from table dined
            die("<br>Error 02: cannot connect to table <a href='#'>Report this error</a>");
        }

        // $userRow = mysqli_fetch_assoc($UserResult);
        $pwRow = mysqli_fetch_assoc($PwResult);

        $userCount = mysqli_num_rows($UserResult);
            
        if($userCount <= 0){//validaing username first    
            echo '
            <script>
            alert("Error: username Does not exist! Make sure you  REGISTERED");
            window.location = ("index.php");
            </script>
                ';
            die();
        }
        else{
            while($pwRow)//until data from data base granted
            {
            $pwRow['username'];                
                    if ($pwRow['username'] == $username && $pwRow['password'] == $password)
                    {
                            echo '<script>
                            window.location = ("body.php");
                            </script>';
                    }
                    else{//javascript popup message
                        echo '
                            <script>
                            alert("Error: username and password does not match");
                             window.location = ("index.php");
                            </script>
                        ';
                    }
                }
        }
        mysqli_close($con);

    }

}

class image{

 function movieImage($image,$image_text)
 {
      // Create database connection
  $db = mysqli_connect("localhost", "root", "", "movie_projectadmin");

  // Initialize message variable
  $msg = "";
  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO showing_now_movie VALUES ('','$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $msg = "Image uploaded successfully";
          header("Location: body.php"); /* Redirect browser */

            /* Make sure that code below does not get executed when we redirect. */
            exit;
  	}else{
  		echo "Failed to upload image";
  	}
  
}
}

?>