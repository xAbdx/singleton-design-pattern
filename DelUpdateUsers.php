<?php
    // session_start() = singleton 
    // session_start to store any information in session variables
    session_start();
    if($_SESSION['Level'] == 'admin'){}
    else
        header("location:home.php");
        
    $conn = MySQLi_Connect("localhost","root","","reg") or die("Connection Failed");
    $q = "SELECT * FROM users";
    $Result = MySQLi_Query($conn,$q) or die("No User Found");

    if($Result){
        $row = MySQLi_fetch_array($Result);
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
            width: 60%;  
            font-family: monospace;
            font-size: 20px;
        }
        th{
            color: white;
            background-color: #188c7e;
        }
        th, td{
            text-align: center;
            padding: 10px;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        } 
    </style>
</head>
<body dir="rtl">
    <center>
        <h2>صفحة حذف وتعديل مستخدمين</h2>
        <table border="1">
            <tr>
                <th>الرقم</th>
                <th>الاسم الاول</th>
                <th>الاسم الأخير</th>
                <th>البريد الالكتروني</th>
                <th>مستوى الصلاحيات</th>
            </tr>

            <!-- php process to put the information about the user in a table -->
            <?php
                while($row = MySQLi_fetch_array($Result)) {
            ?>
                <tr>    
                    <td><?php echo $row['ID'] ?> </td>
                    <td><?php echo $row['FirstName'] ?> </td>
                    <td><?php echo $row['LastName'] ?> </td>
                    <td><?php echo $row['Email'] ?> </td>
                    <td><?php echo $row['AccessLevel'] ?> </td>
                    <td><a href="DelUser.php?UserID=<?php echo $row['ID'] ?>">حذف</a></td>
                    <td><a href="UpdateUser.php?UserID=<?php echo $row['ID'] ?>">تعديل</a></td>
                </tr>
            <?php }  ?>
        </table>
    </center>
</body>
</html>