<?php
    session_start();
    require('db_con.php');
    $con=db_connect();
    $pass = $_POST["password"];
    $sql = "SELECT * from `member` WHERE id='admin' AND password='$pass'";
    $result = mysqli_query($con,$sql);
    if($result->num_rows>0) {
        $_SESSION['admin_check']='admin'; // true
        echo "<script>
            location.href='../index.php';
            </script>";       
    }
    else {
        echo "<script>
            alert('관리자 모드 진입 실패');
            location.href='../index.php';
            </script>";
    }
    mysqli_close($con);
?>