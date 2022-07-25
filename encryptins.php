<?php
$servername = "localhost";
$username = "root";
$password = "tb84cubjvked";
$dbname = "loginpage";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if(isset($_POST['submit'])){
    if(!empty($_POST['adminname']) && !empty($_POST['password'])){
        $adminname = $_POST['adminname'];
        $password = $_POST['password'];
        
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $query1 = "INSERT INTO adminlogin(adminname, password) values('$adminname','$hash')";

        $run = mysqli_query($conn,$query1) or die(mysqli_error());
        if($run){
            echo "A mers baros";
        }else {
            echo "Nu a mers baros prost";
        }
    
    }else{
        echo "toate formularele baros";
    }
}



?>