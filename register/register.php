<!DOCTYPE html>
<html>
    <title>Registration</title>
<head>

    <!-- local links -->
    <link href="../fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

    <link rel = "stylesheet" type ="text/css" href="../css/register.css">
</head>
<body>
<h1 class = "top-heading">customer registration form</h1>
    <div class = "form-wrapper">
        <form method = "post" action= "registerObj.php">
        <h1>account information</h1>
            <div class = "row">
                <div class = "input">
                <i class="fas fa-user"></i><input name = "Fname" id = "firstName" required = "required" type = "text" placeholder = "First Name">
                </div>
                <div class = "input">
                <i class="fas fa-user"></i><input name = "Lname" id = "lastName" required = "required" type = "text" placeholder = "Last Name">
                </div>  
            </div>   
            <div class = "row">
                <div class = "input">
                <i class="fas fa-phone-alt"></i><input name = "phone" id = "Phone"  type = "number" placeholder = "Phone">
                </div>
                <div class = "input">
                <i class="fas fa-envelope"></i> <input name = "email" id = "Email" required = "required" type = "email" placeholder = "Email (as username)">
                </div>
            </div>   
            <div class = "row">
                <div class = "input">
                <i class="fas fa-globe"></i><?php include_once("../common/countryList.php") ?>
                </div>
                <div class = "input">
                <i class="fas fa-map-marked-alt"></i><input name = "provenience" id = "Provenience"  type = "text" placeholder = "Provenience">
                </div>
                </div>   
            <div class = "row">
                <div class = "input">
                <i class="fas fa-city"></i></i><input name = "city" id = "City" required = "required" type = "text" placeholder = "City">
                </div>
                <div class = "input">
                <i class="fas fa-map-marker-alt"></i><input name = "zipCode" id = "zip"  type = "text" placeholder = "Zip Code">
                </div>
            </div>  
            <div class = "row">
                <div class = "input">
                <p style = "color:red; font-size:10px">* Citizen form Nepal are not required to enter passport no.</P>

                <i class="fas fa-passport"></i><input name = "passport" id = "Passport" type = "text" placeholder = "Passport Number">

                </div>
                <div class = "input" style = " border-bottom:none">
                    
                <i class="fas fa-venus-mars"></i>                     <input type="radio" name="gender" id="male" value="male" checked>
                    <label for="male">Male</label>

                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="other" value="other">
                    <label for="female">Other</label>

                 </div> 
            </div> 
            <div class = "row">
                <div class = "input">
                <i class="fas fa-unlock-alt"></i><input name = "password" id = "pw" required = "required" type = "password" placeholder = "Password">
                </div> 
                <div class = "input">
                <i class="fas fa-lock"></i> <input name = "Cpassword" id = "Cpw" required = "required" type = "password" placeholder = "Confirm Password">
                </div> 
            </div>   
            <button type = "submit" class = "login">Next  <i class="fas fa-forward"></i></button>
            <br>    

<a href = "login.php"style = "    margin: 10px auto;"> Already have an account?</a>
<br/>            
<div class = "api">
    
            <a href = "#"><i class="fab fa-facebook-square" style = "font-size:18px;padding:5px 5px;"></i>Register with facebook</a>
            <a href = "#"><i class="fab fa-google-plus-g"style = "font-size:18px;"></i>Register with google</a>
     
        </div>
        </form>
    </div>
    <script src="../js/script.js"></script>

</body>

</html>