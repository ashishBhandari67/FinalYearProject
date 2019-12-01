<?php 
	$conn = mysqli_connect("localhost","root","","movie_projectadmin");
	if(!$conn){
		die("<br>Error 01: cannot connect to Database <a href='#'>Report this error</a>". mysqli_connect_error());
	}

	$result = mysqli_query($conn, "SELECT * FROM showing_now_movie");
  ?>
<!DOCTYPE html>
<html>
<head> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Lobster&display=swap|Alatsi&display=swap" rel="stylesheet">

	<!-- local link -->
	<link href="fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

	<link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body>
	    <!-- head nav _____________ start -->
		<?php include_once("common/mainNav.php"); ?>
<!-- head nav _____________end -->

<div class="jumbotron-fluid" style="border:1px solid">
<div class="galleryContainer">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="images/kaif.jpg">
            <p class="captionText">Caption Text-01</p>
        </div>
        <div class="imageHolder">
            <img src="images/sere.jpg">
            <p class="captionText">Caption Text-02</p>
        </div>
        <div class="imageHolder">
            <img src="images/bala.jpg">
            <p class="captionText">Caption Text-03</p>
        </div>
        <div class="imageHolder">
            <img src="images/kaif.jpg">
            <p class="captionText">Caption Text-04</p>
        </div>
    </div>
    <div id="dotsContainer"></div>
</div>

</div>


<div class="d-flex flex-row">
<?php
 while ($row = mysqli_fetch_array($result)) {
			echo "<div class='p-2'>
				<div class='card'>
                  <img src='private_admin/images/".$row['image']."' >
					<div class='card-body'>
						<h4 class='card-title'>".$row['text']."</h4>
						<a href='#!' class='btn btn-primary watch'>Watch Trailer</a>

						</div>
					</div>
				</div>";			
            }
 ?>

  
</div>
<div class="watchTrailer" id = "card">
    <div class="embed-responsive embed-responsive-16by9" >
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/48OJbbI0DfE" allowfullscreen=""></iframe>
    </div>
</div>
<!-- responsive variations -->
<div class="d-flex flex-sm-row">...</div>
<div class="d-flex flex-md-row">...</div>
<div class="d-flex flex-lg-row">...</div>
<div class="d-flex flex-xl-row">..</div>



	<script src="js/script.js"></script> 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

