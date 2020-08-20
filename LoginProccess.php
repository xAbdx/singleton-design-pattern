<?php
        // session_start() = singleton 
    // session_start to store any information in session variables
    session_start();

    // this code to make sure that the database is connected 
    $coon = MySQLi_Connect("localhost", "root", "", "reg") or die("Connecton Failed");
    $FirstName = $_POST['FirstName'];
    $Pass = $_POST['Pass'];
    $q = "SELECT * FROM users WHERE FirstName = '$FirstName' AND Pass = '$Pass'";
    $Result = MySQLi_Query($coon, $q) or die("Wrong Name or Password");
    if($Result){
        $row = MySQLi_fetch_array($Result);
        $_SESSION['FirstName'] = $row['FirstName'];
        $_SESSION['Level'] = $row['AccessLevel'];
    }

    // if the user was an admin direct him/her to admin page,
    // if the user was a (user) direct him/her to home page
    if($_SESSION['Level'] == 'admin')
        header("location:AdminHomePage.php");
    else
        header("location:home.php");
?>
