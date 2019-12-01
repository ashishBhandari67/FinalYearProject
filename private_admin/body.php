<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "movie_projectadmin");

  $result = mysqli_query($db, "SELECT * FROM showing_now_movie");
?>

<!DOCTYPE html>
<html>
<head> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Lobster&display=swap|Alatsi&display=swap" rel="stylesheet">

	<!-- local link -->
	<link href="../fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

    <link rel="stylesheet" type="text/css" href="css/body.css" >
    
</head>
<body>
<div>
<nav class="navbar fixed-top ">

<a class="navbar-brand" href="javascript:dropdown()"> <i class="fas fa-bars" id="menu"></i> Dashboard</a>
</nav>
</div>
  <div class="row" >
    <div class="col-md-2" id = "dropdownMenu" style="max-height:100vh">

      <!-- Content -->
        <ul>
        <li><a href="#"><i class="fas fa-columns"></i>Top menu </a></li>
        <li><a href="#"><i class="fas fa-images"></i> banner </a></li>
        <li><a href="#"><i class="fas fa-film"></i>now showing movie </a></li>
        <li><a href="../index.php"><i class="fas fa-eye"></i>View Changes </a></li>
        </ul>

    </div>
    <div class="col-md-9 "style="margin-left:10px" >
      
 <table class="table table-bordered" >
  <thead class="thead-dark" >
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Text</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  
  <tbody>
  <?php
            while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
                echo "<th scope='row'>".$row['id']."</th>";
                echo "<td><img src='images/".$row['image']."' ></td>";
                echo "<td>".$row['text']."</td>";
                echo "<td></td>";
            echo "</tr>";
            }
        ?>

  </tbody>
</table>
        <form method="POST" action="imageObj.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div>
            <input type="file" name="image" required="required">
            </div>
            <div>
            <textarea 
                id="text" 
                cols="40" 
                rows="4" 
                name="image_text" 
                placeholder="Say something about this image..."></textarea>
            </div>
            <div>
                <button type="submit" name="upload">POST</button>
            </div>
        </form>
    </div>
    </div>



  <script src="js/script.js"></script> 
  <script>
  var icon = document.getElementById('menu');
    var Menu = document.getElementById('dropdownMenu');
    icon.onclick = function(){
    if(Menu.className === "col-md-2"){
        Menu.classList.add("menuActive");
    }
    else{
        Menu.className = "col-md-2";
    }
}
</script>
</body>

</html>