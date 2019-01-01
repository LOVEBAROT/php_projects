<?php
session_start();

if (isset($_SESSION['uid'])){
    echo "";
}else
{
   header('Location: ../login.php');
}?>
<?php
include ('header.php');
?>
<html>
<head>
    <title>Student Management System</title>
</head>
<body BGCOLOR="#f5f5dc">
    <div class="admintitle" align="center">
        <h1>Welcome To Admin Panel</h1>
        <a href="../logout.php" style="float: right; margin-right: 30px; margin-top: -110px; font-family: Arial; font-weight: bold;color: black" >Logout</a>
    </div>
    <div class="admindash">
        <table width="50%" align="center">
            <tr>
                <td>1</td>
                <td align="center"><a href="addstudent.php">Add Student</a> </td>
            </tr>
            <tr>
                <td>2</td>
                <td align="center"><a href="deletestudent.php">Delete Student</a> </td>
            </tr>
            <tr>
                <td>3</td>
                <td align="center"><a href="updatestudent.php">Update Student</a> </td>
            </tr>
        </table>
    </div>
</body>
</html>