<?php
    require('db_con.php');
    $con=db_connect();
    $del_num=$_GET['delname'];
    $sql = "DELETE FROM `blog_posting` WHERE boardnum='$del_num'";
    mysqli_query($con,$sql);
    mysqli_close($con);
    echo "<script>
            location.href='../index.php';
        </script>";   
?>