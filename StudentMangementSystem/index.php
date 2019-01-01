<html>
<head>
    <title>Student Management  System</title>
</head>
<body bgcolor="#ffe4c4">
    <h3 style="margin-right: 30px" align="right"><a href="login.php">Admin Login</a> </h3>
    <h1 align="center">Student Management  System</h1>
</body>
</html>
<form method="post" action="index.php">
    <table style="width: 50%" align="center" border="1">
        <tr>
            <td colspan="2" align="center">Student Information</td>
        </tr>
        <tr>
            <td align="left"> Choose Standard</td>
            <td>
                <select name="std" required>
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="left">Enter Rollno</td>
            <td><input type="text" name="rollno" required> </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
        </tr>
    </table>

</form>

<?php

if(isset($_POST['submit'])){



    $standard=$_POST['std'];
    $rollno=$_POST['rollno'];

    include ('dbcon.php');
    include ('function.php');
    showdetails($standard,$rollno);

}

?>