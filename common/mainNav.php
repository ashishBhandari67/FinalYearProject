		 <!-- navigation start _____________ START-->

	<header class="nav-head">
	<div class="logo" id="logo" onclick="responsive()"><img src="images/logo m.png" alt="Logo"></div>
	<div class="navbar" id="nav">
			<ul class="nav-ul">
			<li>
				<a href="#Home-session"> Movies</a>
			</li>			
			<li>
				<a href="#Home-session"> Ticketing/show times</a>
			</li>			
			<li>
				<a href="#Home-session"> promotion</a>
			</li>			
			<li>
				<a href="#Home-session"> contest</a>
			</li>	
			<li>
				<a href="#Home-session"> cinemas</a>
			</li>	
	
		</ul>
    </div>
	<!-- navigation start _____________ END-->

	 <!-- search button _____________ Start-->
	<form class = "search" method = "post" action = "register/loginObj.php">
		 <input type = "text" name = "search" id = "Search">
		 <button type = "submit"><i class="fas fa-search"></i></button>
	</form>
		 <!-- search button _____________ End-->

    <div class="playstore" id="playstore" onclick="responsive()"><img src="images/logo.jpg"alt="Logo"></div>

	  <div class="icon" id="menu">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	<div class="user" id="user" ><img src="images/account.svg"alt="Logo"></div>

	</header>
		 <!-- login form _____________ Start-->
	<div class = "loginForm" id = "login_form">
	<div class = "formWrapper" id = "form_wrapper"> 
	<form method="post" action="register/loginObj.php" class = "login-form">
            <h1 class = "formHeading">Login</h1>
            <div><input type = "text" name = "username" id = "username"placeholder = "Enter Username (email)" required = "required">
            </div>
            <div><input type = "password" name = "password" id  = "password" placeholder = "Enter password" required = "required">
			</div>			 
			
			 <a href = "register/login.php">one click login option</a>
             <button type = "submit" >Login</button>
             <div class = "links">
			 <a href = "#"> forger password</a>
			 <a href = "register/register.php"> register now</a>
            </div>
		</form>
	</div>
	</div>
			 <!-- login form _____________ End-->

    