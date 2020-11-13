<?php
    require_once('includes/connect.php');
    // include("function.php")
    $id= $_GET["id"];
    $username=$_POST['username'];
    $password=$_POST['password1'];
    $displayname=$_POST['displayname'];
    $email=$_POST['email'];
   
    $sql="UPDATE users
    SET id='$id',
    username = '$username', 
    password1 = '$password',
    displayname = '$displayname',
    email = '$email',
    WHERE id=$id";
    if (mysqli_query($dbcon, $sql)) {
        header('location: hethong.php ');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
    }

?>