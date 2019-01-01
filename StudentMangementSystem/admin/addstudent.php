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
    <a href="admindash.php" style="float: left; margin-left: 30px; margin-top: -110px; font-family: Arial; font-weight: bold;color: black">Back</a>
    <a href="../logout.php" style="float: right; margin-right: 30px; margin-top: -110px; font-family: Arial; font-weight: bold;color: black" >Logout</a>
</div>
<div class="stdform">
    <form action="addstudent.php" method="post" enctype="multipart/form-data">
        <table align="center" width="40%">
            <tr>
                <td>Roll no</td>
                <td> <input type="text" placeholder="enter roll number" name="rollno" required> </td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" placeholder="Enter Full name" name="name" required> </td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city" placeholder="Enter Address" required></td>
            </tr>
            <tr>
                <td>Parent mobile number</td>
                <td><input type="text" name="pno" placeholder="enter Parent Contact Number" required></td>
            </tr>
            <tr>
                <td>Standard</td>
                <td><input type="number" name="std" placeholder="Enter Standard" required> </td>
            </tr>
            <tr>
                <td>image</td>
                <td><input type="file" name="simg" ></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="insert" value="Insert" style="margin-top: 10px"> </td>

            </tr>
        </table>
    </form>
</div>
</body>
</html>
<?php


if (isset($_POST['insert']))
{
    include ('../dbcon.php');
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pno=$_POST['pno'];
    $std=$_POST['std'];
    $imgname=$_FILES['simg']['name'];
    $tmpname=$_FILES['simg']['tmp_name'];

    move_uploaded_file($tmpname,"../dataimg/$imgname");

    $query="INSERT INTO `student`( `rollno`, `name`, `city`, `pcont`, `standard`, `image`) VALUES ('$rollno','$name','$city','$pno','$std','$imgname')";
    $run=mysqli_query($con,$query);

    if($run==true)
    {
        ?>
        <script>
            alert("data inserted");
        </script>

        <?php
    }

}
?>