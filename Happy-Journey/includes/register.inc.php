<?php
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $uemail = $_POST['uemail'];
    $umobn = $_POST['umobn'];
    $uage = $_POST['uage'];
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

    require_once '../config.php';

    $query = "select * from user WHERE uemail ='$uemail'";
    $query_run = mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
        echo '<script type="text/javascript">alert("User Already Exists.");</script>';
    }
    else{
        $query= "INSERT INTO `user`(`name`, `uemail`, `umobn`, `uage`, `uname`, `upass`) VALUES ('$name','$uemail','$umobn','$uage','$uname','$upass')";
        $query_run = mysqli_query($con,$query);
        if($query_run){
            echo '<script type="text/javascript">alert("User Registered.");</script>';
            header('location: ../login.php');
        }
    }
}
else {
    echo '<script type="text/javascript">alert("Try To Register Again.");</script>';
}