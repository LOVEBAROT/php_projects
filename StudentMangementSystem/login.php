<?php  session_start();
if(isset($_SESSION['uid'])){
    header('Location:admin/admindash.php');
}

?>

<html>
<head>
    <title>Admin Login</title>
</head>
<body bgcolor="#ffe4c4">
<h4><a href="index.php" style="float: right;margin-right: 20px">Back To Dashboard</a></h4>
<form action="login.php" method="post">
    <h2 align="center" style="margin-left: 140px">Admin Login</h2>
    <table align="center" border="1">
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass" required></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="submit" value="login" name="login"></td>
        </tr>
    </table>
</form>
</body>
</html>


<?php
include ('dbcon.php');
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['pass'];

    $query =    "SELECT * FROM `admin` WHERE `username`= '$username'AND`password`='$password'";
    $run=mysqli_query($con,$query);
    $row = mysqli_num_rows($run);
    if($row<1)
    {
        ?>
            <script>
                alert("Username or Password not match....!")
                window.open('login.php','_self')
            </script>
        <?php
    }
    else
        {
            $data= mysqli_fetch_assoc($run);
            $id=$data['id'];
            echo "id =".$id;


            $_SESSION['uid']=$id;
            header('Location:admin/admindash.php');
        }
}

?>