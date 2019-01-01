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
<div class="std">
    <form action="deletestudent.php" method="post">
        <table align="center" width="40%">
            <tr>
                <td>Enter Standard</td>
                <td> <input type="number" placeholder="enter Standard" name="std" required> </td>
            </tr>
            <tr>
                <td>Enter Student Name</td>
                <td><input type="text" placeholder="Enter Full name" name="sname" required> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Search" name="search"></td>
            </tr>

        </table>
    </form>
</div>
<table align="center" width="90%" border="1px" style="margin-top: 20px">
    <tr style="background-color: cornflowerblue">
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Rollno</th>
        <th>edit</th>
    </tr>
    <?php
    if(isset($_POST['search'])){
        include ('../dbcon.php');

        $std=$_POST['std'];
        $sname=$_POST['sname'];

        $query="SELECT * FROM `student` WHERE `standard`='$std' AND `name` LIKE '%$sname%'";
        $run=mysqli_query($con,$query);
        if(mysqli_num_rows($run)<1){
           echo "<tr><td colspan='5' align='center'>No record found</td></tr>";
        }
        else
        {
            $count=0;
            while ($data=mysqli_fetch_assoc($run)){

                $count++;
                  ?>

                <tr align="center">
                    <td><?php echo $count?></td>
                    <td><img src="../dataimg/<?php echo $data['image']; ?>"style="max-width: 100px"/> </td>
                    <td><?php echo $data['name'];?></td>
                    <td><?php echo $data['rollno'];?></td>
                    <td><a href="deleteform.php?sid= <?php echo $data['id']; ?>">DELETE</a></td>
                </tr>


                <?PHP

            }
        }
    }

    ?>
</table>
</body>
</html>
