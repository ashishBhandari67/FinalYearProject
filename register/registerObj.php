<?php
include 'function.php';
$conn = mysqli_connect("localhost","root","","movie_project");
if(!$conn){
    die("Error 01: cannot connect to Database <a href='#'>Report this error</a>". mysqli_connect_error());
}
//using mysqli realscape string to store important data more securely
$password =  mysqli_real_escape_string($conn, ($_POST["password"]));
$Cpassword =  mysqli_real_escape_string($conn, ($_POST["Cpassword"]));

$Fname =  $_POST["password"];
$Lname =  $_POST["password"];
$phone =  mysqli_real_escape_string($conn, ($_POST["phone"]));
$email =  mysqli_real_escape_string($conn, ($_POST["email"]));
$country = $_POST["country"];
$provenience =  $_POST["provenience"];
$city =  $_POST["city"];
$zipCode =  $_POST["zipCode"];
$gender =  mysqli_real_escape_string($conn, ($_POST["gender"]));
$passport =  mysqli_real_escape_string($conn, ($_POST["passport"]));

//calling another class
$obj = new register();

//calling functions
$obj->setUsername($email);
$obj->getUsername();

$obj->setPassword(md5($password));
$obj->getPassword();

$obj->setPhone($phone);
$obj->getPhone();

$obj->registerUser($Fname, $Lname, $country, $provenience, $city, $zipCode,$gender,$passport);

?>