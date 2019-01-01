<?php
function  showdetails($standard,$rollno){
    $con = mysqli_connect("localhost","root","","sms");

    $sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";

    $run= mysqli_query($con,$sql);

    if(mysqli_num_rows($run)>0){
        $data=mysqli_fetch_assoc($run);
        ?>
        <table border="1" style="width: 50%;" align="center">
            <tr style="background-color: cornflowerblue;color: black">
                <th colspan="3">Student Details</th>
            </tr>
            <tr >
                <td rowspan="5" width="150px"><img src="dataimg/<?php echo $data['image']; ?>"style="max-height: 250px;max-width: 120px; margin-top: 10px;margin-left: 10px;margin-bottom: 10px"></td>
                <th width="30%">Roll No</th>
                <td><?php echo $data['rollno']; ?></td>
            </tr>
            <tr>
                <th width="30%">Name</th>
                <td><?php echo $data['name']; ?></td>
            </tr>
            <tr>
                <th width="30%">Standard</th>
                <td><?php echo $data['standard']; ?></td>
            </tr>
            <tr>
                <th width="30%">Parents Contact No</th>
                <td><?php echo $data['pcont']; ?></td>
            </tr>
            <tr>
                <th width="30%  ">City</th>
                <td><?php echo $data['city']; ?></td>
            </tr>
        </table>
        <?php

    }
    else
    {
        echo"<script>alert('no students found');</script>";
    }
}
?>