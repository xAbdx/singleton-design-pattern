<?php
    // session_start() = singleton 
    // session_start to store any information about the user whether it was an admin or a user in session variables
    session_start();
    if($_SESSION['Level'] == 'admin'){}
    else
        header("location:home.php");
    // this code to make sure that the database is connected 
    $conn = MySQLi_Connect("localhost","root","","reg") or die("Connection Failed");
    $UserID = $_GET['UserID'];
    $q = "SELECT * FROM users WHERE ID='$UserID'";
    $Result = MySQLi_Query($conn,$q) or die("User Not Found");
    $row=MySQLi_fetch_array( $Result);
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body dir="rtl">
        <center>
            <!-- a code that allow to update the users informations -->
            <h2>نموذج تعديل بيانات المستخدم</h2>
            <form method="post" action="UpdateUserProcess.php">
                <table>
                    <tr>
                        <th>الرقم</th>
                        <td><input type="text" name="ID" value="<?php echo $row['ID'] ?>"></td>
                    </tr>
                    <tr>
                        <th>الاسم الاول</th>
                        <td><input type="text" name="FirstName" value="<?php echo $row['FirstName'] ?>"></td>
                    </tr>
                    <tr>
                        <th>الاسم الأخير</th>
                        <td><input type="text" name="LastName" value="<?php echo $row['LastName'] ?>"></td>
                    </tr>
                    <tr>
                        <th>مستوى الصلاحيات</th>
                        <td><input type="text" name="AccessLevel" value="<?php echo $row['AccessLevel'] ?>"></td>
                    </tr>
                    <tr>
                    <th></th>
                        <td><input style="padding: 2px 69px 2px 70px;" type="submit" value="تحديث"></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>