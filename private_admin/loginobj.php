<?php
include 'function.php';
$conn = mysqli_connect("localhost","root","","movie_projectadmin");
if(!$conn){
    die("Error 01: cannot connect to Database <a href='#'>Report this error</a>". mysqli_connect_error());
}
$username = mysqli_real_escape_string($conn,$_POST["username"]);//using mysqli realscape string to store important data more securely
$pw =  mysqli_real_escape_string($conn, (md5($_POST["password"])));

//calling another class

$obj = new user($username,$pw);//passing variable to constructor

?>