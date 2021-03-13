<?php

    session_start();

    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'logindb');

    $name=$_POST['name'];
    $password=$_POST['password'];


    $s="SELECT * FROM `usertable` where name='$name'  && password='$password'";

    $result=mysqli_query($con,$s);

    $num=mysqli_num_rows($result);

    if($num==1){
        $_SESSION['name']= $name;
        header('location:home.php');
    }
    else{
        header('location:index.php');
    }
?>