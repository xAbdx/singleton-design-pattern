<?php
    // this code to make sure that the database is connected 
    $conn = MySQLi_Connect("localhost","root","","reg") or die("Connection Failed");

    // this code to make sure that everything is the same as the database's fields
    $ID = $_POST['ID'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Pass = ($_POST['Pass']);
    $AccessLevel = $_POST['AccessLevel'];
    $q = "UPDATE users  SET
            ID = '$ID', 
            FirstName = '$FirstName',
            LastName = '$LastName',
            Email = '$Email',
            Pass = '$Pass',
            AccessLevel = '$AccessLevel'
            WHERE ID='$ID' ; ";
    $Result = MySQLi_Query($conn,$q) or die("User Not Updated");
    if($Result) header("location:DelUpdateUsers.php");
?>