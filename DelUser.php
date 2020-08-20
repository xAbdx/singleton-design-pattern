<?php
    // this code to make sure that the database is connected     
    $conn = MySQLi_Connect("localhost","root","","reg") or die("Connection Failed");
    $UserID = $_GET['UserID'];
    $q = "DELETE FROM users WHERE ID='$UserID'";
    $Result = MySQLi_Query($conn,$q) or die("No Use deleted");
    if($Result) header("location:DelUpdateUsers.php");
?>