<?php

session_start();
if(!isset($_SESSION['name'])){
    header('location:index.php');
}

?>
<html>
<head>
    <title>Document</title>
</head>
<body>

    <a href="logout.php">LogOut</a>
    <h1>WElCOME <?php  echo  $_SESSION['name']; ?>  </h1>
</body>
</html>