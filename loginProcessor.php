<?php

$conn = mysqli_connect("localhost", "root", "", "login_database") or die("connection failed");

if (isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);

    if (empty($uname)){
        header("location: login.php?error=User Name is required");
        exit();
    }else if(empty($password)){
        header("location: login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE username= '$uname' AND password= '$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)){
        
            header("location: messages.php");
        }
        else {
            header("location: login.php?error=Incorrect User Name or Password");
        exit();
        }

    }

}else{
    header("location: login.php");
    exit();
}

?>