<?php
class user
 {
    function __construct($username, $password)
    {
        $conn = mysqli_connect("localhost","root","","movie_project");
        if(mysqli_connect_errno()){
            die("Error 01: cannot connect to Database <a href='#'>Report this error</a>". mysqli_connect_error());
        }
        $Userqry = "SELECT email FROM customer_management WHERE email = '$username'";//username validating query
        $Passwordqry = "SELECT email, password FROM customer_management";

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
            window.location = ("login.php");
            </script>
                ';
            die();
        }
        else{
            while($pwRow)//until data from data base granted
            {
            $pwRow['email'];                
                    if ($pwRow['email'] == $username && $pwRow['password'] == $password)
                    {
                            echo '<script>
                            alert("You are successfully logined");
                            window.location = ("../");
                            </script>';
                    }
                    else{//javascript popup message
                        echo '
                            <script>
                            alert("Error: username and password does not match");
                             window.location = ("login.php");
                            </script>
                        ';
                    }
                }
        }
        mysqli_close($con);

    }

}

class register{
    
    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function getPhone(){
        return $this->phone;
    }  
    public function setUsername($email){
        $this->email = $email;
    }
    public function getUsername(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }

    public function registerUser($Fname, $Lname, $country, $provenience, $city, $zipCode,$gender,$passport)
    {
        $conn = mysqli_connect("localhost","root","","movie_project");
        if(mysqli_connect_errno()){
            die("Error 01: cannot connect to Database <a href='#'>Report this error</a>". mysqli_connect_error());
        }

        $qry = "INSERT INTO customer_management VALUES 
              (NULL,'$Fname', '$Lname', '$this->phone','$this->email', '$country', '$provenience', '$city', '$zipCode', '$passport','$gender','$this->password')";
       
       

       $result = $conn->query($qry);
        if($result){//validaing username first    
            echo '
            <script>
            alert("successfully  REGISTERED");
            window.location = ("../");
            </script>
                ';
        }
        else{
            echo 'Sorry error occured while inserting data!<br>
               <a href = "#">Report this error! </a><br>
                <a href = "../">Go back to home page! </a>
                ';
        }
    }

}

?>