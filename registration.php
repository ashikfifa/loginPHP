<?php

    session_start();
    header('location:index.php');

    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'logindb');

    $name=$_POST['name'];
    $password=$_POST['password'];


    $s="SELECT * FROM `usertable` where name='$name'";

    $result=mysqli_query($con,$s);

    $num=mysqli_num_rows($result);

    if($num==1){
        echo" username already taken";
    }
    else{
        $reg="insert into usertable(name,password) values ('$name',$password)";
        mysqli_query($con,$reg);
        echo"Registration successful";
    }
?>