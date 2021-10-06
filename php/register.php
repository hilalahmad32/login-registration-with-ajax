<?php 
include "config.php";

if(isset($_POST["username"]) || isset($_POST["email"]) || isset($_POST["password"])){
    $username=mysqli_real_escape_string($conn,$_POST["username"]);
    $email=mysqli_real_escape_string($conn,$_POST["email"]);
    $password=mysqli_real_escape_string($conn,sha1($_POST["password"]));

    // check uniqe email vaidation
    $sql="SELECT * FROM users WHERE email='{$email}'";
    $run_mysqli=mysqli_query($conn,$sql);
    if(mysqli_num_rows($run_mysqli) > 0){
        echo 2;
    }else{
        $sql1="INSERT INTO users (username,email,passwrd) VALUES ('{$username}','{$email}','{$password}')";
        if(mysqli_query($conn,$sql1)){
            echo 1;
        }else{
            echo 0;
        }
    }
}
