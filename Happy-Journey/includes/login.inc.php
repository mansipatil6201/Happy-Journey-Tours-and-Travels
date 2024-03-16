<?php
session_start();
if(isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

    require_once '../config.php';

    $query = "select * from user WHERE uname ='$uname' AND upass ='$upass'";
    $query_run = mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
        $_SESSION['uname'] = $uname;
        echo '<script type="text/javascript">alert("Successfully Logged In.")</script>';
        header('location: ../index.php');
    }
    else{
        echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
    }
}
else {
    echo '<script type="text/javascript">alert("Error Logging In.")</script>';
}