<?php



    include ('../dbcon.php');

    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcont=$_POST['pno'];
    $std=$_POST['std'];
    $id=$_POST['sid'];
    $imgname=$_FILES['simg']['name'];
    $tmpname=$_FILES['simg']['tmp_name'];

    move_uploaded_file($tmpname,"../dataimg/$imgname");

    $query="UPDATE  `student` SET  `rollno` =  '$rollno',
`name` =  '$name',
`city` =  '$city',
`pcont` =  '$pcont',
`standard` = '$std',
`image` =  '$imgname' WHERE  `id` =$id;";
    $run=mysqli_query($con,$query);

    if($run==true)
    {
        ?>
        <script>
            alert("data updated");
            window.open('updatestudentform.php?sid=<?php echo $id; ?>','_self');
        </script>

        <?php


}
?>