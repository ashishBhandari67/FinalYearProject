<!DOCTYPE html>
<html>
<head>
    <title>Private</title>

   <!-- !-- local links --> 
    <link rel = "stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <div class = "form_wrapper">
        <form method="post" action="loginobj.php">
            <h1 class = "formHeading">Admin login form</h1>
            <div><input type = "text" name = "username" id = "username"placeholder = "Enter Username" required = "required">
            </div>
            <div><input type = "password" name = "password" id  = "password" placeholder = "Enter password" required = "required">
            </div>
             <button type = "submit" >Login</button>
             <div class = "links">
                <a href = "#"> froget password!</a>
                <a href = "javascript:void(0);" id="open"  ><span id="blink">?</span>help</a>
            </div>
        </form>


    </div>
    <div class="help_Wrapper" id = "helpBox" >
    <div class="help">
    <span aria-hidden="true" id = "close">&times;</span>

    <a href = "#"> Forger password, want to reset password?</a>
    <a href = "#"> Doesn't know how to login?</a>
    <a href = "#"> Password is correct but still have problem on login?</a>
    <a href = "#"> Report problem!</a>
    </div>
    </div>

	<script src="js/script.js"></script>
</body>


</html>