<?php
    // session_start() = singleton 
    // session_start to store any information about the user whether it was an admin or a user in session variables
    session_start();
    if($_SESSION['Level'] == 'admin'){}
    else
        header("location:home.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- header -->
    <div class="header">
        <ul class="nav">
            <a href="AdminHomePage.php" target="_block"><li>Home</li></a>
            <a href="aboutus.php" target="_block"><li>About us</li></a>
            <a href="contacts.php" target="_block"><li>contacts</li></a>
            
            <div class="login">
                <a href="DelUpdateUsers.php" target="_block"><li>Update/Delete</li></a> <!-- just the admin can access to this page -->
                <a href="login.php" target="_block"><li>Logout</li></a>
            </div>
        </ul>
    </div>

    <!-- content -->
    <div class="img">
        <img src="img/computing.jpg" alt="" width="100%">
    </div>
    <div class="title">
        <h1>Al-BaSha Computer</h1>
    </div>
    <div class="text">
        <p>Viewing a web page requires a browser, like Internet Explorer, Edge, Safari, Firefox, 
            or Chrome. For example, you are reading this web page using a browser. Once in a browser,
            you can open a web page by entering the URL in the address bar. For example, typing "https://www.computerhope.com/esd.htm" (or copying and pasting) opens 
            the Computer Hope ESD page. If you don't know the URL of the site you'd like to visit, you can use a search engine to find it.</p>
        <h3>What is the difference between a website and web page?</h3>
        <p>A website refers to a central location that contains more than one web page. 
            For example, Computer Hope is considered a website, which includes thousands of different web pages, including this web page you are reading now.</p>
    </div>

    <!-- footer -->
    <div class="footer">
        <h5>Al-BaSha Computer &copy; &trade;</h5>
    </div>
</body>
</html>