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
include ('../dbcon.php');

$sid=$_GET['sid'];
$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
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
    <form action="updatedata.php" method="post" enctype="multipart/form-data">
        <table align="center" width="40%">
            <tr>
                <td>Roll no</td>
                <td> <input type="text"  name="rollno" value=<?php echo $data['rollno'];?> required> </td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $data['name'];?> required> </td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city"value=<?php echo $data['city'];?> required></td>
            </tr>
            <tr>
                <td>Parent mobile number</td>
                <td><input type="text" name="pno" value=<?php echo $data['pcont'];?> required></td>
            </tr>
            <tr>
                <td>Standard</td>
                <td><input type="number" name="std" value=<?php echo $data['standard'];?> required> </td>
            </tr>
            <tr>
                <td>image</td>
                <td><input type="file" name="simg" ></td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
                    <input type="submit" name="insert" value="Update" style="margin-top: 10px"> </td>

            </tr>
        </table>
    </form>
</div>
</body>
</html>